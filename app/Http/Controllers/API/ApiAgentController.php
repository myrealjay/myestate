<?php

namespace App\Http\Controllers\API;

use App\User;
use JWTAuth;
use Mail;
use App\Http\Controllers\Controller;
use App\Models\Customer;

use Illuminate\Http\Request;

class ApiAgentController extends Controller
{
    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

		try {
			if (! $token = JWTAuth::attempt($credentials)) {
				return response()->json(['error' => 'invalid_credentials'], 200);
			}
		} catch (JWTException $e) {
			return response()->json(['error' => 'could_not_create_token'], 200);
		}
        
        $user=\Auth::user();
        return response()->json(compact(['token','user']));
    }


    public function getAuthenticatedUser()
	{
		try {

			if (! $user = JWTAuth::parseToken()->authenticate()) {
				return response()->json(['user_not_found'], 200);
			}

		} catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

			return response()->json(['token_expired'], 200);

		} catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

			return response()->json(['token_invalid'], 200);

		} catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

			return response()->json(['token_absent'], 200);

		}

		return response()->json(compact('user'));

	}



    public function store(Request $request)
    {
        
        $user=\Auth::user();
        $customers=Customer::where('agent',$user->id)->get();
        $counter=count($customers);

        if($counter>=23){
            return response()->json(['error'=>"You have exceeded the number of sales to make"],200);
        }
        else{
            $input = $request->all();
            $input['agent']=\Auth::user()->id;

            $customer = Customer::create($input);

            $users=User::where('role','!=',1)->get();
            $emails=[];
            foreach($users as $user){
                array_push($emails,$user->email);
            }
             
            $newname=$user->surname.' '.$user->firstname.' '.$user->middlename;
            Mail::send('message2', ['fullname' =>$newname ,'phone' => $user->phone, 'custname' =>$input['fullname'],'custphone'=>$input['phone'],'apartment'=>$input['apertment']],
                function($mail) use ($emails){
                    $mail->from('esmafconference@gmail.com',"Bethel estate");
                    $mail->to($emails, "Bethel estate");
                    $mail->subject('PURCHASE NOTIFICATION');
                });

            return response()->json(['success'=>"Customer saved successfully."],200);
        }
    }

    public function update(Request $request,$id){
        $customer = Customer::find($id);

        if (empty($customer)) {
            return response()->json(['error'=>"Customer not found."],200);
        }

        $customer = Customer::where('id',$id)->update($request->except('token'));
        return response()->json(['success'=>"Customer updated successfully."],200);
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);

        if (empty($customer)) {
            return response()->json(['error'=>"Customer not found."],200);
        }

        $customer=Customer::where('id',$id)->delete($id);

        return response()->json(['success'=>"Customer deleted successfully."],200);
    }

    public function index($id){
        $customer=Customer::where('agent',$id)->get();
        return response()->json(compact('customer'),200);
    }
    public function show($id,$custid){
        $customer=Customer::where('agent',$id)->where('id',$custid)->get()->first();
        return response()->json(compact('customer'),200);
    }
}
