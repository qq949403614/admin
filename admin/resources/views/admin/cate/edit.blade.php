@extends('admin.index')
@section('title')
<title>修改文章信息</title>
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
	          <header class="panel-heading">修改文章信息</header>
	          <div class="panel-body">
	              <form class="form-horizontal " method="post" action="/article/{{$article->id}}" enctype="multipart/form-data">
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label" name="title">文章标题</label>
	                      <div class="col-sm-5">
	                          <input type="text" class="form-control round-input" name="title" value="{{$article->title}}"> 
	                      </div>
	                  </div>
	                  <div class="form-group">
	                  	  <img src="{{$article->pic}}" width="200px" class="col-md-5" alt="文章头图">
	                  </div>
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label">文章头图</label>
	                      <div class="col-sm-5">
	                          <input type="file" name="pic">
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <label class="control-label col-sm-2">文章内容</label><hr>
						  <script id="editor" name="content" type="text/plain" style="width:800px;height:300px;">{!!$article->content!!}</script>
	                  </div>
	                  <div class="form-group text-center">
	                  	<div class="col-sm-3">
	                  	{{method_field('PUT')}}
	                  	{{csrf_field()}}
	                      <input type="submit" class="btn btn-info text-center" value="修改"></input>
						</div>
						<div class="col-sm-1">
	                      <button class="btn btn-danger text-center" value="删除"></input>                
	                    </div>  
	                  </div>
	              </form>
	          </div
		</div>
	</div>                              
</header> 
<script>
	var ue = UE.getEditor('editor');
</script>
@endsection