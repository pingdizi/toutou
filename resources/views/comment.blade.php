<div class="platform-con">
    <div class="platform-con-2">
        <div class="eva-box1">
            <h2>总体评价</h2>
            <div class="clearfix">
                <div class="div-z">
                    <div class="num">10.00</div>
                    <div class="ten">满分10分</div>
                    <p>已有23人发表评论</p>
                </div>
                <div class="div-m">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <dl>
                        <dt><span>19</span>
                            <div class="line"><i style="width:83%"></i></div>
                        </dt>
                        <dt><span>4</span>
                            <div class="line"><i style="width:17%"></i></div>
                        </dt>
                        <dt><span>0</span>
                            <div class="line"><i style="width:0%"></i></div>
                        </dt>
                        <dt><span>0</span>
                            <div class="line"><i style="width:0%"></i></div>
                        </dt>
                        <dt><span>0</span>
                            <div class="line"><i style="width:0%"></i></div>
                        </dt>
                    </dl>
                </div>
                <div class="div-y"><a href="login.html">我要评论</a></div>
            </div>
        </div>
        <div class="stu-com-sys">
            <form name="msg">
                <div class="stu-sel clearfix">
                    <div class="label">给交易商评价</div>
                    <div class="scroll">
                        <div class="innerStars clearfix" id="stars">
                            <em class="star"></em>
                            <em class="star"></em>
                            <em class="star"></em>
                            <em class="star"></em>
                            <em class="star"></em>
                        </div>
                        <div class="innerTxt" id="txt"></div>
                    </div>
                </div>
                <input type="hidden" name="star" id="scroll" value="">
                <div class="stu-content clearfix">
                    <div class="textarea">
                        <textarea id="content" name="content" maxlength="200" placeholder="为了建立开放，透明，安全的社区，我们仅允许用户发表真实的评论，涉及到言语攻击，不实评论，营销性质的点评将不予通过，限120字以内。"></textarea>
                    </div>
                    <div class="picList clearfix"></div>
                    <div class="bottom clearfix">
                        <div class="uploadPic" id="file">
                            <div id="upload" nums="0">
                                <input type="file" multiple="multiple" accept="image/png, image/jpeg" value="上传图片">
                                <p>上传图片(最多上传4张)</p>
                            </div>
                        </div>
                        <div class="submit">
                            <input type="submit" value="提交" class="btn">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="eva-box2">
            <h2>最新评论</h2>
            <div class="listbox">
                <div class="m-title clearfix">
                    <img src="/static/images/159438632566827900.png" width="44" height="44">
                    <div class="listr">
                        <div class="h clearfix">
                            <h3>游客</h3>
                            <div class="stars clearfix"><em class="on"></em><em class="on"></em><em class="on"></em><em class="on"></em><em class="on"></em></div>
                            <div class="txt">好评</div>
                        </div>
                        <div class="p">合作了一段时间，感觉还是很棒的平台，沟通的很愉快</div>
                    </div>
                </div>
                <div class="m-oto">
                    <div class="date">2021-09-22 10:43:56</div>
                </div>
            </div>
            <div class="listbox">
                <div class="m-title clearfix">
                    <img src="/static/images/159438632566827900.png" width="44" height="44">
                    <div class="listr">
                        <div class="h clearfix">
                            <h3>游客</h3>
                            <div class="stars clearfix"><em class="on"></em><em class="on"></em><em class="on"></em><em class="on"></em><em class="on"></em></div>
                            <div class="txt">好评</div>
                        </div>
                        <div class="p">用了一个多月，我自己感觉还可以
                            系统很稳定，不像我之前用的经常会卡
                            我做过很多配资平台，这个费用也还比较合理，不算高也不算低
                            确定是实盘，会出现部分成交和买到零股的情况，不像虚拟盘，见价就全部成交
                            充值和提现速度是我最满意的地方
                            总体来说在我用过的平台里面目前是最满意的
                            希望能一直用下去</div>
                    </div>
                </div>
                <div class="m-oto">
                    <div class="date">2021-09-13 14:50:21</div>
                </div>
            </div>
            <div class="listbox">
                <div class="m-title clearfix">
                    <img src="/static/images/159438632566827900.png" width="44" height="44">
                    <div class="listr">
                        <div class="h clearfix">
                            <h3>游客</h3>
                            <div class="stars clearfix"><em class="on"></em><em class="on"></em><em class="on"></em><em class="on"></em><em class="on"></em></div>
                            <div class="txt">好评</div>
                        </div>
                        <div class="p">委托挂单同花顺都有显示，操作简单方便</div>
                    </div>
                </div>
                <div class="m-oto">
                    <div class="date">2021-08-11 15:06:54</div>
                </div>
            </div>
        </div>
        <script>
        $(".forms textarea").on("input", function() {
            if ($(this).val() == "") {
                $(this).parents(".forms").removeClass("on-input");
            } else {
                $(this).parents(".forms").addClass("on-input");
            }
        });
        $(".m-pics .hd img").on("click", function() {
            $(this).parents(".m-pics").addClass("zoom-in");
            $(this).parents(".m-pics").find(".bd").show();
            $(this).parents(".m-pics").find(".bd").html("<img src=" + $(this).attr("src") + " />");
            $(this).parent().addClass("on").siblings().removeClass("on");
        });
        $(document).on("click", ".m-pics .bd img", function() {
            $(this).parents(".bd").hide();
            $(this).parents(".m-pics").removeClass("zoom-in");
        });
        $(document).on('click', '.picList .item .delete-btn', function() {
            var nums = parseInt($('#upload').attr('nums'));
            if (nums > 0) {
                $(this).parent('.item').remove();
                $('#upload').attr('nums', nums - 1);
            }
            return false;
        });
        </script>
    </div>
</div>