<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CartController extends Controller
{
    //
     public function store(Request $request)
    {
    	$data = $request->only(['goods_id','num']);
    	$data['created_at'] = date('Y-m-d H:i:s');
    	$data['user_id'] = session('id');
    	//将数据插入到购物车表中
    	if($res = DB::table('carts')->insert($data)) {
    		return view('home.remind.cart');
    	}else{
    		return back()->with('msg','加入失败!!');
    	}
    }

     public function index()
    {
    	//读取购物车中的内容
    	$id = session('id');
    	$goods = DB::table('carts')->where('user_id', $id)->get();
    	//根据id来获取商品的详细信息
    	foreach ($goods as $key => &$value) {
    		$value->detail = DB::table('goods')->where('id', $value->goods_id)->first();
    		$value->pic = DB::table('goods_pic')->where('goods_id', $value->goods_id)->value('pic');
    	}
        // dd($goods);
        return view('home.cart.index',compact('goods'));
    }

    public function delete(Request $request)
    {
        //获取id
        $id = $request->input('cid');
        //删除购物车内容
        if(DB::table('carts')->where('id', $id)->delete()) {
            echo 1;
        }else{
            echo 0;
        }
    }

    
}
