<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Websites as ModelsWebsites;
use Illuminate\Http\Request;

class Websites extends Controller
{
    //curd
    public function addData(Request $req)
    {
        try {
                $model = new ModelsWebsites();
                $res = $model->create($req->all());
                return $res;
        } catch (\Throwable $th) {
            return response()->json(["status"=>true,"message"=>$th->getMessage()],400);
        }
    }
    public function findOne($id)
    {
        $data = ModelsWebsites::find($id);
        return $data;
    }
    public function showAll(Request $req)
    {
        try {
            return ModelsWebsites::all();
        } catch (\Throwable $th) {
            return response()->json(['status'=>false,'message'=>$th->getMessage()],400);
        }
    }
    public function updateData(Request $req)
    {
        try {
            $id = $req->id;
            if ($id!=null) {
                $data = ModelsWebsites::find($id);
                $data = $data->update($req->all());
                return ($data==1)?response()->json(['status'=>true,'message'=>'Updated.'],200):response()->json(['status'=>false,'message'=>'something wrong happend.'],400);
            } else {
                # code...
                return response()->json(['status'=>false,'message'=>'Id not found'],400);
            }

        } catch (\Throwable $th) {
            return response()->json(['status'=>false,'message'=>$th->getMessage()],400);
        }
    }
    public function delete($id)
    {
        return (ModelsWebsites::destroy($id)==1)?response()->json(['status'=>true,'message'=>'deleted.'],200):response()->json(['status'=>false,'message'=>'Item not present.'],400);
    }
}
