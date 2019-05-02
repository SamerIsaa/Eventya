<head>
    <meta charset="utf-8" />
    <title>Metronic | Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <style>
        body,.m-portlet__head-text,.m-subheader__title.m-subheader__title--separator{
            font-family: 'Cairo', sans-serif !important;
        }
        .m-body .m-content{
            overflow:hidden;
        }
    </style>
    @yield('css')
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin::Base Styles -->

    <!--begin::Page Vendors -->
    <!-- <link href="dashboarddashboardAssets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" /> -->

    <link href="{{ asset('dashboardAssets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Page Vendors -->
    <!-- <link href="dashboarddashboardAssets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" /> -->

    <link href="{{ asset('dashboardAssets/vendors/base/vendors.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="dashboarddashboardAssets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />  -->

    <link href="{{ asset('dashboardAssets/demo/default/base/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />

    <!-- nd::Base Styles -->
    <link rel="shortcut icon" href="{{ asset('dashboardAssets/demo/default/media/img/logo/favicon.ico') }}" />
    <link href="{{asset('dashboardAssets/vendors/custom/datatables/datatables.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />

</head>
