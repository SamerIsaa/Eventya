@extends('users.layouts.master')


@section('title')
    {{ trans('titles.resetPassword') }}
@endsection


@section('content')



    <div class="forget-pass-page">
        <div class="container forget-pass-container">
            <div class="row">
                <div class="col-md-4 col-xs-12 img">
                    <img class="h-100 w-100" src="{{ asset('userAssets/imgs/logo2.png') }}" alt="">
                </div>
                <div class="col-md-8 col-xs-12 forget-pass-section">
                    <h2>{{ trans('titles.resetPassword') }}</h2>
                    <br>
                    @if($errors->any())
                        @component('alerts.danger')
                            {{ $errors->first() }}
                        @endcomponent
                    @endif
                    <form action="{{ route('user.resetPassword') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">{{ trans('translation.password') }}</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                   placeholder="{{ trans('translation.passwordPlaceHolder') }}" name="password">
                        </div>
                        <input type="hidden" name="email" value="{{ $email }}">
                        <button type="submit" class="btn forget-pass-btn">{{ trans('translation.send') }}</button>

                    </form>

                </div>
            </div>
        </div>
    </div>



@endsection