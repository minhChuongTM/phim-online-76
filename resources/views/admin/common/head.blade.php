<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

{{-- CSS --}}
<link rel="stylesheet" href="{{asset('admin')}}/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="{{asset('admin')}}/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="{{asset('admin')}}/css/magnific-popup.css">
<link rel="stylesheet" href="{{asset('admin')}}/css/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" href="{{asset('admin')}}/css/select2.min.css">
<link rel="stylesheet" href="{{asset('admin')}}/css/ionicons.min.css">
<link rel="stylesheet" href="{{asset('admin')}}/css/admin.css">
<link rel="stylesheet" href="{{asset('admin')}}/css/mystyle.css">

<!-- Favicons -->
<link rel="icon" type="image/png" href="{{asset('admin')}}/icon/favicon-32x32.png" sizes="32x32">
<link rel="apple-touch-icon" href="{{asset('admin')}}/icon/favicon-32x32.png">

<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Dmitry Volkov">
<title>@yield('module', 'Login') @yield('action')</title>