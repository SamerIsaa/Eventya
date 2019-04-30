@extends('users.layouts.master')


@section('title')
    {{ trans('translation.login') }}
@endsection


@section('content')



    <div class="sign-in-page">
        <div class="container sign-in-container">
            <div class="row">
                <div class="col-md-4 col-xs-12 img">
                    <img class="h-100 w-100" src="{{ asset('userAssets/imgs/logo2.png') }}" alt="">
                </div>
                <div class="col-md-8 col-xs-12 sign-in-section">
                    <h2>{{ trans('translation.login') }}</h2>
                    <form action="{{  route('user.postLogin') }}" method="post">
                        {{ csrf_field() }}
                        @if(session()->has('notFound'))
                            @component('alerts.danger')
                                {{ session('notFound') }}
                            @endcomponent
                        @endif
                        @if(session()->has('credentials'))
                            @component('alerts.danger')
                                {{ session('credentials') }}
                            @endcomponent
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ trans('translation.email') }}</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ old('email') }}"
                                   aria-describedby="emailHelp" placeholder="{{ trans('translation.emailPlaceHolder') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">كلمة المرور</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{ old('password') }}"
                                   placeholder="{{ trans('translation.passwordPlaceHolder') }}">
                        </div>
                        <div class="sign-in-option">
                            <div class="form-group form-check remember-me">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label remember-me-btn" for="exampleCheck1">{{ trans('translation.rememberMe') }}</label>
                            </div>
                            <div class="forget-password">
                                <a href="{{ route('user.forget') }}">{{ trans('translation.forgetPassword') }}</a>
                            </div>
                        </div>
                        <button type="submit" class="btn sign-in-btn">{{ trans('translation.login') }}</button>
                    </form>
                    <button class="btn sign-out-btn" onclick="window.location = '{{ route('user.signin') }}'" >{{ trans('translation.signin') }}</button>

                    <div class="socail-div">
                        <p>{{ trans('translation.signinOptions') }}</p>
                        <div class="row" data-aos="fade-up">
                            <div class="col-sx-4 col-md-4">
                                <button type="submit" class="btn fb-btn"><i class="fab fa-facebook-f"></i></button>
                            </div>
                            <div class="col-sx-4 col-md-4">
                                <button type="submit" class="btn twiter-btn"><i class="fab fa-twitter"></i></button>
                            </div>
                            <div class="col-sx-4 col-md-4">
                                <button type="submit" class="btn google-btn"><i
                                            class="fab fa-google-plus-g"></i></button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection