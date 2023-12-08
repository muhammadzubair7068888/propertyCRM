<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Lease;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\TenantInfo;
use Illuminate\Http\Request;
use Safaricom\Mpesa\Mpesa;
use GuzzleHttp\Client;

// The rest of your code goes here...

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page['payment'] = Payment::all();
        $page['tenant_info'] = TenantInfo::all();
        $page['paymentmethod'] = PaymentMethod::all();
        return view('admin.payment.index', $page);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.payment.receipt');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // try{
            $data = $request->except('_token');
                $payment = Payment::create($data);
            return redirect()->route('admin.payment.index')->with('success', 'Record has been save Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $pagedata['data']=Payment::find($id);
        return view('admin.payment.receipt',$pagedata);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function fetchLease(Request $req)
    {
        $tenant = TenantInfo::whereId($req->id)->first();
        $data['leases'] = $tenant->leases;
        return response()->json(['data' => $data]);
    }

    //payment method
    public function payAmount(Request $request)
    {
        $payment = Payment::where('id', $request->invoice_id)->first();

    if ($payment->status == '1') {
        return redirect()->back()->with('error', 'Payment already done!');
    } elseif ($payment->status != 1)
        $businessShortCode = '174379';
        $passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $password = base64_encode($businessShortCode . $passkey);
        $url = 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/simulate';
        $payload = [
            'ShortCode' => $businessShortCode,
            'CommandID' => 'CustomerPayBillOnline',
            'Amount' => $request->amount,
            'Msisdn' => $request->phonenumber,
            'BillRefNumber' => 'Butterfly Prime Realtors',
        ];
        $client = new Client();
        try {
            $response = $client->post($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->generateAccessToken(),
                    'Content-Type' => 'application/json',
                ],
                'json' => $payload,
            ]);
            if ($response->getStatusCode() == 200) {
                Payment::where('id',$request->invoice_id)->update(['status'=> '1']);
                return redirect()->back()->with('success', 'Payment done Successfully!');
            } else {
                return redirect()->back()->with('error', $response->getStatusCode());
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    private function generateAccessToken()
    {
        $consumerKey = env('MPESA_CONSUMER_KEY');
        $consumerSecret = env('MPESA_CONSUMER_SECRET');
        $credentials = base64_encode($consumerKey . ':' . $consumerSecret);
        $client = new Client();
        $response = $client->get('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials', [
            'headers' => [
                'Authorization' => 'Basic ' . $credentials,
            ],
        ]);
        $result = json_decode($response->getBody());
        return $result->access_token;
    }
}
