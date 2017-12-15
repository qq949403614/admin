<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DingdanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    

    public function confirm(Request $request)
    {
        //显示订单的确认页面
        
        //读取用户的收货地址
        $addresses = DB::table('addresses')->where('user_id',session('id'))->get();
        foreach ($addresses as $key => &$value) {
            $value->pname = DB::table('areas')->where('id',$value->province)->value('area_name');
            $value->cname = DB::table('areas')->where('id',$value->city)->value('area_name');
            $value->xname = DB::table('areas')->where('id',$value->xian)->value('area_name');
        }

        //遍历数组
        $data = $request->data;
        $goodsData = [];
        //总价
        $total = 0;
        foreach ($data as $key => $value) {
            if(isset($value['id'])) {
                //读取商品的详细信息
                $goods = DB::table('goods')->where('id',$value['id'])->first();
                //读取商品的图片信息
                $goods->pic = DB::table('goods_pic')->where('goods_id', $value['id'])->value('pic');
                $goods->num = $value['num'];
                $goodsData[] = $goods;
                $total += $goods->num * $goods->price;
            }
        }

        //解析模板 分配数据
        return view('home.dingdan.confirm', compact('addresses','goodsData','total'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
