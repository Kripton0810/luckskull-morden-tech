<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    public function index(){
        return View::make('Admin/dashboard');
    }
    public function terms()
    {
        return view('terms');
    }
    public function refer()
    {
        return view('auth.refer-and-earn');
    }
    public function myprofile()
    {
        $data = DB::select('select * from users where phone_number = ?', [Session::get('phone')]);
        $d = $data[0];
        return view('auth.profile',['name'=>$d->name,'phone'=>$d->phone_number,'created'=>$d->created_at]);
    }

}
