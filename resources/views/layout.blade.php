<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bootstrap</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

       
    </head>
    <body>
        
    <ul class="nav">
        <li class="nav-item">
        <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{url('contact')}}">Contact</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{url('about')}}">About Us</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="{{url('customer')}}">Customers</a>
        </li>

        </ul>
    <div class="container">
        
        @yield('content')

    </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </body>
</html>
