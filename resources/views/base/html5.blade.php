<!DOCTYPE html>
<html lang="@yield('html_lang', 'zh-Hant-TW')">
<head>
	<title>@yield('head_title', 'will')</title>
	<meta charset="@yield('head_charset', 'UTF-8')">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" type="image/png" href="{{ asset("favicon.png") }}">
	<!-- Styles -->
	@include('base.css')
	<!-- CSS Category -->
@yield('categoryCss')
	<!-- CSS Custom -->
@yield('customCss')
</head>
<body>
@yield('content')
<!-- Javascript -->
@include('base.js')
<!-- JS Category -->
@yield('categoryJs')
<!-- JS Custom -->
@yield('customJs')
</body>
</html>