/*!
 * https://www.touchacha.cn
 * Version - 1.6.0
 */
function check(e) { return "" == e.name.value ? (layer.msg("请输入您的姓名"), e.name.focus(), !1) : "" == e.phone.value ? (layer.msg("请输入您的电话"), e.phone.focus(), !1) : "" == e.content.value ? (layer.msg("请输入留言内容"), e.content.focus(), !1) : void 0 }

function check_reg(e) { var t = document.getElementById("phone").value; return "+86" != document.getElementById("area").value || /^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(16[0-9]{1})|(17[0-9]{1})|(18[0-9]{1})|(19[0-9]{1}))+\d{8})$/.test(t) ? "0" == e.agt.value ? (layer.msg("请同意协议"), !1) : "" == e.code.value ? (layer.msg("请输入验证码"), e.code.focus(), !1) : e.pass.value.length < 6 ? (layer.msg("密码不能少于6位"), e.pass.focus(), !1) : e.repass.value != e.pass.value ? (layer.msg("两次输入密码不一致"), e.repass.focus(), !1) : void 0 : (layer.msg("手机号码错误"), e.phone.focus(), !1) }

function myFunction(t) { var e = $(t).val(); return $(t).parent().find("ul").css("height", "auto"), $.ajax({ type: "POST", url: "../../modules/ajax/company/?", data: "value=" + e, cache: !1, success: function(e) { $(t).parent().find("ul").html(e) } }), !1 }

function check_login(e) { if ("" == e.pass.value) return layer.msg("请输入密码", { time: 1e3 }), e.pass.focus(), !1 }

function check_nickname(e) { var t = document.getElementById("nickname").value; return "" == e.nickname.value ? (layer.msg("请输入昵称"), e.nickname.focus(), !1) : /^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(16[0-9]{1})|(17[0-9]{1})|(18[0-9]{1})|(19[0-9]{1}))+\d{8})$/.test(t) ? (layer.msg("昵称不能为手机号"), e.nickname.focus(), !1) : /^((0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/.test(t) ? (layer.msg("昵称不能为座机号"), e.nickname.focus(), !1) : void 0 }

function check_pass(e) { return e.pass.value.length < 6 ? (layer.msg("新密码长度不能少于6位"), e.pass.focus(), !1) : e.repass.value != e.pass.value ? (layer.msg("两次输入不一致"), e.repass.focus(), !1) : void 0 }

function check_partner(e) { return "" == e.website.value ? (layer.msg("请输入机构网站"), e.website.focus(), !1) : "" == e.name.value ? (layer.msg("请输入联系人"), e.name.focus(), !1) : "" == e.phone.value ? (layer.msg("请输入手机号"), e.phone.focus(), !1) : "" == e.wx.value ? (layer.msg("请输入微信号"), e.wx.focus(), !1) : "" == e.content.value ? (layer.msg("请输入备注信息"), e.content.focus(), !1) : void 0 }

function check_investment(e) { return "" == e.title.value ? (layer.msg("请输入标题"), !1) : 0 == e.class_id.value ? (layer.msg("请选择栏目"), !1) : 0 == e.eajy.value ? (layer.msg("请选择EA交易"), !1) : 0 == e.gpjy.value ? (layer.msg("请选择高频交易"), !1) : 0 == e.dcfy.value ? (layer.msg("请选择点差返佣"), !1) : 0 == e.wysx.value ? (layer.msg("请选择外佣上线"), !1) : "" == e.content.value ? (layer.msg("请输入正文"), !1) : void $(".box-y .btns").empty() }

function check_media(e) { var t = $('input[name="theme"]:checked').val(),
        n = $('input[name="experience"]:checked').val(),
        a = $('input[name="platform"]:checked').val(),
        r = !1,
        l = !1,
        c = $('input[name="specialty[]"]'),
        u = $('input[name="direction[]"]'),
        i = $('input[name="tcc"]:checked').val(); if (null == t) return layer.msg("请选择您的创作主体"), !1; if (null == n) return layer.msg("请选择您之前的内容创作经历"), !1; if (null == a) return layer.msg("请选择您在哪个平台粉丝最多"), !1; for (var s = 0; s < c.length; s++) c[s].checked && (r = !0); if (!r) return layer.msg("请选择您主要擅长哪种内容创作类型"), !1; for (s = 0; s < u.length; s++) u[s].checked && (l = !0); return l ? null == i ? (layer.msg("请选择您是在哪里关注到的投查查"), !1) : void 0 : (layer.msg("请选择您主要擅长哪种内容创作类型"), !1) }

function check_analyst(e) { var t = $('input[name="theme"]:checked').val(),
        n = $('input[name="experience"]:checked').val(),
        a = $('input[name="platform"]:checked').val(),
        r = $('input[name="specialty"]:checked').val(),
        l = $('input[name="direction"]:checked').val(),
        c = $('input[name="tcc"]:checked').val(); return null == t ? (layer.msg("请选择您的创作主体"), !1) : null == n ? (layer.msg("请选择您之前的内容创作经历"), !1) : null == a ? (layer.msg("请选择您在哪个平台粉丝最多"), !1) : null == r ? (layer.msg("请选择您主要擅长哪种分析品种"), !1) : null == l ? (layer.msg("请选择您主要擅长的分析周期"), !1) : null == c ? (layer.msg("请选择您是在哪里关注到的投查查"), !1) : void 0 }

function check_complaint(e) { var t = document.getElementById("phone").value; if (!/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(16[0-9]{1})|(17[0-9]{1})|(18[0-9]{1})|(19[0-9]{1}))+\d{8})$/.test(t)) return layer.msg("手机号码错误"), e.phone.focus(), !1; if ("" != e.pic1.value) { t = e.pic1.value.substr(e.pic1.value.length - 3).toLowerCase(); if ("jpg" != t && "png" != t && "gif" != t) return layer.msg("图片1格式错误"), !1 } if ("" != e.pic2.value) { var n = e.pic2.value.substr(e.pic2.value.length - 3).toLowerCase(); if ("jpg" != n && "png" != n && "gif" != n) return layer.msg("图片2格式错误"), !1 } if ("" != e.pic3.value) { n = e.pic3.value.substr(e.pic3.value.length - 3).toLowerCase(); if ("jpg" != n && "png" != n && "gif" != n) return layer.msg("图片3格式错误"), !1 } if ("" != e.pic4.value) { e = e.pic4.value.substr(e.pic4.value.length - 3).toLowerCase(); if ("jpg" != e && "png" != e && "gif" != e) return layer.msg("图片4格式错误"), !1 } }

function accAdd(e, t) { var n, a; try { n = e.toString().split(".")[1].length } catch (e) { n = 0 } try { a = t.toString().split(".")[1].length } catch (e) { a = 0 } return (e * (a = Math.pow(10, Math.max(n, a))) + t * a) / a }

function Subtr(e, t) { var n, a; try { n = e.toString().split(".")[1].length } catch (e) { n = 0 } try { a = t.toString().split(".")[1].length } catch (e) { a = 0 } return ((e * (e = Math.pow(10, Math.max(n, a))) - t * e) / e).toFixed(a <= n ? n : a) }

function accMul(e, t) { var n = 0,
        e = e.toString(),
        t = t.toString(); try { n += e.split(".")[1].length } catch (e) {} try { n += t.split(".")[1].length } catch (e) {} return Number(e.replace(".", "")) * Number(t.replace(".", "")) / Math.pow(10, n) }

function accDiv(arg1, arg2) { var t1 = 0,
        t2 = 0,
        r1, r2; try { t1 = arg1.toString().split(".")[1].length } catch (e) {} try { t2 = arg2.toString().split(".")[1].length } catch (e) {} with(Math) return r1 = Number(arg1.toString().replace(".", "")), r2 = Number(arg2.toString().replace(".", "")), r1 / r2 * pow(10, t2 - t1) }

function setNumAndWeight(e, t, n, a) { $(a).parent().next("td").text(getFloatByNum(t, 4));
    t = "件数：" + e + "<br>重量：" + getFloatByNum(t, 4);
    $("tr.tr-" + n).children().eq(4).html(t) }

function toDecimal4(e) { var t = parseFloat(e); if (isNaN(t)) return !1; var n = (t = Math.floor(1e4 * e) / 1e4).toString(),
        a = n.indexOf("."); for (a < 0 && (a = n.length, n += "."); n.length <= a + 4;) n += "0"; return n } $(document).bind("click", function(e) { for (var t = (e = e || window.event).target || e.srcElement; t;) { if (t.id) return;
        t = t.parentNode } $(".tcc-form ul").css("height", "0") }), Number.prototype.toFixed = function(e) { if (changenum = (parseInt(this * Math.pow(10, e) + .5) / Math.pow(10, e)).toString(), index = changenum.indexOf("."), index < 0 && 0 < e)
        for (changenum += ".", i = 0; i < e; i++) changenum += "0";
    else
        for (index = changenum.length - index, i = 0; i < e - index + 1; i++) changenum += "0"; return changenum }, Number.prototype.add = function(e) { return accAdd(e, this) }, Number.prototype.sub = function(e) { return Subtr(this, e) }, Number.prototype.mul = function(e) { return accMul(e, this) }, Number.prototype.div = function(e) { return accDiv(this, e) };
