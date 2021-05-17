@php
    $menu = \App\Models\Adfm\Menu::getData('main');
    // dd($menu);
    function subMenu($menu, $links){
        echo "<ul>";
        foreach ($links as $el) {
            echo "<li> $el->title";
            if(isset($menu[$el->id])){
                subMenu($menu, $menu[$el->id]);                
            }
            echo "</li>";
        }
        echo "</ul>";
    }
@endphp

    {{subMenu($menu, $menu[0])}}

@php(die);
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('meta-title')@show</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->
    <!-- <link rel="pingback" href="http://sp-metallurg.ru/xmlrpc.php"> -->
    <link rel="stylesheet" href="{{asset('css/app.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> --}}
    {{-- <link rel='stylesheet' id='main-style'  href='css/content/style.css' type='text/css' media='all' /> --}}
    <!-- <link rel='dns-prefetch' href='//ajax.googleapis.com' /> -->
    <!-- <link rel='dns-prefetch' href='//s.w.org' /> -->
    <!-- <link rel="alternate" type="application/rss+xml" title="sp-metallurg &raquo; Лента комментариев к &laquo;Главная&raquo;" href="http://sp-metallurg.ru/?feed=rss2&#038;page_id=2" /> -->
            <script type="text/javascript">
                window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/sp-metallurg.ru\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.6.4"}};
                !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
            </script>
            <style type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 .07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>
    {{-- <link rel='stylesheet' id='wp-block-library-css'  href='css/includes/style.min.css' type='text/css' media='all' /> --}}
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js?ver=5.6.4' id='jquery-js'></script>
    {{-- <script type='text/javascript' src='bootstrap/js/bootstrap.min.js' id='boot-script-js'></script> --}}
    {{-- <script type='text/javascript' src='js/content/plugins-scroll.js' id='scroll-script-js'></script> --}}
    {{-- <script type='text/javascript' src='js/content/function.js' id='func-script-js'></script> --}}
</head>
<body>
    <div id="page-preloader">
        <div class="cssload-square">
            <div class="cssload-square-part cssload-square-green"></div>
            <div class="cssload-square-part cssload-square-pink"></div>
            <div class="cssload-square-blend"></div>
        </div>	
    </div>
    <a href="#cur-up" title="Вверх"><div id="cur_up" class=""><i class="glyphicon glyphicon-menu-up"></i></div></a>
    <header id="cur-up">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-md-2 col-xs-4">
                    <div id="logo">
                        <a href="{{url('/')}}">
                        <img src="images/logo.jpg" class="img-responsive" alt="Логотип МЕТАЛУРГ" /></a>
                    </div>
                </div>
                <div class="col-xs-8 hidden-md  hidden-sm  hidden-lg">
                    <ul class="contact">
                        <li><a href="+73904221938"><b>Тел: </b>+7(39042) 2-19-38,</a><br><a href="tel:+73904224381"> +7(39042) 2-43-81&nbsp;</a></li>
                        <li><a href="mailto:sp-metallurg2003@yandex.ru"><b>e-mail: </b>sp-metallurg2003@yandex.ru</a></li>
                    </ul>	
                </div>							
                <div class="col-sm-4 col-md-5 col-lg-6 col-xs-12">
                    <div class="hed-text">
                    <h1>ООО «САНАТОРИЙ-ПРОФИЛАКТОРИЙ» «МЕТАЛЛУРГ»</h1>
                    </div>
                </div>	
                <div class="col-sm-6 col-md-5 col-lg-4 hidden-xs">
                    <ul class="contact">
                        <li><a href="+73904221938"><b>Тел: </b>+7(39042) 2-19-38,</a><br><a href="tel:+73904224381"> +7(39042) 2-43-81&nbsp;</a></li>
                        <li><a href="mailto:sp-metallurg2003@yandex.ru"><b>e-mail: </b>sp-metallurg2003@yandex.ru</a></li>
                    </ul>	
                </div>
                </div>				
            </div>		
        </div>
    </header>
    <div id="top-menu">
        <div class="container">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                   <h3 class="txt-m hidden-md  hidden-sm  hidden-lg">МЕНЮ САЙТА</h3> 
    <!-- <span class="navbar-brand">МЕНЮ</span> -->
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul id="menu-main_top-menu" class="nav navbar-nav center">
                    @php($links = \App\Models\Adfm\Menu::getData('main'))
                    @foreach ($links[0] as $el)
                        <li itemscope="itemscope" class="menu-item menu-item-type-post_type menu-item-object-page
                            @if(isset($links[$el->id]) && $el->id != 0)
                                menu-item-has-children dropdown"> 
                                <a title="{{$el->title}}" href="http://-" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle">{{$el->title}} <span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    @foreach ($links[$el->id] as $sub_el)
                                        <li itemscope="itemscope" class="menu-item menu-item-type-post_type menu-item-object-page @if($sub_el->link == url()->current()) current-menu-item page_item current_page_item active @endif"><a title="{{$sub_el->title}}" href="{{$sub_el->link}}">{{$sub_el->title}}</a></li>
                                    @endforeach
                                </ul>
                            @else
                            @if($el->link == url()->current() || $el->link == url()->current().'/') current-menu-item current_page_item active @endif">
                                <a title="{{$el->title}}" href="{{$el->link}}">{{$el->title}}</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
                </div>
                </div> 
            </nav>	
        </div>						
    </div>

    @yield('content')
    
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-4">
                    <img src="images/list.png" class="img-responsive" alt=""/>
                </div>
                <div class="col-sm-6 col-xs-8">
                    <ul class="footer-contact">
                        <li>ООО «Санаторий-профилакторий «Металлург»,Республика Хакасия г.Саяногорск, урочище «Ай-Дай»</li>
                        <li><a href="+73904221938"><b>Тел: </b>+7(39042) 2-19-38,</a><a href="tel:+73904224381"> +7(39042) 2-43-81&nbsp;</a></li>
                        <li>ИНН 1902017759</li>
                        <li><a href="mailto:sp-metallurg2003@yandex.ru"><b>e-mail: </b>sp-metallurg2003@yandex.ru</a></li>
                    </ul>					
                </div>
                <div class="col-sm-6"></div>
            </div>
            <div class="bton-line">
                <p>Copyright &copy; 2021  <a href="http://sp-metallurg.ru">sp-metallurg</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div> 
{{-- <script type='text/javascript' src='js/includes/wp-embed.min.js' id='wp-embed-js'></script> --}}
<script type='text/javascript' src='{{asset('js/app.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/app.js')}}'></script>
</body>
</html>
