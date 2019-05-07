<div class="blue-header">
    <div class="container">
        <div class="header-info text-center" onchange="dropDownActions(this.value);">
            @if(auth()->guard('supplier')->user() != null || auth()->guard('payer')->user() != null)
                <img class="" src="{{ asset('userAssets/imgs/man-flu-2.png') }}" alt="">
                <select id="userMenu">
                    <option >
                        @if(auth()->guard('payer')->user())
                            {{ auth()->guard('payer')->user()->name }}
                        @else
                            {{ auth()->guard('supplier')->user()->name }}
                        @endif
                    </option>

                    @if(auth()->guard('supplier')->user())
                        <option value="indexSupplier">{{ trans('translation.supplier_index') }}</option>

                    @endif
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="logout">{{ trans('titles.logout') }}</option>
                </select>
            @else
                <button class="btn search-btn" id="loginBtn" onclick="window.location = '{{ route("user.login") }} '">{{ trans('translation.login') }}</button>
            @endif

{{--            <select class="">--}}
{{--                <option>USD $</option>--}}
{{--                <option>euro &euro;</option>--}}
{{--            </select>--}}

            <select class="" name="lang" onchange="changeLang(value)">
                <option value="ar" {{ \App::getLocale()== 'ar'?"selected" :""}}>{{ trans('translation.ar') }}</option>
                <option value="en" {{ \App::getLocale()== 'en'?"selected" :""}}>{{ trans('translation.en') }}</option>
            </select>
        </div>
        <div class="header-btn">
            <a class="header-store" href="#">Google Play<i class="fab fa-google-play"></i></a>
            <a class="header-store" href="#">App Store<i class="fab fa-apple"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ asset('userAssets/imgs/logo_.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">{{ trans('translation.index') }} <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ trans('translation.advanceSearch') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servicesSuppliers') }}">{{ trans('translation.serviceProviders') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ trans('translation.myOrders') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contactEventya') }}">{{ trans('translation.contactUs') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ trans('translation.aboutUs') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


