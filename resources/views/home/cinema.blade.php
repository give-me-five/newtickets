@extends('home.base')
  @section('content')
	<!-- 影院css -->
	<link rel="stylesheet" href="{{asset('home/css/global-min.css')}}">
  	<link rel="stylesheet" href="{{asset('home/css/_001.css')}}" clam-moveto="none">
  	<link rel="stylesheet" href="{{asset('home/css/.css')}}">
	<div class="cinema-wrap center-wrap">
		<div class="filter-wrap" data-spm="w2">
			<ul class="filter-select">
				<li>
					<label>选择区域</label>
					<div class="select-tags">
						<a class="current" href="http://dianying.taobao.com/cinemaList.htm?regionName=&amp;n_s=new" data-param="city=110100">全部区域</a>
						<a href="http://dianying.taobao.com/cinemaList.htm?regionName=%E6%98%8C%E5%B9%B3%E5%8C%BA&amp;n_s=new">昌平区</a>
						<a href="http://dianying.taobao.com/cinemaList.htm?regionName=%E6%9C%9D%E9%98%B3%E5%8C%BA&amp;n_s=new">朝阳区</a>
					</div>					
					<a class="J_show select-show" href="javascript:;">更多&gt;</a></li>
				
			
			</ul>
			<div class="list-sort M-sort">
				排序：<a class="active" href="http://dianying.taobao.com/cinemaList.htm?regionName=&amp;sortType=0&amp;cinemaName=&amp;activityId=&amp;fCode=&amp;n_s=new">综合</a> 
				当前条件下共有<span class="count">177</span>家影院 
			</div>
			<ul class="sortbar-detail J_cinemaList">
			
			    <li class="current">
					<div class="detail-right">
						
						<div class="right-fav "></div>
						<div class="right-buy ">    							
							<a href="/">选座</a>
						</div>
					</div>
					<a href="/cinemas/id=1" class="detail-left pictures">
						  <span><img src="T1yI5PFuhdXXXXXXXX_.jpg_120x120.jpg" alt=""></span>								
					</a>
					<div class="detail-middle">
						<div class="middle-hd">
							<h4><a href="http://dianying.taobao.com/cinemaDetail.htm?cinemaId=9462&amp;n_s=new">卢米埃北京芳草地影城</a></h4>
						</div>
						<div class="middle-p">
							<div class="middle-p-list"><i>地址：</i><span class="limit-address">朝阳区东大桥路9号芳草地大厦LG2-26</span><a class="J_miniMap" href="http://dianying.taobao.com/cinemaDetail.htm?cinemaId=9462&amp;n_s=new#detail" data-points="116.449826,39.919551">[地图]</a></div>    							<div class="middle-p-list"><i>电话：</i>010-56907679,0</div>    							<div class="middle-p-list"><i>更多：</i><a class="middle-more" href="http://dianying.taobao.com/cinemaDetail.htm?cinemaId=9462&amp;n_s=new#detail">影院服务</a><a class="middle-more" href="http://dianying.taobao.com/cinemaDetail.htm?cinemaId=9462&amp;n_s=new#detail">交通信息</a></div>
						</div>
					</div>
				</li>
			 
			</ul>
					
			<div class="sortbar-more J_cinemaMore" data-ajax="http://dianying.taobao.com/ajaxCinemaList.htm" data-param="page=1&amp;regionName=&amp;cinemaName=&amp;pageSize=10&amp;pageLength=18&amp;sortType=0&amp;n_s=new">
                <div>
                   <a href="javascript:;">点击显示更多</a>
                </div>
            </div>
						
		</div>

		<div class="Coupon-list" data-spm="w3">
			<div class="list-hd ">
				<h4>热销团购券</h4>
				<a href="http://dianying.taobao.com/itemList.htm?n_s=new}">查看全部&nbsp;&gt;</a>
			</div>
			<div class="error-wrap"><div class="title">暂无团购信息</div>你可以查看 <a href="">全部影院</a>或者<a href="http://dianying.taobao.com/showList.htm?n_s=new">全部影片</a></div>
						
		</div>
		<div class="cinema-sortbar">
		</div>
	</div>
  @endsection
