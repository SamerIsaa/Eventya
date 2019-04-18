@extends('dashboard.layouts.master')


@section('content')
    <div class="col-md-12">

        @if(session()->has('success'))
            @component('alerts.success')
                <stronge>{{ session('success') }}</stronge>
            @endcomponent
        @endif


            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Summernote Examples
                            </h3>
                        </div>
                    </div>
                </div>

                <!--begin::Form-->
                <form class="m-form m-form--fit m-form--label-align-right" action="{{ route('about.polices.update') }}" method="post">
                    {{ csrf_field() }}
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">سياستنا باللغة العربية</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <textarea class="summernote" id="m_summernote_1" name="polices_ar">{{ $polices?$polices->polices_ar : ''}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">سياستنا باللغة الإنجليزية</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <textarea class="summernote" id="m_summernote_1" name="polices_en">{{ $polices?$polices->polices_en : ''}}</textarea>
                        </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit text-right">
                        <div class="m-form__actions m-form__actions">
                            <div class="row">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button type="submit" class="btn btn-metal">حفظ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!--end::Form-->
            </div>

    </div>
@endsection