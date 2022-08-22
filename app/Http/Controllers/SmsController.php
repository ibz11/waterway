<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Twilio\Rest\Client;
class SmsController extends Controller
{
    public function sms(){
        $user=user::all();
        return view('Admin.sms',compact('user'));
    }
    public function sendSMS()
{
    $basic  = new \Vonage\Client\Credentials\Basic("e16e6b19", "bz2COkUaPuL75P2K");
    $client = new \Vonage\Client($basic);
    $response = $client->sms()->send(
        new \Vonage\SMS\Message\SMS(
            "254799008424",
            'BRAND_NAME', 
             'This is a message from your brother Ibrahim meaning which means his application works'
            
            )
    );
    
    $message = $response->current();
    
    if ($message->getStatus() == 0) {
        echo "The message was sent successfully\n";
    } else {
        echo "The message failed with status: " . $message->getStatus() . "\n";
    }}




   

}
