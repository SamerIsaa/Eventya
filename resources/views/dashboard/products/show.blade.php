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
                         {{trans('product.show_product')}}
                     </h3>
                  </div>
               </div>
            </div>
               <div class="m-portlet__body row">
                  <div class="col-md-12 col-md-offset-2 col-sm-5">
                        <div class="m-portlet__body">
                            <div class="m-form__section m-form__section--first">
                                <div class="form-group m-form__group">
                                    <label for="example_input_full_name"> {{trans('product.name')}}</label>
                                    <input type="text" class="form-control m-input" value=" {{$product->name}}" disabled>
                                </div>
                                <div class="form-group m-form__group">
                                    <label>{{trans('product.category')}}</label>
                                    <input type="email" class="form-control m-input" value="{{$product->catagory['name_ar']}}" disabled>
                                </div>
                                <div class="form-group m-form__group">
                                    <label>{{trans('product.price_per_hour')}}</label>
                                    <input type="text" class="form-control m-input" value="{{$product->price_per_hour}}" disabled>
                                </div>
                                <div class="form-group m-form__group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>{{trans('product.offer_price_per_hour')}}</label>
                                            <input type="number" class="form-control m-input" value="{{$product->offer_price_per_hour}}" disabled>
                                        </div>
                                        <div class="col-md-6">
                                        <label class="" style="display:block;">{{trans('product.is_offer')}}</label>
                                        <div class="row">
                                            <div class="d-flex permission-check">
                                                <div class="mr-2">
                                                        <span class="m-switch m-switch--outline m-switch--icon m-switch--success">
                                                            <label>
                                                                <input type="checkbox" disabled id="offer_product" value="{{$product->id}}" @if($product->is_offer == 1){{"checked"}}@endif>
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </div>
                                            </div>
                                        </div>
                                      </div>
                                        </div>  
                                    </div>
                                </div>
                                <div class="form-group m-form__group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>{{trans('product.tax')}}</label>
                                            <input type="text" class="form-control m-input" value="{{$product->tax}}" disabled>
                                        </div>  
                                        <div class="col-md-6">
                                            <label>{{trans('product.rate')}}</label>
                                            <input type="number" class="form-control m-input" value="{{$product->rate}}" disabled>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit ">
                            <div class="m-form__actions m-form__actions text-right">
                                <a href="/admin/products" class="btn btn-info "> {{trans('product.back')}}</a>
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

@section('js')
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
@stop()