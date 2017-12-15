<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="revised" content="Ningxia Seasons, 2017/12/06/" />
<!-- 定义页面的最新版本 -->
<meta name="description" content="网站简介" />
<!-- 网站简介 -->
<meta name="keywords" content="搜索关键字" />
<!-- 搜索关键字 -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Make sure the order</title><!--确认订单-->

<!-- Bootstrap -->
<link href="/csse/crowdfunding.center/my_info.css" rel="stylesheet">
<!-- CSS公共部分 开始 -->
<link href="/csse/bootstrap.min.css" rel="stylesheet">
<!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="/csse/style.css" rel="stylesheet">
<!-- CSS公共部分 结束 -->
<link href="/csse/crowdfunding.css" rel="stylesheet">
<link rel="stylesheet" href="/jiuyexiangmu/home/assets/css/bootstrap.min.css" type="text/css">
  <!-- Dropdownhover CSS -->
  <link rel="stylesheet" href="/jiuyexiangmu/home/assets/css/bootstrap-dropdownhover.min.css" type="text/css">
  <!-- latest fonts awesome -->
  <link rel="stylesheet" href="/jiuyexiangmu/home/assets/font/css/font-awesome.min.css" type="text/css">
  <!-- simple line fonts awesome -->
  <link rel="stylesheet" href="/jiuyexiangmu/home/assets/simple-line-icon/css/simple-line-icons.css" type="text/css">
  <!-- stroke-gap-icons -->
  <link rel="stylesheet" href="/jiuyexiangmu/home/assets/stroke-gap-icons/stroke-gap-icons.css" type="text/css">
  <!-- Animate CSS -->
  <link rel="stylesheet" href="/jiuyexiangmu/home/assets/css/animate.min.css" type="text/css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="/jiuyexiangmu/home/assets/css/style.css" type="text/css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="/jiuyexiangmu/home/assets/css/jcarousel.connected-carousels.css" type="text/css">
  <!--  baguetteBox -->
  <link rel="stylesheet" href="/jiuyexiangmu/home/assets/css/baguetteBox.css">
  <!-- Owl Carousel Assets -->
  <link href="/jiuyexiangmu/home/assets/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="/jiuyexiangmu/home/assets/owl-carousel/owl.theme.css" rel="stylesheet">

</head>
<style>
 .address-item{
        border:1px solid #bfd1eb;
        width: 250px;
        height: 150px;
        margin-top:50px;
        background:#f3faff;
    }
</style>

<body>
<!-- top + banner 开始 -->
@include('layouts.center-head')

<!-- top + banner 结束 --> 
<!-- 开始 -->

<div class="clearfix"></div>
<!-- 核心 开始 -->

<div class="container border1 nopadding margin10" style="margin-top:30px;padding:0px;">
@include('layouts.center-menu')

    <div class="col-md-9">
        <div class="my_info_title" style="margin-top:30px;">Make sure the order</div>
        <hr>
        <div class="col-md-12">
          <a href="/address/create" class="btn btn-default pull-right">Add receiving address</a>
        </div>
        

        @foreach($addresses as $k=>$v)
          <div class="col-md-4">
              <div class="address-item text-center">
              <h4 style="margin-top:20px;">{{$v->name}}</h4>
              <p style="margin-top:10px;">{{$v->phone}}</p>
              <p style="margin-top:10px;">{{$v->pname}}{{$v->cname}}{{$v->xname}}{{$v->detail}}</p>
              </div>
          </div>
        @endforeach
       
       <div class="my_info_content">

          <div class="my_info_content_care" style="margin-top:300px;"> The following information is mandatory, please fill in carefully! </div>
          <form action="/address" method="post">
          <table class="my_info_content_care_table">
            <tbody>
              <tr style="height:50px;">
                 <td align="right" class="color555">Name：</td>
                 <td class="color555"><input class="my_info_content_care_table_text" name="name" type="text">
                  <span class="color959595 margin_left10 font_size12">Friendly tip: please enter your real name!</span></td>
              </tr>
              <tr style="height:50px;">
                <td align="right" class="color555">Mobile phone number：</td>
                <td class="color555"><input class="my_info_content_care_table_text" name="phone" type="text">
                  <span class="color959595 margin_left10 font_size12">Friendly reminder: please fill in the common number so that we can contact you in time!</span></td>
              </tr>
              
              <tr style="height:50px;">
                <td align="right" class="color555">Receiving address：</td>
                <td class="color555">
                    <select name="province" style="width:80px;">
                       <option value="">Please select</option>
                    </select>
                    <select name="city" style="width:80px;">
                        <option value="">Please select</option>
                    </select>
                    <select name="xian" style="width:80px;">
                        <option value="">Please select</option>
                    </select>
                    <span class="color959595 font_size12" style="margin-left:20px;">Friendly reminder: please choose your receiving address!</span> </td>
              </tr>
              <tr style="height:50px;">
                <td align="right" class="color555">Detailed address：</td><!--详细地址-->
                <td class="color555"><textarea name="detail" id="" style="width:200px;"></textarea>
                  <span class="color959595 font_size12" style="margin-left:20px;">Friendly reminder: convenient for you to receive express delivery faster!</span></td>
              </tr>
              
              <tr style="height:50px;">
                <td align="right" class="color555"></td>
                <td class="color555"><input type="checkbox" value="1" name="is_default">&nbsp;&nbsp; Whether is the default receiving address</td>
              </tr>
              {{csrf_field()}}
              <tr style="height:50px;">
                <td align="center" class="color555" colspan="2"><input class="my_info_content_care_table_submit" name="" type="submit" value="Bao deposit" style="width:200px;"></td>
              </tr>
            </tbody>
          </table>
          </form>
        </div> 
    </div>
      
    

</div>

<!-- 核心 结束 --> 

@include('layouts.center-foot')
 
<!-- 结束 --> 

<!-- JS公共部分 开始 --> 
<script src="jss/jquery-2.1.1.min.js"></script> 
<script src="jss/bootstrap.min.js"></script> 
<script src="jss/basics.js"></script> 
<!-- JS公共部分 结束 --> 
<script src="jss/crowdfunding.js"></script>
<script src="/jss/my_info.js"></script>

<script>

$.ajax({
    type:'get',
    url:'/getarea',
    dataType:'json',
    data: {pid:0},
    success: function(data){
      for(var i=0;i<data.length;i++){
              var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
              //将option插入到省的select中
              $('select[name=province]').append(option);
          }
    }

  })

$('select[name=province]').change(function(){
  $('select[name=city]').html('<option value="0">请选择</option>')

  //获取当前省的ID
  var id = $(this).val();
  $.ajax({
    type:'get',
    url:'/getarea',
    dataType:'json',
    data: {pid:id},
    success: function(data){
      for(var i=0;i<data.length;i++){
              var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
              //将option插入到省的select中
              $('select[name=city]').append(option);
          }
    }

  })

});

$('select[name=city]').change(function(){
  $('select[name=xian]').html('<option value="">请选择</option>')
  //获取当前县id
  var id = $(this).val();
  $.ajax({
    type:'get',
    url:'/getarea',
    dataType:'json',
    data: {pid:id},
    success: function(data){
      for(var i=0;i<data.length;i++){
        var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
        //将option插入到县的select中
        $('select[name=xian]').append(option);
      }
    }
  })
});


</script>
</body>
</html>