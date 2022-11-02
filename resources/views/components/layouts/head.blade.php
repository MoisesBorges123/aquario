
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="Admitro - Admin Panel HTML template" name="description">
		<meta content="{{config('app.author','')}}" name="author">
		<meta name="keywords" content="admin panel ui, user dashboard template, web application templates, premium admin templates, html css admin templates, premium admin templates, best admin template bootstrap 4, dark admin template, bootstrap 4 template admin, responsive admin template, bootstrap panel template, bootstrap simple dashboard, html web app template, bootstrap report template, modern admin template, nice admin template"/>        						
        <title>{{ !empty($title) ? config('app.name', 'Laravel') .' | '. $title : "Aquario" }}</title>
		<!--Favicon -->
		<link rel="icon" href="{{URL::asset('assets/images/brand/favicon.ico')}}" type="image/x-icon"/>

		<!--Bootstrap css -->
		<link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

		<!-- Style css -->
		<link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/css/dark.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/css/skin-modes.css')}}" rel="stylesheet" />

		<!-- Animate css -->
		<link href="{{URL::asset('assets/css/animated.css')}}" rel="stylesheet" />

		<!--Sidemenu css -->
       <link href="{{URL::asset('assets/css/sidemenu.css')}}" rel="stylesheet">

		<!-- P-scroll bar css-->
		<link href="{{URL::asset('assets/plugins/p-scrollbar/p-scrollbar.css')}}" rel="stylesheet" />

		<!---Icons css-->
		<link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet" />
		@yield('css')
	
		<!-- Simplebar css -->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/simplebar/css/simplebar.css')}}">

	    <!-- Color Skin css -->
		<link id="theme" href="{{URL::asset('assets/colors/color1.css')}}" rel="stylesheet" type="text/css"/>

	