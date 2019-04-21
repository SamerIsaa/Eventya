@extends('dashboard.layouts.master')


@section('content')
    <div class="col-md-12">

        @if(session()->has('success'))
            @component('alerts.success')
                <stronge>{{ session('success') }}</stronge>
            @endcomponent
        @endif
        <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
                        <h3 class="m-portlet__head-text">
                            من نحن
                        </h3>
                    </div>
                </div>
            </div>


            <!--begin::Form-->
            <form class="m-form m-form--fit m-form--label-align-right" action="{{ route('about.location.update') }}" method="POST">
                {{ csrf_field() }}
                <div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">العنوان</label>
                        <input type="text" class="form-control m-input m-input--square" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="العنوان" name="address" value="{{ $location? $location->address : '' }}">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">عنوان المنطقة</label>
                        <input type="text" class="form-control m-input m-input--square" id="searchmap" aria-describedby="emailHelp" placeholder="العنوان">
                    </div>
                    <div class="m-portlet__body">
                        <div id="map" style="height:400px;"></div>
                    </div>
                    <div class="form-group m-form__group">
                        <input type="hidden" class="form-control m-input m-input--square" id="lng" aria-describedby="emailHelp" placeholder="lng" name="langitude">
                    </div>

                    <div class="form-group m-form__group">
                        <input type="hidden" class="form-control m-input m-input--square" id="lat" aria-describedby="emailHelp" placeholder="lat" name="latitude">
                    </div>

                </div>
                <div class="m-portlet__foot m-portlet__foot--fit text-right">
                    <div class="m-form__actions">
                        <button type="submit" class="btn btn-metal">حفظ</button>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>

    </div>
@endsection


