<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;
use carbon\Carbon;
use Session;
use Image;
class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('superadmin');
    }
    public function index(){
        return view('admin.user.add');
    }
    public function submit(Request $request){
        $slug = Str::slug($request['name'], '-').rand(1000,10000).'_'.time();
      $insert=User::insert([
          'name'=>$request['name'],
          'phone'=>$request['phone'],
          'email'=>$request['email'],
          'role'=>$request['role'],
          'slug'=>$slug,
          'password'=>Hash::make($request['password']),

      ]);
      if($insert){
          Session::flash('success','value');
          return redirect('admin/user');
      }else{
        Session::flash('error','value');
        return redirect('admin/user');
      }
    }
    public function all(){
        $user=User::where('status',1)->orderBy('id','DESC')->get();
        return view('admin.user.all',compact('user'));
    }
}
