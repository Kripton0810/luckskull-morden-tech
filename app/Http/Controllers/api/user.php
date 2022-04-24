<?php

namespace App\Http\Controllers\api;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Twilio\Rest\Client;
use App\Models\registeruser;
use App\Models\User as AuthUser;
use App\Models\varifyotp;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Validator;

class user extends Controller
{
    //
    public function check(Request $request)
    {
        $users = AuthUser::where('phone_number', $request->phone_number)->get();
        Session::put('phone',$request->phone_number);
        if(sizeof($users) > 0){

            return response()->json(['message'=>'user already present','status'=>true],200);
        }
       else{
        return response()->json(['message'=>'user not present','status'=>false],200);
        }
    }
    public function signupUser(Request $request)
    {
        try {
            $request['status'] = 0;
            $request['password'] = Hash::make($request->password);
            $user = AuthUser::create($request->all());
            $otp = rand(1000, 9999);
            $request['body']="hi luckskull varification code is:".$otp;
            $recipients = '91'.$request->phone_number;
            $this->sendMessage($request->body,$recipients);
            $user->otp = $otp;
            $user->done = true;
            return $user;
        } catch (\Throwable $th) {
            return response()->json(['message'=>'Error '.$th->getMessage(),'status'=>'false'],400);
        }
    }
    public function updateUser(Request $request)
    {
        $data = AuthUser::find($request->id);
        $data = $data->update(['status'=>1]);
        return ($data==1)?response()->json(['status'=>true,'message'=>'Updated.'],200):response()->json(['status'=>false,'message'=>'something wrong happend.'],400);
    }
    public function loginUser(Request $res)
    {

        $users = AuthUser::where('phone_number', $res->phone_number)->get();
        if (Hash::check($res->password,$users[0]->password)) {
            return response()->json(['message'=>'user login successfull','status'=>true],200);
        }
        else
        {
            return response()->json(['message'=>'user login unsuccessfull','status'=>false],400);
        }
    }

    public function sendMessage($message, $recipients)
    {
        $basic  = new \Vonage\Client\Credentials\Basic('66ca4a20', 'EyNSLAtgHyWIlWA5');
        $client = new \Vonage\Client(new \Vonage\Client\Credentials\Container($basic));
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS($recipients, "LuckSkull", $message)
        );
        $message = $response->current();
        if ($message->getStatus() == 0) {
            Log::debug('otp send '.$message->getStatus());
        } else {
            Log::debug('otp send '.$message->getStatus());
        }
    }
}
