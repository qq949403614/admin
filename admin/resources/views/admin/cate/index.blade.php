@extends('admin.index')
@section('title')
<title>导航列表信息</title>
@endsection
@section('content')
<header class="wrapper">
	<div class="col-lg-12">
			<h2 class="page-header">导航列表</h2>
			@if(session('msg'))
			<div class="alert alert-info text-center">{{session('msg')}}</div>
			@endif
		</div>
	<div class="row">
	    <div class="col-lg-12">  	
	        <section class="panel">
	        	<div class="panel-body">
	            	<table class="table table-bordered table-hover" style="margin-top:50px;">
	                <thead>
	                    <tr>
	                    	<th>id</th>
	                        <th>导航名</th>
	                        <th>状态</th>
	                        <th>操作</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	@if(count($navs)>0)
		                	@foreach($navs as $k=>$v)
		                    <tr>
			                    <td>{{$v->id}}</td>
			                    <td>{{$v->name}}</td>
			                    <td>
			                    	@if($v->status)
			                    	<span style="color:green">通过</span>
			                    	@else
			                    	<span style="color:red">拒绝</span>
			                    	@endif
			                    </td>
			                    <form action="/cate/{{$v->id}}" method="post">
				                    <td>
					                    <a class="btn btn-info btn-sm" href="/cate/{{$v->id}}/edit">修改</a> 
										{{method_field('DELETE')}}
										{{csrf_field()}}
				                    	<input type="submit" class="del btn btn-danger btn-sm" value="删除">
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
