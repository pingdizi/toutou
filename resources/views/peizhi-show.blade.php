@extends('layouts.app')

@section('content')
<script src="{{ asset('static/js/echarts@5.0.0/echarts.min.js') }}"></script>
<div class="container">
    <div class="location">
        <div class="bre"><a href="./">首页</a> &gt; 金阳光</div>
    </div>
    <div class="platform-top clearfix">
        <div class="pt-l">
            <div class="pt-pic"><a href="https://jyg.barrattlondon.com.cn/" target="_blank"><img src="https://www.touchacha.cn/upload/2021-08/162864900907894500.png" alt="金阳光"></a></div>
            <div class="pt-btn">
                <a class="btn-rank">排名 <em>NO.1</em></a>
            </div>
        </div>
        <div class="pt-c">
            <div class="pt-name clearfix">
                <h3 class="title">金阳光<span class="platform-state green">实盘平台</span></h3>
                <div class="pt-share clearfix">
                    <a href="login.html" class="btn-star"><em></em><span>评价</span></a>
                    <a href="login.html" class="btn-follow"><em>+关注</em></a>
                </div>
            </div>
            <div class="pt-list">
                <ul class="clearfix">
                    <li title="2021年"><span>成立时间：</span>2021年</li>
                    <li title="7.15分"><span>综合评分：</span>7.15分</li>
                    <li title="BBB"><span>交易环境：</span>BBB</li>
                    <li title="中国"><span>所属国家：</span>中国</li>
                    <li title="0.1%"><span>按天费用：</span>0.1%</li>
                    <li title="1%"><span>按月费用：</span>1%</li>
                </ul>
            </div>
            <div class="pt-intro">金阳光致力于提供安全、便捷、灵活、 可信赖的互联网股票服务，主打产品短线T+1产品 获得市场良好的口碑。</div>
            <div class="pt-links clearfix">
                <ul class="clearfix">
                    <li>
                        <a href="https://jyg.barrattlondon.com.cn/" target="_blank">官网</a>
                        <dl>
                            <dt><a href="https://jyg.barrattlondon.com.cn/" target="_blank">https://jyg.barrattlondon.com.cn/</a></dt>
                        </dl>
                    </li>
                    <li><a href="https://jyg.barrattlondon.com.cn/" target="_blank">费率</a></li>
                    <li><a>官方热线<p>13545869685</p></a></li>
                </ul>
            </div>
        </div>
        <div class="pt-r">
            <div class="hd clearfix">
                <div class="pt-cc-ti">查查指数</div>
                <ul class="clearfix">
                    <li>评分</li>
                    <li>环境</li>
                </ul>
            </div>
            <div class="bd">
                <div class="item">
                    <div class="cczs-canvas" id="cczs1"></div>
                    <div class="scroll">7.15</div>
                </div>
                <div class="item">
                    <div class="cczs-canvas" id="cczs2"></div>
                    <div class="scroll orange">BBB</div>
                </div>
            </div>
        </div>
        <script>
        jQuery(".platform-top .pt-r").slide({ mainCell: ".bd", titCell: ".hd li", vis: 1, scroll: 1, effect: "fade" });
        var cczs1 = echarts.init(document.getElementById('cczs1'));
        var option = {
            tooltip: {},
            radar: {
                // shape: 'circle',
                name: {
                    textStyle: {
                        color: '#9ea5bb',
                        padding: [0, 5],
                    }
                },
                indicator: [
                    { name: '人气热度', max: 10 },
                    { name: '安全性', max: 10 },
                    { name: '出金速度', max: 10 },
                    { name: '平台信誉', max: 10 },
                    { name: '用户口碑', max: 10 },
                    { name: '监管牌照', max: 10 }
                ]
            },
            series: [{
                name: '综合评分',
                type: 'radar',
                areaStyle: {
                    normal: {
                        color: 'rgba(24,117,240,.2)'
                    },
                },
                itemStyle: {
                    // 点的颜色。
                    color: '#1875f0',
                },
                data: [{
                    value: [9, 8, 7.9, 7, 10.00, 1.00],
                    name: '综合评分',
                    symbol: 'circle',
                    symbolSize: 5,
                    label: {
                        position: [-3, 1],
                        show: true,
                        formatter: function(params) {
                            return params.value;
                        }
                    }
                }]
            }]
        };
        cczs1.setOption(option);

        var cczs2 = echarts.init(document.getElementById('cczs2'));
        var option2 = {
            tooltip: {},
            radar: {
                // shape: 'circle',
                name: {
                    textStyle: {
                        color: '#9ea5bb',
                        padding: [0, 5],
                    }
                },
                splitArea: {
                    areaStyle: {
                        color: ['#fff', '#fdf9f5']
                    }
                },
                indicator: [
                    { name: '滑点', max: 10 },
                    { name: '点差', max: 10 },
                    { name: '交易速度', max: 10 },
                    { name: '隔夜息', max: 10 },
                    { name: '行情速度', max: 10 },
                    { name: '综合检测', max: 10 }
                ]
            },
            series: [{
                name: '交易环境',
                type: 'radar',
                areaStyle: {
                    normal: {
                        color: 'rgba(255,138,0,.15)'
                    },
                },
                itemStyle: {
                    // 点的颜色。
                    color: '#ff8a00',
                },
                data: [{
                    value: [6.5, 6, 6.1, 6.1, 6, 6.3],
                    name: '交易环境',
                    symbol: 'circle',
                    symbolSize: 5,
                    label: {
                        position: [-3, 1],
                        show: true,
                        formatter: function(params) {
                            return params.value;
                        }
                    }
                }]
            }]
        };
        cczs2.setOption(option2);
        </script>
    </div>
    <div class="platform-tab">
        <ul class="clearfix">
            <li><a href="2521001.html" class='on'>平台概况<em></em></a></li>
            <li><a href="252100311.html">平台新闻<em></em></a></li>
            <li><a href="2521002.html">用户点评<em></em></a></li>
            <li><a href="252100511.html">用户咨询<em></em></a></li>
        </ul>
    </div>
    <div class="platform-con">
        <!-- <div class="platform-con-1">
            <div class="mess">
                <table>
                    <tr>
                        <td>平台简称</td>
                        <td>金阳光</td>
                        <td>主营业务</td>
                        <td>国内证券</td>
                    </tr>
                    <tr>
                        <td>公司全称</td>
                        <td>--</td>
                        <td>按天费用</td>
                        <td>0.1%</td>
                    </tr>
                    <tr>
                        <td>国家/地区</td>
                        <td>中国<img src="https://www.touchacha.cn/upload/2019-10/157190313520491200.png" width="24" height="16" alt="中国"></td>
                        <td>按月费用</td>
                        <td>1%</td>
                    </tr>
                    <tr>
                        <td>排名</td>
                        <td>NO.1</td>
                        <td>最大杠杆</td>
                        <td>10倍</td>
                    </tr>
                    <tr>
                        <td>是否实盘</td>
                        <td>
                            是<span class="openCheck">查看验证记录</span> </td>
                        <td>最低入金</td>
                        <td>--</td>
                    </tr>
                </table>
            </div>
            <script type="text/javascript">
            $(".openCheck").click(function() { layer.open({ type: 2, title: false, closeBtn: 1, area: ["846px", "550px"], shadeClose: true, content: ["modules/gets/display_check/?id=25210&title=金阳光", "no"] }); return false });
            </script>
            <div class="platform-jg">
                <div class="platform-hd">
                    <h2>执照信息</h2>
                </div>
                <div class="platform-jg-bd">
                    <dl>
                        <dt class="clearfix">
                            <p>监管牌照</p>
                            <p>监管国家</p>
                            <p>监管性质</p>
                            <p>牌照类型</p>
                            <p>发证时间</p>
                            <p>监管证号</p>
                            <p>证明文件</p>
                        </dt>
                        <dd class="clearfix">
                            <div class="item1 clearfix">
                                <div class="pic"><img src="https://www.touchacha.cn/upload/2020-11/160610998406584800.png" width="92" height="54"></div>
                                <div class="txt">中国网站ICP备案（MIIT）</div>
                            </div>
                            <div class="item2">
                                <div class="h">中国<img src="https://www.touchacha.cn/upload/2019-10/157190313520491200.png" width="22" height="14"></div>
                                <div class="p">已备案</div>
                            </div>
                            <div class="item3">普通注册</div>
                            <div class="item4">网站ICP备案</div>
                            <div class="item5">2018-06</div>
                            <div class="item6">京ICP备12033538号-4</div>
                            <div class="item7"><a c01="2020-11/160610998406584800.png" c02="中国网站ICP备案（MIIT）" c03="网站备案可以自主通过官方备案网站建设在线备案或者通过当地电信部门两种方式来进行网案的备案。 网站备案的目的就是为了防止在网上从事非法的网站经营活动，打击不良互联网信息的传播，如果网站不备案的话，很有可能被查处以后关停。" c04="已备案" c05="网站ICP备案" c06="中国" c07="2019-10/157190313520491200.png" c08="京ICP备12033538号-4" c09="2018-06" c10="">查看证明文件</a></div>
                        </dd>
                    </dl>
                </div>
                <script>
                $('.platform-jg-bd .item7 a').click(function() {
                    var c01 = $(this).attr('c01');
                    var c02 = $(this).attr('c02');
                    var c03 = $(this).attr('c03');
                    var c04 = $(this).attr('c04');
                    var c05 = $(this).attr('c05');
                    var c06 = $(this).attr('c06');
                    var c07 = $(this).attr('c07');
                    var c08 = $(this).attr('c08');
                    var c09 = $(this).attr('c09');
                    var c10 = $(this).attr('c10');
                    layer.open({
                        type: 2,
                        title: false,
                        closeBtn: 1,
                        area: ['880px', '623px'],
                        shadeClose: true,
                        content: ['modules/gets/display_certificate/?id=25210&c01=' + c01 + "&c02=" + c02 + "&c03=" + c03 + "&c04=" + c04 + "&c05=" + c05 + "&c06=" + c06 + "&c07=" + c07 + "&c08=" + c08 + "&c09=" + c09 + "&c10=" + c10, 'no']
                    });
                    return false;
                });
                </script>
            </div>
            <div class="platform-hy">
                <div class="platform-hd">
                    <h2>平台新闻</h2>
                    <ul class="clearfix">
                        <li class="on">新闻</li>
                    </ul>
                </div>
                <div class="platform-hy-bd">
                    <div class="box">
                        <ul class="clearfix" id="u1">
                            <li>
                                <div class="libox">
                                    <h3><a href="c37952.html" target='_blank'>【金阳光】“中国军团”进军欧洲：新能源汽车出口迎最佳窗口...</a></h3>
                                    <div class="date">4小时前</div>
                                    <div class="p">
                                        <a href="c37952.html" target='_blank'>
                                            <img src="https://www.touchacha.cn/upload/2021-09/163236249149978000.jpg" alt="【金阳光】“中国军团”进军欧洲：新能源汽车出口迎最佳窗口期">
                                        </a>
                                    </div>
                                    <div class="ott">
                                        <div class="img">
                                            <a class="img-show" href="javascript:;">
                                                <img src="https://www.touchacha.cn/upload/2021-08/162865402933679200.png" width="22" height="22">
                                                <p>金阳光</p>
                                            </a>
                                        </div>
                                        <div class="detail-wz"><a href="https://jyg.barrattlondon.com.cn/" target="_blank"></a></div>
                                        <div class="detail-wx">
                                            <img src="https://www.touchacha.cn/upload/2021-08/162865402933694700.jpg" width="110" height="110" alt="金阳光">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="libox">
                                    <h3><a href="c37807.html" target='_blank'>【金阳光】A股如何应对？港股遭遇中秋劫</a></h3>
                                    <div class="date">1天前</div>
                                    <div class="p">
                                        <a href="c37807.html" target='_blank'>
                                            <img src="https://www.touchacha.cn/upload//2021-09/163064208803156800.jpg" alt="【金阳光】A股如何应对？港股遭遇中秋&quot;劫&quot;">
                                        </a>
                                    </div>
                                    <div class="ott">
                                        <div class="img">
                                            <a class="img-show" href="javascript:;">
                                                <img src="https://www.touchacha.cn/upload/2021-08/162865402933679200.png" width="22" height="22">
                                                <p>金阳光</p>
                                            </a>
                                        </div>
                                        <div class="detail-wz"><a href="https://jyg.barrattlondon.com.cn/" target="_blank"></a></div>
                                        <div class="detail-wx">
                                            <img src="https://www.touchacha.cn/upload/2021-08/162865402933694700.jpg" width="110" height="110" alt="金阳光">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="libox">
                                    <h3><a href="c37502.html" target='_blank'>【金阳光】新能源车“下乡”要来了？下沉市场或成车企争夺点</a></h3>
                                    <div class="date">6天前</div>
                                    <div class="p">
                                        <a href="c37502.html" target='_blank'>
                                            <img src="https://www.touchacha.cn/upload//2021-09/163064165935984300.jpg" alt="【金阳光】新能源车“下乡”要来了？下沉市场或成车企争夺点">
                                        </a>
                                    </div>
                                    <div class="ott">
                                        <div class="img">
                                            <a class="img-show" href="javascript:;">
                                                <img src="https://www.touchacha.cn/upload/2021-08/162865402933679200.png" width="22" height="22">
                                                <p>金阳光</p>
                                            </a>
                                        </div>
                                        <div class="detail-wz"><a href="https://jyg.barrattlondon.com.cn/" target="_blank"></a></div>
                                        <div class="detail-wx">
                                            <img src="https://www.touchacha.cn/upload/2021-08/162865402933694700.jpg" width="110" height="110" alt="金阳光">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="libox">
                                    <h3><a href="c37344.html" target='_blank'>【金阳光】满屏涨停！氢能源指数直冲历史最高点</a></h3>
                                    <div class="date">7天前</div>
                                    <div class="p">
                                        <a href="c37344.html" target='_blank'>
                                            <img src="https://www.touchacha.cn/upload//2021-09/163064179344066000.jpg" alt="【金阳光】满屏涨停！氢能源指数直冲历史最高点">
                                        </a>
                                    </div>
                                    <div class="ott">
                                        <div class="img">
                                            <a class="img-show" href="javascript:;">
                                                <img src="https://www.touchacha.cn/upload/2021-08/162865402933679200.png" width="22" height="22">
                                                <p>金阳光</p>
                                            </a>
                                        </div>
                                        <div class="detail-wz"><a href="https://jyg.barrattlondon.com.cn/" target="_blank"></a></div>
                                        <div class="detail-wx">
                                            <img src="https://www.touchacha.cn/upload/2021-08/162865402933694700.jpg" width="110" height="110" alt="金阳光">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="loadmore" id="loadmore1" page="0" sid="1">
                            <p>查看更多</p>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            $(".platform-hy .loadmore").click(function() {
                var sid = $(this).attr("sid");
                var page = parseInt($(this).attr("page"));
                $(this).attr("page", page + 1);
                $.ajax({ type: "POST", url: "modules/ajax/display_news/?", data: "cid=102101&sid=" + sid + "&page=" + page + "&userid=4785", cache: false, success: function(result) { if (result == "加载完毕") { $("#loadmore" + sid + " p").html('加载完毕'); } else { $(".platform-hy #u" + sid).append(result); } } });
                return false;
            });
            </script>
        </div> -->
        <!-- 平台点评 -->
        @include('comment')
    </div>
</div>
<div class="right-service"><img src="https://www.touchacha.cn/upload/2021-09/163046002352048700.jpg" alt="金阳光">
    <h2>官方客服</h2>
    <p>为您服务</p><a href="https://jyg.barrattlondon.com.cn/" target="_blank">立即咨询</a>
</div>
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/inside.css') }}">
@endsection

@section('scripts')

@endsection