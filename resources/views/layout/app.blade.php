<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@include('inc.navbar')
<div class="container">

    @if(Request::is('/'))
    @include('inc.showcase')
    @endif
    <div class="row">
        <div class="col-md-8">
            @include('inc.messages')
            @yield('content')
        </div>

        <div class="col-md-4">
            @include('inc.sidebar')
        </div>
    </div>
</div>
   
@include('inc.footer')
    
</body>
</html>