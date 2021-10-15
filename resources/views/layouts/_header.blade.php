<div class="header">
    <div class="h-top">
        <div class="g-in">
            <div class="logo"><a href="./"><img src="static/images/tcc_logo_new.png" alt="投查查"></a></div>
            <form action="search.html" method="get" class="iformy tcc-form">
                <input class="tcc-input" type="text" name="sk" value="" required="required" placeholder="输入关键词" autocomplete="off" oninput="myFunction(this);" />
                <input type="submit" value="" />
                <ul></ul>
            </form>
            <!-- <div class="login">
                <img src="static/images/avator.png" alt="tcc09324098">
                <a href="usercenter.html">tcc09324098</a>
                <a href="userlogout.html" onClick="if (confirm('您确定要退出吗？')) return true; else return false;">[退出]</a>
            </div> -->
            <div class="login"><a href="{{ route('login') }}">登录/注册</a></div>
            <div class="ling" id="tcc_ling"><a href="usercenter.html"><em id="tcc_ling_num" class="off">0</em></a></div>
        </div>
    </div>
    <div class="h-bot">
        <div class="g-in clearfix">
            <ul class="clearfix">
                <li><a href="./" class='current'>首页<em></em></a></li>
                <li><a href="newszx.html">观查家<i></i><em></em></a>
                    <dl style="left:-36px;"><dt><a href="newszx.html">精选</a></dt>
                        <dt><a href="newszq.html">股市</a></dt>
                        <dt><a href="newswh.html">外汇</a></dt>
                        <dt><a href="newsqh.html">商品</a></dt>
                        <dt><a href="newsjj.html">基金</a></dt>
                        <dt><a href="newsss.html">商业</a></dt>
                        <dt><a href="newsjx.html">交易商</a></dt>
                        <dt><a href="newsmt.html">媒体</a></dt>
                    </dl>
                </li>
                <li><a href="javascript:;">机构<i></i><em></em></a>
                    <div class="rank-menu">
                        <div class="hd">
                            <!-- <a href="info.html?cid=101&bid=1&t=5" class="clearfix"><em><img src="static/images/rank_menu_03.png"></em><h2>外汇平台</h2><p>共收录2948家平台</p></a> -->
                            <a href="info.html?cid=118&bid=1&t=5" class="clearfix"><em><img src="static/images/rank_menu_04.png"></em>
                                <h2>贵金属平台</h2>
                                <p>共收录204家平台</p>
                            </a>
                            <a href="info.html?cid=102&bid=1&t=2" class="clearfix"><em><img src="static/images/rank_menu_05.png"></em>
                                <h2>配资平台</h2>
                                <p>共收录1836家平台</p>
                            </a>
                            <a href="info.html?cid=103&bid=1&t=1" class="clearfix"><em><img src="static/images/rank_menu_01.png"></em>
                                <h2>香港证券</h2>
                                <p>共收录51家平台</p>
                            </a>
                            <a href="info.html?cid=109&bid=1&t=1" class="clearfix"><em><img src="static/images/rank_menu_02.png"></em>
                                <h2>香港期货</h2>
                                <p>共收录107家平台</p>
                            </a>
                        </div>
                        <div class="bd">
                            <!-- <div class="item"><a href="info.html?cid=101&bid=1&t=1">平台分类</a><a href="info.html?cid=101&bid=2&t=1">监管分类</a><a href="info.html?cid=101&bid=3&t=1">交易环境</a><a href="info.html?cid=101&bid=4&t=1">黑榜</a><a href="info.html?cid=101&bid=6&t=1">分析师</a></div> -->
                            <div class="item">
                                <a href="info.html?cid=118&bid=1&t=1">平台分类</a>
                                <a href="info.html?cid=118&bid=3&t=1">交易环境</a>
                                <a href="info.html?cid=118&bid=4&t=1">黑榜</a>
                            </div>
                            <div class="item">
                                <a href="info.html?cid=102&bid=1&t=1">综合查询</a>
                                <a href="info.html?cid=102&bid=2&t=1">实盘查询</a>
                                <a href="info.html?cid=102&bid=3&t=1">最新实盘</a>
                                <a href="info.html?cid=102&bid=4&t=1">黑榜</a>
                            </div>
                            <div class="item">
                                <a href="info.html?cid=103&bid=1&t=1">综合查询</a>
                                <a href="info.html?cid=103&bid=2&t=1">交易环境</a>
                                <a href="info.html?cid=103&bid=3&t=1">黑榜</a>
                            </div>
                            <div class="item">
                                <a href="info.html?cid=109&bid=1&t=1">综合查询</a>
                                <a href="info.html?cid=109&bid=2&t=1">交易环境</a>
                                <a href="info.html?cid=109&bid=3&t=1">黑榜</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="tcc"><a href="aboutplatform.html">什么是投查查？</a></div>
        </div>
    </div>
</div>
<script>
$('.h-bot li').hover(function() { $(this).find('dl').show(); }, function() { $(this).find('dl').hide(); });
$('.h-bot li').hover(function() { $(this).find('.rank-menu').show(); }, function() { $(this).find('.rank-menu').hide(); });
jQuery(".h-bot .rank-menu").slide({ mainCell: ".bd", titCell: ".hd a", vis: 1, scroll: 1, effect: "fade" });
</script>