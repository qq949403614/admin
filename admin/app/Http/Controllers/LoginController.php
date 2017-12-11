<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class LoginController extends Controller
{
    /**
     * /网站后台登录页
     */
    public function login()
    {
    	return view('admin.login'); 	
    }
    public function dologin(Request $request)
    {
    	$data = $request->except(['_token']);
    	$user = DB::table('admin')->where('username',$data['username'])->first();
        // 判断是否有当前用户
    	if (empty($user)) {
    		return back()->with('msg','用户名输入有误');
    	}
    	if(Hash::check($data['password'],$user->password)){
            session(['id'=> $user->id]);
    		// session('username',$user->username);
            // dd(session('id',$user->id));die;
    		return redirect('/admin')->with('msg','登陆成功!!!');
    	}
    	return back()->with('msg','用户密码输入有误');
    }
    
}
