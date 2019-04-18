@extends('dashboard.layouts.master')


@section('content')
    <div class="col-md-12">

        @if(session()->has('success'))
            @component('alerts.success')
                <stronge>{{ session('success') }}</stronge>
            @endcomponent
        @endif

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
                            بيانات تواصل معنا
                        </h3>
                    </div>
                </div>
            </div>


            <!--begin::Form-->
            <form class="m-form m-form--fit m-form--label-align-right" action="{{ route('about.contact.update') }}" method="POST">
                {{ csrf_field() }}
                <div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">البريد الإلكتروني</label>
                        <input type="email" class="form-control m-input m-input--square" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="البريد الإلكتروني" name="email" value="{{ $contact? $contact->email : '' }}">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">رقم التواصل</label>
                        <input type="text" class="form-control m-input m-input--square" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="رقم التواصل" name="phone" value="{{ $contact? $contact->phone : '' }}">
                    </div>

                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">Google+ Link</label>
                        <input type="text" class="form-control m-input m-input--square" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Google+ Link" name="google_plus" value="{{ $contact? $contact->google_plus : '' }}">
                    </div>


                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">Twitter Link</label>
                        <input type="text" class="form-control m-input m-input--square" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Twitter Link" name="twitter" value="{{ $contact? $contact->twitter : '' }}">
                    </div>

                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">Facebook Link</label>
                        <input type="text" class="form-control m-input m-input--square" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Facebook Link" name="facebook" value="{{ $contact? $contact->facebook : '' }}">
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