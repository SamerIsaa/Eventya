@extends('users.layouts.master')


@section('title')
    {{ trans('titles.forget') }}
@endsection


@section('content')


    <div class="recieve-code-page">
        <div class="container recieve-code-container">
            <div class="row">
                <div class="col-md-4 col-xs-12 img">
                    <img class="h-100 w-100" src="{{ asset('userAssets/imgs/logo2.png') }}" alt="">
                </div>
                <div class="col-md-8 col-xs-12 recieve-code-section">
                    <h2>{{ trans('translation.enterCode') }}</h2>
                    <form action="{{ route('user.testCode') }}" method="post">
                        @csrf
                        <br>
                        @if($errors->any())
                            @component('alerts.danger')
                                {{ $errors->first() }}
                            @endcomponent
                        @endif
                        @if(session()->has('invalidCode'))
                            @component('alerts.danger')
                                {{ session('invalidCode') }}
                            @endcomponent
                        @endif
                        <div class="form-group">
                            <label for="exampleInputPassword1">{{ trans('translation.code') }}</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*****" name="code">
                        </div>
                        <input type="hidden" name="email" value="{{ $email }}">
                        <button type="submit" class="btn recieve-code-btn">{{ trans('translation.send') }}</button>

                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection