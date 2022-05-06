<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\WithdrawCoins;
use Illuminate\Http\Request;

class withdraw extends Controller
{
    public function requestCoins(Request $req)
    {
        try {
            $data = WithdrawCoins::create($req->all());
            return $data;
        } catch (\Throwable $th) {
            return response()->json(['status'=>false,'message'=>$th->getMessage()],400);
        }
    }
    public function getAll(Request $req)
    {
        $data = new WithdrawCoins;
        $data = $data->get();
        $filter = $data->filter(function($value, $key) {
            // print_r();
            if (is_null($value->bank_name)) {
                unset($value->bank_name);
            }
            if (is_null($value->upi_number)) {
                unset($value->upi_number);
            }
            if (is_null($value->pay_number)) {
                unset($value->pay_number);
            }
            if (is_null($value->upi_number)) {
                unset($value->upi_number);
            }
            if (is_null($value->ifsc)) {
                unset($value->ifsc);
            }
            if (is_null($value->account_holder_name)) {
                unset($value->account_holder_name);
            }
            if (is_null($value->account_no)) {
                unset($value->account_no);
            }
            return $value;
        });

        return $filter;
    }
}
