@extends('admin.index')
@section('title')
<title>添加店铺信息</title>
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
	          <header class="panel-heading">添加店铺信息</header>
	          <div class="panel-body">
	              <form class="form-horizontal " method="post" action="/shop" enctype="multipart/form-data">
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label">店铺名称</label>
	                      <div class="col-sm-5">
	                      	  <input type="text" class="form-control round-input" name="shop_name">
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label">主营商品</label>
	                      <div class="col-sm-5">
	                      	  <input type="text" class="form-control round-input" name="shop_class">
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label">店铺负责人</label>
	                      <div class="col-sm-5">
	                      	  <input type="text" class="form-control round-input" name="user_real">
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label">负责人电话</label>
	                      <div class="col-sm-5">
	                      	  <input type="text" class="form-control round-input" name="user_tel">
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label">证照信息</label>
	                      <div class="col-sm-5">
	                      	  <input type="file" name="license">		
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label">店铺图片</label>
	                      <div class="col-sm-5">
	                      	  <input type="file" name="img">		
	                      </div>
	                  </div>
	                  <div class="form-group">
	                      <label class="col-sm-2 control-label">店铺位置</label>
	                      <div class="col-sm-6">
	                      <hr>
	                          <select name="province" class="btn col-sm-3 btn-info" style="font-weight:bold">
		                          		<option value="0"><span>--请选择--</span></option>
	                          </select>
	                          <select name="city" class="btn col-sm-3 btn-info" style="font-weight:bold">
		                          		<option value="0"><span>--请选择--</span></option>
	                          </select>
	                          <select name="area" class="btn col-sm-3 btn-info" style="font-weight:bold">
		                          		<option value="0"><span>--请选择--</span></option>
	                          </select>
	                      </div>
	                  </div>
	                @section('area')
	                <script>
						$.ajax({
							type:'get',
							data:{pid:0},
							dataType:'json',
							url:'/area',
							success:function(msg){
								for(var i=0;i<msg.length;i++){
					                var option = $('<option value="'+msg[i].id+'">'+msg[i].area_name+'</option>')
					                $('select[name=province]').append(option);
            					}
							}
						})
						$('select[name=province]').change(function(){
							$('select[name=city]').html('<option value=""><span>--请选择--</span></option>');
							$('select[name=area]').html('<option value=""><span>--请选择--</span></option>');
							var id = $(this).val();
							$.ajax({
							type:'get',
							data:{pid:id},
							dataType:'json',
							url:'/area',
							success:function(msg){
								for(var i=0;i<msg.length;i++){
					                var option = $('<option value="'+msg[i].id+'">'+msg[i].area_name+'</option>')
					                $('select[name=city]').append(option);
            					}
							}
						})
						});
						$('select[name=city]').change(function(){
							$('select[name=area]').html('<option value=""><span>--请选择--</span></option>');
							var id = $(this).val();
							$.ajax({
							type:'get',
							data:{pid:id},
							dataType:'json',
							url:'/area',
							success:function(msg){
								for(var i=0;i<msg.length;i++){
					                var option = $('<option value="'+msg[i].id+'">'+msg[i].area_name+'</option>')
					                $('select[name=area]').append(option);
            					}
							}
						})
						});
					</script>
					@endsection
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

