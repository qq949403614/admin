@extends('admin.index')
@section('title')
<title>用户列表信息</title>
@endsection
@section('content')
<header class="wrapper">
	<div class="col-lg-12">
			<h2 class="page-header">留言列表</h2>
			@if(session('msg'))
			<div class="alert alert-info text-center">{{session('msg')}}</div>
			@endif
		</div>
	<div class="row">
	    <div class="col-lg-12">  	
	        <section class="panel">
	        	<form action="/user" class="navbar-form" style="margin-right:10px">
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
		                        <th>用户名</th>
		                        <th>邮箱</th>
		                        <th>内容</th>
		                        <th>留言时间</th>
		                        <th>状态</th>
		                        <th>操作</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	@if(count($comment)>0)
			                	@foreach($comment as $k=>$v)
			                    <tr>
				                    <td>{{$v->id}}</td>
				                    <td>{{$v->username}}</td>
				                    <td>{{$v->email}}</td>
				                    <td>{!!$v->content!!}</td>
				                    <td>{{$v->time}}</td>
				                    <td>
				                    	@if($v->status)
				                    	<span style="color:green">通过</span>
				                    	@else
				                    	<span style="color:red">拒绝</span>
				                    	@endif
				                    </td>
				                    <form action="/destroy/{{$v->id}}" method="post">
					                    <td>
					
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
				<div class="text-right">
					<ul class="pagination">
					 {{$comment->appends(['num' => $num ,'keywords'=>$keywords])->links()}}
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
