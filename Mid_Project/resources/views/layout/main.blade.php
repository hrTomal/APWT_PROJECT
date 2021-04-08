<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>

	<div id="page_title">
		@yield('page_title')
	</div>


	<div id="header">
		<nav>
			@yield('nav_bar')
		</nav>	
	</div>

	<div id="page_content">
			@yield('main_content')
	</div>

	<div id="footer">
		<hr>
		copyright@2021 || Priyozone.net
	</div>

</body>
</html>