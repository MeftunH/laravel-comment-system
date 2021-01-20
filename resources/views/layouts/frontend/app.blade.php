<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Winku Social Network Toolkit</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{asset('frontend/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">

@include('layouts.frontend.partials.navbar')


    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="widget">
                        <div class="foot-logo">
                            <div class="logo">
                                <a href="index-2.html" title=""><img src="images/logo.png" alt=""></a>
                            </div>
                            <p>
                                The trio took this simple idea and built it into the world’s leading carpooling platform.
                            </p>
                        </div>
                        <ul class="location">
                            <li>
                                <i class="ti-map-alt"></i>
                                <p>33 new montgomery st.750 san francisco, CA USA 94105.</p>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>+1-56-346 345</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="widget">
                        <div class="widget-title"><h4>follow</h4></div>
                        <ul class="list-style">
                            <li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
                            <li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en" title="">twitter</a></li>
                            <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en" title="">instagram</a></li>
                            <li><i class="fa fa-google-plus-square"></i> <a href="https://plus.google.com/discover" title="">Google+</a></li>
                            <li><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/" title="">Pintrest</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="widget">
                        <div class="widget-title"><h4>Navigate</h4></div>
                        <ul class="list-style">
                            <li><a href="about.html" title="">about us</a></li>
                            <li><a href="contact.html" title="">contact us</a></li>
                            <li><a href="terms.html" title="">terms & Conditions</a></li>
                            <li><a href="#" title="">RSS syndication</a></li>
                            <li><a href="sitemap.html" title="">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="widget">
                        <div class="widget-title"><h4>useful links</h4></div>
                        <ul class="list-style">
                            <li><a href="#" title="">leasing</a></li>
                            <li><a href="#" title="">submit route</a></li>
                            <li><a href="#" title="">how does it work?</a></li>
                            <li><a href="#" title="">agent listings</a></li>
                            <li><a href="#" title="">view All</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="widget">
                        <div class="widget-title"><h4>download apps</h4></div>
                        <ul class="colla-apps">
                            <li><a href="https://play.google.com/store?hl=en" title=""><i class="fa fa-android"></i>android</a></li>
                            <li><a href="https://www.apple.com/lae/ios/app-store/" title=""><i class="ti-apple"></i>iPhone</a></li>
                            <li><a href="https://www.microsoft.com/store/apps" title=""><i class="fa fa-windows"></i>Windows</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- footer -->
    <div class="bottombar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
                    <i><img src="images/credit-cards.png" alt=""></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="side-panel">
    <h4 class="panel-title">General Setting</h4>
    <form method="post">
        <div class="setting-row">
            <span>use night mode</span>
            <input type="checkbox" id="nightmode1"/>
            <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
        </div>

        <div class="setting-row">
            <span>My profile</span>
            <input type="checkbox" id="switch44" />
            <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
        </div>

    </form>
    <h4 class="panel-title">Account Setting</h4>
    <form method="post">
        <div class="setting-row">
            <span>Sub users</span>
            <input type="checkbox" id="switch66" />
            <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
        </div>

    </form>
</div><!-- side panel -->

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('frontend/js/main.min.js')}}"></script>
<script src="{{asset('frontend/js/script.js')}}"></script>
<script src="{{asset('frontend/js/map-init.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>


</body>

</html>
