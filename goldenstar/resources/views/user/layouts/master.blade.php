<!DOCTYPE html>
<html lang="">

    <head>
    <title>Trealop</title>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{asset('user/layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('user/layout/styles/bootstrap.min.css')}}">
    </head>

    <body id="top">
        @include('user.layouts.includes.navbar')
        @yield('content')
        @include('user.layouts.includes.footer')
    
        <script src="{{asset('user/layout/scripts/jquery.min.js')}}"></script>
        <script src="{{asset('user/layout/scripts/jquery.backtotop.js')}}"></script>
        <script src="{{asset('user/layout/scripts/jquery.mobilemenu.js')}}"></script>
    </body>
</html>