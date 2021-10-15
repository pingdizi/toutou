<div class="platform-con-5">
    <h2>用户咨询</h2>
    <div class="tab-hd">
        <ul>
            <li><a href="252100511.html" class='on'>全部(4)</a></li>
            <li><a href="252100512.html">已回复(4)</a></li>
            <li><a href="252100513.html">未回复(0)</a></li>
        </ul>
        <div class="wyzx">
            <a href='login.html'>我要咨询</a>
        </div>
    </div>
    <div class="tab-bd">
        <ul>
            <li>
                <div class="q">
                    <em>问</em>
                    <h3>利息高吗</h3>
                    <p>2021-08-11</p>
                </div>
                <div class="a">金阳光按日费用低至0.17%，在实盘平台内是非常低的了</div>
            </li>
            <li>
                <div class="q">
                    <em>问</em>
                    <h3>金阳光出入金快不快</h3>
                    <p>2021-08-11</p>
                </div>
                <div class="a">您好：金阳光充值提现均为半小时内急速到账，安全无忧</div>
            </li>
            <li>
                <div class="q">
                    <em>问</em>
                    <h3>金阳光杠杆多少倍？</h3>
                    <p>2021-08-11</p>
                </div>
                <div class="a">您好，金阳光最高可以10倍杠杆。</div>
            </li>
            <li>
                <div class="q">
                    <em>问</em>
                    <h3>金阳光是实盘吗？</h3>
                    <p>2021-08-11</p>
                </div>
                <div class="a">您好，金阳光全实盘交易，盘中可以随时委托挂单测试实盘。接受任何方式验证。</div>
            </li>
        </ul>
    </div>
    <div class="loadmore" page="0">
        <p>查看更多</p>
    </div>
    <script>
    $(".loadmore").click(function() {
        var page = parseInt($(this).attr("page"));
        $(this).attr("page", page + 1);
        $.ajax({ type: "POST", url: "modules/ajax/display_consult/?", data: "infoid=25210&t=1&page=" + page, cache: false, success: function(result) { if (result == "加载完毕") { $(".loadmore p").html('加载完毕'); } else { $(".platform-con-5 .tab-bd ul").append(result); } } });
        return false;
    });
    </script>
</div>
<script>
$(".wyzx,.platform-con-5 .none a").click(function() { layer.open({ type: 2, title: false, closeBtn: 1, area: ["700px", "270px"], shadeClose: true, content: ["modules/gets/consult_one/?id=25210&userid=4785", "no"] }); return false });
</script>