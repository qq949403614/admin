@extends('admin.index')
@section('title')
<title>添加用户信息</title>
@endsection
@section('content')
<header class="wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">添加</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
	      <section class="panel">
	          <header class="panel-heading">添加用户信息</header>
	          <div class="panel-body">
	              <form class="form-horizontal " method="post" action="/user" enctype="multipart/form-data">
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label" name="username">用户名</label>
	                      <div class="col-sm-5">
	                          <input type="text" class="form-control round-input" name="username"> 
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label" name="password">密码</label>
	                      <div class="col-sm-5">
	                          <input type="password" class="form-control round-input" name="password" >
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label" name="password">确认密码</label>
	                      <div class="col-sm-5">
	                          <input type="password" class="form-control round-input" name="password">
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label">头像</label>
	                      <div class="col-sm-5">
	                          <input type="file" name="profile">
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label" name="email">邮箱</label>
	                      <div class="col-sm-5">
	                          <input type="text" class="form-control round-input" name="email">
	                      </div>
	                  </div>
	                  <div class="form-group text-center">
	                  	<div class="col-sm-3">
	                  	{{csrf_field()}}
	                      <input type="submit" class="btn btn-info text-center"></input>
						</div>
						<div class="col-sm-1">
	                      <input type="reset" class="btn btn-info text-center"></input>                
	                    </div>  
	                  </div>
	              </form>
	          </div
		</div>
	</div>                              
</header> 
@endsection