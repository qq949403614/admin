<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    @include('layouts.css')
    @section('title')
    <title>admin 后台管理系统</title>
    @show  
</head>
<body>
    <!-- container section start -->
    <section id="container" class="">
        <header class="header dark-bg">
                <div class="nav search-row" id="top_menu">
                    <!--  search form start -->
                    <ul class="nav top-menu">                    
                        <li>
                            <form class="navbar-form">
                                <a class="btn btn-sm btn-danger" href="/admin">首页</a>
                            </form>
                        </li>                    
                    </ul>
                    <!--  search form end -->                
                </div>
                <div class="top-nav notification-row">                
                    <!-- notificatoin dropdown start-->
                    <ul class="nav pull-right top-menu">
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="">
                                <span class="username">用户名</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">
                                <div class="log-arrow-up"></div>
                                <li class="eborder-top">
                                    <a href="#"><i class="icon_profile"></i> My Profile</a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                                </li>
                                <li>
                                    <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                                </li>
                                <li>
                                    <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                                </li>
                                <li>
                                    <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                                </li>
                            </ul>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                    <!-- notificatoin dropdown end-->
                </div>
        </header>      
        @include('layouts.menu')    
        <section id="main-content">
            @section('content')
            <header class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                    <h2 class="page-header"> 欢 迎 您 回 来 ! ! ! </h2>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    
                  </div>
                </div>                              
            </header> 
            @show 
        </section>
    </section>
    <!-- container section start -->
@include('layouts.jquery')
</body>
</html>
