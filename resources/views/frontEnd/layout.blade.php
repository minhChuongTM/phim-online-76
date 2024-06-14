
<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontEnd.common.head')
</head>
<body>
    @include('frontEnd.common.header')
    
    @yield('content')

    @include('frontEnd.common.footer')

    @include('frontEnd.common.foot')
</body>
</html>