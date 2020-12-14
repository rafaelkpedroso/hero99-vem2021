<!DOCTYPE html>
<html class="no-js" lang="pt_BR">

<head>
    <meta charset="utf-8">

    <!-- Page Title-->
    <title>vem, 2021! Hero99</title>

    <!-- Viewport Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Template Favicon & Icons Start -->
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64 96x96" href="/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/    img/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/favicon/android-chrome-192x192.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#25237e">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="msapplication-TileColor" content="#fc466b">
    <!-- Template Favicon & Icons End-->

    <!-- Template Styles Start -->
    <link rel="stylesheet" type="text/css" href="/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="/css/loaders/loader.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!-- Template Styles End-->

    <!-- Custom Browser Color Start-->
    <meta name="theme-color" content="#fc466b">
    <meta name="msapplication-navbutton-color" content="#fc466b">
    <meta name="apple-mobile-web-app-status-bar-style" content="#fc466b">
    <!-- Custom Browser Color End-->


    <style>
        #me-avatar{
            height: 40px;
            width: auto;
            border-radius: 100px;
            border:  solid 2px white;
        }
        #me-name{
            color: white;
        }
        #me-menu{
            color: white;
            font-size: 10px;
        }
        #guy-avatar{
            display: inline-block;
            float: left;
            height: 90px;
            margin-right: 20px;
            width: auto;
            border-radius: 100px;
            border:  solid 2px white;
        }
        .item-profile-message{
            color: white;
        }
        .item-profile-message a{
            color: white;
        }
        .item-profile-message h3{
            color: white;
        }
        #me-menu a{
            color: white;
        }
        #fortalecer-link{
            color: white;
            cursor:pointer;
        }
        .fortalecer-link{
            color: white;
            cursor:pointer;
        }
        #fortalecer-link:active{
            color: white;
            font-weight: bold;
        }
        @media (max-width: 1200px) {
            .socials-absolute {
                position: absolute;
                bottom: 3.3rem;
                left: 120px;
                top: 10px;
                z-index: 90;
            }
        }
    </style>
</head>

<body class="fullscreen">

<!-- Old Browsers Support Start -->
<!--[if lt IE 9]>
<script src="/js/libs/es5-shim.min.js"></script>
<script src="/js/libs/html5shiv.min.js"></script>
<script src="/js/libs/html5shiv-printshiv.min.js"></script>
<script src="/js/libs/respond.min.js"></script>
<![endif]-->
<!-- Old Browsers Support End -->

<!-- Custom HTML Start -->

<!-- Loader Start-->
<div class="loader">
    <div class="loader__container">
        <div class="loader-content">
            <div class="loader-logo fadeIn">
                <!-- Your Logo Here -->

                <img src="{{URL::asset('/img/hero99-logo-black.png')}}">

            </div>
        </div>
    </div>
    <div class="loader__darkscreen"></div>
</div>
<!-- Loader End-->

<!-- Header Start -->
<header class="header transparent">

    <!-- Logo Start -->
    <div class="logo">
        <!-- Your Logo Here -->
        <a href="/">
        <img src="{{URL::asset('/img/hero99-logo-black.png')}}" style='height: 50px;'>

    </div>
    <!-- Logo End -->

    <!-- Menu Trigger Start -->
    <div class="menu-button">
        <a href="#0" id="menu-trigger" class="menu-trigger"><span></span></a>
    </div>
    <!-- Menu Trigger End -->

</header>
<!-- Header End -->

<!-- Copyright Start -->
<div class="side-copyright">
    <p><a href="https://www.hero99.com.br" target="_blank">Hero99</a> Team <br></p>
</div>
<!-- Copyright End -->

<!-- Navigation Start -->
<nav id="menu" class="menu transparent">
    <div class="container-fluid p-0 fullheight">
        <div class="row no-gutters fullheight">

            <!-- Menu Navigation Block Start -->
            <div class="col-12 col-xl-6 menu__navigation">
                <div class="navigation-container">
                    <!-- Navigation links -->
                    <ul class="navigation">
                        <li>
                            <a href="/" class="navigation__item">
                                <span class="subtitle">Welcome</span>
                                <span class="link">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="/messages" class="navigation__item">
                                <span class="subtitle">Veja todos as</span>
                                <span class="link">mensagens</span>
                            </a>
                        </li>
                        <li>
                            <a href="/regulamento" class="navigation__item">
                                <span class="subtitle">Regulamento e</span>
                                <span class="link">Como Funciona</span>
                            </a>
                        </li>
                        <li>
                            <a href="/meu-perfil"  class="navigation__item">
                                <span class="subtitle">Meu </span>
                                <span class="link">PERFIL</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Menu Navigation Block End -->

            <!-- Menu Media Block Start -->
            <div class="col-12 col-xl-6 menu__media">
                <div class="container-fluid p-0 fullheight-mobile">
                    <div class="row no-gutters fullheight-mobile">
                        <!-- Menu Images -->
                        <div class="col-2 fullheight media-object">
                            <div class="menu-image menu-image-1" style='background-image: url({{URL::asset('/img/menu-img-01.jpg')}})'></div>
                        </div>
                        <div class="col-2 fullheight media-object">
                            <div class="menu-image menu-image-2" style='background-image: url({{URL::asset('/img/menu-img-02.jpg')}})'></div>
                        </div>
                        <div class="col-2 fullheight media-object">
                            <div class="menu-image menu-image-3" style='background-image: url({{URL::asset('/img/menu-img-03.jpg')}})'></div>
                        </div>
                        <div class="col-2 fullheight media-object">
                            <div class="menu-image menu-image-4" style='background-image: url({{URL::asset('/img/menu-img-04.jpg')}})'></div>
                        </div>
                        <div class="col-2 fullheight media-object">
                            <div class="menu-image menu-image-5" style='background-image: url({{URL::asset('/img/menu-img-05.jpg')}})'></div>
                        </div>
                        <div class="col-2 fullheight media-object">
                            <div class="menu-image menu-image-6" style='background-image: url({{URL::asset('/img/menu-img-06.jpg')}})'></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu Media Block End -->

        </div>
    </div>
</nav>
<!-- Navigation End -->

<!-- Fullscreen Background Start-->
<div class="fullscreen-bg " style='background-image: url({{URL::asset('/img/backgrounds/bg-newyear.jpg')}})'>
    <!-- Dark gradient cover layer -->
    <div class="color-layer gradient-layer-dark-08"></div>
</div>
<!-- Fullscreen Background End-->
