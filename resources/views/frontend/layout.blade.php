<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gocia</title>
    @include('frontend.head');
</head>
<body>

  @include('frontend.nav')
  @include('frontend.sidebar');
  

    @yield('content');
    @include('frontend.footer')
    @include('frontend.script')
    
</body>
</html>