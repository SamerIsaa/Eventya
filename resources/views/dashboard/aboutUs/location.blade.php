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