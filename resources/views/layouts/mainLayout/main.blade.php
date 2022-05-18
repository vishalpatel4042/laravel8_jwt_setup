<!DOCTYPE html>
<html lang="en">
@include('layouts.mainLayout.head')
@include('layouts.mainLayout.css')

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>
    <div id="wrapper">
        @include('layouts.mainLayout.navbar')
        @yield('content')
    </div>
    @include('layouts.mainLayout.js')
</body>

</html>