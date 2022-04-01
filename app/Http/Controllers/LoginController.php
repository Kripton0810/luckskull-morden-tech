<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Twilio\Rest\Client;
use App\Models\registeruser;
use App\Models\User;
use App\Models\varifyotp;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Session;
use Validator;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('auth.login');

    }
    public function formid()
    {
        $data = [
            [
                "id"=>"1",
                "name"=>"Fairexch9",
                "url"=>"fairexch9.com",
                "image"=>"https://api.gopunt.com/uploads/accounts/accImg-1621400719659.png"
            ],
            [
                "id"=>"2",
                "name"=>"Go Exchange 247",
                "url"=>"goexch247.com",
                "image"=>"https://goexch.com/assets/images/goexch-white.png"
            ],
            [
                "id"=>"3",
                "name"=>"Silver Exch",
                "url"=>"silverexch.com",
                "image"=>"https://silver-exch.com/api/upload/image/Silver.png"
            ],
            [
                "id"=>"4",
                "name"=>"Lotus Book 247",
                "url"=>"lotusbook247.com",
                "image"=>"https://lotusbook247.games/d/lotus2803474ea9d5fbf0eb24dd962ce55923.png"
            ],

            [
                "id"=>"5",
                "name"=>"Exch247",
                "url"=>"exch247.com",
                "image"=>"https://exch247.com/d/exch247f6e078e4ea0dd55e822681e4a674e526.png"
            ],
        ];
        return view('auth.account-information',['content' => $data]);

    }
    public function id_maker(Request $req)
    {
        $data = [
            [
                "id"=>"1",
                "name"=>"Fairexch9",
                "url"=>"fairexch9.com",
                "image"=>"https://api.gopunt.com/uploads/accounts/accImg-1621400719659.png"
            ],
            [
                "id"=>"2",
                "name"=>"Go Exchange 247",
                "url"=>"goexch247.com",
                "image"=>"https://goexch.com/assets/images/goexch-white.png"
            ],
            [
                "id"=>"3",
                "name"=>"Silver Exch",
                "url"=>"silverexch.com",
                "image"=>"https://silver-exch.com/api/upload/image/Silver.png"
            ],
            [
                "id"=>"4",
                "name"=>"Lotus Book 247",
                "url"=>"lotusbook247.com",
                "image"=>"https://lotusbook247.games/d/lotus2803474ea9d5fbf0eb24dd962ce55923.png"
            ],

            [
                "id"=>"5",
                "name"=>"Exch247",
                "url"=>"exch247.com",
                "image"=>"https://exch247.com/d/exch247f6e078e4ea0dd55e822681e4a674e526.png"
            ],
        ];
        $d = $data[($req->id)-1];
        Session::put('web','fairexch9.com');
        return view('layouts.create-id',['cont'=>$d]);

    }
    public function getlogin()
    {
        $phone = Session::get('phone');
        return view('auth.userlogin',['phone'=>$phone]);

    }

    public function sentotp()
    {
        return view('auth.otp_page');

    }
    public function login(Request $request)
    {
        // print_r($request->phone_number);die;
        // $request->validate([
        //     'name' => 'required',
        //     'address' => 'required',
        //     'phone' => 'required',
        // ]);
        $credentials = $request->validate([
            'phone_number' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'password' => ['required', 'confirmed'],
                'phone_number' => ['required', 'int'],
                'refferral_code' => ['']
            ]);

            $user = registeruser::insert([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'password' => Hash::make($request->password),
                'refferral_code' => $request->refferral_code,
            ]);

            event(new Registered($user));


            // print_r($user);die;
            return redirect(RouteServiceProvider::HOME);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = User::where('phone_number', $request->phone_number)->get();
        Session::put('phone',$request->phone_number);
        if(sizeof($users) > 0){

            return redirect()->route('userlogin');
        }
       else{
        $request->validate([
            'phone_number' => ['required', 'int']
        ]);

        $user = Login::create([
            'phone_number' => $request->phone_number,
        ]);

        event(new Registered($user));

        // Auth::login($user);
        return redirect()->route('registerform');
    }
    }

    public function sendCustomMessage(Request $request)
    {
        // dd($request->all());
        $otp = rand(1000, 9999);
        Session::put('otp',$otp);

        $request['body']="hi luckskull varification code is:".$otp;

        $validatedData = $request->validate([
            'phone_number' => 'required',
            'body' => 'required',

        ]);
        $recipients = '+91'.$validatedData["phone_number"];
        // iterate over the array of recipients and send a twilio request for each
        // foreach ($recipients as $recipient) {
            $this->sendMessage($validatedData["body"], $recipients);
        // }
        return back()->with(['success' => "Messages on their way!"]);
    }

    private function sendMessage($message, $recipients)
    {
        app()->environment();
        $account_sid = getenv("TWILIO_SID");
        $auth_token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_number = getenv("TWILIO_NUMBER");
        $client = new Client($account_sid, $auth_token);
        $client->messages->create($recipients, ['from' => $twilio_number, 'body' => $message]);

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }

    public function varify_otp(Request $request)
    {
        $otp=$request->fil1.''.$request->fil2.''.$request->fil3 .''.$request->fil4;
        $phone = Session::get('phone');
        $userRecord = varifyotp::where('phone_number', '=', $phone)->where('otp', '=', $otp)->get();

        // if(sizeof($userRecord) > 0){
        //     $deotp = varifyotp::where('phone_number', '=', $phone)->where('otp', '=', $otp)->first();
        //     $deotp->delete();
        //     return redirect()->route('dashboard');
        // }else{

        //     return redirect()->route('otp-login');

        // }
    }
}
