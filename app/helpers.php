<?php

use App\Models\Notification;
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
if (!function_exists('sendTwilioMessage')) {
    /**
     * Send Twilio message to the specified phone number.
     *
     * @param string $to
     * @param string $message
     * @return void
     */
    function sendTwilioMessage($to, $message)
    {
        $twilio = new Client(config('services.twilio.sid'), config('services.twilio.token'));

        $twilio->messages->create($to, [
            'from' => config('services.twilio.from'),
            'body' => $message,
        ]);
    }
}
