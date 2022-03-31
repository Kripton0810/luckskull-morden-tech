<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\varifyotp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\Login;

class otpvarifyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Session::put('phone_number',Session::get('phone'));
        $request->phone_number = Session::get('phone_number');
        Log::debug(Session::get('phone_number'));
        $this->sendCustomMessage($request);
        return view('auth.otp_page');
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
    public function makeOtp(Request $req)
    {

    }
    public function varify_otp(Request $request)
    {
        $otp=$request->fil1.''.$request->fil2.''.$request->fil3 .''.$request->fil4;
        if ($otp == Session::get('otp')) {
            $users = User::where('phone_number', Session::get('phone_number'))->get();
            Session::put('phone',Session::get('phone_number'));
            if(sizeof($users) <= 0)
            {
            $user = User::create([
                'name' => Session::get('name'),
                'phone_number' => Session::get('phone_number'),
                'password' => Hash::make(Session::get('password')),
                'refferral_code' => Session::get('refferral_code'),
            ]);
            Session::put('phone',Session::get('phone_number'));
            Session::remove('name');
            Session::remove('otp');
            Session::remove('phone_number');
            Session::remove('refferral_code');
            Session::remove('password');
        }

        return redirect()->route('dashboard');
        }
         else {
            echo "Wrong otp";

        }


    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function sendCustomMessage(Request $request)
    {
        $otp = rand(1000, 9999);
        Session::put('otp',$otp);
        Log::debug('otp'.$otp);
        $request['body']="hi luckskull varification code is:".$otp;

        // $validatedData = $request->validate([
        //     'phone_number' => 'required',
        //     'body' => 'required',
        // ]);
        $recipients = '91'.$request->phone_number;
        // $this->sendMessage($request->body,$recipients);
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
