<?php

namespace App\Http\Controllers\tenant;
use Illuminate\Http\Client\Response;
use App\Http\Controllers\Controller;
use App\Models\{Invoice, Lease};
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
        $invoices = auth()->user()->invoices;
        // $invoice=auth()->user()->properties()->;
        $pagedata['invoice']=$invoices;
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

public function paymentMethod(Request $request)
{
    // API endpoint
    $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
    $businessShortCode = '174379';
    $passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
    $timestamp = Carbon::now()->format('YmdHis');
    $password = base64_encode($businessShortCode . $passkey . $timestamp);
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
    $client = new Client();
    $response = $client->post($url, [
        'json' => $payload,
    ]);
    if ($response->successful()) {
        $responseData = $response->json();
        return response()->json($responseData);
    } else {
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
