<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('userAssets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('userAssets/css/style.css') }}" type="text/css">
    @if(app()->isLocale('en'))
        <link rel="stylesheet" href="{{ asset('userAssets/css/styleEn.css') }}" type="text/css">
    @endif
    <link href="{{ asset('userAssets/node_modules/@fortawesome/fontawesome-free-5.6.3/css/all.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>

        @yield('title')

    </title>
</head>