<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Notifiaction;
use App\Models\CreateId as ModelsCreateId;
use App\Models\DipositStack;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CreateID extends Controller
{
    public function createid(Request $req)
    {
        //curd
        try {
            $create = new ModelsCreateId();
            $ids = $create->create($req->all());
            return $ids;
        } catch (\Throwable $th) {
            return response()->json(["message"=>"Error "+$th->getMessage(),"status"=>false],400);
        }
    }
    public function showAll(Request $req)
    {
        try {
            return ModelsCreateId::all();
        } catch (\Throwable $th) {
            return response()->json(['status'=>false,'message'=>$th->getMessage()],400);
        }
    }
    public function accept(Request $req)
    {
        try {
            $id = $req->id;
            $uid = $req->userid;
            if ($id!=null) {
                $req = array_merge($req->all(),["status"=>1]);
                $data = ModelsCreateId::find($id);
                $obj = new Notifiaction();
                $obj->addNoti($data->userphone,"Your account has created in ".$data->siteurl." with username ".$uid);
                $data = $data->update($req);
                return ($data==1)?response()->json(['status'=>true,'message'=>'accepted.'],200):response()->json(['status'=>false,'message'=>'something wrong happend.'],400);
            } else {
                # code...
                return response()->json(['status'=>false,'message'=>'Id not found'],400);
            }

        } catch (\Throwable $th) {
            return response()->json(['status'=>false,'message'=>$th->getMessage()],400);
        }
    }
    public function decline(Request $req)
    {
        try {
            $id = $req->id;
            // $uid = $req->userid;
            if ($id!=null) {
                $req = array_merge($req->all(),["status"=>-1]);
                $data = ModelsCreateId::find($id);
                $obj = new Notifiaction();
                $obj->addNoti($data->userphone,"Your account creation has declined in ".$data->siteurl." with username ".$data->userid);
                $data = $data->update($req);
                return ($data==1)?response()->json(['status'=>true,'message'=>'declined.'],200):response()->json(['status'=>false,'message'=>'something wrong happend.'],400);
            } else {
                # code...
                return response()->json(['status'=>false,'message'=>'Id not found'],400);
            }

        } catch (\Throwable $th) {
            return response()->json(['status'=>false,'message'=>$th->getMessage()],400);
        }
    }
    public function notVisited(Request $req)
    {
        try {
            $datas = ModelsCreateId::where('status','=',0)->get();
            return $datas;
        } catch (\Throwable $th) {
            return response()->json(['status'=>false,'message'=>$th->getMessage()],400);
        }
    }
    public function visited(Request $req)
    {
        try {
            $datas = ModelsCreateId::where('status','!=',0)->get();
            return $datas;
        } catch (\Throwable $th) {
            return response()->json(['status'=>false,'message'=>$th->getMessage()],400);
        }
    }

    public function findOne($id)
    {
        $data = ModelsCreateId::find($id);
        return $data;
    }

    public function imageUploadPost(Request $request)
    {
        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('userpayment',$imageName,'public_html');
        return response()->json(["message"=>"Image uploaded success full","status"=>true,"url"=>"https://luckskull.com/userpayment/".$imageName],200);
    }

    public function bearerToken()
    {
    $header = $this->header('Authorization', '');
    if (Str::startsWith($header, 'Bearer ')) {
                return Str::substr($header, 7);
    }
}
    public function myIds(Request $req)
    {
        if ($req->bearerToken()!=null) {
            try {
                $datas = ModelsCreateId::where('status','=',1)->where('userphone','=',$req->bearerToken())->get();
                return $datas;
            } catch (\Throwable $th) {
                return response()->json(['status'=>false,'message'=>$th->getMessage()],400);
            }
        }else
        {
            return response()->json(['status'=>false,'message'=>"phone number not found"],400);
        }
    }
    private function addCoins($newcoins,$phone)
    {
        $id = $phone;
        $data = User::where('phone_number','=',$phone)->get();
        $coins = $data[0]->coins;
        $newconis = $coins + $newcoins;
        $rqs = $data[0]->update(["coins"=>$newconis]);
        return ($rqs==1)?response()->json(['status'=>true,'message'=>"$newcoins added to your account"],200):response()->json(['status'=>false,'message'=>'something wrong happend.'],400);
    }

    public function coinAccept(Request $req)
    {
        try {
            $id = $req->id;
            if ($id!=null) {
                // $req = array_merge();
                $data = DipositStack::find($id);
                if ($data->status==0) {
                    $this->addCoins($data->coins,$data->phone);

                    $obj = new Notifiaction();
                    $obj->addNoti($data->phone,$data->coins." coins have added in your account");
                $data = $data->update(["status"=>1]);

                    return ($data==1)?response()->json(['status'=>true,'message'=>'accepted.'],200):response()->json(['status'=>false,'message'=>'something wrong happend.'],400);
                }
                else
                {
                    return response()->json(['status'=>false,'message'=>'Already Done'],403);
                }

            } else {
                # code...
                return response()->json(['status'=>false,'message'=>'Id not found'],400);
            }

        } catch (\Throwable $th) {
            return response()->json(['status'=>false,'message'=>$th->getMessage()],400);
        }
    }

    public function coinAddRequest(Request $req)
    {
        try {
            $create = new DipositStack();
            $ids = $create->create($req->all());
            return $ids;
        } catch (\Throwable $th) {
            return response()->json(["message"=>"Error ".$th->getMessage(),"status"=>false],400);
        }
    }

    public function getCoins(Request $req)
    {
        $id = $req->bearerToken();
        $data = User::where('phone_number','=',$id)->get();
        $coins = $data[0]->coins;
        return response()->json(['status'=>true,'message'=>"$coins you have in your account","coins"=>$coins],200);
    }

public function coinDecline(Request $req)
{
    try {
        $id = $req->id;
        if ($id!=null) {
            // $req = array_merge($req->all(),);
            $data = DipositStack::find($id);

            if ($data->status==0) {

                    $obj = new Notifiaction();
                    $obj->addNoti($data->phone,$data->coins."coins addition has decliened");
                    $data = $data->update(["status"=>-1]);
                    return ($data==1)?response()->json(['status'=>true,'message'=>'declined.'],200):response()->json(['status'=>false,'message'=>'something wrong happend.'],400);
            }
            else
            {
                return response()->json(['status'=>false,'message'=>'Already Done'],403);
            }
        } else {
            # code...
            return response()->json(['status'=>false,'message'=>'Id not found'],400);
        }

    } catch (\Throwable $th) {
        return response()->json(['status'=>false,'message'=>$th->getMessage()],400);
    }
}
public function notCoinVisited(Request $req)
{
    try {
        $datas = DipositStack::where('status','=',0)->get();
        return $datas;
    } catch (\Throwable $th) {
        return response()->json(['status'=>false,'message'=>$th->getMessage()],400);
    }
}
public function coinVisited(Request $req)
{
    try {
        $datas = DipositStack::where('status','!=',0)->get();
        return $datas;
    } catch (\Throwable $th) {
        return response()->json(['status'=>false,'message'=>$th->getMessage()],400);
    }
}

}


