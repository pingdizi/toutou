@extends('layouts.app')

@section('content')
<div class="container">
    <div class="g-in clearfix">
        <div class="title">
            <h1>配资平台分类查询</h1>
            <p>1838+平台、实时一览</p>
        </div>
        <div class="apply"><a href="login.html"><span>申请收录</span></a></div>
        <div class="info-menu">
            <ul class="clearfix">
                <li class="zh"><a href="?cid=102&bid=1&t=1" class="on">综合查询</a></li>
                <li class="sp"><a href="?cid=102&bid=2&t=1">实盘查询</a></li>
                <li class="zx"><a href="?cid=102&bid=3&t=1">最新实盘</a></li>
                <li class="hb"><a href="?cid=102&bid=4&t=1">黑榜</a></li>
            </ul>
        </div>
        <div class="info-box">
            <div class="info-box-list clearfix">
                <a href="?cid=102&bid=1&t=1">综合</a>
                <a href="?cid=102&bid=1&t=2" class="on">品牌平台</a>
            </div>
            <div class="allocation-bd">
                <dl>
                    <dt class="clearfix">
                        <p>#</p>
                        <p>平台名称</p>
                        <p>国家</p>
                        <p>平台性质</p>
                        <p>地区</p>
                        <p>最大杠杆</p>
                        <p>按天费用</p>
                        <p>按月费用</p>
                        <p>官网</p>
                    </dt>
                    <dd class="clearfix">
                        <a href="" class="dd-a clearfix" target="_blank">
                            <div class="first">1</div>
                            <div class="second">
                                <img src="https://www.touchacha.cn/upload/2021-09/163046002352048700.jpg" class="pic">
                                <div class="rig">
                                    <h2>金阳光</h2>
                                    <span>2021年</span>
                                </div>
                            </div>
                            <div class="clearfix"><img src="https://online.seterra.com/images/system/flags/china.png" width="22" height="14" style="float:left;margin:28px 4px 0 0;border-radius:2px;">
                                <p style="font-size:14px;line-height:70px;float:left;">中国</p>
                            </div>
                            <div>实盘平台</div>
                            <div>北京市 东城区</div>
                            <div>10倍</div>
                            <div>0.1%</div>
                            <div>1%</div>
                        </a>
                        <div class="last">
                            <a href="https://jyg.barrattlondon.com.cn/" class="website" target="_blank"></a>
                        </div>
                    </dd>
                    <dd class="clearfix">
                        <a href="2376501.html" class="dd-a clearfix" target="_blank">
                            <div class="first">2</div>
                            <div class="second">
                                <img src="https://www.touchacha.cn/upload/2021-01/161190920391703400.png" class="pic">
                                <div class="rig">
                                    <h2>公富网</h2>
                                    <span>2021年</span>
                                </div>                        
                            </div>
                            <div class="clearfix"><img src="https://www.touchacha.cn/upload/2019-10/157190313520491200.png" width="22" height="14" style="float:left;margin:28px 4px 0 0;border-radius:2px;">
                                <p style="font-size:14px;line-height:70px;float:left;">中国</p>
                            </div>
                            <div>实盘平台</div>
                            <div>广东省 中山市</div>
                            <div>10倍</div>
                            <div>--</div>
                            <div>1.71%</div>
                        </a>
                        <div class="last">
                            <a href="http://gfwang.gongfuwang118.com/" class="website" target="_blank"></a>
                        </div>
                    </dd>

                </dl>
            </div>
            <div class="page">
                <span><a href='javascript:void(0);'>首页</a><a href='javascript:void(0);'>上一页</a><a href='info.html?cid=102&bid=1&t=2&page=1' class='current'>1</a><a href='javascript:void(0);'>下一页</a><a href='javascript:void(0);'>尾页</a></span>
                <form class="page-form" method="get">第<input class="d" type="text" value="" name="page" required="required" />页<input type="hidden" value="102" name="cid" /><input type="hidden" value="1" name="bid" /><input type="hidden" value="2" name="t" /><input class="sbt" type="submit" value="立即跳转"></form>
            </div>
            <div class="risk">风险提示：根据证监会有关《关于整理整理违法从事证券事务活动的定见》，规定场外配资合同，均不具备法律效应。提高意识，谨防损失！</div>
        </div>
    </div>
</div>
@endsection

@section('styles')
    <style type="text/css">
    #nb_icon_wrap {
        display: none !important;
    }
    </style>
    <div class="cue-tone"></div>
    <script>
    $('.h-bot li').hover(function() { $(this).find('dl').show(); }, function() { $(this).find('dl').hide(); });
    $('.h-bot li').hover(function() { $(this).find('.rank-menu').show(); }, function() { $(this).find('.rank-menu').hide(); });
    jQuery(".h-bot .rank-menu").slide({ mainCell: ".bd", titCell: ".hd a", vis: 1, scroll: 1, effect: "fade" });
    </script>
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/info.css') }}">
@endsection