<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getRegister()
    {
        return view('auth.register');
    }
    public function PostRegister(Request $request)
    {
      
       $data = $request->only(['name', 'email' , 'password' , 'birthday' , 'phoneNumber']);

       $repassword = $request->get('password');
       if($repassword != $data['password'])
       {
           return redirect()->action('UserController@getRegister')->width("message",['error'=>["Lỗi không thể đăng ký!"]]);
       }
        $data['password'] = Hash::make($data['password']);
        $user = new User($data);

        if($user->save())
        {
            return redirect()->action('HomeController@index')->with('messages',array("success" => ["Thêm tài khoản thành công"]));
        }
        return redirect()->action('UserController@getRegister')->with("messages",["error" => ["lỗi không thể thêm tài khoản"]]);
    }
}
