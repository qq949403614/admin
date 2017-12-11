<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CateController extends Controller
{
    
    /**
     * 导航管理后台
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $navs = DB::select("select id,name,pid,wid,status,concat(path,'_',id) as paths from navs order by paths");
        foreach ($navs as $key => &$value) {
            $tmp=count(explode('_', $value->paths))-2;
            $value->name=str_repeat('|---', $tmp).$value->name; 
        }
        return view('admin.cate.index',['navs'=>$navs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $navs = DB::table('navs')->get();
        //分配变量
        return view('admin.cate.create',['navs'=>$navs]);
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //插入数据
        $data = $request->except('_token');


        if($data['pid']==0){
            $data['path']= '0';
        }else{
            $d = DB::table('navs')->where('id',$data['pid'])->first();
            $data['path'] = $d->path.'_'.$d->id;
        }
        if($data['wid']){
            $data['wid']=1;
        }else{
            $data['wid']=0;
        }
        $data['status']=0;
        if(DB::table('navs')->insert($data)){
            return redirect('/cate')->with('msg','恭喜您,添加成功!!!');
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
        //
         return view('admin.cate.edit');
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
        //删除数据
        $navs = DB::table('navs')->where('id',$id)->first();
        $path = $navs->path.'_'.$navs->id;
        $res = DB::table('navs')->where('path','like',$path.'%')->delete();
        if(DB::table('navs')->where('id',$id)->delete()){
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败');
        }
    }
}
