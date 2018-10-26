<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title> SmartAdmin </title>
		<meta name="description" content="">
		<meta name="author" content="">
			
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Basic Styles -->
		{{--<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">--}}
		{{--<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">--}}

		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
		{{--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/FontAwesome.otf" rel="stylesheet">--}}

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		{{--<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production-plugins.min.css">--}}
		{{--<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.min.css">--}}
		{{--<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.min.css">--}}

		<link href="{{ asset('css/smartadmin-production-plugins.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/smartadmin-production.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/smartadmin-skins.min.css') }}" rel="stylesheet">

		<!-- SmartAdmin RTL Support  -->
		{{--<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css">--}}
		<link href="{{ asset('css/smartadmin-rtl.min.css') }}" rel="stylesheet">
		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->
		<link rel="stylesheet" href="{{ asset('css/css') }}">
		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/demo.min.css')}}">

		<!-- FAVICONS -->
		<link href="{{ asset('img/favicon/favicon.ico') }}" rel="stylesheet">
		<link href="{{ asset('img/favicon/favicon.ico') }}" rel="stylesheet">
		<!-- GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href=" {{asset('img/splash/sptouch-icon-iphone.png')}}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/splash/touch-icon-ipad.png')}}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/splash/touch-icon-iphone-retina.png')}}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/splash/touch-icon-ipad-retina.png')}}">
		
		<!-- iOS web-app metas : hides Safari pages Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!-- Startup image for web apps -->
		<link rel="apple-touch-startup-image" href="{{asset('img/splash/ipad-landscape.png')}}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
		<link rel="apple-touch-startup-image" href="{{asset('img/splash/ipad-portrait.png')}}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="{{asset('img/splash/iphone.png')}}" media="screen and (max-device-width: 320px)">
		<style type="text/css">
			body {
				font-family: "Open Sans",Arial,Helvetica,Sans-Serif;
				font-size: 13px;
				line-height: 1.42857143;
				color: #333;
				background-color: #fff;
			}
			nav ul .active>a {
				color: #fff!important;
				position: relative;
			}
			.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
	</head>

	