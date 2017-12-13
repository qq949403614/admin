@extends('admin.index')
@section('title')
<title>修改用户信息</title>
@endsection
@section('content')
<header class="wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">修改</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
	      <section class="panel">
	          <header class="panel-heading">修改用户密码</header>
	          <div class="panel-body">
	              <form class="form-horizontal" method="post" action="/{{$id}}/mima" enctype="multipart/form-data">
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label" name="username">密码</label>
	                      <div class="col-sm-4">
	                      <input type="password" class="form-control round-input" name="password">
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label" name="email">确认密码</label>
	                      <div class="col-sm-4">
	                      <input type="password" class="form-control round-input" name="password">
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <div class="col-sm-5 col-sm-offset-2">
	                      {{csrf_field()}}
	                      <input type="submit" class="btn btn-info" value="提交">
	                      <input type="reset" class="btn btn-info text-center">
	                      </div>
	                  </div>
	              </form>
	          </div
		</div>
	</div>                              
</header> 
@endsection