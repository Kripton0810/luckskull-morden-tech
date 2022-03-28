<?php

namespace App\Http\Controllers;

use App\Models\CreateId;
use App\Models\payment;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // print_r("faffadsf");die;
        return view('auth.paymentview');
    }

    public function paymentio()
    {
        // print_r("faffadsf");die;
        $amount = Session::get('amount');
        return view('auth.payment-method',['amount'=>$amount]);
    }
    public function withdraw()
    {
        # code...
        $data = DB::select('select * from users where phone_number = ?', [Session::get('phone')]);
        $d = $data[0];
        return view('auth.withdrawal',['name'=>$d->name,'phone'=>$d->phone_number,'created'=>$d->created_at]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
                    array("X-Api-Key:44b3e61a7c414d17053a8b8cdc677529",
                          "X-Auth-Token:8faaba7a1659c6f3b5a4782a26110d81"));
        $payload = Array(
            'purpose' => 'create id',
            'amount' => '100',
            'phone' => '8839335941',
            'buyer_name' => 'devendra',
            'redirect_url' => 'http://127.0.0.1:8000/image-upload',
            'send_email' => true,
            'send_sms' => true,
            'email' => 'jitendrabodana87@gmail.com',
            'allow_repeated_payments' => false
        );
        // redirect()
        // print_r( $payload);die;
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch);
        $response=json_decode($response);
        echo '<pre>';
        // print_r($response);die;
        echo $response;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function successfull(Request $req)
    {

        return view('auth.payment-success');
        # code...
    }
    public function paymentToAdmin(Request $req)
    {
        # code...
        $imageName = time().'.'.$req->file('booking_attachment')->getClientOriginalExtension();
        $path = $req->booking_attachment->move(public_path('images/'), $imageName);
        $CreateId = CreateId::create([
            'siteurl'=>Session::get('web'),
            'imagelink'=>$imageName,
            'paymentgateway'=>$req->tabs,
            'userphone'=>Session::get('phone'),
            'userid'=>Session::get('username'),
            'amount'=>Session::get('amount')
        ]);
        $amt = Session::get('amount');
        $met = $req->tabs;
        Session::remove('web');
        Session::remove('username');
        Session::remove('amount');
        $this->sendMessage('Your request has been send and been shown','+91'.Session::get('phone'));
        //
        return view('auth.payment-success',['amt'=>$amt,'met'=>$met]);
        // print_r($path);

    }
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'coins' => ['required', 'int','min:100'],
        ]);

        $payment = payment::create([
            'username' => $request->username,
            'coins' => $request->coins,
        ]);
        Session::put('amount',$payment->coins);
        Session::put('username',$request->username);
        return redirect('payment-io-page')->with('status', 'Profile updated!');

        // return redirect(route('image-upload'));

    }
    public function show(payment $payment)
    {
        //
    }

    public function edit(payment $payment)
    {
        //
    }

    public function update(Request $request, payment $payment)
    {
        //
    }


    public function destroy(payment $payment)
    {
        //
    }
//////////////////////////////////
/////WITHDRAW////////////////////
public function withdrawpaytm(Request $req)
{
    $create = Withdraw::create([
        'user_phone'=>Session::get('phone'),
        'method'=>'paytm-wallet',
        'name'=>$req->name,
        'transfer_number_or_id'=>$req->id
    ]);
    return view('auth.payment-success',['amt'=>'xxxx','met'=>'paytm wallet']);
}

public function withdrawgooglepay(Request $req)
{
    # code...
    $create = Withdraw::create([
        'user_phone'=>Session::get('phone'),
        'method'=>'google-pay',
        'name'=>$req->name,
        'transfer_number_or_id'=>$req->id
    ]);
    return view('auth.payment-success');
}

public function withdrawphonepe(Request $req)
{
    # code...
    $create = Withdraw::create([
        'user_phone'=>Session::get('phone'),
        'method'=>'phone-pe',
        'name'=>$req->name,
        'transfer_number_or_id'=>$req->id
    ]);
    return view('auth.payment-success');
}


public function withdrawpaytmupi(Request $req)
{
    # code...
    $create = Withdraw::create([
        'user_phone'=>Session::get('phone'),
        'method'=>'paytm-upi',
        'name'=>$req->name,
        'transfer_number_or_id'=>$req->id
    ]);
    return view('auth.payment-success');
}

public function withdrawupi(Request $req)
{
    # code...
    $create = Withdraw::create([
        'user_phone'=>Session::get('phone'),
        'method'=>'upi',
        'name'=>$req->name,
        'transfer_number_or_id'=>$req->id
    ]);
    return view('auth.payment-success');
}




public function sendCustomMessage(Request $request)
    {
        // dd($request->all());
        $otp = rand(1000, 9999);
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












}
