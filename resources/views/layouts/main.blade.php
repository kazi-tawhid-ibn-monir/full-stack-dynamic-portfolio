<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
</head>
<body>
  @include('partials.heade')
  @include('partials.sidebar')

  <div style="margin-top: 80px;">
    
  @yield('content')
 </div>
  @include('partials.footer')
</body>
</html>
