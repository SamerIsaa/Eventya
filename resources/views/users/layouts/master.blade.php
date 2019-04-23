<!doctype html>
<html>

    @include('users.layouts.style')

<body>

<!-- navbar -->

@include('users.layouts.header')

@yield('content')

<!-- Footer -->
@include('users.layouts.footer')
<!-- JavaScript -->
@include('users.layouts.scripts')
</body>

</html>