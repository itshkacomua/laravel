<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>@yield('title-block')</title>
</head>
<body>
  @include('inc.header')
  @if(Request::is('/'))
    @include('inc.hero')
  @endif

  <div class="container mt5">
    <div class="row">
      <div class="col-8">
        @include('inc.messages')
        @yield('content')
      </div>
      <div class="col-4">@include('inc.aside')</div>
    </div>
  </div>

  @include('inc.footer')
</body>
</html>
