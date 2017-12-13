<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash; 
use DB; 
class HomeController extends Controller
{
    // 注册页
    public function index(){
    	return view('home.index');
    }

    //用户的注册
    public function registers()
    {
        return view('home.user.registers');
    }


     public function doregister(Request $request)
    {
    	//检测验证码是否正确
        $code = $request->vcode;
        dd($code);
        if(session('vcode') != $code) {
            return back()->with('msg','验证码错误');
        }

       $data = $request->only(['username','phone','password']);
        $data['password'] = Hash::make($data['password']);
       $data['verify'] = str_random(30);

        //插入数据
        if(DB::table('users')->insert($data)) {
        	return redirect('/')->with('msg','注册成功,一封激活邮件已经发送到您的邮箱,请确认激活!!');
        } else {
            return back()->with('msg','注册失败!!');
        }
    }
        /**
     * 用户的激活操作
     */
    // public function confirm($id)
    // {
    //     //根据id来查找数据库中的用户信息
    //     $user = DB::table('users')->where('verify',$id)->first();
    //     if(empty($user)) {
    //         return redirect('/')->with('msg','激活失败!!请重新激活');
    //     }
    //     //更新用户的状态
    //     $data = ['status'=>1];
    //     $res = DB::table('users')->where('id',$user->id)->update($data);

    //     if($res) {
    //         return redirect('/')->with('msg','激活成功');
    //     }else{
    //         return redirect('/')->with('msg','激活失败!!');
    //     }
        
    // }
}
