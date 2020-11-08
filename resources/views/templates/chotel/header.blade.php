<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Laluna Hội An Riverside</title>
	<link rel="stylesheet" href="{{$publicUrl}}/css/styles.css" type="text/css" />
	<script src="{{$publicUrl}}/js/jquery-1.10.2.js"></script>
   <script src="{{$publicUrl}}/js/jquery.metisMenu.js"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
	<div id="header">
		<div class="area">
			<div id="logo">
				<a href="{{route('chotel.index.index')}}"><img src="{{$publicUrl}}/images/Laluna Hội An Riverside.jpg" alt="LOGO" height="86" width="170" /></a>
			</div>
			<div>
				<div>
					@php
						if(Auth::check()){
						$user = Auth::user();
						$username = $user->username;
						
					@endphp
					<a href="{{ route('chotel.login') }}"><span>{{ $username }}</span></a>
					<a href="{{ route('chotel.logout') }}"><span>Logout</span></a>
					@php
						}else{
					@endphp
					<a href="{{ route('chotel.login') }}"><span>Login</span></a>
					<a href="{{ route('chotel.logout') }}"><span>Logout</span></a>
					@php
						}
					@endphp
				</div>
				<ul id="navigation">
					<li class="" id="home-chotel">
						<a href="{{route('chotel.index.index')}}">Home</a>
					</li>
					<li class="" id="about-chotel">
						<a href="{{route('chotel.about.index')}}">About</a>
					</li>
					<li class="" id="room-chotel">
						<a href="{{route('chotel.room.index')}}">Room</a>
					</li>
					<li class="" id="contact-chotel">
						<a href="{{route('chotel.contact.index')}}">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</div>