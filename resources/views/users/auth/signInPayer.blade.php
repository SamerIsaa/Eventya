@extends('users.layouts.master')


@section('title')
    {{ trans('translation.signin') }}
@endsection


@section('content')




    <div class="sign-up-page">
        <div class="container sign-up-container">
            <div class="row">
                <div class="col-md-4 col-xs-12 img">
                    <img class="h-100 w-100" src="{{ asset('userAssets/imgs/logo2.png') }}" alt="">
                </div>
                <div class="col-md-8 col-xs-12 sign-up-section">
                    <h2>    {{ trans('translation.signin') }}</h2>

                    @if($errors->any())
                        @component('alerts.danger')
                            {{ $errors->first() }}
                        @endcomponent
                    @endif
                    <form action="{{ route('register.payer') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ trans('translation.name') }}</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="{{ trans('translation.usernamePlaceHolder') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ trans('translation.email') }}</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp"  name="email"  value="{{ old('email') }}"  placeholder="{{ trans('translation.emailPlaceHolder') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">{{ trans('translation.password') }}</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                   value="{{ old('password') }}" name="password"  placeholder="{{ trans('translation.passwordPlaceHolder') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ trans('translation.phone') }}</label>
                            <input type="text" class="form-control" name="phone"  value="{{ old('phone') }}"  placeholder="{{ trans('translation.phonePlaceHolder') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ trans('translation.address') }}</label>
                            <input type="text" class="form-control"  name="address" value="{{ old('address') }}"  placeholder="{{ trans('translation.addressPlaceHolder') }}">
                        </div>



                        <div class="sign-in-option">
                            <div class="forget-password">
                                <a href="{{ route('user.supplierSignin') }}">{{ trans('translation.signinSupplierOption') }}</a>
                            </div>
                        </div>


                        <button type="submit" class="btn sign-up-btn">{{ trans('translation.signin') }}</button>

                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection