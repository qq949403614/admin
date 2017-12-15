<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class UserController extends Controller
{

    /**
     * 网站后台用户管理界面
     */
    public function index(Request $request)
    {
        $keywords = $request->input('keywords');
        $num = $request->input('num',10);
        if($request->has('keywords')){
            $admin=DB::table('admin')->where('username','like','%'.$keywords.'%')->paginate($num);
        }
        else{
            $admin=DB::table('admin')->paginate($num);    
        }
        return view('admin.user.index',['admin'=>$admin,'keywords'=>$keywords,'num'=>$num]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //用户添加
        return view('admin.user.user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //接受post发来的数据
        $data = $request->only(['username','password','email']);
        // 密码加密
        $data['password']=Hash::make($data['password']);
        // 文件上传
        if($request->hasFile('profile')){
            // 获取文件后缀
            $hz = $request->file('profile')->extension(); 
            // 创建随机名称
            $name = uniqid('img_').'.'.$hz;
            // 文件夹路径
            $dir = './uploads/'.date('Y-m-d');
            // 移动文件
            $request->file('profile')->move($dir,$name);          
            // 获取文件的路径
            $data['profile'] = trim($dir.'/'.$name,'.');
        }
        $data['status'] = 1;
        if(DB::table('admin')->insert($data)){
            return redirect('/user')->with('msg','恭喜您,添加成功!!!');
        }else{
            return back()->with('msg','对不起亲,添加未成功!!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //修改用户信息  读取当前信息
        $admin = DB::table('admin')->where('id',$id)->first();
        return view('admin.user.edit',['admin'=>$admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //接受前台的修改信息
        $data = $request->only(['username','email']);
        // 接受文件上传
        if($request->hasFile('profile')){
            // 获取文件后缀
            $hz = $request->file('profile')->extension(); 
            // 创建随机名称
            $name = uniqid('img_').'.'.$hz;
            // 文件夹路径
            $dir = './uploads/'.date('Y-m-d');
            // 移动文件
            $request->file('profile')->move($dir,$name);          
            // 获取文件的路径
            $data['profile'] = trim($dir.'/'.$name,'.');
        }
        if(DB::table('admin')->where('id',$id)->update($data)){
            return redirect('/user')->with('msg','恭喜您,修改成功!!!');
        }else{
            return back()->with('msg','对不起亲,修改未成功!!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除
        if (DB::table('admin')->where('id',$id)->delete()) {
           return back()->with('msg','删除成功');
        }else{
           return back()->with('msg','删除失败');

        }
    }

     public function center()
    {
        return view('home.user.center');
    }
   
}
