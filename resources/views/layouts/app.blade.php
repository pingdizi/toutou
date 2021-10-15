<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=1240">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', '投查查') - 专业投资查询工具，提供全球交易商查询、外汇牌价、黄金价格、原油走势、贵金属、美股、港股、期货行情。</title>
    <meta name="keyword" content="@yield('keyword','投查查,外汇平台查询,贵金属平台查询,美港股券商查询,外汇牌价,外汇行情,外汇汇率,贵金属行情,黄金白银价格走势,原油价格走势,美股行情,港股行情,期货行情,金融行情数据,外汇分析,黄金分析,原油分析,股市资讯,外汇资讯,期货资讯,商业资讯，股票培训课程,外汇培训课程,黄金培训课程,期货培训课程')" />
    <meta name="description" content="@yield('description','配天眼是由深圳科沃征信开发的安全查询工具，在基于独有核心数据处理技术的基础上， 构建了完备的集数据采集、数据检测、数据监测化为一体的大数据解决方案。 秉持“为用户提供更安全的投资环境”的使命，采用公开的数据，透明的检测规则，深度挖掘和分析相关数据，曝光风险等，为用户呈现可视化的安全投资环境。')" />

    <link type="text/css" href="favicon.ico" rel="icon">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="{{ asset('static/font/akrobat-regular.ttf') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('static/css/base.css?v=3') }}" />
	<link rel="stylesheet" href="{{ asset('static/css/home.css?v=3') }}" />
    <link rel="icon" href="" type="image/png">
    <!-- Scripts -->
    <script src="{{ asset('static/js/jquery.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.SuperSlide.2.1.2.js') }}"></script>
    <script src="{{ asset('static/js/tcc-common-1.6.0.js') }}"></script>
    <script src="{{ asset('static/js/n.axios.min.js') }}"></script>
    <script type="text/javascript" src="https://cdn.bootcdn.net/ajax/libs/layer/3.1.1/layer.js"></script>
    @yield('styles')
</head>
<body>
    <div id="wrapper">
        @include('layouts._header')

        @yield('content')

       @include('layouts._footer')
    </div>

   
    @yield('scripts')
</body>
</html>
