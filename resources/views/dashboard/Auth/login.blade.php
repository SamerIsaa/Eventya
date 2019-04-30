<!DOCTYPE html>


<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>Eventya Login</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
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
{{--    <link href="../../../assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />--}}

    <link href="{{ asset('dashboardAssets/vendors/base/vendors.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
{{--    <link href="../../../assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />--}}

    <link href="{{ asset('dashboardAssets/demo/default/base/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Base Styles -->
    <link rel="shortcut icon" href="{{ asset('dashboardAssets/demo/default/media/img/logo/favicon.ico') }}" />
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url({{ asset('dashboardAssets/app/media/img//bg/bg-3.jpg') }});">
        <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo">
                    <a href="">
                        <img src="{{ asset('dashboardAssets/app/media/img//logos/logo-1.png') }}">
                    </a>
                </div>
                <div class="m-login__signin">
                    <div class="m-login__head">
                        <h3 class="m-login__title">تسجيل الدخول للوحة التحكم</h3>
                    </div>
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            @component('alerts.danger')
                                <strong>{{$error}}</strong>
                            @endcomponent
                        @endforeach
                    @endif

                    @if(session()->has('credentials'))
                        @component('alerts.danger')
                            {{ session('credentials') }}
                        @endcomponent
                    @endif
                    <form class="m-login__form m-form" action="{{ route('admin.login') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="البريد الالكتروني" name="email" autocomplete="off">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="كلمة المرور" name="password">
                        </div>
                        <div class="row m-login__form-sub">
                            <div class="col m--align-left m-login__form-left">
                                <label class="m-checkbox  m-checkbox--focus">
                                    <input type="checkbox" name="remember"> تذكرني
                                    <span></span>
                                </label>
                            </div>
                            <div class="col m--align-right m-login__form-right">
                                <a href="javascript:;" id="m_login_forget_password" class="m-link">نسيت كلمة المرور ؟</a>
                            </div>
                        </div>
                        <div class="m-login__form-action">
                            <button class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">تسجيل الدخول</button>
                        </div>
                    </form>
                </div>
                <div class="m-login__signup">
                    <div class="m-login__head">
                        <h3 class="m-login__title">تسجيل جديد</h3>
                        <div class="m-login__desc">أدخل بياناتك لإنشاء حسابك:</div>
                    </div>
                    <form class="m-login__form m-form" action="{{ route('admin.register') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="الاسم" name="name">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="البريد الالكتروني" name="email" autocomplete="off">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="password" placeholder="كلمة المرور" name="password">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="تاكيد كلمة المرور" name="password_confirmation">
                        </div>
                        <div class="row form-group m-form__group m-login__form-sub">
                            <div class="col m--align-left">
                                <label class="m-checkbox m-checkbox--focus">
                                    <input type="checkbox" name="agree">أنا أوافق على
                                    <a href="#" class="m-link m-link--focus">الأحكام والشروط</a>.
                                    <span></span>
                                </label>
                                <span class="m-form__help"></span>
                            </div>
                        </div>
                        <div class="m-login__form-action">
                            <button class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">تسجيل</button>&nbsp;&nbsp;
                            <button id="m_login_signup_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">إلغاء</button>
                        </div>
                    </form>
                </div>
                <div class="m-login__forget-password">
                    <div class="m-login__head">
                        <h3 class="m-login__title">نسيت كلمة المرور؟</h3>
                        <div class="m-login__desc">ادخل بريدك الالكتروني لاستعادة كلمة المرور</div>
                    </div>
                    <form class="m-login__form m-form" action="">
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="البريد الالكتروني" name="email" id="m_email" autocomplete="off">
                        </div>
                        <div class="m-login__form-action">
                            <button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primaryr">إستعادة كلمة المرور</button>&nbsp;&nbsp;
                            <button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">إلغاء</button>
                        </div>
                    </form>
                </div>
                <div class="m-login__account">
                    <a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">تسجيل جديد</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->

<!--begin::Base Scripts -->
<script src="{{ asset('dashboardAssets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('dashboardAssets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>

<!--end::Base Scripts -->

<!--begin::Page Snippets -->
<script src="{{ asset('dashboardAssets/snippets/custom/pages/user/login.js') }}" type="text/javascript"></script>

<!--end::Page Snippets -->
</body>

<!-- end::Body -->
</html>