@extends('users.layouts.master')
@section('title')
    {{ trans('titles.contactUs') }}
@endsection

@section('content')

    <div class="connect-us-page">
        <div class="container">
            <h3 class="use-policy-header text-center"><img class="right-line" src="{{ asset('userAssets/imgs/R.png') }}" alt="">
                {{ trans('titles.contactUs') }}
                <img class="left-line" src="{{ asset('userAssets/imgs/L.png') }}" alt=""></h3>
            <div class="row">
                <div class="col-xs-12 col-md-4" data-aos="fade-left">
                    <div class="card-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="card-info">
                        <h3>{{ trans('translation.address') }}</h3>
                        <span>

                            @if(app()->isLocale('ar'))
                                {{ $about->address }}
                            @else
                                {{ $about->address_en }}
                            @endif
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4" data-aos="zoom-in">
                    <div class="card-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="card-info">
                        <h3>{{ trans('translation.phone') }}</h3>
                        <span>{{ $about->phone }}</span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4" data-aos="fade-right">
                    <div class="card-icon ">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="card-info">
                        <h3>{{ trans('translation.email') }}</h3>
                        <span>{{ $about->email }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 form-div">
                <form class="form-form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="الاسم">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="البريد الالكتروني">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                                  placeholder="الرسالة"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </form>
            </div>
            <div class="col-md-6 map-div">
                <div class="map" id="map"></div>
            </div>
        </div>
    </div>
@endsection