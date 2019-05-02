@extends('dashboard.layouts.master')
@section('content')
<div class="m-content">
   <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-10">
         <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
               <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                     <span class="m-portlet__head-icon m--hide">
                     <i class="la la-gear"></i>
                     </span>
                     <h3 class="m-portlet__head-text">
                         {{trans('supplier.show_supplier')}}
                     </h3>
                  </div>
               </div>
            </div>
               <div class="m-portlet__body row">
                  <div class="col-md-12 col-md-offset-2 col-sm-5">
                        <div class="m-portlet__body">
                            <div class="m-form__section m-form__section--first">
                                <div class="form-group m-form__group">
                                    <label for="example_input_full_name"> {{trans('supplier.name')}}</label>
                                    <input type="text" class="form-control m-input" value=" {{$supplier->name}}" disabled>
                                </div>
                                <div class="form-group m-form__group">
                                    <label>{{trans('supplier.email')}}</label>
                                    <input type="email" class="form-control m-input" value="{{$supplier->email}}" disabled>
                                </div>
                                <div class="form-group m-form__group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>{{trans('supplier.phone')}}</label>
                                            <input type="text" class="form-control m-input" value="{{$supplier->phone}}" disabled>
                                        </div>  
                                        <div class="col-md-6">
                                            <label>{{trans('supplier.rate')}}</label>
                                            <input type="number" class="form-control m-input" value="{{$supplier->rate}}" disabled>
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group m-form__group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>{{trans('supplier.city')}}</label>
                                            <input type="text" class="form-control m-input" value="{{$supplier->city['name_ar']}}" disabled>
                                        </div>  
                                        <div class="col-md-4">
                                            <label>{{trans('supplier.longitude')}}</label>
                                            <input type="number" class="form-control m-input" value="{{$supplier->longitude}}" disabled>
                                        </div> 
                                        <div class="col-md-4">
                                            <label>{{trans('supplier.latitude')}}</label>
                                            <input type="number" class="form-control m-input" value="{{$supplier->latitude}}" disabled>
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group m-form__group">
                                    <label>{{trans('supplier.location')}}</label>
                                    <input type="text" class="form-control m-input" value="{{$supplier->location}}" disabled>
                                </div>
                                <div class="form-group m-form__group">
                                    <label class="" style="display:block;">{{trans('supplier.is_approved')}}</label>
                                        <div class="row">
                                            <div class="d-flex permission-check">
                                                <div class="mr-2">
                                                        <span class="m-switch m-switch--outline m-switch--icon m-switch--success">
                                                            <label>
                                                                <input type="checkbox" disabled value="{{$supplier->id}}" @if($supplier->id == 1){{"checked"}}@endif>
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <a href="/admin/supplier" class="btn btn-info"> {{trans('supplier.back')}}</a>
                            </div>
                        </div>
                    </div>
                  </div>
               </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('css')
    <style>
        h3 , input , a ,button ,select,textarea,.m-dropzone__msg-title{font-family: 'Cairo', sans-serif !important;}
        .m-portlet .m-form.m-form--fit>.m-portlet__body {
            padding: 2.2rem 2.2rem;
        }
    </style>
@stop()