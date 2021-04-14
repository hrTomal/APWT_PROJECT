<!DOCTYPE html>
<html>
<head>
	<title>E-Business Home Page</title>
	@include('partials.style')
</head>
<body>
<div class="wrapper">
 	@include('partials.nav')
 	@include('partials.style')
  	@yield('content')		

    @include('partials.footer')

	@include('partials.scripts')
</body>
</html>