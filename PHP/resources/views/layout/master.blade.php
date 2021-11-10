<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
   <link rel="stylesheet" href="{{asset('style.css')}}">
</head>

<body>
    <div class="background">
        <div id="header">
            Logo + Header
        </div>
        <div class="menu">
         @yield('menu')
        </div>
        <div class="body">
            @yield('text')
            
        </div>
       
        <div class="footer">
            Footer
        </div>
    </div>
   
</body>
</html>