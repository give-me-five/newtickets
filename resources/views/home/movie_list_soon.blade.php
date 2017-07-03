@extends('home.base')
  @section('content')
<div class="subnav">
    <ul class="navbar">
      <li>
        <a data-act="subnav-click" data-val="{subnavClick:1}" data-state-val="{subnavId:1}"  href="/films">正在热映</a>
      </li>
      <li>
        <a data-act="subnav-click" data-val="{subnavClick:2}" class="active" href="/films/Type/2">即将上映</a>
      </li>
    </ul>
</div>
<div class="container" id="app">
    <div class="movies-channel">
        <div class="tags-panel">
          <ul class="tags-lines">
            <li class="tags-line" data-val="{tagTypeName:'cat'}">
              <div class="tags-title">类型 :</div>
              <ul class="tags">
                  <li class="active" data-state-val="{ catTagName:'全部'}">
                    <a data-act="tag-click" data-val="{TagName:'全部'}" href="javascript:void(0);" style="cursor: default;">全部</a>
                  </li>
                  <li>
                    <a data-act="tag-click" data-val="{TagName:'爱情'}" href="">爱情</a>
                  </li><li>
                    <a data-act="tag-click" data-val="{TagName:'喜剧'}" href="">喜剧</a>
                  </li><li>
                    <a data-act="tag-click" data-val="{TagName:'动画'}" href="">动画</a>
                  </li><li>
                    <a data-act="tag-click" data-val="{TagName:'剧情'}" href="">剧情</a>
                  </li>
              </ul>
            </li>
            <li class="tags-line tags-line-border" data-val="{tagTypeName:'source'}">
              <div class="tags-title">区域 :</div>
              <ul class="tags">
                  <li class="active" data-state-val="{ sourceTagName:'全部'}">
                    <a data-act="tag-click" data-val="{TagName:'全部'}" href="javascript:void(0);" style="cursor: default;">全部</a>
                  </li>
                  <li>
                    <a data-act="tag-click" data-val="{TagName:'大陆'}" href="">大陆</a>
                  </li><li>
                    <a data-act="tag-click" data-val="{TagName:'美国'}" href="">美国</a>
                  </li><li>
                    <a data-act="tag-click" data-val="{TagName:'韩国'}" href="">韩国</a>
                  </li>
              </ul>
            </li>
            <li class="tags-line tags-line-border" data-val="{tagTypeName:'year'}">
              <div class="tags-title">年代 :</div>
              <ul class="tags">
                  <li class="active" data-state-val="{ yearTagName:'全部'}">
                    <a data-act="tag-click" data-val="{TagName:'全部'}" href="javascript:void(0);" style="cursor: default;">全部</a>
                  </li>
                  <li>
                    <a data-act="tag-click" data-val="{TagName:'2017以后'}" href="http://maoyan.com/films?showType=1&amp;yearId=13">2017以后</a>
                  </li><li>
                    <a data-act="tag-click" data-val="{TagName:'2017'}" href="http://maoyan.com/films?showType=1&amp;yearId=12">2017</a>
                  </li><li>
                    <a data-act="tag-click" data-val="{TagName:'2016'}" href="http://maoyan.com/films?showType=1&amp;yearId=11">2016</a>
                  </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="movies-panel">
            <div class="movies-sorter">
              <div class="cat-sorter">
                  <ul>
                      <li>
                        <span class="sort-control-group" data-act="sort-click" data-val="{tagId: 1 }" style="cursor: default;">
                          <span class="sort-control sort-radio sort-radio-checked"></span>
                          <span class="sort-control-label">按热门排序</span>
                        </span>
                      </li>
                      <li>
                        <span class="sort-control-group" data-act="sort-click" data-val="{tagId: 2 }" data-href="?showType=1&amp;sortId=2" onclick="location.href=this.getAttribute('data-href')">
                          <span class="sort-control sort-radio"></span>
                          <span class="sort-control-label">按时间排序</span>
                        </span>
                      </li>
                      <li>
                        <span class="sort-control-group" data-act="sort-click" data-val="{tagId: 3 }" data-href="?showType=1&amp;sortId=3" onclick="location.href=this.getAttribute('data-href')">
                          <span class="sort-control sort-radio"></span>
                          <span class="sort-control-label">按评价排序</span>
                        </span>
                      </li>
                  </ul>
              </div>
              
            </div>
            <div class="movies-list">
              <dl class="movie-list">
              @foreach ($soonflist as $flist)
                <dd>
                  <div class="movie-item">
                    <a href="/films/{{ $flist->id }}" target="_blank" data-act="movie-click">
                      <div class="movie-poster">
                        <!-- <img class="poster-default" src="loading_2.e3d934bf.png"> -->
                        <img src="/uploads/{{$flist->picname}}">
                      </div>
                    </a>
                    <div class="channel-action channel-action-pre">
                      <a>预售</a>
                    </div>
                    <div class="movie-ver"><i class="imax3d"></i></div>
                  </div>
                  <div class="channel-detail movie-item-title" title="{{ $flist->title }}">
                      <a href="/film/{{ $flist->id }}" target="_blank" data-act="movies-click">{{ $flist->title }}</a>
                  </div>
                  <div class="channel-detail channel-detail-orange"><i class="integer">{{ $flist->score }}</i></div>
                </dd>
              @endforeach
              </dl>
            </div>
            <div class="movies-pager">
                <ul class="list-pager">
                    {!! $soonflist->render() !!}
                </ul>
            </div>
        </div>
    </div>
</div>
  @endsection
