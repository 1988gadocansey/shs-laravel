
<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>
    <meta name="_token" content="{!! csrf_token() !!}"/>
     <title>@yield('title', app_name())</title>


    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

     <link rel="stylesheet" href="{!! url('assets/plugins/uikit/css/uikit.almost-flat.min.css') !!} " media="all">


    <link rel="stylesheet" href="{!! url('assets/css/main.min.css') !!}" media="all">
    <link rel="stylesheet" href="{!! url('assets/css/combined.min.css') !!}" media="all">
 <link rel="stylesheet" href="{!! url('assets/css/login_page.min.css') !!}" media="all">


</head>
<body class="login_page">

    <div class="login_page_wrapper">
        <div class="md-card" id="login_card">
             
         @yield('content')
       
    
        </div>
    </div>
    <center><small style="font-size: 11px">&copy <?php echo  date('Y'); ?> | <a href="http://www.gadeksystems.com" target="_">www.gadeksystems.com</a></small></center>         
      
    <script src="{!! url('assets/js/common.min.js') !!}"></script>
       <!-- uikit functions -->
    <script src="{!! url('assets/js/uikit_custom.min.js') !!}"></script>

    <!-- altair common functions/helpers -->
    <script src="{!! url('assets/js/altair_admin_common.min.js') !!}"></script>
    <script src="{!! url('assets/js/uikit/uikit.min.js') !!}"></script>

</body>
</html>