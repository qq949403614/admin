<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $num = $request->input('num', 10);
        $keywords = $request->input('keywords','');

        //关键字检索
        if($request->has('keywords')) {
            //列表显示
            $goods = DB::table('goods')
                ->where('title','like','%'.$keywords.'%')
                ->paginate($num);
        }else{
            //列表显示
            $goods = DB::table('goods')->paginate($num);
        }

        //解析模板
        return view('admin.goods.index', ['goods'=>$goods,'keywords' => $keywords,'num' => $num]);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['title','price','content','kucun']);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['status'] = 1;
        //将数据插入到商品表中
        $res = DB::table('goods')->insertGetId($data);
        //如果插入成功
        if($res > 0){
            //处理图片
            if($request->hasFile('pic')){
                $images = [];
                foreach ($request->file('pic') as $k=>$v) {
                    $tmp = [];
                    // 获取文件后缀
                    $suffix = $v->extension(); 
                     
                    // 创建随机名称
                    $name = uniqid('img_').'.'.$suffix;
                    // 文件夹路径
                    $dir = './uploads/'.date('Y-m-d');
                    // 移动文件
                    $v->move($dir,$name);          
                    // 获取文件的路径
                    $tmp['goods_id'] = $res;
                    $tmp['pic'] = trim($dir.'/'.$name,'.');
                    $images[] = $tmp;
                    
                }
                //将图片信息插入到商品图片表中
                DB::table('goods_pic')->insert($images);
            }
           return redirect('/goods')->with('msg','添加成功');
        }else{
            return redirect('/goods')->with('msg','添加失败!');
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
        //读取商品的详细信息
        $goods = DB::table('goods')->where('id',$id)->first();
        //读取商品的图片信息
        $goods_pic = DB::table('goods_pic')->where('goods_id', $id)->get();

        return view('admin.goods.create', compact('goods','goods_pic'));// ['goods'=>$goods]
    }
    public function create()
    {

        return view('admin.goods.create');
    }
    public function edit($id)
    {
        $goods = DB::table('goods')->where('id',$id)->first();
        $goods_pic = DB::table('goods_pic')->where('goods_id', $id)->get();
        return view('admin.goods.edit',['goods'=>$goods,'goods_pic'=>$goods_pic]);
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
        // 接受发送信息
        $data = $request->only('title','price','kucun','content');
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['status'] = 1;
        $res = DB::table('goods')->where('id',$id)->update($data);
        //如果插入成功
        if($res > 0){
            //处理图片
            if($request->hasFile('pic')){
                $images = [];
                foreach ($request->file('pic') as $k=>$v) {
                    $tmp = [];
                    // 获取文件后缀
                    $suffix = $v->extension(); 
                    // 创建随机名称
                    $name = uniqid('img_').'.'.$suffix;
                    // 文件夹路径
                    $dir = './uploads/'.date('Y-m-d');
                    // 移动文件
                    $v->move($dir,$name);          
                    // 获取文件的路径
                    $tmp['goods_id'] = $res;
                    $tmp['pic'] = trim($dir.'/'.$name,'.');
                    $images[] = $tmp;
                    
                }
                //将图片信息插入到商品图片表中
                DB::table('goods_pic')->insert($images);
            }
           return redirect('/goods')->with('msg','修改成功!!!');
        }else{
            return redirect('/goods')->with('msg','修改失败!!!');
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
        //
    }

    public function glist()
    {
        //读取商品
        $goods = DB::table('goods')
        ->where('status',1)
        ->select('id','title','price')
        ->orderBy('id','desc')
        ->paginate(8);
        //遍历商品信息
        foreach ($goods as $key => &$value) {
            $value->pic = DB::table('goods_pic')->where('goods_id', $value->id)->value('pic');
        }
        //显示模板
        return view('home.goods.list',compact('goods'));
        
    }
}
