<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin panel</title>
    <meta name="description" content="Admin panel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('backend/apple-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('backend/favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend/vendors/font-awesome/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend/vendors/themify-icons/css/themify-icons.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend/vendors/flag-icon-css/css/flag-icon.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend/vendors/selectFX/css/cs-skin-elastic.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend/vendors/jqvmap/dist/jqvmap.min.css')}}"/>


    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="dashboard"><img src="{{asset('backend/images/logo.png')}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="dashboard"><img src="{{asset('backend/images/logo2.png')}}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{route('admin.dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Home </a>
                    <a href="{{ url('/logout') }}"> <i class="menu-icon fa fa-sign-out"></i>Logout </a>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->







</div> <!-- .content -->
@yield('content')
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="{{asset('backend/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('backend/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/assets/js/main.js')}}"></script>


<script src="{{asset('backend/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
<script src="{{asset('backend/assets/js/dashboard.js')}}"></script>
<script src="{{asset('backend/assets/js/widgets.js')}}"></script>
<script src="{{asset('backend/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script src="{{asset('backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>

</body>

</html>
