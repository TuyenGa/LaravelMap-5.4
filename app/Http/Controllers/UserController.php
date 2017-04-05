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

       $repassword = $request->get('repassword');
       if($repassword != $data['password'])
       {
           return redirect()->action('UserController@getRegister')->with("message",['error'=>["Nhập lại password!"]]);
       }
        $data['password'] = Hash::make($data['password']);
        $user = new User($data);

        if($user->save())
        {
            return redirect('/login');
        }
        return redirect()->action('UserController@getRegister')->with("messages",["error" => ["lỗi không thể thêm tài khoản"]]);
    }
}
