<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.menu')

    <div style="magin-top:60px">
    @yield('content')
    </div>
    @include('includes.foot')
</body>
</html>