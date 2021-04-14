 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>
  @include('seller.partials.style')
  <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
 
  @include('seller.partials.navbar')
  @include('seller.partials.sidebar_content')
  @yield('main_content')
  @include('seller.partials.footer')
  @include('seller.partials.scripts')
 
  </div>
</div>
  
</body>
</html>