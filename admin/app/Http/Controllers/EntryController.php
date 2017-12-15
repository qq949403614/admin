<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;

class EntryController extends Controller
{
    public function login(Request $request)
    {   
        $data = $request->only('username','pwd');
        $user =DB::table('user')->where('username',$data['username'])->first();
        // 判断是否有当前用户
        if (empty($user)) {
            return back()->with('msg','用户名输入有误');
        }
        if(Hash::check($data['pwd'],$user->password)){
            session(['id'=> $user->id]);
            session(['username'=> $user->username]);
            return redirect('/')->with('msg','登陆成功!!!');
        }
        return back()->with('msg','用户密码输入有误');
    }
    public function store(Request $request)
    {
        $phone = $request->input('phone');
        $web = 'random';
        //手机的验证码
        $code = rand(100000,999999);
        //向三方平台发送请求
        //$res = file_get_contents('http://www.xiaohigh.com/message/index.php?to='.$phone.'&class=123456&web='.$web.'&code='.$code);
        //将验证码存储起来
        session(['vcode'=>$code]);
        //解析json字符串
        // $data = json_decode($res, true);
        // 测试
        $data['resp']['respCode'] = '000000';
        if ($data['resp']['respCode'] == '000000') {
            // echo '0';
            return response()->json(['data'=>['vcode'=>$code],'status'=>'1','msg'=>'发送成功']);
        }else{
            // echo '1';
            return response()->json(['data'=>'','status'=>'0','msg'=>'发送失败']);
        }
    }
    public function entry(Request $request)
    {
        $code = $request->except('_token');

        if(session('vcode') != $code['code']) {
            return back()->with('msg','验证码错误');
        }
        $data = $request->only(['username','phone','password','email']);
        $data['password'] = Hash::make($data['password']);
        $data['verify'] = str_random(30);
        //插入数据
        if(DB::table('user')->insert($data)) {
            return redirect('/')->with('msg','注册成功!!!');
        } else {
            return back()->with('msg','注册失败!!!');
        }
    }
}
