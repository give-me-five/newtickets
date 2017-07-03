@extends('home.base')
  @section('content')

  <div class="subnav">
    <ul class="navbar">
      <li>
        <a data-act="subnav-click" data-val="{subnavClick:1}" data-state-val="{subnavId:1}" class="active" href="javascript:void(0);">热点首页</a>
      </li>
      <li>
        <a data-act="subnav-click" data-val="{subnavClick:2}" href="http://maoyan.com/news?showTab=2">新闻资讯</a>
      </li>
      <li>
        <a data-act="subnav-click" data-val="{subnavClick:3}" href="http://maoyan.com/news?showTab=3">预告片</a>
      </li>
      <li>
        <a data-act="subnav-click" data-val="{subnavClick:4}" href="http://maoyan.com/news?showTab=4">精彩图集</a>
      </li>
    </ul>
  </div>
    <div class="container" id="app">
      <div class="hotIndex-container">
    <div class="index-news-container clearfix">
        <div class="popular-container">
    <h4 class="red">热门资讯</h4>
      <ul>
          <li class="top1-list">
            <div>
                <div class="top-info-thumb">
                  <a href="http://maoyan.com/films/news/21707" target="_blank" data-act="news-click" data-val="{newsid:21707}">
                    <img src="6a78a652250bec197025f5f29fc0eed9249573.jpg@120w_72h_1e_1c" alt="">
                    <i class="ranking top-info-icon red-bg">1</i>
                  </a>
                </div>
                <p class="top1-news-content">
                  <a href="http://maoyan.com/films/news/21707" class="two-line" title="历任《变形金刚》女主都在这里了，还是前两部的梅根·福克斯最美" target="_blank" data-act="news-click" data-val="{newsid:21707}">
                    历任《变形金刚》女主都在这里了，还是前两部的梅根·福克斯最美
                  </a>
                </p>
            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking red">2</i>
                  <p class="top10-news-content">
                    <a href="http://maoyan.com/films/news/21721" target="_blank" data-act="news-click" data-val="{newsid:21721}">《变形金刚5》内地预售票房破亿，首周末排片占比超90%</a>
                  </p>
                </div>            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking red">3</i>
                  <p class="top10-news-content">
                    <a href="http://maoyan.com/films/news/21761" target="_blank" data-act="news-click" data-val="{newsid:21761}">《重返·狼群》票房突破2000万，观众评分9.3为2017国产片最高</a>
                  </p>
                </div>            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking ">4</i>
                  <p class="top10-news-content">
                    <a href="http://maoyan.com/films/news/21722" target="_blank" data-act="news-click" data-val="{newsid:21722}">华纳拍《神奇女侠》前就给盖尔·加朵涨薪一倍，吃瓜群众先稳住</a>
                  </p>
                </div>            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking ">5</i>
                  <p class="top10-news-content">
                    <a href="http://maoyan.com/films/news/21764" target="_blank" data-act="news-click" data-val="{newsid:21764}">阿什顿·库彻身价1.6亿美元，投资眼光奇好，连优步都没放过</a>
                  </p>
                </div>            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking ">6</i>
                  <p class="top10-news-content">
                    <a href="http://maoyan.com/films/news/21755" target="_blank" data-act="news-click" data-val="{newsid:21755}">全国粉丝给周星驰的情书：星爷55岁生日快乐</a>
                  </p>
                </div>            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking ">7</i>
                  <p class="top10-news-content">
                    <a href="http://maoyan.com/films/news/21725" target="_blank" data-act="news-click" data-val="{newsid:21725}">不能生就代孕，卡戴珊&amp;侃爷为要三胎真的拼了</a>
                  </p>
                </div>            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking ">8</i>
                  <p class="top10-news-content">
                    <a href="http://maoyan.com/films/news/21771" target="_blank" data-act="news-click" data-val="{newsid:21771}">吴奇隆在北大求学准备转做幕后，暂时不打算跟刘诗诗合体拍戏</a>
                  </p>
                </div>            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking ">9</i>
                  <p class="top10-news-content">
                    <a href="http://maoyan.com/films/news/21711" target="_blank" data-act="news-click" data-val="{newsid:21711}">盖尔·加朵拍《神奇女侠》的片酬只有30万美元，内地演员笑了</a>
                  </p>
                </div>            </div>
          </li>
          <li class="">
            <div>
                <div class="normal-link">
                  <i class="ranking ">10</i>
                  <p class="top10-news-content">
                    <a href="http://maoyan.com/films/news/21758" target="_blank" data-act="news-click" data-val="{newsid:21758}">《欢乐合唱团》里的美少女剪了短发之后，名字也换成男人的</a>
                  </p>
                </div>            </div>
          </li>
      </ul>
  </div>

        <div class="latest-container">
      <h4 class="latest-header red">
    最新资讯
    <a href="http://maoyan.com/news?showTab=2" class="all-latest" data-act="all-news-click">
      全部
      <span class="arrow red-arrow"></span>
    </a>
  </h4>


    <div class="latest-content clearfix">
          <div class="latest-news-box">
            <a href="http://maoyan.com/films/news/21796" target="_blank" data-act="news-click" data-val="{newsid:21796}">
              <img src="c09ed7020f29f9e1aab01715bb060253933888.jpg@230w_129h_1e_1c" alt="">
            </a>
            <p class="latest-news-title">
              <a href="http://maoyan.com/films/news/21796" class="two-line" title="警匪片《缉枪》启用真实特警协助拍摄，片场玩起真枪实弹" target="_blank" data-act="news-click" data-val="{newsid:21796}">
                警匪片《缉枪》启用真实特警协助拍摄，片场玩起真枪实弹
              </a>
            </p>
            <div class="info-container">
              <span>猫眼电影</span>
              <span class="images-view-count view-count">150</span>
            </div>
          </div>
          <div class="latest-news-box">
            <a href="http://maoyan.com/films/news/21795" target="_blank" data-act="news-click" data-val="{newsid:21795}">
              <img src="992ceb14b3907a2929913c0c6e160a98214593.jpg@230w_129h_1e_1c" alt="">
            </a>
            <p class="latest-news-title">
              <a href="http://maoyan.com/films/news/21795" class="two-line" title="冯小刚新作《芳华》力捧新人，新冯女郎大秀“芳华腿”" target="_blank" data-act="news-click" data-val="{newsid:21795}">
                冯小刚新作《芳华》力捧新人，新冯女郎大秀“芳华腿”
              </a>
            </p>
            <div class="info-container">
              <span>猫眼电影</span>
              <span class="images-view-count view-count">5808</span>
            </div>
          </div>
          <div class="latest-news-box">
            <a href="http://maoyan.com/films/news/21794" target="_blank" data-act="news-click" data-val="{newsid:21794}">
              <img src="94d544d9fff4f83ecbe611f47f1e6a971218560.jpg@230w_129h_1e_1c" alt="">
            </a>
            <p class="latest-news-title">
              <a href="http://maoyan.com/films/news/21794" class="two-line" title="《极盗车神》伦敦首映，“宝宝”车神领衔暑期档大片激爽今夏" target="_blank" data-act="news-click" data-val="{newsid:21794}">
                《极盗车神》伦敦首映，“宝宝”车神领衔暑期档大片激爽今夏
              </a>
            </p>
            <div class="info-container">
              <span>猫眼电影</span>
              <span class="images-view-count view-count">5720</span>
            </div>
          </div>
          <div class="latest-news-box">
            <a href="http://maoyan.com/films/news/21793" target="_blank" data-act="news-click" data-val="{newsid:21793}">
              <img src="34c48e95bcbd5b0b65a4be5fb360617864225.jpg@230w_129h_1e_1c" alt="">
            </a>
            <p class="latest-news-title">
              <a href="http://maoyan.com/films/news/21793" class="two-line" title="王俊凯高考438分超过二本线！粉丝：2个月考出三年的成绩！" target="_blank" data-act="news-click" data-val="{newsid:21793}">
                王俊凯高考438分超过二本线！粉丝：2个月考出三年的成绩！
              </a>
            </p>
            <div class="info-container">
              <span>猫眼电影</span>
              <span class="images-view-count view-count">35245</span>
            </div>
          </div>
          <div class="latest-news-box">
            <a href="http://maoyan.com/films/news/21791" target="_blank" data-act="news-click" data-val="{newsid:21791}">
              <img src="5614a254d503b2e30ea82c0736db6f9c254815.jpg@230w_129h_1e_1c" alt="">
            </a>
            <p class="latest-news-title">
              <a href="http://maoyan.com/films/news/21791" class="two-line" title="刘若英也要做导演：我从来就不是一个偶像" target="_blank" data-act="news-click" data-val="{newsid:21791}">
                刘若英也要做导演：我从来就不是一个偶像
              </a>
            </p>
            <div class="info-container">
              <span>猫眼电影</span>
              <span class="images-view-count view-count">6508</span>
            </div>
          </div>
          <div class="latest-news-box">
            <a href="http://maoyan.com/films/news/21790" target="_blank" data-act="news-click" data-val="{newsid:21790}">
              <img src="4748721dc8010b33e0a283ab3e86a33f82328.jpg@230w_129h_1e_1c" alt="">
            </a>
            <p class="latest-news-title">
              <a href="http://maoyan.com/films/news/21790" class="two-line" title="张静初坐卧铺赶工作，火车上敷面膜吃零食，网友：周黑鸭亮了！" target="_blank" data-act="news-click" data-val="{newsid:21790}">
                张静初坐卧铺赶工作，火车上敷面膜吃零食，网友：周黑鸭亮了！
              </a>
            </p>
            <div class="info-container">
              <span>猫眼电影</span>
              <span class="images-view-count view-count">8208</span>
            </div>
          </div>
    </div>
  </div>

    </div>
    <div class="index-videos-container clearfix">
        <div class="popular-container">
            <h4 class="blue">热门预告片</h4>
            <ul>
                <li class="top-list">
                  <div>
                    <div class="top-info-thumb">
                      <a href="http://imovie.ewang.com/films/248645/preview?videoId=86120" target="_blank" data-act="video-click" data-val="{videoId:86120}">
                        <img src="1ef1ef629187cdeb4d2c57be2aaa90c833783.jpg@120w_68h_1e_1c" alt="">
                        <i class="ranking top-info-icon orange-bg">1</i>
                        <i class="play-icon"></i>
                      </a>
                    </div>
                    <div class="top5-video-info">
                      <p class="one-line">
                        <a href="http://imovie.ewang.com/films/248645/preview?videoId=86120" target="_blank" data-act="video-click" data-val="{videoId:86120}">
                          《变形金刚5：最后的骑士》汽车人VS霸天虎角色版预告片
                        </a>
                      </p>
                      <div class="video-view">
                        <span class="video-play-count">136.1万</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="top-list">
                  <div>
                    <div class="top-info-thumb">
                      <a href="http://imovie.ewang.com/films/248645/preview?videoId=85955" target="_blank" data-act="video-click" data-val="{videoId:85955}">
                        <img src="b16d92cc1adb35d1d6ce662ca7078cad35873.jpg@120w_68h_1e_1c" alt="">
                        <i class="ranking top-info-icon orange-bg">2</i>
                        <i class="play-icon"></i>
                      </a>
                    </div>
                    <div class="top5-video-info">
                      <p class="one-line">
                        <a href="http://imovie.ewang.com/films/248645/preview?videoId=85955" target="_blank" data-act="video-click" data-val="{videoId:85955}">
                          《变形金刚5：最后的骑士》中国独家预告片
                        </a>
                      </p>
                      <div class="video-view">
                        <span class="video-play-count">172万</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="top-list">
                  <div>
                    <div class="top-info-thumb">
                      <a href="http://imovie.ewang.com/films/257722/preview?videoId=86136" target="_blank" data-act="video-click" data-val="{videoId:86136}">
                        <img src="47beddf9da15ecd9c05a7a8311137cb327793.jpg@120w_68h_1e_1c" alt="">
                        <i class="ranking top-info-icon orange-bg">3</i>
                        <i class="play-icon"></i>
                      </a>
                    </div>
                    <div class="top5-video-info">
                      <p class="one-line">
                        <a href="http://imovie.ewang.com/films/257722/preview?videoId=86136" target="_blank" data-act="video-click" data-val="{videoId:86136}">
                          《雄狮》提档6月22日终极版预告片 海报双发提前开启感动之旅
                        </a>
                      </p>
                      <div class="video-view">
                        <span class="video-play-count">23.9万</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="top-list">
                  <div>
                    <div class="top-info-thumb">
                      <a href="http://imovie.ewang.com/films/341565/preview?videoId=86037" target="_blank" data-act="video-click" data-val="{videoId:86037}">
                        <img src="b3e634f402fc54fab1076c18d92805ea17086.jpg@120w_68h_1e_1c" alt="">
                        <i class="ranking top-info-icon grey-bg">4</i>
                        <i class="play-icon"></i>
                      </a>
                    </div>
                    <div class="top5-video-info">
                      <p class="one-line">
                        <a href="http://imovie.ewang.com/films/341565/preview?videoId=86037" target="_blank" data-act="video-click" data-val="{videoId:86037}">
                          《我不做大哥好多年》终极版预告片
                        </a>
                      </p>
                      <div class="video-view">
                        <span class="video-play-count">20.6万</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="top-list">
                  <div>
                    <div class="top-info-thumb">
                      <a href="http://imovie.ewang.com/films/78888/preview?videoId=86079" target="_blank" data-act="video-click" data-val="{videoId:86079}">
                        <img src="140265dbbf1d6de397551aaf724e32fc17692.jpg@120w_68h_1e_1c" alt="">
                        <i class="ranking top-info-icon grey-bg">5</i>
                        <i class="play-icon"></i>
                      </a>
                    </div>
                    <div class="top5-video-info">
                      <p class="one-line">
                        <a href="http://imovie.ewang.com/films/78888/preview?videoId=86079" target="_blank" data-act="video-click" data-val="{videoId:86079}">
                          《异形：契约》法鲨感谢国内影迷
                        </a>
                      </p>
                      <div class="video-view">
                        <span class="video-play-count">56.8万</span>
                      </div>
                    </div>
                  </div>
                </li>
            </ul>
        </div>
    </div>
   
  </div>

    </div>
@endsection
