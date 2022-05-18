<!DOCTYPE html>
<html lang="en">

@include('layouts.loginLayout.head')
@include('layouts.loginLayout.loginCss')

<body class="loading authentication-bg authentication-bg-pattern">

@yield('content')

@include('layouts.loginLayout.loginJs')
</body>

</html>