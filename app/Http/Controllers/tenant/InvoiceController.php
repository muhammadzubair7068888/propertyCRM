<?php

namespace App\Http\Controllers\tenant;
use Illuminate\Http\Client\Response;
use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Carbon\Carbon;
use GuzzleHttp\Client;


class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagedata['invoice']=Invoice::all();
        return view('tenant.invoice.index',$pagedata);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
//     public function paymentMethod(Request $request)
// {
//     $url='https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

//     $curl_post_data=[
        // 'BusinessShortCode'=>174379,
        // 'Password'=>"bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919",
        // // 'Timestamp'=>,

        // 'TransactionType'=> "CustomerPayBillOnline",
        // 'Amount'=>$request->amount,
        // 'PartyA'=>254708374149,
        // 'PartyB'=>174379,
        // 'PhoneNumber'=>$request->phonenumber,
        // 'CallBackURL'=>'http://propertmanagementsystem.pk/tenant/invoice',
        // 'AccountReference'=>'CompanyXLTD',
        // 'TransactionDesc'=>'Payment of X'
//     ];

//     $data_string=json_encode($curl_post_data);

//     $curl=curl_init();
//     curl_setopt($curl,CURLOPT_URL,$url);
//     curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type:application/json','Authorization:Bearer '.$this->newaccesstoken()));
//     curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
//     curl_setopt($curl,CURLOPT_POST,true);
//     curl_setopt($curl,CURLOPT_POSTFIELDS,$data_string);

//     $curl_response=curl_exec($curl);
//     return $curl_response;
// }
//     public function paymentMethod(Request $request)
//     {


//     $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
//     // Define the API request body
//     $payload = [
//         'BusinessShortCode'=>174379,
//         'Password'=>"bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919",
//         'Timestamp'=>Carbon::rawParse('now')->format('YmdHms'),
//         // $password = base64_encode($businessShortCode.$passkey.$timestamp);
//         'TransactionType'=> "CustomerPayBillOnline",
//         'Amount'=>$request->amount,
//         'PartyA'=>254708374149,
//         'PartyB'=>174379,
//         'PhoneNumber'=>$request->phonenumber,
//         'CallBackURL'=>'http://propertmanagementsystem.pk/tenant/invoice',
//         'AccountReference'=>'CompanyXLTD',
//         'TransactionDesc'=>'Payment of X'
//     ];
//     // Send the API request and handle the response
//     $response = \Http::withOptions(['verify' => false])->post($url, $payload);
//     // dd($response);
//     if ($response->successful()) {
//         $responseData = $response->json();
//         // Process the API response data as needed
//         return response()->json($responseData);
//     } else {
//         // Handle the API request failure
//         return response()->json(['error' => 'API request failed'], $response->status());
//     }
//     return redirect()->route('tenant.invoice.index')->with('success','payment has been successfully');
// }

public function paymentMethod(Request $request)
{
    // API endpoint
    $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

    // Replace 'YourBusinessShortCode' and 'YourPasskey' with your actual values
    $businessShortCode = '174379';
    $passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';

    // Generate the timestamp
    $timestamp = Carbon::now()->format('YmdHis');

    // Calculate the password
    $password = base64_encode($businessShortCode . $passkey . $timestamp);

    // Define the API request body including the generated password and timestamp
    $payload = [
        'BusinessShortCode' => $businessShortCode,
        'Password' => $password,
        'Timestamp' => $timestamp,
        'TransactionType' => "CustomerPayBillOnline",
        'Amount' => $request->amount,
        'PartyA' => '254708374149',
        'PartyB' => $businessShortCode,
        'PhoneNumber' => $request->phonenumber,
        'CallBackURL' => 'http://propertmanagementsystem.pk/tenant/invoice',
        'AccountReference' => 'CompanyXLTD',
        'TransactionDesc' => 'Payment of X',
    ];

    // Initialize the Guzzle client
    $client = new Client();

    // Send the API request and handle the response
    $response = $client->post($url, [
        'json' => $payload,
    ]);
    if ($response->successful()) {
        $responseData = $response->json();
        // Process the API response data as needed
        return response()->json($responseData);
    } else {
        // Handle the API request failure
        return response()->json(['error' => 'API request failed'], $response->status());
    }
    return redirect()->route('tenant.invoice.index')->with('success', 'Payment has been successfully');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagedata['invoice'] = Invoice::with('leaseInfo','leaseinfo.deposit')->find($id);
        return response()->json([$pagedata]);
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
    public function storePayment(Request $request)
{
    // Validate the request data as needed

    // Assuming you have a 'payments' table to store payment information
    $payment = Payment::create([
        'invoice_id' => $request->input('invoice_id'),
        'amount' => $request->input('amount'),
        // Add other payment-related fields here
    ]);

    // You can perform additional actions here if needed

    return response()->json(['message' => 'Payment information stored successfully']);
}
}
