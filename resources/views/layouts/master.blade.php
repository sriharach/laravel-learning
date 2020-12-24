<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head') {{-- css --}}
</head>
<body>
    @include('includes.menu')
    @yield('content') 

    
    @include('includes.foot') {{-- script --}}
</body>
</html>