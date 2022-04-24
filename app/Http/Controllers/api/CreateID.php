<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\CreateId as ModelsCreateId;
use Illuminate\Http\Request;

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
    public function imageUploadPost(Request $request)
    {
        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('userpayment',$imageName,'public_html');
        return response()->json(["message"=>"Image uploaded success full","status"=>true,"url"=>"https://luckskull.com/userpayment/".$imageName],200);
    }
}
