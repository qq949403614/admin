<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
     /**
     * 后台留言管理
     */
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.contact.contact');
    }

    public function edit(Request $request)
    {
    	$d=[];
    	//将前台传入的数据输入进数据库
        $data = $request->only('username','content','email');
        
        $data['time'] = date('Y-m-d H:i:s');
        $data['status'] = 1;
        $d[]=$data;

       DB::table('comment')->insert($d); 
       return back()->with('msg','Message success');    
    }

    public function comment(Request $request)
    {
        $keywords = $request->input('keywords');
        $num = $request->input('num',10);
        if($request->has('keywords')){
            $comment=DB::table('comment')->where('username','like','%'.$keywords.'%')->paginate($num);
        }
        else{
            $comment=DB::table('comment')->paginate($num);    
        }
        Db::table('comment')->select();
        return view('admin.comment.message',['comment'=>$comment,'keywords'=>$keywords,'num'=>$num]);
    }   

    public function show()
    {
        echo "string"; 
    }

    public function destroy(Request $request,$id)
    {
        //删除
        if (DB::table('comment')->where('id',$id)->delete()) {
           return back()->with('msg','删除成功');
        }else{
           return back()->with('msg','删除失败');

        }
    }

}
