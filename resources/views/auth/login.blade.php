@extends('layouts.app')

@section('content')
<!-- <div class="container"> -->
    <div class="user-new">
        <h2>用户登陆</h2>
        <form method="POST" action="{{ route('login') }}">
        @csrf
            <!-- <input id="agt" type="hidden" name="agt" value="0" /> -->
            <!-- <div class="phone">
                <input type="text" id="phone" name="phone" class="form-control @error('password') is-invalid @enderror" value="{{ old('phone') }}" placeholder="请输入手机号码" maxlength="11" autocomplete="off" required="required" onkeyup="this.value=this.value.replace(/\D/g,'')" />
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div> -->
            <div class="code">
                <input type="email" id="email" name="email" maxlength="" placeholder="请输入邮箱"  class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus />
                <!-- <input type="button" id="btn" value="获取验证码" /> -->
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="code">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="请输入密码" maxlength="32" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <input type="submit" value="登陆" />
            <div class="des" id="des" style="padding-bottom:18px;">
                <span class="no"></span>
                <p>我已阅读并同意<a href="agreement.html" target="_blank">《服务协议》</a>和<a href="privacy.html" target="_blank">《隐私协议》</a></p>
            </div>
            <div class="ott">
                <!-- <div class="wx"><a href="https://open.weixin.qq.com/connect/qrconnect?appid=wx5b4710d0c9eab557&redirect_uri=https%3A%2F%2Fwww.touchacha.cn%2Fcallback.html&response_type=code&scope=snsapi_login&state=123#wechat_redirect"><img src="static/images/wx.png"><span>微信登录</span></a></div> -->
                <p>没有账号?<a href="{{ route('register') }}">立即注册</a></p>
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
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
