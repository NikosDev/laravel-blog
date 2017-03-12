
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Laravel</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/2A73CABC-4C9C-EF46-A015-DA29310213E7/main.js" charset="UTF-8"></script></head>

  <body>

    @include('layouts.nav')

    <div class='container'>
      <div class='row'>
          @yield('content')

          @include('layouts.sidebar')
      </div>
    </div>




    @include('layouts.footer')


  </body>
</html>
