<?php
use Illuminate\Http\Request;

/*Route::get('/', function () {
    return view('load');
});*/
Route::get('/', function () {
    return view('landing');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('personaldatas', 'personaldataController');

Route::post('search', 'personaldataController@search');

Route::get('broschure',function(){
    $file= public_path(). "/download/Bethel M12 Lagos.pdf";

    $headers = array(
              'Content-Type: application/pdf',
            );

    return Response::download($file, 'Bethel M12 Lagos.pdf', $headers);
});

Route::get('downloadapp',function(){
    $file= public_path(). "/download/bethel.apk";

    return response()->file($file ,[
                'Content-Type'=>'application/vnd.android.package-archive',
                'Content-Disposition'=> 'attachment; filename="bethel.apk"',
    ]);
});

Route::post('sendmail',function(Request $request){
    $cust_email = $request->email;
    $phone = $request->phone;
    $content = $request->message;
    $email="olayinka.binuyo@okbcoy.com.ng";
    
    Mail::send('mymail', ['phone'=>$phone,'content'=>$content],
    function($mail) use ($email,$cust_email){
        $mail->from('nwachukwujames7@gmail.com',"Bethel estate");
        $mail->to($email, "Mr Yinka");
        $mail->replyTo($cust_email);
        $mail->subject('ENQUIRY');
    });

    echo '<script>alert("Your message has been received, we will attend to you shortly");</script>';

    return redirect('/')->with('success','Your message has been received, we will attend to you shortly');
});

Route::resource('agents', 'AgentController');

Route::resource('customers', 'CustomerController');
Route::get('showall', 'AgentController@showall');
