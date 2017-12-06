@extends('layouts.home')

@section('content')
	<div class="men">
	<div class="container">
	    <div class="col-md-12 register">
		  	  <form method="post" action="/registers"> 
				 <div class="register-top-grid col-md-6 col-md-offset-3" style="margin-top:20px;">
					
					 	<h3>PERSONAL INFORMATION</h3>
						<input type="text" name="name" placeholder="username" style="margin-top:20px;">
						<input type="text" name="phone" placeholder="phone" style="margin-top:20px;">
						
						<button type="button" id="send" class="btn btn-default btn-sm pull-left" style="margin-top:10px;">发送验证码</button>
						<input type="text" name="phoneverify" placeholder="phoneverify" style="margin-top:20px;"> 
						 <input type="text" name="email" placeholder="email" style="margin-top:20px;">
						<input type="password" placeholder="password" style="margin-top:20px;">
						<input type="password" placeholder="confirmpassword" style="margin-top:20px;">
						<div class="register-but">
						{{csrf_field()}}
							<input type="submit" class="btn btn-red btn-md" value="register" style="margin-left:200px;">
				   		</div>
					
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