<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function addBank(Request $req)
    {
        try {
            return Bank::create($req->all());
        } catch (\Throwable $th) {
            return Response()->json(['status'=>false,'message'=>$th->getMessage()],400);
        }
    }
    public function getAllData()
    {
        return Bank::all();
    }
    public function deleteBank($id)
    {
        return (Bank::destroy($id)==1)?response()->json(["status"=>true,"message"=>"deleted"]):response()->json(["status"=>false,"message"=>"deleted unsuccessfull"]);
    }
    public function updateBank(Request $req)
    {
        $Bank = new Bank();
        $data = $Bank->find($req->id);
        return ($data!=null)?(($data->update(['name'=>$req->name])==1)?response()->json(["status"=>true,"message"=>"updated"]):response()->json(["status"=>false,"message"=>"not updates"])):response()->json(["status"=>false,"message"=>"no information"]);
    }
    public function findBank($id)
    {
        $Bank = new Bank();
        $data = $Bank->find($id);
        return ($data!=null)?$data:response()->json(["status"=>false,"message"=>"no information"]);
    }
}
