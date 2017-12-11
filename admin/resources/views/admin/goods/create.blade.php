@extends('admin.index')
@section('title')
<title>商品添加</title>
@endsection
@section('content')

<!-- 文章编辑器 -->
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>

<header class="wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">商品添加</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
	      <section class="panel">
	          <header class="panel-heading">添加商品信息</header>
	          <div class="panel-body">
	              <form class="form-horizontal " method="post" action="/goods" enctype="multipart/form-data">
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label" name="title">商品名称</label>
	                      <div class="col-sm-5">
	                          <input type="text" class="form-control round-input" name="title"> 
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label" name="price">价格</label>
	                      <div class="col-sm-5">
	                          <input type="text" class="form-control round-input" name="price" >
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label" name="kucun">库存</label>
	                      <div class="col-sm-5">
	                          <input type="text" class="form-control round-input" name="kucun">
	                      </div>
	                  </div>

	                  <div class="form-group">
	                      <label class="col-sm-2 control-label" name="pic">商品图片</label>
	                      <div class="col-sm-5">
	                          <input type="file" name="pic[]" multiple>
	                      </div>
	                  </div>

	                  <div class="form-group">
	                      <label class="col-sm-2 control-label" name="content">商品详情</label>
	                      <div class="col-sm-5">
	                          <script id="editor" name="content" type="text/plain" style="width:800px;height:300px;"></script>
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

<script>
	var ue = UE.getEditor('editor');
</script>
@endsection