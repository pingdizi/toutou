@extends('layouts.app')

@section('content')
<!-- <div class="container"> -->
        <div class="user-new">
        <h2>用户注册</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- <input id="agt" type="hidden" name="agt" value="0" /> -->
            <div class="phone">
                <div class="area">
                    <div class="sbox">
                        <em></em>
                        <img class="src" id="src" src="static/images/flag_z_09.png">
                        <input type="text" class="area" id="area" name="area" value="+86" readonly/>
                    </div>
                </div>
                <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="请输入手机号码" maxlength="11" autocomplete="off" required="required" onkeyup="this.value=this.value.replace(/\D/g,'')"/>
                @error('phone')
                    <span class="invalid-feedback" style="color:red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="code">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" value="{{ old('email') }}" placeholder="请输入有效邮箱" />
                <!-- <input type="button" id="btn" value="获取验证码" /> -->
                @error('email')
                    <span class="invalid-feedback" style="color:red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="code">
                <input id="password" type="password" name="password" placeholder="请输入密码" maxlength="32" class="form-control @error('password') is-invalid @enderror"  required autocomplete="new-password"/>
                @error('password')
                    <span class="invalid-feedback" style="color:red;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="code">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="确认密码" >
            </div>
            <input type="submit" value="注册" />
            <div class="des" id="des" style="padding-bottom:18px;">
                <span class="no"></span>
                <p>我已阅读并同意<a href="agreement.html" target="_blank">《服务协议》</a>和<a href="privacy.html" target="_blank">《隐私协议》</a></p>
            </div>
            <div class="ott">
                <!-- <div class="wx"><a href="https://open.weixin.qq.com/connect/qrconnect?appid=wx5b4710d0c9eab557&redirect_uri=https%3A%2F%2Fwww.touchacha.cn%2Fcallback.html&response_type=code&scope=snsapi_login&state=123#wechat_redirect">
                <img src="static/images/wx.png"><span>微信登录</span></a></div> -->
                <p>已有账号？<a href="{{ route('login') }}">返回登录</a></p>
            </div>
        </form>
        </div>
    <div class="user-footer">
        <div class="user-logo"><img src="static/images/user_logo.png" alt="投查查" /></div>
        <div class="user-copyright">Copyright &copy; 2015 - 2021 TOUCHACHA.CN All Rights Reserved</div>
    </div>
    <!-- </div> -->
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/register.css') }}">
@endsection
