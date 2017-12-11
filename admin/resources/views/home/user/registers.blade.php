@extends('layouts.home')
@section('content')
	<div class="men">
	<div class="container">
	    <div class="col-md-12 register">
		  	  <form method="post" action="/registers"> 
				     <div class="form-group">
				       <label>Username</label>
				       <input type="text" class="form-control" name="username" />
				     </div>
				     <div class="form-group">
				       <label>phone</label>
				       <input type="text" class="form-control" name="phone" />
				     </div>
					<button type="button" id="send" class="btn btn-default btn-sm">发送验证码</button>
						<div class="form-group">
				       <label>phoneverify</label>
				       <input type="text" class="form-control" name="verify" />
				     </div>				
					
				     <div class="form-group">
				       <label>password</label>
				       <input type="password" class="form-control" name="password" />
				     </div>
				     <div class="form-group">
				       <label>Email address</label>
				       <input type="text" class="form-control" name="email" />
				     </div>
				     <div class="form-group">
				       <button type="submit" name="submit" class="btn btn-primary">Submit</button>
				     </div>
  			</form>
			</div>
		   </div>
	 </div>
</div>

@stop

@section('js')
	<script>
		$('#send').click(function(){
			//获取用户输入的手机号
			var phone = $('input[name=phone]').val();
			//console.log(phone);
			//检测用户的手机号格式是否正确
			var reg =/1\d{10}/;
			//检测
			if(!reg.test(phone)){
				alert('手机号格式错误')
				return;
			}
			$.ajax({
				type:'get',
				data:{phone:phone},
				url:'/message',
				success:function(data){
					alert(data.data.vcode);
					console.log(data);
				}
			})
			//发送短信之后 1分钟之内不能点击该按钮
			$(this).addClass('disabled');
			var t = 60;
			//加倒计时
			var inte = setInterval(function(){
				$('#send').html(t+'秒之后再重新发送');
				t--;
				if(t < 0) {
					//停止定时器
					clearInterval(inte);
					//使按钮可点
					$('#send').removeClass('disabled');
					//更换文字
					$('#send').html('发送验证码');
				}
			}, 1000);

		});
	</script>
@stop