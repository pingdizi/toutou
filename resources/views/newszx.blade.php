@extends('layouts.app')

@section('content')
<div class="news-box">
    <div class="news-bg">
        <div class="news-loc"><a href="newszx.html">观查家</a> &gt; 精选</div>
        <div class="news-tit">
            <h2>观查家</h2>
            <p>紧跟行业热点，提供新鲜行业资讯</p>
        </div>
        <div class="fb">
            <a href="login.html"><span>发布新闻</span></a>
        </div>
    </div>
    <div class="news-menu">
        <p>
            <a href="newszx.html" class='on'>精选<em></em></a>
            <a href="newszq.html">股市<em></em></a>
            <a href="newswh.html">外汇<em></em></a>
            <a href="newsqh.html">商品<em></em></a>
            <a href="newsjj.html">基金<em></em></a>
            <a href="newsss.html">商业<em></em></a>
            <a href="newsjx.html">交易商<em></em></a>
            <a href="newsmt.html">媒体<em></em></a>
        </p>
    </div>
    <div class="news-list">
        <div class="list-2" id="list">
            <ul class="clearfix">
                <li>
                    <div class="libox">
                        <h3><a href="c37806.html" target='_blank'>字节跳动再启音乐梦</a></h3>
                        <div class="date">30分钟前</div>
                        <div class="p">
                            <a href="c37806.html" target='_blank'>
                                <img src="https://www.touchacha.cn/upload/2021-09/163227769394864400.jpg" alt="字节跳动再启音乐梦">
                            </a>
                        </div>
                        <div class="ott">
                            <div class="img">
                                <a class="img-show" href="blog.html?id=4273&s=1" target="_blank">
                                    <img src="https://www.touchacha.cn/upload/2021-04/161967728194287700.jpg" width="22" height="22">
                                    <p>刘旷</p>
                                </a>
                                <div class="img-hide">
                                    <div class="img-hide-s">
                                        <div class="sleft">
                                            <img src="https://www.touchacha.cn/upload/2021-04/161967728194287700.jpg" width="62" height="62">
                                            <span class="s2">媒体</span>
                                        </div>
                                        <div class="smidd">
                                            <h3>刘旷</h3>
                                            <span>媒体官方账号</span>
                                        </div>
                                        <div class="gz"><a href="login.html">+关注</a></div>
                                    </div>
                                    <div class="img-hide-z">左手资本，右手人工智能</div>
                                    <div class="img-hide-x">
                                        <dl class="clearfix">
                                            <dt>
                                                <h4>150</h4><span>发布</span>
                                            </dt>
                                            <dt>
                                                <h4 class="fans">6</h4><span>粉丝</span>
                                            </dt>
                                            <dt>
                                                <h4>2</h4><span>获赞</span>
                                            </dt>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-wx"><img src="https://www.touchacha.cn/upload/2021-05/162216849853173000.jpg" width="110" height="110" alt="刘旷"></div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="libox">
                        <h3><a href="c37674.html" target='_blank'>激光电视，能拯救海信市值吗？</a></h3>
                        <div class="date">2天前</div>
                        <div class="p">
                            <a href="c37674.html" target='_blank'>
                                <img src="https://www.touchacha.cn/upload/2021-09/163204456503416500.jpg" alt="激光电视，能拯救海信市值吗？">
                            </a>
                        </div>
                        <div class="ott">
                            <div class="img">
                                <a class="img-show" href="blog.html?id=4850&s=1" target="_blank">
                                    <img src="https://www.touchacha.cn/upload/2021-09/163046847610332100.jpg" width="22" height="22">
                                    <p>互联网那些事</p>
                                </a>
                                <div class="img-hide">
                                    <div class="img-hide-s">
                                        <div class="sleft">
                                            <img src="https://www.touchacha.cn/upload/2021-09/163046847610332100.jpg" width="62" height="62">
                                            <span class="s2">媒体</span>
                                        </div>
                                        <div class="smidd">
                                            <h3>互联网那些事</h3>
                                            <span>媒体官方账号</span>
                                        </div>
                                        <div class="gz"><a href="login.html">+关注</a></div>
                                    </div>
                                    <div class="img-hide-z">深挖品牌故事，探寻商业逻辑</div>
                                    <div class="img-hide-x">
                                        <dl class="clearfix">
                                            <dt>
                                                <h4>30</h4><span>发布</span>
                                            </dt>
                                            <dt>
                                                <h4 class="fans">4</h4><span>粉丝</span>
                                            </dt>
                                            <dt>
                                                <h4>1</h4><span>获赞</span>
                                            </dt>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-wx"><img src="https://www.touchacha.cn/upload/2021-09/163047160545000800.png" width="110" height="110" alt="互联网那些事"></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="loadmore" page="0">
            <p>加载更多</p>
        </div>
        <script>
        $(".loadmore").click(function() {
            var page = parseInt($(this).attr("page"));
            $(this).attr("page", page + 1);
            $.ajax({ type: "POST", url: "modules/ajax/news/?", data: "page=" + page + "&id=" + 121 + "&s=" + 1, cache: false, success: function(result) { if (result == "加载完毕") { $(".loadmore p").html('加载完毕'); } else { $("#list ul").append(result); } } });
            return false;
        });
        </script>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/news.css') }}">
@endsection