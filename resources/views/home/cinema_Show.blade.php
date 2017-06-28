@extends('home.base')
  @section('content')
<link rel="stylesheet" href="{{asset('home/css/cinemashow.css')}}" clam-moveto="none">
<link rel="stylesheet" type="text/css" href="{{asset('home/css/cinemashow_001.css')}}">
<!-- header -->
   <div class="infomation-wrapper" data-spm="w1">
   		<div class="center-wrap">
   			<h4 class="title">卢米埃北京芳草地影城<!--small class='mark'>关注：22093</small--><small class="score">9.4 </small><small class="others"><!--a class="J_gocomment" href="#comment">[评价]</a--><!--a href="#">[纠错信息]</a--></small></h4>
   			<div class="info">
				<div class="right-event">

					<div id="J-sm-map" class="sm-map amap-container" style="background: rgb(252, 249, 242) none repeat scroll 0% 0%;">
						<div class="sm-map-info"><a class="more pos-hook" data-href="#J-map">大图查看</a></div>
					<object style="display: block; position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; overflow: hidden; pointer-events: none; z-index: -1;" type="text/html" data="about:blank"></object><div class="amap-maps"><div class="amap-drags" style=""><div class="amap-layers" style="transform: translateZ(0px);"><canvas class="amap-layer" width="240" height="160" style="position: absolute; z-index: 0; top: 0px; left: 0px; height: 160px; width: 240px;"></canvas><canvas class="amap-labels" draggable="false" style="position: absolute; z-index: 99; height: 160px; width: 240px; top: 0px; left: 0px;" width="240" height="160"></canvas><div class="amap-markers" style="position: absolute; z-index: 120; top: 80px; left: 120px;"><div class="amap-marker" style="top: -31px; left: -9px; z-index: 100; transform: rotate(0deg); transform-origin: 9px 31px 0px; display: block;"><div class="amap-icon" style="position: absolute; width: 28px; height: 37px; opacity: 1;"><img src="custom_a_j.png" style="top: 0px; left: -28px;"></div></div></div></div><div class="amap-overlays" style=""></div></div></div><div style="display: none;"></div><div class="amap-controls"></div><a class="amap-logo" href="http://gaode.com/" target="_blank"><img src="autonavi.png"></a><div class="amap-copyright" style="display: none;"></div></div>
				</div>
   				<a data-type="image" class="float-layer-hook float-layer-wrapper">
					<img data-src="https://img.alicdn.com/bao/uploaded/i4/T1yI5PFuhdXXXXXXXX_.jpg" src="T1yI5PFuhdXXXXXXXX_.jpg">
				</a>
   				<ul class="info-list">
					<li>详细地址：朝阳区东大桥路9号芳草地大厦LG2-26<a class="pos-hook" data-href="#J-map">[地图]</a></li>					<li>联系电话：010-56907679,0</li>
					</li>
				</ul>
   			</div>
		</div>
	</div>
	<!-- tab -->
	<div class="center-wrap tab-wrapper">
		<ul class="tab-list M-tabs">
			<li id="seat" class="J_seat current">
				<a href="#seat" data-href="seat" data-spm-anchor-id="a1z21.6646389.0.0">选座购票</a>
            </li>
		</ul>
	</div>
	<!-- cinema-detail -->
	<div class="center-wrap cinema-detail-wrapper M-detail" data-spm="w4" style="display: none;">
		<div class="cinema-detail-item">
			<div class="title-wrap"> <h3 class="special-detail-hook">影院介绍</h3></div> 
			<ul>
			<li><span>详细地址： </span>朝阳区东大桥路9号芳草地大厦LG2-26 [<a data-href="#J-map" class="pos-hook">地图</a>]</li>
			<li><span>联系电话： </span>010-56907679,0</li>
			</ul>
			
		</div>

	</div>


<div class="center-wrap M-seat" style="" data-spm="w2">
	<div class="schedule-wrap J_scheduleWrap schedule-loaded" data-type="cinema_detail" data-ajax="/cinemaDetailSchedule.htm" data-param="showId=&amp;cinemaId=9462&amp;ts=1496139386907&amp;n_s=new">

	<div class="center-wrap w-seat-wrapper">
		<div class="filter-wrap">
			<ul class="filter-select">
				<li>
					<label>选择影片</label>
					<div class="select-tags">
						<a class="current" href="javascript:;" data-param="cinemaId=9462&amp;activityId=&amp;fCode=&amp;showId=161044&amp;showDate=2017-05-30&amp;ts=1496139392951&amp;n_s=new">加勒比海盗5：死无对证</a>
						<a href="javascript:;" data-param="cinemaId=9462&amp;activityId=&amp;fCode=&amp;showId=207522&amp;showDate=2017-05-30&amp;ts=1496139392951&amp;n_s=new">摔跤吧！爸爸</a>
						<a href="javascript:;" data-param="cinemaId=9462&amp;activityId=&amp;fCode=&amp;showId=214563&amp;showDate=2017-05-30&amp;ts=1496139392951&amp;n_s=new">哆啦A梦：大雄的南极冰冰凉大冒险</a>
						<a href="javascript:;" data-param="cinemaId=9462&amp;activityId=&amp;fCode=&amp;showId=151509&amp;showDate=2017-05-30&amp;ts=1496139392951&amp;n_s=new">神奇女侠</a>
						<a href="javascript:;" data-param="cinemaId=9462&amp;activityId=&amp;fCode=&amp;showId=207763&amp;showDate=2017-05-30&amp;ts=1496139392951&amp;n_s=new">异星觉醒</a>
					</div>
				</li>
				<li>
					<label>选择时间</label>
					<div class="select-tags">
						<a class="current" data-param="cinemaId=9462&amp;activityId=&amp;fCode=&amp;showId=161044&amp;showDate=2017-05-30&amp;ts=1496139392951&amp;n_s=new" href="javascript:;">5月30日（今天）</a>
						<a data-param="cinemaId=9462&amp;activityId=&amp;fCode=&amp;showId=161044&amp;showDate=2017-05-31&amp;ts=1496139392951&amp;n_s=new" href="javascript:;">5月31日（周三）</a>
					</div>
				</li>
			</ul>
		</div>
	<!-- movie bar -->
		 	<div class="movie-wrapper M-movie">
			<img class="movie-post" src="TB1QXSmQVXXXXcDXXXXXXXXXXXX_.jpg_160x160.jpg" width="120" height="160">
			<div class="movie-info-wrap">
				<h4 class="info-title">
					<a href="http://dianying.taobao.com/showDetail.htm?showId=161044&amp;n_s=new" class="movie-name">加勒比海盗5：死无对证<small class="score">8.9</small></a><!--small class='mark'>关注度：40000000</small--></h4>
					<div class="right-info">
						<a class="detail" href="http://dianying.taobao.com/showDetail.htm?showId=161044&amp;n_s=new">查看影片详情&nbsp;&gt;</a>
					</div>
				<div class="movie-info">
					<ul>
						<li>看点：杰克船长回归，延续海盗生涯</li>						<li>导演：乔阿吉姆·罗恩尼, 艾斯彭·山德伯格</li>						<li>主演：约翰尼·德普,哈维尔·巴登,布兰顿·思怀兹,卡雅·斯考达里奥</li>						<li>类型：动作 冒险 喜剧</li>						<li>制片国家/地区：美国 澳大利亚</li>						<li>语言：英语</li>					</ul>
				</div>
			</div>
		</div>
			<!-- Hall Tabel-->
		<div class="center-wrap">
				<table class="hall-table">
			<thead>
				<tr>
				    <th class="hall-time">放映时间</th>
				    <th class="hall-type">语言版本</th>
				    <th class="hall-name">放映厅</th>
				    <th class="hall-flow">座位情况</th>
				    <th class="hall-price">现价/影院价（元）</th>
				    <th class="hall-buy">选座购票</th>
				</tr>
			</thead>
			<tbody>				
				<tr>
					<td class="hall-time">
						<em class="bold">18:40</em>
						 预计20:49散场 					
					</td>
					<td class="hall-type">
						3D 原版
					</td>
					<td class="hall-name">
						LD2厅 杜比全景声
					</td>
										
					<td class="hall-flow">
						<div class="flowing-wrap flowing-loose">
							<label> 宽松  </label>
							<span class="flowing-vol"><i style="width: 0%;"></i></span>
							<span class="flowing-view J_flowingView" data-scheduleid="403772016">
								<i class="icon-zoom"></i>
								<div class="view-wrap" style="display: none;">
									<div class="view-box">加载中...</div>
								</div>
							</span>
						</div>
					</td>
					<td class="hall-price" data-partcode="lumiaivista">
						<em class="now">89.00</em>
						<del class="old">89.00</del>
					</td>
					<td class="hall-seat">
						<a class="seat-btn" href="http://dianying.taobao.com/seatOrder.htm?scheduleId=403772016&amp;n_s=new">选座购票</a>
					</td>
				</tr>
									
				  <tr class="even">
					<td class="hall-time">
						<em class="bold">19:30</em>
						 预计21:39散场 					
					</td>
					<td class="hall-type">
						3D 原版
					</td>
					<td class="hall-name">
						LD3厅 杜比全景声
					</td>
										
					<td class="hall-flow">
						<div class="flowing-wrap flowing-loose">
							<label> 宽松  </label>
							<span class="flowing-vol"><i style="width: 0%;"></i></span>
							<span class="flowing-view J_flowingView" data-scheduleid="402343547">
								<i class="icon-zoom"></i>
    								<div class="view-wrap" style="display: none;">
    									<div class="view-box">加载中...</div>
    								</div>
															</span>
						</div>
					</td>
										<td class="hall-price" data-partcode="lumiaivista">
						<em class="now">89.00</em>
						<del class="old">89.00</del>
											</td>
					<td class="hall-seat">
													<a class="seat-btn" href="http://dianying.taobao.com/seatOrder.htm?scheduleId=402343547&amp;n_s=new">选座购票</a>
											</td>
				</tr>
									
				  
									
				  
									
				  
									
				  
									
				  
							</tbody>	
		</table>
			</div>
</div></div>
</div>
@endsection
