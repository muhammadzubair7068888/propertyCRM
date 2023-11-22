<?php

use App\Models\Notification;
use Illuminate\Support\Facades\Http;
use Twilio\Rest\Client;




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
    /**
     * Send Twilio message to the specified phone number.
     *
     * @param string $to
     * @param string $message
     * @return void
     */
    function sendOnfonMessage($to, $message)
    {
        $Onfon = new Client(config('services.onfon.senderid'), config('services.onfon.apikey'), config('services.onfon.clientid'));

        $Onfon->messages->create($to, [
            'senderid' => config('services.onfon.senderid'),
            'body' => $message,
        ]);
    }
}
if (!function_exists('sendPayment')) {
    function sendPayment($phone,$amount)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer gOKAAKxpOj73pA22t22d4WE5ImZA',
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
