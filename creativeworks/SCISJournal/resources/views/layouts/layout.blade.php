<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>SCIS Journal</title>
  <!-- link css -->
  {{-- <link rel="stylesheet" href="css/main.css"> --}}
  <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ URL::asset('bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('bootstrap/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('bootstrap/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('bootstrap/bootstrap.css') }}">
</head>
<body>
    @include('layouts.partial.navbar')
    <div class="container">
      @include('layouts.partial.message')
      @yield('content')
    </div>
    @include('layouts.partial.footer')


  <!-- Script bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Font awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

<<<<<<< HEAD
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<<<<<<< HEAD
  <script>
      CKEDITOR.replace( 'article-ckeditor' );
  </script>
=======
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
>>>>>>> 6b4d3f1d7829c67a6a0ac3a73baf5bfbbb8fb368
=======
  {{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'article-ckeditor' );
  </script> --}}
>>>>>>> 43a097098ff92e394680cb62ae7d3a85c66537fc
</body>
</html>
