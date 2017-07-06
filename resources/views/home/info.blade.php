@extends('home.cinema_show')
 @section("info")
	<!-- movie bar -->
		 	<div class="movie-wrapper M-movie">
			<img class="movie-post" src="/uploads/{{$info->picname}}" width="120" height="160">
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
