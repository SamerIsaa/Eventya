@extends('dashboard.layouts.master')


@section('content')
    <div class="col-md-12">


        @if($errors->any())
            @foreach($errors->all() as $error)
                @component('alerts.danger')
                    <stronge>{{ $error }}</stronge>
                @endcomponent
            @endforeach
        @endif
        <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
                        <h3 class="m-portlet__head-text">
                            اضافة مدينة
                        </h3>
                    </div>
                </div>
            </div>


            <!--begin::Form-->
            <form class="m-form m-form--fit m-form--label-align-right" action="{{ route('cities.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">الاسم باللغة العربية</label>
                        <input type="text" class="form-control m-input m-input--square" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الاسم باللغة العربية" name="name_ar" value="{{ old('name_ar') }}">
                    </div>

                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">الاسم باللغة الإنجليزية</label>
                        <input type="text" class="form-control m-input m-input--square" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الاسم باللغة الإنجليزية" name="name_en" value="{{ old('name_en') }}">
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

