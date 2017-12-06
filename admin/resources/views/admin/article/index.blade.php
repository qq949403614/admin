@extends('admin.index')
@section('title')
<title>文章列表信息</title>
@endsection
@section('content')
<header class="wrapper">
	<div class="col-lg-12">
			<h2 class="page-header">文章列表</h2>
			@if(session('msg'))
			<div class="alert alert-info text-center">{{session('msg')}}</div>
			@endif
		</div>
	<div class="row">
	    <div class="col-lg-12">  	
	        <section class="panel">
	        	<form action="/article" class="navbar-form" style="margin-right:10px">
	        		<div class="col-sm-6">显示
	        			<select class="form-control-2 input-sm" name="num">
	        			<option value="10" @if($num == 10) selected @endif>10</option>
	        			<option value="25" @if($num == 25) selected @endif>25</option>
	        			<option value="50" @if($num == 50) selected @endif>50</option>
	        			<option value="100" @if($num == 100) selected @endif>100</option>
	        			</select>行
	        		</div>
	            	<ul class="nav top-menu pull-right">
	            	<li>
                        	关键词: <input class="form-control" type="text" name="keywords" value="{{$keywords}}"> &nbsp; <input type="submit" class="btn btn-info btn-sm" value="搜索">
                    </li>         
                	</ul>
               	</form>
	        	<div class="panel-body">

	            	<table class="table table-bordered table-hover" style="margin-top:50px;">
	                <thead>
	                    <tr>
	                    	<th>id</th>
	                        <th>标题</th>
	                        <th>头图</th>
	                        <th>操作</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	@if(count($article)>0)
		                	@foreach($article as $k=>$v)
		                    <tr>
			                    <td>{{$v->id}}</td>
			                    <td>{{$v->title}}</td>
			                    <td><img src="{{$v->pic}}" width="50px" alt=""></td>
			                    <form action="/article/{{$v->id}}" method="post">
				                    <td>
					                    <a class="btn btn-info btn-sm" href="/article/{{$v->id}}/edit">修改</a> 
										{{method_field('DELETE')}}
										{{csrf_field()}}
				                    	<input type="submit" id="wocao" class="del btn btn-danger btn-sm" value="删除">
				                    </td>
			                   </form>
			                </tr>
			                @endforeach
		                @else
		                	<tr class="danger"><td colspan="6" class="text-center ">暂无数据</td></tr>
		                @endif
	                </tbody>
	            	</table>
	            </div>
				<div class="text-right">
					<ul class="pagination">
					{{$article->appends(['num' => $num ,'keywords'=>$keywords])->links()}}
					</ul>
                </div>
	        </section>
	        @section('js')
	        <script>
	        	$('.del').click(function(){
	        		var	res = confirm('您却确定要删除吗?');
	        		if(!res){
	        			return false;
	        		}
	        	})
	        </script>
	        @stop
	    </div>
	</div>                          
</header>
@endsection
