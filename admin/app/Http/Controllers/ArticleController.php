<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ArticleController extends Controller
{

    /**
     * 文章管理后台
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keywords = $request->input('keywords');
        $num = $request->input('num',10);
        if($request->has('keywords')){
            $article=DB::table('article')->where('title','like','%'.$keywords.'%')->paginate($num);
        }
        else{
            $article=DB::table('article')->paginate($num);    
        }
        return view('admin.article.index',['article'=>$article,'keywords'=>$keywords,'num'=>$num]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //文章添加
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取文章内容
        $data = $request->only('title','content');
        // 文件上传
        if($request->hasFile('pic')){
            // 获取文件后缀
            $hz = $request->file('pic')->extension(); 
            // 创建随机名称
            $name = uniqid('img_').'.'.$hz;
            // 文件夹路径
            $dir = './uploads/'.date('Y-m-d');
            // 移动文件
            $request->file('pic')->move($dir,$name);          
            // 获取文件的路径
            $data['pic'] = trim($dir.'/'.$name,'.');
        }
        if (DB::table('article')->insert($data)) {
            return redirect('/article')->with('msg','恭喜您,添加成功!!!');
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
        $article = DB::table('article')->where('id',$id)->first();
        return view('admin.article.edit',['article'=>$article]);
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
        $data = $request->except('_token','_method');
        // 接受文件上传
        if($request->hasFile('pic')){
            // 获取文件后缀
            $hz = $request->file('pic')->extension(); 
            // 创建随机名称
            $name = uniqid('img_').'.'.$hz;
            // 文件夹路径
            $dir = './uploads/'.date('Y-m-d');
            // 移动文件
            $request->file('pic')->move($dir,$name);          
            // 获取文件的路径
            $data['pic'] = trim($dir.'/'.$name,'.');
        }
        if(DB::table('article')->where('id',$id)->update($data)){
            return redirect('/article')->with('msg','恭喜您,修改成功!!!');
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
        if (DB::table('article')->where('id',$id)->delete()) {
           return back()->with('msg','删除成功');
        }else{
           return back()->with('msg','删除失败');

        }
    }
}
