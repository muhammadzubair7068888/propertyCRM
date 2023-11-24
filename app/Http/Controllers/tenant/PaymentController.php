<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Safaricom\Mpesa\Mpesa;
use GuzzleHttp\Client;
use App\Http\Controllers\ClientException;
use App\Http\Controllers\tenant\Carbon;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagedata['payment']=Payment::all();
        return view('tenant.payment.index', $pagedata);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ('tenant.payment.receipt');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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


    public function paymentMethod(Request $request)
    {
        // Replace 'YourBusinessShortCode' and 'YourPasskey' with your actual values
        $businessShortCode = '174379';
        $passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        // Generate the timestamp
        // $timestamp = Carbon::now()->format('YmdHis');
        // Calculate the password
        $password = base64_encode($businessShortCode . $passkey);
        // Define the API endpoint for C2B simulation
        $url = 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/simulate';
        // Define the API request body including the generated password and timestamp
        $payload = [
            'ShortCode' => $businessShortCode,
            'CommandID' => 'CustomerPayBillOnline',
            'Amount' => $request->amount,
            'Msisdn' => $request->phonenumber,
            'BillRefNumber' => 'CompanyXLTD', // Adjust as needed
        ];
        // Initialize the Guzzle client
        $client = new Client();
        // Send the API request and handle the response
        try {
            $response = $client->post($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->generateAccessToken(),
                    'Content-Type' => 'application/json',
                ],
                'json' => $payload,
            ]);
            if ($response->getStatusCode() == 200) {
                $responseData = json_decode($response->getBody(), true);
                // Process the API response data as needed
                return response()->json($responseData);
            } else {
                // Handle the API request failure
                return response()->json(['error' => 'API request failed'], $response->getStatusCode());
            }
        } catch (\Exception $e) {
            // Handle any exceptions that occurred during the API request
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    private function generateAccessToken()
    {
        $consumerKey = env('MPESA_CONSUMER_KEY');
        $consumerSecret = env('MPESA_CONSUMER_SECRET');
        $credentials = base64_encode($consumerKey . ':' . $consumerSecret);
        $client = new Client();
        $response = $client->GET('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials', [
            'headers' => [
                'Authorization' => 'Basic ' . $credentials,
            ],
        ]);
        $result = json_decode($response->getBody());
        return $result->access_token;
    }

};
