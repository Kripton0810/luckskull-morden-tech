<?php

namespace App\Http\Controllers\Auth;

// require_once "Twilio/autoload.php";
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules;
use Twilio\Rest\Client;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $phone = Session::get('phone');
        return view('auth.register',['phone'=>$phone]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'int'],
            'password' => ['required', 'confirmed'],
        ]);
        Session::put('name',$request->name);
        Session::put('phone_number',$request->phone_number);
        Session::put('password',$request->password);
        Session::put('refferral_code',$request->refferral_code);
        // echo "<pre>";
        // print_r($request->all());

        // $user = User::create([
        //     'name' => $request->name,
        //     'phone_number' => $request->phone_number,
        //     'password' => Hash::make($request->password),
        //     'refferral_code' => $request->refferral_code,
        // ]);

        // event(new Registered($user));

        // Auth::login($user);
        // $this->sendCustomMessage($request);
        return redirect()->route('otp-login');
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
        $recipients = '91'.$validatedData["phone_number"];
        // iterate over the array of recipients and send a twilio request for each
        // foreach ($recipients as $recipient) {
        $this->sendMessage($validatedData["body"], $recipients);
        // }
        // return redirect()->intended('dashboard');
        return back()->with(['success' => "Messages on their way!"]);
    }

    // private function sendMessage($message, $recipients)
    // {
    //     app()->environment();
    //     $account_sid = getenv("TWILIO_SID");
    //     $auth_token = getenv("TWILIO_AUTH_TOKEN");
    //     $twilio_number = getenv("TWILIO_NUMBER");
    //     $client = new Client($account_sid, $auth_token);
    //     $client->messages->create($recipients, ['from' => $twilio_number, 'body' => $message]);

    // }
    public function sendMessage($message, $recipients)
    {
        $basic  = new \Vonage\Client\Credentials\Basic('66ca4a20', 'EyNSLAtgHyWIlWA5');
        $client = new \Vonage\Client(new \Vonage\Client\Credentials\Container($basic));
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS($recipients, "LuckSkull", $message)
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }
}
