<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        .content-activity-outer{
            display:flex;
            align-items:center;
            position: relative;
            top: -2px;
        }
        .content-activity-outer .content-activity-img{
            height:18px;
            width:10px;
        }
        .content-activity-outer .content-activity-bg{
            height: 18px;
            line-height:18px;
            padding-right: 3px;
            font-size: 12px !important;
            color: #ffffff;
            white-space: nowrap;
            background-color: #FEAC2E;
        }
        #is_man .modal-content .form-group-modal input, #collapseOne .panel-body .form-group input {
            display: none;
        }

        #is_man .modal-content .form-group-modal label, #collapseOne .panel-body .form-group label {
            background-color: rgba(249, 249, 249, 1);
            padding: 13px 21px;
            font-size: 16px;
            color: rgba(19, 19, 19, 1);
            line-height: 16px;
            font-weight: normal;
            cursor: pointer;
        }

        #is_man .modal-content .form-group-modal input:checked + label, #collapseOne .panel-body .form-group input:checked + label {
            background: rgba(105, 230, 236, 1);
        }
        /* 注册抽奖的小弹窗 */
        #loginActivity-minor{
            position: fixed;
            right:0;
            bottom:270px;
            width:88px;
            height:74px;
            background: url('/images/activity/loginActivityMinor.png?v=20221026')no-repeat;
            background-size: 100%;
            z-index: 1000;
            cursor: pointer;
        }
        /* 注册抽奖成功的弹窗 */
        #loginActivitySucceed {
            z-index: 1060;
            background: rgb(0,0,0,.4);
        }
        #loginActivitySucceed .modal-dialog {
            width:660px;
            margin-top:150px;
        }
        #loginActivitySucceed .bg-img{
            background-color:#fff;
            width: 660px;
            height: 520px;
            margin: 0 auto;
            position: relative;
            background: url('/images/activity/loginActivitySucceed.png')no-repeat;
            background-size: 100%;
        }
        @media (min-width: 768px){
            #loginActivitySucceed .modal-dialog {
                width: 660px;
                margin-top:150px;
                top:0;
            }
        }
        #loginActivitySucceed .bg-img img{
            width: 14px;
            height: 14px;
            position: absolute;
            top: 30px;
            right: 30px;
            cursor: pointer;
        }
        #loginActivitySucceed .conent-out{
            position: absolute;
            bottom: 0;
            padding: 30px 35px;
        }
        #loginActivitySucceed .conent-out h2{
            font-size: 14px;
            font-family: Helvetica-Bold, Helvetica;
            font-weight: bold;
            color: #333333;
            line-height: 18px;
            margin-bottom: 16px;
        }
        #loginActivitySucceed .conent-out p{
            font-size: 12px;
            font-family: Helvetica;
            color: #999999;
            line-height: 20px;
            margin-bottom: 36px;
        }
        #loginActivitySucceed .conent-out p span{
            color: #3FD6DD;
        }
        #loginActivitySucceed .but-out{
            width: 100%;
        }
        #loginActivitySucceed .but-out .but{
            width: 205px;
            height: 45px;
            background: #3FD6DD;
            font-size: 20px;
            font-family: Montreal-Bold, Montreal;
            font-weight: bold;
            color: #FFFFFF;
            line-height: 45px;
            text-align: center;
            border-radius: 45px;
            margin: 0 auto;
            cursor: pointer;
        }
    </style>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css' />
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" inte
        grity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" /> --}}
<!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/head_foot.css') }}" />
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '484493295249936');
        fbq('track', 'PageView');
    </script>
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KMV692H');
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ant.css') }}" />
    <script>
        /*
            *
            *   Get size settings for pictures left margin-left
            *
            * */
        function getImgSize(arrayElement,scale=1) {
            let width = parseInt($(arrayElement).css('width'));
            let height = parseInt($(arrayElement).css('height'));
            if(width>0&&height>0){
                if(width/height>=scale){
                    $(arrayElement).css({
                        'height':'100%',
                        'width':'auto'
                    });
                    let timer = setTimeout(function () {
                        clearTimeout(timer);
                        width = parseInt($(arrayElement).css('width'));
                        $(arrayElement).css({
                            'left':'-'+(width-parseInt($(arrayElement).parent().width()))/2+'px',
                            top:0
                        })
                    },500)
                }else{
                    $(arrayElement).css({
                        'width':'100%',
                        'height':'auto',
                    })
                    let timer = setTimeout(function () {
                        clearTimeout(timer);
                        height = parseInt($(arrayElement).css('height'));
                        $(arrayElement).css({
                            'top': '-' + (height - parseInt($(arrayElement).parent().height())) / 2 + 'px',
                            left: 0
                        })
                    },500)
                }
            }
        }
    </script>

</head>
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMV692H" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @include('layouts.include.header')
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
    @yield('content')
    @include('layouts.include.footer')
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('public/js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
    <!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/lazyload.js') }}"></script>
<script src="{{ asset('assets/js/cat.js') }}"></script>
<script src="{{ asset('assets/js/url.js') }}"></script>
<script>
    console.log("是否注册抽奖",1)
            isShowLoginActivity();
        var timerCount = null;
    // 监听页面窗口关闭
    $(window).unload(function(){
        if(timerCount){
            clearInterval(timerCount);
        }
    });
    // 判断是否显示注册抽奖窗口
    function isShowLoginActivity(){
        let href = window.location.href;
        if(href.indexOf('/login') < 0 && href.indexOf('/signup') < 0){
            timerCount = setInterval(()=>{
                console.log("计时结束")
                clearInterval(timerCount);
                showLoginActivity();
            },15000);
        }
    }
    function showLoginActivity(){
        let isOneDataShowThree = false;// 是否一天显示了三次
        let date = new Date();
        const dateData = date.getFullYear().toString() + (date.getMonth()+1).toString() +date.getDate().toString();
        let saveDataValue = localStorage.getItem("OneDataShowThreeData")
        if(saveDataValue){
            const value = JSON.parse(saveDataValue)
            if(value.timer == dateData){
                if(parseInt(value.number) > 3){
                    isOneDataShowThree = true;
                }else{
                    localStorage.setItem("OneDataShowThreeData", JSON.stringify({
                        timer:dateData,
                        number: parseInt(value.number) + 1
                    }));
                }
            }else{
                localStorage.setItem("OneDataShowThreeData", JSON.stringify({
                    timer:dateData,
                    number:1
                }));
            }
        }else{
            localStorage.setItem("OneDataShowThreeData", JSON.stringify({
                timer:dateData,
                number:1,
            }));
        }
        if(!isOneDataShowThree){
            $('#loginActivity').modal('show');// 显示注册抽奖弹窗
            regLotteryTrace(1);// 数据埋点；2：跳转；1：显示
        }
    }
    // 点击关闭注册抽奖窗口
    $('#loginActivity img').click(function(){
        console.log("点击关闭注册抽奖窗口")
        $('#loginActivity').modal('hide');
    })
    // 点击注册抽奖跳转按钮
    $('#loginActivity .but').click(function(){
        console.log("点击注册抽奖跳转按钮")
        $('#loginActivity').modal('hide');
        regLotteryTrace(2);// 数据埋点；2：跳转；1：显示
        let url_reg = '/signup?sc=&f_lottery=1';
        window.open(url_reg, '_self');
    })
    function regLotteryTrace(trace_type) {
        $.ajax({
            url:"/account/reg-lottery-trace",
            type:'post',
            dataType:'json',
            data:{
                trace_type: trace_type,
            },
            success:function (data) {},
            error:function (err) {}
        });
    }

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // $("#hot_list").off().on("click",function({target}){
    //     window.location = target.dataset.url
    // })
    //按钮点击记录，用于运营统计
    function clickRecord(btn_code) {
        $.ajax({
            url:"/main/click-record",
            type:'post',
            dataType:'json',
            data:{
                btn_code: btn_code,
            },
            success:function (data) {

            },
            error:function (err) {

            }
        });
    }
    const getTextWidht = (text)=>{
        let dom = document.createElement('span');
        let width = null;
            dom.style.display = 'inline-block'
            dom.textContent = text;
            document.body.appendChild(dom)
        width = dom.clientWidth;
            document.body.removeChild(dom)
            return width
    }
    const getHotWord = ()=>{
        const offsetWidth = document.getElementById("hot_list").offsetWidth;
        let textWidth = 0;
        const nowDate = +new Date();
        const { date, list } = localStorage.getItem("vipon_hot")?JSON.parse(localStorage.getItem("vipon_hot")):{};

        if(list && date > nowDate){
            let str = "";
            list.forEach((val)=>{
                textWidth += getTextWidht(val.keyword) + 15;
                if(textWidth>offsetWidth)return;
                str += `<span style="margin-right: 15px;display: block;"><a style="display: block;width: max-content;color:${val.color||'rgb(153, 153, 153)'}" href="/promotion/index?search=${val.keyword}&group=">${val.keyword}</a></span>`
                })
            $("#hot_list").append(str)
            return
        }
        $.ajax({
            url:"https://search.myvipon.com/api/hot/category",
            type:'get',
            data:{
                domain: "www.amazon.com",
            },
            success:function ({code, data}) {
                const historyDate = +new Date() + 30*60*1000;
                let str = "";
                if(data.searchKeywordTop&&data.searchKeywordTop.length){

                    let list = data.searchKeywordTop.splice(0,8);

                    list.forEach(val=>{
                        textWidth += getTextWidht(val.keyword) + 15;
                        if(textWidth>offsetWidth)return;

                    str += `<span style="margin-right: 15px;display: block;"><a style="display: block;width: max-content;color:${val.color||'rgb(153, 153, 153)'}" href="/promotion/index?search=${val.keyword}&group=">${val.keyword}</a></span>`
                })
                $("#hot_list").append(str)
                localStorage.setItem("vipon_hot",JSON.stringify({date:historyDate, list}))
            }

            },
            error:function (err) {

            }
        });
    }
    getHotWord()

    //黑五统计
    function blackFridayTrace(stat_type, btn_code) {
        $.ajax({
            url:"/api/black-friday/trace",
            type:'post',
            dataType:'json',
            data:{
                stat_type: stat_type,
                btn_code: btn_code,
            },
            success:function (data) {

            },
            error:function (err) {

            }
        });
    }

    function christmasCountTime(timestamp){
        if(timestamp<0){
            window.location.reload();
            return;
        }
        let timer = setTimeout(function (){
            let d = Math.floor(timestamp / 86400);
            let h = Math.floor(((timestamp % 86400)) / 3600);
            let m = Math.floor((timestamp % 86400 % 3600) / 60);
            let s = Math.floor((timestamp % 86400 % 3600) % 60);
            if(d<10) d="0"+d;
            if(h<10) h="0"+h;
            if(m<10) m="0"+m;
            if(s<10) s="0"+s;
            let html = `<div class="flex">
                    <div class="num_col">
                    <span class="time-number">${d}</span>
                    </div>
                    <span class="time-text">Days</span>
                </div>
                <div class="flex">
                    <div class="num_col">
                    <span class="time-number">${h}</span>
                    </div>
                    <span class="time-text">Hours</span>
                </div>
                <div class="flex">
                    <div class="num_col">
                    <span class="time-number">${m}</span>
                    </div>
                    <span class="time-text">Mins</span>
                </div>
                <div class="flex">
                    <div class="num_col">
                    <span class="time-number">${s}</span>
                    </div>
                    <span class="time-text">Secs</span>
                </div>`;
            $('.christmas_time .countdown .countdown-time').html(html);
            timestamp-=1;
            clearTimeout(timer);
            christmasCountTime(timestamp);
        },1000)
    }
    let christmasTimestamp = 0;
    if(christmasTimestamp>0){
        christmasCountTime(christmasTimestamp);
    }
    $('#btn-vshow').click(function () {
        window.open('/vshow/list');
        //clickRecord(101);
        clickRecord(108);
    });

    // 退出登录清除每日登录发放积分成功的cookie
    $('.log-out').click(function () {
        clearCookie('login_point');
    })

    // 设置cookie
    function setCookies(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 2460 * 60 * 1000));
        var expires = "expires" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires + "; path=/";
    }

    // 获取cookie
    function getCookies(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while ((c.charAt(0) == ' ')) c = c.substring(1);
            if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
        }
        return "";
    }

    // 清除cookie
    function clearCookie(name) {
        setCookies(name, "", -1);
    }

    $('#btn-post-add').click(function () {
        //window.location.href = '<?//= Url::toRoute(['my-post/add', 'ref' => 'shopper_post', ]);?>//';
        clickRecord(102);
    });

        // clear message red
    function clearMessageRed(This){
        var newThis = $(This);
        var data={
            message_id:$(This).attr('data-message'),
            reviewer_id:0        }
        $.ajax({
            url:"/shopper/message-center/show",
            type:'post',
            data:data,
            dataType:'json',
            success:function (data) {
                if(data.code==200){
                    if(data.data.group==3||data.data.group==4){
                        $('#headerMsg .msg-content-body div').html(data.data.content);
                        $('#headerMsg').modal('show');
                    }
                    if(newThis.find('.msg-head-title').length>0&&newThis.find('.msg-head-title').css('display')!='none'){
                        newThis.find('.msg-head-title').css('display','none');
                        var num = $('#header .dropdown .btn .number').html()-1;
                        if(num>0){
                            $('#header .dropdown .btn .number').html(num);
                        }else{
                            $('#header .dropdown .btn .number').html(0);
                        }
                    }

                }
            },
            error:function (err) {

            }
        })
    }
    // $("body").on("click",({target})=>{
        // if(target.className.indexOf("COMMUNITY")===-1&&target.className.indexOf("CATEGORIES")===-1){
        //     $(".pull_COMMUNITY .COMMUNITY_select").hide()
        // }else if(target.className.indexOf("CATEGORIES")>0){
        //     $(".pull_COMMUNITY .COMMUNITY_select").hide()
        // }
    // })
    // $(".pull_COMMUNITY").on("click", ()=>{
    //     if($(".pull_COMMUNITY .COMMUNITY_select")[0].style.display === "block"){
    //     $(".pull_COMMUNITY .COMMUNITY_select").hide()
    //     return
    //     }
    //     $(".pull_COMMUNITY .COMMUNITY_select").show()
    // })

    $('#header .message ul a:not(.more-msg)').on('click',function(){
        if($(this).attr('data-toggle')) {
            if($(this).attr('href')=='#headerMsgPaidArticles'){
                let tip = $(this).attr('data-vshowTop');
                let price = $(this).attr('data-vshowPrice');
                let url = $(this).attr('data-vshowUrl');
                $($('#headerMsgPaidArticles span')[0]).html(tip);
                $($('#headerMsgPaidArticles span')[1]).html('$'+price);
                $('#headerMsgPaidArticles span').unbind();
                $($('#headerMsgPaidArticles span')[0]).on('click',function (){
                    window.location.href='/post/'+url;
                })
                $($('#headerMsgPaidArticles span')[1]).on('click',function (){
                    window.location.href='/shopper/thumbs/index?ref=shopper_post';
                })
            }
            clearMessageRed(this);
            return ;
        }
        if(!$(this).hasClass("noTarget")){
            window.location.href=$(this).attr('href');
        }else if($(this).attr('data-id')){
            var newThis = $(this);
            var data={
                art_product_report_id:$(this).attr('data-id'),
                message_id:$(this).attr('data-message')
            }
            $.ajax({
                url:"/shopper/my/seller-reply",
                type:'post',
                data:data,
                dataType:'json',
                success:function (data) {
                    if(data.code==200){
                        $('#headerSellerMsg .product-msg').attr('href',"https://www.myvipon.com/product/"+data.data.product_id);
                        $('#headerSellerMsg .msg-show-product .btn').attr('href',"https://www.myvipon.com/product/"+data.data.product_id);
                        $('#headerSellerMsg .product-msg .msg-left-img img').attr('src',data.data.image_large);
                        $('#headerSellerMsg .product-msg .product-msg-title').html(data.data.art_name);
                        $('#headerSellerMsg .buyer-msg .buyer-msg-time').html(data.data.c_time);
                        $('#headerSellerMsg .buyer-msg .buyer-msg-text').html(data.data.feedback_reason);
                        $('#headerSellerMsg .seller-msg .seller-msg-time span').html(data.data.r_time);
                        $('#headerSellerMsg .seller-msg .seller-msg-text').html(data.data.seller_reply);
                        $('#headerSellerMsg').modal('show');
                        if(newThis.find('.msg-head-title').length>0&&newThis.find('.msg-head-title').css('display')!='none'){
                            newThis.find('.msg-head-title').css('display','none');
                            var num = $('#header .dropdown .btn .number').html()-1;
                            if(num>0){
                                $('#header .dropdown .btn .number').html(num);
                            }else{
                                $('#header .dropdown .btn .number').html(0);
                            }
                        }

                    }
                },
                error:function (err) {

                }
            })
        }else{
            clearMessageRed(this);
        }
    });
    //Category select
    $('#header .head-search .dropdown-menu > li > a').on('click', function (e) {
        e.preventDefault();
        $('#dropdownMenu1 .text-category').html($(this).html());
        $('#header .head-search .dropdown-menu > li > a.active').removeClass('active');
        $(this).addClass('active');

        //成人分类点击追踪
        if ($(this).attr('data-group') == 'adult-products') {
            clickRecord(32)
        }
    })
    //flag select
    $('.flag .dropdown-menu>li').bind('click', function () {
        var domain = $(this).data('domain');
        var flag_src = $(this).find('img').attr('src');
        $('.flag>a img').attr("src", flag_src);
        setCookie("d2018", domain, 365);
        $.ajax({
            url:"/main/change-domain",
            type:'post',
            data:{"domain":domain},
            dataType:'json',
            success:function (data) {},
            error:function (err) {}
        });
        window.location.reload();
    });

    function setCookie(name, value, days) {
        var exp = new Date();
        exp.setTime(exp.getTime() + days * 24 * 60 * 60 * 1000);
        document.cookie = name + "=" + value + ";expires=" + exp.toGMTString() + ';domain=.myvipon.com;path=/';
    }

    $(function () {
        /*自动完成获取推荐关键词*/
        var ajaxPost = false;
        var search_index = 0;
        $("#header .head-search input").bind("input propertychange", function () {
            if ($(this).val() != "") {
                if ($(this).attr('id') == 'search') {
                    search_index = 0
                } else if ($(this).attr('id') == 'm_search') {
                    search_index = 1
                }
                ;
                if (ajaxPost != false) {
                    ajaxPost.abort();
                }
                $(".completer-container").eq(search_index).hide();
                ajaxPost = $.post("/completion/search", {"keywords": $(this).val()}, function (data) {

                    if (data.data.length > 0) {
                        var html = '';
                        $.each(data.data, function (i, item) {
                            html += "<li role=\"presentation\">\n" +
                                "     <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">" + item.keyword + "</a>\n" +
                                "</li>"
                        })
                        $("#header .search-input ul").html(html);
                        $("#header .search-input ul").show();
                        /*推荐关键词绑定点击事件*/
                        $("#header .head-search .search-input a").on('click', function (e) {
                            e.preventDefault();
                            var search = $(this).text();
                            $("#header .head-search input").val(search);
                            if (search != '') {
                                search = search.replace(/<|>/g, "");
                                var search = encodeURIComponent(search);
                                window.location.href = "/promotion/index" + "?search=" + search + '&group=' + $('#header .head-search .dropdown-menu > li > a.active').attr('data-group');
                            }
                        });
                    }
                })
            } else {
                // $(".completer-container").eq(search_index).hide();
                if (ajaxPost != false) {
                    ajaxPost.abort();
                }
            }
        })


    })
    $(document).on('click', function () {
        $("#header .head-search .search-input ul").hide();
    })
    //菜单关键字搜索事件
    $('#header .head-search .btn-search').on('click', function () {

        <!-- BingConversion -->
        //bing_search_button();
        <!-- BingConversion end -->

        var search = $('#header .head-search input').val();
        // if(!search) return;
        search = search.replace(/<|>/g, "");
        var search = encodeURIComponent(search);
        // console.log($('#header .head-search .dropdown-menu > li > a.active').text())
        window.location.href = "/promotion/index" + "?search=" + search + '&group=' + $('#header .head-search .dropdown-menu > li > a.active').attr('data-group');
    });
    $('#header .head-search input').on('keydown', function (e) {//enter搜索
        if (e.keyCode === 13) {
            var search = $('#header .head-search input').val();
            // if(!search) return;
            search = search.replace(/<|>/g, "");
            var search = encodeURIComponent(search);
            window.location.href = "/promotion/index" + "?search=" + search + '&group=' + $('#header .head-search .dropdown-menu > li > a.active').attr('data-group');
        }
    })

        function adjustmentImgSize(arrayElement,scale=1) {
        let width = parseInt($(arrayElement).css('width'));
        let height = parseInt($(arrayElement).css('height'));
        if(width>0&&height>0){
            if(width/height>=scale){
                $(arrayElement).css({
                    'height':'100%',
                    'width':'auto'
                });
                let timer = setTimeout(function () {
                    clearTimeout(timer);
                    width = parseInt($(arrayElement).css('width'));
                    $(arrayElement).css({
                        'left':'-'+(width-parseInt($(arrayElement).parent().width()))/2+'px',
                        top:0
                    })
                },500)
            }else{
                $(arrayElement).css({
                    'width':'100%',
                    'height':'auto',
                })
                let timer = setTimeout(function () {
                    clearTimeout(timer);
                    height = parseInt($(arrayElement).css('height'));
                    $(arrayElement).css({
                        'top': '-' + (height - parseInt($(arrayElement).parent().height())) / 2 + 'px',
                        left: 0
                    })
                },500)
            }
        }
    }
    $('#headerSellerMsg').on('shown.bs.modal',function () {
        adjustmentImgSize($('.product-msg img')[0])
    })
    let headerMyCarouselText = JSON.parse(`["Congratulations! \u3010Angel05\u3011 has earned $52 from Vipon.","Congratulations! \u3010Nexus7\u3011 has earned $20 from Vipon.","Congratulations! \u3010kalipsobg\u3011 has earned $30 from Vipon.","Congratulations! \u3010VIPON_111568333049\u3011 has earned $20 from Vipon.","Congratulations! \u3010VIPON_931568569102\u3011 has earned $22 from Vipon.","Congratulations! \u3010VIPON_951572900907\u3011 has earned $21 from Vipon.","Congratulations! \u3010V_e3071\u3011 has earned $20 from Vipon.","Congratulations! \u3010V_05HTN3M3\u3011 has earned $20 from Vipon.","Congratulations! \u3010V_e5335\u3011 has earned $20 from Vipon.","Congratulations! \u3010V_27EMNGTQ\u3011 has earned $20 from Vipon.","Congratulations! \u3010V_18EOOS7T\u3011 has earned $20 from Vipon.","Congratulations! \u3010V3363\u3011 has earned $20 from Vipon.","Congratulations! \u3010VIPON_251575263306\u3011 has earned $20 from Vipon.","Congratulations! \u3010V_S2IBUSG0\u3011 has earned $20 from Vipon.","Congratulations! \u3010V_V1G3DURF\u3011 has earned $20 from Vipon.","Congratulations! \u3010V_E05RR923\u3011 has earned $20 from Vipon.","Congratulations! \u3010V_4MON659P\u3011 has earned $20 from Vipon.","Congratulations! \u3010VIPON_451570262726\u3011 has earned $20 from Vipon.","Congratulations! \u3010V_CLURMIIO\u3011 has earned $20 from Vipon.","Congratulations! \u3010JBayron\u3011 has earned $20 from Vipon.","Congratulations! \u3010SP\u3011 has earned $20 from Vipon.","Congratulations! \u3010Richie Rich\u3011 has earned $20 from Vipon.","Congratulations! \u3010V_06RJJ08E\u3011 has earned $20 from Vipon.","Congratulations! \u3010V_e4051\u3011 has earned $20 from Vipon.","Congratulations! \u3010V_e5912\u3011 has earned $20 from Vipon.","Congratulations! \u3010VIPON_611575901144\u3011has received 15 points from Vipon.","Congratulations! \u3010VIPON_221575954084\u3011has received 10 points from Vipon.","Congratulations! \u3010GETALLCODE\u3011has received 15 points from Vipon.","Congratulations! \u3010VIPON_991576769526\u3011has received 20 points from Vipon.","Congratulations! \u3010V8801\u3011has received 15 points from Vipon.","Congratulations! \u3010AHCB2020\u3011has received 20 points from Vipon.","Congratulations! \u3010V_3QBALPN6\u3011has received 15 points from Vipon.","Congratulations! \u3010VIPON_471568907017\u3011has received 50 points from Vipon.","Congratulations! \u3010VIPON_281568173093\u3011has received 15 points from Vipon.","Congratulations! \u3010VIPON_371577025179\u3011has received 10 points from Vipon.","Congratulations! \u3010V_TDMAV7LQ\u3011has received 20 points from Vipon.","Congratulations! \u3010V_e1050\u3011has received 20 points from Vipon.","Congratulations! \u3010V_OPSFR7A4\u3011has received 10 points from Vipon.","Congratulations! \u3010thepsenevyfx\u3011has received 10 points from Vipon.","Congratulations! \u3010DORYAHOO\u3011has received 15 points from Vipon.","Congratulations! \u3010VIPON_411575900788\u3011has received 15 points from Vipon.","Congratulations! \u3010V_25888DC2\u3011has received 15 points from Vipon.","Congratulations! \u3010GETALLCODE\u3011has received 15 points from Vipon.","Congratulations! \u3010cacasan\u3011has received 50 points from Vipon.","Congratulations! \u3010GETALLCODE\u3011has received 20 points from Vipon.","Congratulations! \u3010V_PHQAO667\u3011has received 15 points from Vipon.","Congratulations! \u3010V_3JFUPLPT\u3011has received 15 points from Vipon.","Congratulations! \u3010V_O9LD8GR1\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_931577940805\u3011has received 10 points from Vipon.","Congratulations! \u3010V_6J3PDJH3\u3011has received 100 points from Vipon.","Congratulations! \u3010theesishsod\u3011has received 50 points from Vipon.","Congratulations! \u3010VIPON_861570032966\u3011has received 20 points from Vipon.","Congratulations! \u3010VIPON_901577025418\u3011has received 15 points from Vipon.","Congratulations! \u3010Agustina01\u3011has received 15 points from Vipon.","Congratulations! \u3010VIPON_331568626110\u3011has received 10 points from Vipon.","Congratulations! \u3010V_IQUTQB2M\u3011has received 10 points from Vipon.","Congratulations! \u3010V_6V8IL7EN\u3011has received 10 points from Vipon.","Congratulations! \u3010V_PHQAO667\u3011has received 10 points from Vipon.","Congratulations! \u3010V_S7FMAOTK\u3011has received 10 points from Vipon.","Congratulations! \u3010V_7CKG779U\u3011has received 10 points from Vipon.","Congratulations! \u3010V_1GKPPFIO\u3011has received 1000 points from Vipon.","Congratulations! \u3010VIPON_611573168213\u3011has received 15 points from Vipon.","Congratulations! \u3010VIPON_501602401694\u3011has received 10 points from Vipon.","Congratulations! \u3010V_e3463\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_511577477363\u3011has received 10 points from Vipon.","Congratulations! \u3010V_JB8DFRH7\u3011has received 20 points from Vipon.","Congratulations! \u3010VIPON_341568906889\u3011has received 20 points from Vipon.","Congratulations! \u3010VIPON_491577024779\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_161568744638\u3011has received 15 points from Vipon.","Congratulations! \u3010V4280\u3011has received 10 points from Vipon.","Congratulations! \u3010V_TF8CDAFM\u3011has received 10 points from Vipon.","Congratulations! \u3010V_DFE4C6S9\u3011has received 1000 points from Vipon.","Congratulations! \u3010V_GBEBB3RE\u3011has received 15 points from Vipon.","Congratulations! \u3010V_M7LBPQP9\u3011has received 20 points from Vipon.","Congratulations! \u3010V_V05C6JVG\u3011has received 10 points from Vipon.","Congratulations! \u3010V_1CLQKACU\u3011has received 10 points from Vipon.","Congratulations! \u3010V_E05RR923\u3011has received 10 points from Vipon.","Congratulations! \u3010V_IQUTQB2M\u3011has received 15 points from Vipon.","Congratulations! \u3010V_N5N0IBM7\u3011has received 20 points from Vipon.","Congratulations! \u3010V_3JFUPLPT\u3011has received 15 points from Vipon.","Congratulations! \u3010V_OK67LGE4\u3011has received 10 points from Vipon.","Congratulations! \u3010V_O9LD8GR1\u3011has received 20 points from Vipon.","Congratulations! \u3010VIPON_791575080320\u3011has received 15 points from Vipon.","Congratulations! \u3010Amazon Customer\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_701628445859\u3011has received 15 points from Vipon.","Congratulations! \u3010VIPON_811568906918\u3011has received 15 points from Vipon.","Congratulations! \u3010V_BE84LG4B\u3011has received 20 points from Vipon.","Congratulations! \u3010VIPON_371574823387\u3011has received 10 points from Vipon.","Congratulations! \u3010 wow.wow@usa.com \u3011has received 100 points from Vipon.","Congratulations! \u3010V_KF21DRCO\u3011has received 15 points from Vipon.","Congratulations! \u3010V_e6184\u3011has received 15 points from Vipon.","Congratulations! \u3010VIPON_791575080320\u3011has received 10 points from Vipon.","Congratulations! \u3010V_E05RR923\u3011has received 15 points from Vipon.","Congratulations! \u3010V_V9TGLLLO\u3011has received 20 points from Vipon.","Congratulations! \u3010V_TG3S9ABF\u3011has received 15 points from Vipon.","Congratulations! \u3010V_5LSBNSG9\u3011has received 10 points from Vipon.","Congratulations! \u3010V_7VKD5EKI\u3011has received 15 points from Vipon.","Congratulations! \u3010V_3JFUPLPT\u3011has received 10 points from Vipon.","Congratulations! \u3010V_O9LD8GR1\u3011has received 10 points from Vipon.","Congratulations! \u3010V_TF8CDAFM\u3011has received 10 points from Vipon.","Congratulations! \u3010V_N5B3JFHO\u3011has received 15 points from Vipon.","Congratulations! \u3010V_DM002EKV\u3011has received 10 points from Vipon.","Congratulations! \u3010V_EJ813CJV\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_741570729781\u3011has received 10 points from Vipon.","Congratulations! \u3010V_H5HHGJP6\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_921571158018\u3011has received 20 points from Vipon.","Congratulations! \u3010V_UJHOHFBU\u3011has received 20 points from Vipon.","Congratulations! \u3010V_D12G5VAJ\u3011has received 15 points from Vipon.","Congratulations! \u3010V_E5V2V7TT\u3011has received 10 points from Vipon.","Congratulations! \u3010V_5LSBNSG9\u3011has received 10 points from Vipon.","Congratulations! \u3010V_PHQAO667\u3011has received 20 points from Vipon.","Congratulations! \u3010V_3JFUPLPT\u3011has received 10 points from Vipon.","Congratulations! \u3010V_2T5G0OEA\u3011has received 15 points from Vipon.","Congratulations! \u3010V_V1G3DURF\u3011has received 15 points from Vipon.","Congratulations! \u3010V_O9LD8GR1\u3011has received 10 points from Vipon.","Congratulations! \u3010V_O016E5F2\u3011has received 50 points from Vipon.","Congratulations! \u3010V_9HBGE2U8\u3011has received 15 points from Vipon.","Congratulations! \u3010V_N5B3JFHO\u3011has received 15 points from Vipon.","Congratulations! \u3010V_1GKPPFIO\u3011has received 1000 points from Vipon.","Congratulations! \u3010V_DE3T5PIL\u3011has received 20 points from Vipon.","Congratulations! \u3010V_e4161\u3011has received 10 points from Vipon.","Congratulations! \u3010V_e3062\u3011has received 15 points from Vipon.","Congratulations! \u3010VIPON_381575900469\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_571570941448\u3011has received 10 points from Vipon.","Congratulations! \u3010V_HJ3SA0I6\u3011has received 15 points from Vipon.","Congratulations! \u3010V_MOPUDBI9\u3011has received 1000 points from Vipon.","Congratulations! \u3010V_AHFSQO9T\u3011has received 15 points from Vipon.","Congratulations! \u3010V_E5V2V7TT\u3011has received 10 points from Vipon.","Congratulations! \u3010V_PHQAO667\u3011has received 10 points from Vipon.","Congratulations! \u3010V_OK67LGE4\u3011has received 10 points from Vipon.","Congratulations! \u3010V_UFJ9L5H8\u3011has received 20 points from Vipon.","Congratulations! \u3010V_7CKG779U\u3011has received 20 points from Vipon.","Congratulations! \u3010V_PEG9S2CS\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_661578126740\u3011has received 20 points from Vipon.","Congratulations! \u3010 wow.wow@usa.com \u3011has received 20 points from Vipon.","Congratulations! \u3010VIPON_331568424020\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_531640026417\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_111605287668\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_341568906889\u3011has received 10 points from Vipon.","Congratulations! \u3010V_e3062\u3011has received 10 points from Vipon.","Congratulations! \u3010GETALLCODE\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_331568626110\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_361578242118\u3011has received 15 points from Vipon.","Congratulations! \u3010VIPON_891575900580\u3011has received 10 points from Vipon.","Congratulations! \u3010V_8VCVKRP4\u3011has received 100 points from Vipon.","Congratulations! \u3010V_FSPM5M6R\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_751571771065\u3011has received 10 points from Vipon.","Congratulations! \u3010V_DBVV0I3U\u3011has received 100 points from Vipon.","Congratulations! \u3010V_IQ1F5VOD\u3011has received 10 points from Vipon.","Congratulations! \u3010V_1GKPPFIO\u3011has received 10 points from Vipon.","Congratulations! \u3010V_N5B3JFHO\u3011has received 10 points from Vipon.","Congratulations! \u3010V_ETVRUKDT\u3011has received 15 points from Vipon.","Congratulations! \u3010V_UFJ9L5H8\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_491577024779\u3011has received 15 points from Vipon.","Congratulations! \u3010V_95PTTL8R\u3011has received 20 points from Vipon.","Congratulations! \u3010V_E05RR923\u3011has received 20 points from Vipon.","Congratulations! \u3010V_E5V2V7TT\u3011has received 10 points from Vipon.","Congratulations! \u3010V_V9TGLLLO\u3011has received 10 points from Vipon.","Congratulations! \u3010V_894L4GVV\u3011has received 10 points from Vipon.","Congratulations! \u3010V_3JFUPLPT\u3011has received 10 points from Vipon.","Congratulations! \u3010V_V1G3DURF\u3011has received 10 points from Vipon.","Congratulations! \u3010V_DC3KOMRC\u3011has received 10 points from Vipon.","Congratulations! \u3010V_RGI74HDI\u3011has received 15 points from Vipon.","Congratulations! \u3010VIPON_581584811524\u3011has received 20 points from Vipon.","Congratulations! \u3010VIPON_331568626110\u3011has received 10 points from Vipon.","Congratulations! \u3010V_e1082\u3011has received 10 points from Vipon.","Congratulations! \u3010V_e9608\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_741629583729\u3011has received 1000 points from Vipon.","Congratulations! \u3010V3301\u3011has received 100 points from Vipon.","Congratulations! \u3010V2329\u3011has received 15 points from Vipon.","Congratulations! \u3010VIPON_341568906889\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_771573740474\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_861570032966\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_571568394753\u3011has received 15 points from Vipon.","Congratulations! \u3010Knut21\u3011has received 10 points from Vipon.","Congratulations! \u3010GETALLCODE\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_111569659334\u3011has received 15 points from Vipon.","Congratulations! \u3010JMKPriest\u3011has received 10 points from Vipon.","Congratulations! \u3010V_HJ3SA0I6\u3011has received 10 points from Vipon.","Congratulations! \u3010V_M7LBPQP9\u3011has received 20 points from Vipon.","Congratulations! \u3010V_MOPUDBI9\u3011has received 10 points from Vipon.","Congratulations! \u3010V_3R2G8P5Q\u3011has received 20 points from Vipon.","Congratulations! \u3010V_4MON659P\u3011has received 10 points from Vipon.","Congratulations! \u3010V_UKL839I2\u3011has received 10 points from Vipon.","Congratulations! \u3010V_LAI0GTBH\u3011has received 10 points from Vipon.","Congratulations! \u3010V_MEGADFM5\u3011has received 15 points from Vipon.","Congratulations! \u3010V_O9LD8GR1\u3011has received 20 points from Vipon.","Congratulations! \u3010VIPON_581569816267\u3011has received 20 points from Vipon.","Congratulations! \u3010V_A7C71BBF\u3011has received 10 points from Vipon.","Congratulations! \u3010S. Taylor\u3011has received 10 points from Vipon.","Congratulations! \u3010V1412\u3011has received 15 points from Vipon.","Congratulations! \u3010Volantis\u3011has received 15 points from Vipon.","Congratulations! \u3010VIPON_811568906918\u3011has received 15 points from Vipon.","Congratulations! \u3010V3301\u3011has received 10 points from Vipon.","Congratulations! \u3010VIPON_721629625797\u3011has received 15 points from Vipon.","Congratulations! \u3010VIPON_991575899643\u3011has received 100 points from Vipon.","Congratulations! \u3010VIPON_181575901532\u3011has received 15 points from Vipon.","Congratulations! \u3010VIPON_561568705747\u3011has received 10 points from Vipon.","Congratulations! \u3010V_03PDBMAC\u3011has received 10 points from Vipon.","Congratulations! \u3010V_e1050\u3011has received 10 points from Vipon."]`);
    if (headerMyCarouselText.length > 0) {
        let html = '';
        headerMyCarouselText.map(function (val) {
            html += `<li>${val}</li>`
        })
        $('.carousel-text .carousel-text-main1 ul').html(html);
        $('.carousel-text .carousel-text-main1').width(headerMyCarouselText.length*500+'%')
        // carouselText();
    } else {
        $('#header .carousel-text').hide();
        $('#header > div:last-child').addClass('carousel-text-not');
    }

    function carouselText() {
        let speed = 30; //数字越du大速度越慢
        let tab = document.querySelector('#header .carousel-text-border');
        let tab1 = document.querySelector("#header .carousel-text-main2");
        let tab2 = document.querySelector("#header .carousel-text-main3");

        function Marquee() {
            if (tab2.offsetWidth - tab.scrollLeft <= 0) {
                tab.scrollLeft -= tab1.offsetWidth;
            } else {
                tab.scrollLeft++;
            }
        }

        this.myCarouselText = setInterval(Marquee, speed);
    }
    $('.recommend-lists').children().css({"color":"#999999","text-decoration": "none"});
    $('.orange').css({"color":"#FF6121"});

    // 获取cookie函数
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i].trim();
            if (c.indexOf(name) == 0) {
                return unescape(c.substring(name.length, c.length))
            }
        }
        return '';
    }

    // 获取登录积分函数
    /*function loginPoint() {
        $.ajax({
            url: '/point/login-point',
            type: 'get',
            data: null,
            success: function (res) {
            },
            error: function (xhr, status, error) {
            }
        })
    }*/

    // 自动判断是否要请求后台登录获取积分接口
    /*var login_point = getCookie('login_point');
    $(document).ready(function () {
            if (!login_point) {
                loginPoint();
            }
        }
    );*/

    $("#bf_entrance").click(function(){
        if($(".second-level").css('display')=='block'){
            $(".second-level").hide();
        }else{
            $(".second-level").show();
        }
    })

    //统计点击blog
    $(".new_blog").click(function () {
        $.ajax({
            url:"/main/blog-click",
            type:'post',
            dataType:'json',
            success:function (data) {},
            error:function (err) {}
        });

    })
</script>
<script src="{{ asset('user_dashboard/js/sweetalert.js') }}"></script>

    <script src="{{ asset('user_dashboard/js/summernote.min.js') }}"></script>
    <script src="{{ asset('user_dashboard/js/custom.js') }}"></script>
    <script src="{{ asset('user_dashboard/js/jquery.dataTables.min.js') }}"></script>
    {{--<script src="{{ asset('user_dashboard/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('user_dashboard/js/dataTables.responsive.min.js') }}"></script>--}}
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    {{-- <script src="{{ asset('user_dashboard/js/responsive.bootstrap4.min.js') }}"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

</body>
</html>
