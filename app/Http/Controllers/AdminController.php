<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $email = $request->get('email');
            $password = $request->get('password');
            $res = (new Admin)::where('email',$email)->where('password',$password)->get()->isEmpty();
            if($res == 1){
                return redirect()->to('/admin/login')->with('message','Login Unsuccessfull');
            }else{
                return redirect()->to('/admin/dashboard')->with('message','Admin login successfull');
            }
        }

        return view('/admin.login');

    }
    public function index(){
        return view('/admin.index');
    }
    public function dashboard(){
        return view('/admin.dashboard');
    }
}
