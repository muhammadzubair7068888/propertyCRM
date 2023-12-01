<?php

use App\Models\Notification;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;





if (!function_exists('user_id')) {
    function user_id()
    {
        return auth()->user()->id;
    }
}

if (!function_exists('route_name')) {
    function route_name($name)
    {
        $route_name = auth()->user()->user_type . $name;
        return $route_name;
    }
}

if (!function_exists('user_name')) {
    function user_name()
    {
        $name = auth()->user()->first_name .' '. auth()->user()->middle_name .' '. auth()->user()->last_name;
        return $name;
    }
}

if (!function_exists('notification')) {
    function notification($des, $icon, $class,$id = null,$name = null)
    {
        $notification = Notification::insert([
            'user_id'=>user_id(),
            'name'=>$name ?? user_name(),
            'description'=>$des,
            'icon'=>$icon,
            'sender_id'=>$id,
            'class'=>$class,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        return $notification;
    }
}
if (!function_exists('sendOnfonMessage')) {
    function sendOnfonMessage($to, $message)
    {
        $senderId = config('services.onfon.senderid');
        $apiKey = config('services.onfon.apikey');
        $clientId = config('services.onfon.clientid');
        $client = new Client();
        $requestParams = [
            'json' => [
                'to' => $to,
                'senderid' => $senderId,
                'body' => $message,
            ],
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $apiKey,
                'X-HTTP-Method-Override' => 'POST',
            ],
        ];
        $response = $client->get('https://api.onfonmedia.co.ke/v1/messages', $requestParams);
        $result = $response->getStatusCode();
        return $result;
    }
}
if (!function_exists('sendPayment')) {
    function sendPayment($phone,$amount)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer 7V1uHUSw8A67blv7w9Oi4PbpAuPK',
            'Content-Type' => 'application/json',
        ])
        ->post(config('services.mpesa.url'), [
            "BusinessShortCode" => 174379,
            "Password" => "MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMjMxMTE1MjEwMzQ4",
            "Timestamp" => "20231115210348",
            "TransactionType" => "CustomerPayBillOnline",
            "Amount" => $amount,
            "PartyA" => now(),
            "PartyB" => 174379,
            "PhoneNumber" => $phone,
            "CallBackURL" => route('admin.payment.paid'),
            "AccountReference" => "CompanyXLTD",
            "TransactionDesc" => "Payment of X",
        ])
        ->body();
        return $response;
    }
}
