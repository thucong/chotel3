@include('templates.chotel.header')

<div id="contents">
		<div id="blog" class="area">

		@yield('main-content')
		@include('templates.chotel.sidebar') 
		</div>
</div>
@include('templates.chotel.footer')