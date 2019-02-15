<?php

namespace App\Http\Controllers;
use Mail;

use Illuminate\Http\Request;

class sendmail extends Controller
{
    public function sendmail(Request $request){
        $cust_email = $request->email;
        $phone = $request->phone;
        $message = $request->message;
        $email="nwachukwujames7@gmail.com";
        
        Mail::send('message', ['phone'=>$phone],
        function($mail) use ($email){
            $mail->from('nwachukwujames7@gmail.com',"Bethel estate");
            $mail->to($email, "Mr Yinka");
            $mail->subject('PURCHASE NOTIFICATION');
        });
    }
}
