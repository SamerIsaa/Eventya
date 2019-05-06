@extends('users.layouts.master')

@section('title')
    {{ trans('translation.addOffer') }}
@endsection
@section('content')



    <div class="add-new-product">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 add-form">
                    <h3>{{ trans('translation.supplier_addProduct') }}</h3>

                    @if($errors->any())
                        @component('alerts.danger')
                            {{ $errors->first() }}
                        @endcomponent
                    @endif


                    <form action="{{ route('product.storeOffer') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <div class="form-group">
                            <label for="formGroupExampleInput">{{ trans('translation.productName') }}</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="{{ trans('translation.productNamePlaceHolder') }}" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">{{ trans('translation.catagory') }}</label>
                            @if($catagories->count())
                                <select class="form-control" id="exampleFormControlSelect1" name="catagory_id">
                                    @foreach( $catagories as $catagory)
                                        <option value="{{ $catagory->id }}">
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
                                    <label for="formGroupExampleInput">{{trans('translation.priceOffer') }}</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="offer_price_per_hour"
                                           placeholder="100" value="{{ old('offer_price_per_hour') }}">
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
                            <textarea name="condition" class="form-control" id="formGroupExampleInput" cols="30" rows="5" placeholder="{{ trans('translation.condition') }}"> {{ old('condition') }} </textarea>
                        </div>

                        <button type="submit" class="btn">{{ trans('translation.add') }}</button>
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