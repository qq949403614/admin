<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ShopController extends Controller
{
    /**
     * 后台商品管理
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //后台店铺管理
        $keywords = $request->input('keywords');
        $num = $request->input('num',10);
        $address = DB::table('brand_shop')->get();
        if($request->has('keywords')){
            $address=DB::table('brand_shop')->where('shop_name','like','%'.$keywords.'%')->paginate($num);
        }
        else{
            $address=DB::table('brand_shop')->paginate($num);    
        }
        foreach ($address as $key => &$v) {
            $v->a = DB::table('area')->where('id',$v->province)->value('area_name');
            $v->b = DB::table('area')->where('id',$v->city)->value('area_name');
            $v->c = DB::table('area')->where('id',$v->area)->value('area_name');
        }
        return view('admin.shop.index',['address'=>$address,'keywords'=>$keywords,'num'=>$num]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.shop.create');
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
        $data = $request->except('_token');
        // 文件上传
        if($request->hasFile('license')){
            // 获取文件后缀
            $lincense = $request->file('license')->extension(); 
            // 创建随机名称
            $name = uniqid('license_').'.'.$lincense;
            // 文件夹路径
            $dir = './barnd_class/lincense/'.date('Y-m-d');
            // 移动文件
            $request->file('license')->move($dir,$name);          
            // 获取文件的路径
            $data['license'] = trim($dir.'/'.$name,'.');
        }
        if($request->hasFile('img')){
            // 获取文件后缀
            $img = $request->file('img')->extension(); 
            // 创建随机名称
            $name = uniqid('img').'.'.$img;
            // 文件夹路径
            $dir = './brand_class/img/'.date('Y-m-d');
            // 移动文件
            $request->file('img')->move($dir,$name);          
            // 获取文件的路径
            $data['img'] = trim($dir.'/'.$name,'.');
        }
        $data['status'] = 0;
        $data['user_id'] = session('id');
        if(DB::table('brand_shop')->insert($data)){
            return redirect('/shop')->with('msg','恭喜您,添加成功!!!');
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
        //读取当前数据库信息
        $shop = DB::table('brand_shop')->where('id',$id)->first();
        $app = DB::table('area')->where('id',$shop->province)->first();
        $add = DB::table('area')->where('id',$shop->city)->first();
        $apd = DB::table('area')->where('id',$shop->area)->first();
        return view('admin.shop.edit',['shop'=>$shop,'app'=>$app,'add'=>$add,'apd'=>$apd]);
        
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
        //修改店铺信息
        $data = $request->except('_token','_method');
        if($request->hasFile('license')){
            // 获取文件后缀
            $lincense = $request->file('license')->extension(); 
            // 创建随机名称
            $name = uniqid('license_').'.'.$lincense;
            // 文件夹路径
            $dir = './barnd_class/lincense/'.date('Y-m-d');
            // 移动文件
            $request->file('license')->move($dir,$name);          
            // 获取文件的路径
            $data['license'] = trim($dir.'/'.$name,'.');
        }
        if($request->hasFile('img')){
            // 获取文件后缀
            $img = $request->file('img')->extension(); 
            // 创建随机名称
            $name = uniqid('img').'.'.$img;
            // 文件夹路径
            $dir = './brand_class/img/'.date('Y-m-d');
            // 移动文件
            $request->file('img')->move($dir,$name);          
            // 获取文件的路径
            $data['img'] = trim($dir.'/'.$name,'.');
        }
        $data['status'] = 0;
        $data['user_id'] = session('id');
        if (DB::table('brand_shop')->where('id',$id)->update($data)) {
           return redirect('/shop')->with('msg','修改成功!!!');
        }else{
           return back()->with('msg','修改失败!!!');
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
        if (DB::table('brand_shop')->where('id',$id)->delete()) {
           return back()->with('msg','删除成功');
        }else{
           return back()->with('msg','删除失败');
        }
    }
    public function area(Request $request)
    {
        $pid = $request->pid;
        // 读取数据库
        $area = DB::table('area')->where('area_parent_id',$pid)->get();
        return $area->toJson();
    }
}
