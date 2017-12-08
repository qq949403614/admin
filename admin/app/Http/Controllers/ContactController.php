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
    }
}
