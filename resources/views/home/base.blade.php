<!DOCTYPE html>
<html>
<!--<![endif]--><head>
  <title>猫眼电影 - 一网打尽好电影</title>
  <meta charset="UTF-8">
  <meta name="keywords" content="电影,电视剧,票房,美剧,猫眼电影,电影排行榜,电影票,经典电影,在线观看">
  <meta name="description" content="猫眼电影致力于打造中国最大最全的电影信息资讯平台,在这里,海量影视资料应有尽有,热点影视讯息一网打尽,更有秒级实时票房,热门榜单,极致地满足您独特的观影口味">
  <meta http-equiv="cleartype" content="yes">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="{{asset('home/images/favicon.ico')}}" type="image/x-icon" /> 
  <link rel="stylesheet" href="{{asset('home/css/common.dce64fb8.css')}}">
  <link rel="stylesheet" href="{{asset('home/css/home-index.ff98348e.css')}}">
  <link rel="stylesheet" href="{{asset('home/css/movie-list.ffb4de4a.css')}}">
  <link rel="stylesheet" href="{{asset('home/css/movie-detail.6b71afde.css')}}">
  <link rel="stylesheet" href="{{asset('home/css/news-hotNews.d8ee9843.css')}}">

</head>
<body>
<div class="header">
  <div class="header-inner">
        <a href="http://maoyan.com/" class="logo" data-act="icon-click"></a>
        <div class="city-container" data-val="{currentcityid:1 }">
            <div class="city-selected">
                <div class="city-name">
                  北京
                  <span class="caret"></span>
                </div>
            </div>
            <div class="city-list" data-val="{ localcityid: 1 }">
                <div class="city-list-header">定位城市：<a class="js-geo-city">北京</a></div>
            </div>
        </div>
        <div class="nav">
            <ul class="navbar">
                <li><a href="http://www.movie.com/" data-act="home-click" class="active">首页</a></li>
                
                <li><a href="http://www.movie.com/films" data-act="movies-click">电影</a></li>
                
                <li><a href="http://www.movie.com/cinemas" data-act="board-click">影院</a></li>
                <li><a href="http://www.movie.com/news" data-act="hotNews-click">热点</a></li>
            </ul>
        </div>

        <div class="user-info">
            <div class="user-avatar J-login">
              <img src="{{asset('home/images/panda.png')}}">
              <span class="caret"></span>
              <ul class="user-menu">
                <li><a href="/login/">登录</a></li>
                <li><a href="/reg/">注册</a></li>
              </ul>
            </div>
        </div>

        <form action="http://maoyan.com/query" target="_blank" class="search-form" data-actform="search-click">
            <input name="kw" class="search" maxlength="32" placeholder="找电影" autocomplete="off" type="search">
            <input class="submit" value="" type="submit">
        </form>
  </div>
</div>
<div class="header-placeholder"></div>
@section('content')
  这是页面主内容区。
@show
<div class="footer" style="visibility: visible;">
    <p>
        ©2016 熊猫电影
        <a href="" target="_blank">京ICP证160733号</a>
        <a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备16022489号-1</a>
        京公网安备 11010502030881号
        <a href="" target="_blank">网络文化经营许可证</a>
    </p>
    <p>北京熊猫文化传媒有限公司</p>
</div>
</body>
</html>
