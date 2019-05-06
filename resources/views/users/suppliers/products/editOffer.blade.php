@extends('users.layouts.master')

@section('title')
    {{ trans('translation.editOffer') }}
@endsection

@section('content')



    <div class="add-new-product">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 add-form">
                    <h3>{{ trans('translation.editOffer') }}</h3>

                    @if($errors->any())
                        @component('alerts.danger')
                            {{ $errors->first() }}
                        @endcomponent
                    @endif

                    <form action="{{ route('product.updateOffer' , $product->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="formGroupExampleInput">{{ trans('translation.productName') }}</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="{{ trans('translation.productNamePlaceHolder') }}" value="{{ $product->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">{{ trans('translation.catagory') }}</label>
                            @if($catagories->count())
                                <select class="form-control" id="exampleFormControlSelect1" name="catagory_id">
                                    @foreach( $catagories as $catagory)
                                        <option value="{{ $catagory->id }}" {{ $product->catagory_id == $catagory->id ? "selected"  : ""}} >
                                            @if(app()->isLocale('ar'))
                                                {{ $catagory->name_ar }}
                                            @else
                                                {{ $catagory->name_en }}
                                            @endif
                                        </option>
                                    @endforeach
                                </select>

                            @endif

                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">{{trans('translation.price') }}</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="offer_price_per_hour"
                                           placeholder="100" value="{{ $product->offer_price_per_hour }}">
                                </div>
                            </div>
                            {{--                        <div class="col-6">--}}
                            {{--                            <div class="form-group">--}}
                            {{--                                <label for="exampleFormControlSelect1">العملة</label>--}}
                            {{--                                <select class="form-control" id="exampleFormControlSelect1">--}}
                            {{--                                    <option>USD</option>--}}
                            {{--                                    <option>2</option>--}}
                            {{--                                    <option>3</option>--}}
                            {{--                                    <option>4</option>--}}
                            {{--                                    <option>5</option>--}}
                            {{--                                </select>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">{{ trans('translation.condition') }}</label>
                            <textarea name="condition" class="form-control" id="formGroupExampleInput" cols="30" rows="5"> {{ $product->condition }} </textarea>
                        </div>


                        <button type="submit" class="btn">{{ trans('translation.editOffer') }}</button>
                    </form>
                </div>
                <div class="col-md-6 col-xs-12 img-form">
                    <form action="{{ route('productImages') }}" method="post" enctype="multipart/form-data" class="dropzone" id="dropzone">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        {{--                    <div class="upload-btn-wrapper">--}}
                        {{--                        <button class="upload-btn"><img class="upload-img" src="{{ asset('userAssets/imgs/cloud.png') }}" alt=""></button>--}}
                        {{--                        <input type="file" name="myfile" />--}}
                        {{--                    </div>--}}
                    </form>


                    <span>{{ trans('translation.dropZoneDesc') }}</span>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css">
@endsection
@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>

    <script type="text/javascript">

        Dropzone.options.dropzone =
            {
                maxFilesize: 12,
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                timeout: 50000,
                success: function (file, response) {
                    console.log(response);
                },
                error: function (file, response) {
                    return false;
                }
            };
    </script>
@endsection