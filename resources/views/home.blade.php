@extends('layouts.app')

@section('content')
<div class="container">
    <div class="g-in">
        <div class="data">
            <div class="data-z">
                <h2>投查查数据全览</h2>
                <p>截止：2021年9月15日</p>
            </div>
            <div class="data-w clearfix">
                <div class="t">
                    <div class="number">102408</div>
                    <div class="h">已服务投资者</div>
                </div>
                <div class="x"><img src="static/images/date_views.png" width="154" height="59" alt="已服务投资者"></div>
            </div>
            <ul class="clearfix">
                <li>
                    <p>收录平台</p>
                    <h2>5506</h2>
                </li>
                <li>
                    <p>媒体</p>
                    <h2>76</h2>
                </li>
                <li>
                    <p>分析师</p>
                    <h2>162</h2>
                </li>
                <li>
                    <p>课程</p>
                    <h2>10</h2>
                </li>
            </ul>
            <div class="data-y"><a class="blue">入驻</a></div>
        </div>
        <div class="index-jg" id="jg">
            <!-- 行情 -->
        </div>
        <div class="index-hy" id="hy">
            <div class="index-jg-hd">
                <h2>观查家</h2>
                <ul class="clearfix">
                    <li id="121">精选<em></em></li>
                    <li id="121100">关注<em></em></li>
                    <li id="121102">股市<em></em></li>
                    <li id="121105">外汇<em></em></li>
                    <li id="121103">商品<em></em></li>
                    <li id="121104">基金<em></em></li>
                    <li id="121101">商业<em></em></li>
                    <li id="121106">交易商<em></em></li>
                </ul><a class="media" href="newsmt.html">媒体<em></em></a><a class="more" href="newszx.html">+ 更多</a>
            </div>
            <div class="index-hy-bd">
                <ul class="clearfix">
                    <li>
                        <div class="libox">
                            <h3><a href="c37284.html" target="_blank">外国持有的美国国债7月份创历史新高</a></h3>
                            <div class="date">34分钟前</div>
                            <div class="p">
                                <a href="c37284.html" target="_blank">
                                    <img src="static/upload/163184915358852000.jpg" alt="跑不出另一个完美日记，去哪复制下一个成功？">
                                </a>
                            </div>
                            <div class="ott">
                                <div class="img">
                                    <a class="img-show" href="blog.html?id=4720&amp;s=1" target="_blank">
                                        <img src="static/upload/163100940507503000.jpg" width="22" height="22">
                                        <p>财报喵</p>
                                    </a>
                                    <div class="img-hide">
                                        <div class="img-hide-s">
                                            <div class="sleft">
                                                <img src="static/upload/163100940507503000.jpg" width="62" height="62">
                                                <span class="s2">媒体</span>
                                            </div>
                                            <div class="smidd">
                                                <h3>财报喵</h3>
                                                <span>媒体官方账号</span>
                                            </div>
                                            <div class="gz tcc4720-2" uid="4720" lx="2">+关注</div>
                                        </div>
                                        <div class="img-hide-z">一个爱吃瓜打游戏的金融少女</div>
                                        <div class="img-hide-x">
                                            <dl class="clearfix">
                                                <dt>
                                                    <h4>41</h4>
                                                    <span>发布</span>
                                                </dt>
                                                <dt>
                                                    <h4 class="fans">6</h4>
                                                    <span>粉丝</span>
                                                </dt>
                                                <dt>
                                                    <h4>1</h4>
                                                    <span>获赞</span>
                                                </dt>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-wx">
                                    <img src="static/upload/162139722262370600.jpg" width="110" height="110" alt="财报喵">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="index-qa" id="qa">
            <!-- 答疑 -->
        </div>
        <script type="text/javascript">
        jQuery(".recommendBox").slide({ mainCell: ".bd", titCell: ".hd ul", vis: 1, scroll: 1, effect: "leftLoop", autoPlay: true, autoPage: true });
        $(".recommendBox .data-t li").click(function() {
            var _this = $(this);
            var uid = _this.parents('.dataM').attr('uid');
            var vstr = _this.text();
            // $.ajax({
            //     type: "POST",
            //     url: "modules/ajax/question/?",
            //     data: "uid=" + uid + "&vstr=" + vstr,
            //     cache: false,
            //     success: function(result) {
            //         var obj = $.parseJSON(result);
            //         _this.parents('.dataM').find(".fxs").text(obj.fxs);
            //         _this.parents('.dataM').find(".zql").text(obj.zql);
            //         _this.parents('.dataM').find(".data-t .h").text(vstr);
            //     }
            // });
        });
        $(".recommendBox .data-t .p").click(function() { $(this).find(".change-ul").stop().slideToggle(300); });
        $(".data-t").mouseleave(function() { $(".change-ul").slideUp(); });
        </script>
        <div class="index-ad">
            <img src="static/images/index_ad.jpeg" width="1400" height="120" alt="扫码关注">
        </div>
        <div class="index-fx clearfix" id="fx">
            <div class="index-fx-y">
                <h2>配置排行</h2>
                <div class="fx-main-box">
                    <div class="index-fx-hd clearfix" id="fx-gjs">
                        <div class="fx-menu clearfix"><a id="122102" d="0">昨日最佳<em></em></a><a id="122102" d="1">上周最佳<em></em></a><a id="122102" d="2">上月最佳<em></em></a></div>
                    </div>
                    <div class="index-fx-bd">
                        <div class="box">
                            <div class="fx-sel clearfix">
                                <select class="select-1">
                                    <option value="0">品种排行</option>
                                    <option value="1">黄金</option>
                                    <option value="2">白银</option>
                                </select>
                            </div>
                            <dl>
                                <dt class="clearfix">
                                    <p>#</p>
                                    <p>标题</p>
                                    <p>评分</p>
                                </dt>
                                    <dd class="clearfix">
                                    <div class="sortnum">1</div>
                                    <div class="second"><a href="c37080.html" class="clearfix" target="_blank"><img src="https://www.touchacha.cn/upload/2021-05/162242420274099000.jpg">万锦晟9.14黄金蓄势多空破位在即，黄金操作建议和布局</a></div>
                                    <div class="d4" id="37080">8.33<em class="openDetail"></em></div>
                                </dd>
                                    <dd class="clearfix">
                                    <div class="sortnum">2</div>
                                    <div class="second"><a href="c37143.html" class="clearfix" target="_blank"><img src="https://www.touchacha.cn/upload/2021-04/161942637090400200.jpg">李鸿彬：9.14美国CPI数据恐怖来袭！黄金会做何反应？</a></div>
                                    <div class="d4" id="37143">8.33<em class="openDetail"></em></div>
                                </dd>
                                    <dd class="clearfix">
                                    <div class="sortnum">3</div>
                                    <div class="second"><a href="c37160.html" class="clearfix" target="_blank"><img src="https://www.touchacha.cn/upload/2021-08/162884251063760700.jpg">金铭论市9/14伦敦金价格走势分析；期货白银晚间走势分析及美原油操作建议</a></div>
                                    <div class="d4" id="37160">8.33<em class="openDetail"></em></div>
                                </dd>
                                    <dd class="clearfix">
                                    <div class="sortnum">4</div>
                                    <div class="second"><a href="c37055.html" class="clearfix" target="_blank"><img src="https://www.touchacha.cn/upload/2021-04/161908136106237100.jpg">懿枫财经：黄金震荡蓄力向上，原油目标72！</a></div>
                                    <div class="d4" id="37055">8.33<em class="openDetail"></em></div>
                                </dd>
                            </dl>
                        </div>
                        <a href="" class="more-rank">查看更多</a>
                    </div>
                </div>
            </div>
            <div class="index-fx-y">
                <h2>证券排行</h2>
                <div class="fx-main-box">
                    <div class="index-fx-hd clearfix" id="fx-wh">
                        <div class="fx-menu clearfix"><a id="122101" d="1">上周最佳<em></em></a><a id="122101" d="2">上月最佳<em></em></a></div>
                    </div>
                    <div class="index-fx-bd">
                        <div class="box"></div>
                        <a href="ranking.html?cid=122101&v=0&d=1" class="more-rank">查看更多</a>
                    </div>
                </div>
            </div>
            <div class="index-fx-y">
                <h2>期货排行</h2>
                <div class="fx-main-box">
                    <div class="index-fx-hd clearfix" id="fx-ny">
                        <div class="fx-menu clearfix"><a id="122103" d="0">昨日最佳<em></em></a><a id="122103" d="1">上周最佳<em></em></a><a id="122103" d="2">上月最佳<em></em></a></div>
                    </div>
                    <div class="index-fx-bd">
                        <div class="box"></div>
                        <a href="ranking.html?cid=122103&v=0&d=0" class="more-rank">查看更多</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fixed-left">
    <ul class="clearfix">
        <!-- <li><a data-to="jg" class="on">行情</a></li> -->
        <li><a data-to="hy">观查家</a></li>
        <!-- <li><a data-to="qa">答疑</a></li> -->
        <!-- <li><a data-to="zj">观点</a></li> -->
        <li><a data-to="fx">排行</a></li>
    </ul>
</div>
</div>
<script type="text/javascript">
$(".index-hy .index-jg-hd li").click(function() {
    var xw = $(this);
    var id = xw.attr("id");
    xw.addClass("on").stop().siblings().removeClass("on");
    // $.ajax({ type: "POST", url: "modules/ajax/index_xw/?", data: "id=" + id, cache: false, success: function(result) { $(".index-hy-bd ul").html(result) } });
    return false;
}).eq(0).trigger("click");
$(document).on("click", ".data-y .blue", function() { return layer.open({ type: 2, title: !1, closeBtn: 1, area: ["792px", "500px"], shadeClose: !0, content: ["modules/gets/settlein/?", "no"] }), !1 }), $(document).on("click", ".index-hy .gz", function() {
    var n = $(this),
        a = n.attr("uid"),
        c = n.attr("lx"),
        t = n.text();
    return $.ajax({ type: "POST", url: "click_ajax.html", data: "id=" + a + "&txt=" + t + "&lx=" + c, cache: !1, success: function(t) { var e = parseInt(n.parents(".img-hide").find(".fans").text()); "0" == t ? n.text("失败") : "1" == t ? ($(".tcc" + a + "-" + c).removeClass("on").text("+关注"), $(".tcc" + a + "-" + c).parents(".img-hide").find(".fans").text(e - 1)) : "2" == t && ($(".tcc" + a + "-" + c).addClass("on").text("已关注"), $(".tcc" + a + "-" + c).parents(".img-hide").find(".fans").text(e + 1)) } }), !1
});
$("#fx-gjs a,#fx-wh a,#fx-ny a").click(function() {
    var id = $(this).attr("id");
    var d = $(this).attr("d");
    var _this = $(this);
    $(this).addClass("on").stop().siblings().removeClass("on");
    // $.ajax({ type: "POST", url: "modules/ajax/index_fx/?", data: "cid=" + id + "&v=0&d=" + d, cache: false, success: function(result) { _this.parents(".index-fx-hd").next(".index-fx-bd").find(".box").html(result); } });
});
$("#fx-gjs a").eq(0).trigger("click"), $("#fx-wh a").eq(0).trigger("click"), $("#fx-ny a").eq(0).trigger("click"), $(document).on("change", ".select-1", function() {
    var i = $(this),
        e = $(this).parents(".index-fx-bd").prev(".index-fx-hd").find(".fx-menu .on").attr("id"),
        t = $(this).parent(".fx-sel").find(".select-1 option:selected").val(),
        d = $(this).parents(".index-fx-bd").prev(".index-fx-hd").find(".fx-menu .on").attr("d");
    // $.ajax({ type: "POST", url: "modules/ajax/index_fx/?", data: "cid=" + e + "&v=" + t + "&d=" + d, cache: !1, success: function(e) { i.parents(".index-fx-bd").find(".box").html(e) } })
}), $(document).on("click", ".index-fx-y .d4", function() { var e = $(this).attr("id"); return layer.open({ type: 2, title: !1, closeBtn: 1, area: ["320px", "390px"], shadeClose: !0, content: ["modules/gets/score/?id=" + e, "no"] }), !1 }), $(".index-zj .index-jg-hd li").click(function() {
    var e = $(this),
        i = e.attr("id");
    // return e.addClass("on").stop().siblings().removeClass("on"), $.ajax({ type: "POST", url: "modules/ajax/index_zj/?", data: "id=" + i, cache: !1, success: function(e) { $(".index-zj-bd").html(e) } }), !1
}).eq(0).trigger("click");

var c1 = 278;
var c2 = 878;
var c3 = 1690;
var c4 = 2350;
var c5 = 3180;
$(document).scroll(function() {
    var scroH = $(document).scrollTop();
    if (scroH < 100) { $('.fixed-left').hide(); }
    if (scroH >= 128) {
        $('.fixed-left').fadeIn(400);
    }
    if (scroH >= c1 && scroH < c2) {
        $(".fixed-left li a").removeClass("on");
        $(".fixed-left li").eq(1).find('a').addClass("on");
    }
    if (scroH >= c2 && scroH < c3) {
        $(".fixed-left li a").removeClass("on");
        $(".fixed-left li").eq(2).find('a').addClass("on");
    }
    if (scroH >= c3 && scroH < c4) {
        $(".fixed-left li a").removeClass("on");
        $(".fixed-left li").eq(3).find('a').addClass("on");
    }
    if (scroH >= c4) {
        $(".fixed-left li a").removeClass("on");
        $(".fixed-left li").eq(4).find('a').addClass("on");
    }
})
$('.fixed-left li').on('click', 'a', function(e) {
    var target = e.target;
    var id = $(target).data("to");
    $('html,body').animate({ scrollTop: ($('#' + id).offset().top) - 156 }, 800);
});

$(".qa-hd-tit li").click(function() {
    var qa = $(this);
    var id = qa.attr("id");
    qa.addClass("on").stop().siblings().removeClass("on");
    // $.ajax({ type: "POST", url: "modules/ajax/index_qa/?", data: "id=" + id, cache: false, success: function(result) { $(".qa-list").html(result) } });
    return false;
}).eq(0).trigger("click");
</script>
@endsection