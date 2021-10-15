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
                <li class="zh"><a href="?cid=102&bid=1&t=1">综合查询</a></li>
                <li class="sp"><a href="?cid=102&bid=2&t=1">实盘查询</a></li>
                <li class="zx"><a href="?cid=102&bid=3&t=1">最新实盘</a></li>
                <li class="hb"><a href="?cid=102&bid=4&t=1" class="on">黑榜</a></li>
            </ul>
        </div>
        <div class="info-box">
            <div class="info-box-list clearfix">
                <a href="?cid=102&bid=4&t=1">全部</a>
                <a href="?cid=102&bid=4&t=2">黑平台</a>
                <a href="?cid=102&bid=4&t=3" class="on">客诉集中</a>
                <a href="?cid=102&bid=4&t=4">提现困难</a>
                <a href="?cid=102&bid=4&t=5">超限经营</a>
                <a href="?cid=102&bid=4&t=6">暂无监管</a>
                <a href="?cid=102&bid=4&t=7">监管过期</a>
                <a href="?cid=102&bid=4&t=8">已潜逃</a>
            </div>
            <div class="allocation-black-bd">
                <dl>
                    <dt class="clearfix">
                        <p>#</p>
                        <p>平台名称</p>
                        <p>入榜原因</p>
                        <p>地区</p>
                        <p>最大杠杆</p>
                        <p>按天费用</p>
                        <p>按月费用</p>
                    </dt>
                    <dd class="clearfix p1">
                        <a href="144401.html" class="clearfix" target="_blank">
                            <div>1</div>
                            <div class="second">
                                <img src="static/images/tcc_pt_normal.png" class="pic">
                                <div class="rig">
                                    <h2>中岩投资</h2>
                                    <span>2018-11年 中国</span>
                                </div>
                            </div>
                            <div>客诉集中</div>
                            <div>上海市 浦东新区</div>
                            <div>--</div>
                            <div>--</div>
                            <div>1.5%</div>
                        </a>
                    </dd>
                    <dd class="clearfix p1">
                        <a href="1095701.html" class="clearfix" target="_blank">
                            <div>2</div>
                            <div class="second">
                                <img src="static/images/tcc_pt_normal.png" class="pic">
                                <div class="rig">
                                    <h2>中国外盘期货配资网</h2>
                                    <span>2018-02年 中国</span>
                                </div>
                            </div>
                            <div>客诉集中</div>
                            <div>上海市 浦东新区</div>
                            <div>--</div>
                            <div>--</div>
                            <div>--</div>
                        </a>
                    </dd>
                    <dd class="clearfix p1">
                        <a href="1095801.html" class="clearfix" target="_blank">
                            <div>3</div>
                            <div class="second">
                                <img src="static/images/tcc_pt_normal.png" class="pic">
                                <div class="rig">
                                    <h2>上海期货配资网</h2>
                                    <span>2018-02年 中国</span>
                                </div>
                            </div>
                            <div>客诉集中</div>
                            <div>上海市 浦东新区</div>
                            <div>--</div>
                            <div>--</div>
                            <div>--</div>
                        </a>
                    </dd>
                    <dd class="clearfix p1">
                        <a href="1095901.html" class="clearfix" target="_blank">
                            <div>4</div>
                            <div class="second">
                                <img src="static/images/tcc_pt_normal.png" class="pic">
                                <div class="rig">
                                    <h2>中国金融期货配资网</h2>
                                    <span>2018-02年 中国</span>
                                </div>
                            </div>
                            <div>客诉集中</div>
                            <div>上海市 浦东新区</div>
                            <div>--</div>
                            <div>--</div>
                            <div>--</div>
                        </a>
                    </dd>
                </dl>
            </div>
            <div class="page">
                <span><a href='javascript:void(0);'>首页</a><a href='javascript:void(0);'>上一页</a><a href='info.html?cid=102&bid=4&t=3&page=1' class='current'>1</a><a href='javascript:void(0);'>下一页</a><a href='javascript:void(0);'>尾页</a></span>
                <form class="page-form" method="get">第<input class="d" type="text" value="" name="page" required="required" />页<input type="hidden" value="102" name="cid" /><input type="hidden" value="4" name="bid" /><input type="hidden" value="3" name="t" /><input class="sbt" type="submit" value="立即跳转"></form>
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