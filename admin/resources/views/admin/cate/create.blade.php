@extends('admin.index')
@section('title')
<title>添加导航信息</title>
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
	          <header class="panel-heading">添加导航信息</header>
	          <div class="panel-body">
	              <form class="form-horizontal " method="post" action="/cate" enctype="multipart/form-data">
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label">所属名称</label>
	                      <div class="col-sm-5">
	                          <select name="pid">
	                          	<option value="0">顶级导航</option>
	                          	@foreach($navs as $k=>$v)
	                          			<option value="{{$v->id}}"><span>{{$v->name}}</span></option>
	                          	@endforeach
	                          </select>
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label">导航名称</label>
	                      <div class="col-sm-5">
	                          <input type="text" class="form-control round-input" name="name"> 
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label">所属位置</label>
	                      <div class="col-sm-5">
	                          <select name="wid">
		                          		<option value="0"><span>水平导航</span></option>
										<option value="1"><span>侧边栏导航</span></option>
	                          </select>
	                      </div>
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