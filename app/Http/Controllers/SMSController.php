<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Twilio\Rest\Client;

class SMSController extends Controller
{
 public function sendSMS(Request $req){

   try {
  $acc_id=env('TWILIO_SID');
  $acc_token=env('TWILIO_TOKEN');
  $number=env('TWILIO_FROM');

  $client = new Client($acc_id,$acc_token);
  $client->messages->create('+92'.$req->number,[
    'from'=>$number,
    'body'=>$req->message
  ]);
  return 'Message send..';
   } catch (\Exception $e) {
   return $e->getMessage();
   }

 }
}
