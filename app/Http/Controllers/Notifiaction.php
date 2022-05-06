<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Notifiaction extends Controller
{
    //
    public function addNoti($phone,$message)
    {
        $subject = ["phone"=>$phone,"message"=>$message];
        $obj = new Notification();
        $data = $obj->create($subject);
    }


    public function bearerToken()
    {
        $header = $this->header('Authorization', '');
        if (Str::startsWith($header, 'Bearer ')) {
                    return Str::substr($header, 7);
        }
    }
    public function getNotification(Request $req)
    {
        $phone = $req->bearerToken();
        try {
            $datas = Notification::where('phone','=',$phone)->where('visited','=',0)->get();
            return $datas;
        } catch (\Throwable $th) {
            return response()->json(['status'=>false,'message'=>$th->getMessage()],400);
        }
    }
}
