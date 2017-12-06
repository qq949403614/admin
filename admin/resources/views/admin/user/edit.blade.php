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
	          <header class="panel-heading">修改用户信息</header>
	          <div class="panel-body">
	              <form class="form-horizontal " method="post" action="/user/{{$admin->id}}" enctype="multipart/form-data">
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label" name="username">用户名</label>
	                      <div class="col-sm-5">
	                          <input type="text" class="form-control round-input" name="username" value="{{$admin->username}}"> 
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label" name="email">邮箱</label>
	                      <div class="col-sm-5">
	                          <input type="text" class="form-control round-input" name="email" value="{{$admin->email}}">
	                      </div>
	                  </div>
	                  <div class="form-group">
	                  	  <div class="col-sm-5">
	                  	 	  <label class="col-sm-4 control-label" >头像</label>
                          	  <img src="{{$admin->profile}}" width="150px" alt="">
                          </div>
                      </div>
	                  <div class="form-group">
	                      <label class="col-sm-1 control-label"></label>
	                      <div class="col-sm-5">
	                          <input type="file" name="profile">
	                      </div>
	                  </div>
	                  <div class="form-group text-center">
	                  	<div class="col-sm-3">
	                  	{{csrf_field()}}
						{{method_field('PUT')}}
	                    	<input type="submit" class="btn btn-info text-center" value="修改"></input>
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