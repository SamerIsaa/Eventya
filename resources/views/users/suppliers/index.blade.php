@extends('users.layouts.master')

@section('title')
    {{ trans('translation.supplier_index') }}
@endsection
@section('content')
    <div class="service-provider-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3 form-section">
                    <div class="img-div">
                        <img src="{{ asset('userAssets/imgs/man-flu-2.png') }}" alt="">
                        <h3>{{ $supplier->name }}</h3>
                        <span><i class="pl-2 fas fa-map-marker-alt"></i>{{ $supplier->address }}</span>
                    </div>
                    <div class="info-div">
                        <div class="info-lable"><span
                                    class="lable-float">{{ trans('translation.totalReceivables') }}</span><span
                                    class="answer-float">{{ $supplier->receivable }} $</span></div>
                        <div class="info-lable"><span class="lable-float">{{ trans('translation.productCount') }}</span><span
                                    class="answer-float">{{ $supplier->products->count() }}</span></div>
                        <div class="info-lable"><span
                                    class="lable-float">{{ trans('translation.totalOrders') }}</span><span
                                    class="answer-float">{{ $supplier->orders->count() }}</span></div>
                        <div class="info-lable">
                            <span class="lable-float">{{ trans('translation.newOrders') }}</span>
                            <span class="answer-float new-order">{{ $supplier->orders->where('status_id' , 1)->count() }}</span>
                        </div>
                        <div class="info-lable">
                            <span class="lable-float">{{ trans('translation.reservationRequests') }}</span>
                            <span class="answer-float">{{ $supplier->orders->where('status_id' , 2)->count() }}</span>
                        </div>
                        <div class="info-lable">
                            <span class="lable-float">{{ trans('translation.endedOrders') }}</span>
                            <span class="answer-float">{{ $supplier->orders->where('status_id' , 3)->count() }}</span>
                        </div>
                        <div class="clearfix"></div>

                        <div class="btns-div">
                            <button class="btn add-offer"
                                    onclick="window.location = '{{ route('product.create') }}'">{{ trans('translation.addProduct') }}
                                <i class="fas fa-plus"></i></button>
                            <button class="btn add-product"
                                    onclick="window.location = '{{ route('product.addOffer') }}' ">{{ trans('translation.addOffer') }}
                                <i class="fas fa-plus"></i></button>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-md-9 product-section">
                    {{--                    <div class="row" id="row" data-aos="fade-down">--}}
                    {{--                        <div class="col-3 card-padding">--}}
                    {{--                            <a class="to-active" id="to-active" href="#">--}}
                    {{--                                <div class="product-category border-active" id="product-category">--}}
                    {{--                                    <div class="card-img">--}}
                    {{--                                        <img class="product-img" src="{{ asset('userAssets/imgs/FDF.png') }}" alt="">--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="card-info">--}}
                    {{--                                        <h3>اسم المنتج</h3>--}}
                    {{--                                    </div>--}}

                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="col-3 card-padding">--}}
                    {{--                            <a class="to-active" id="to-active" href="#">--}}
                    {{--                                <div class="product-category" id="product-category">--}}
                    {{--                                    <div class="card-img">--}}
                    {{--                                        <img class="product-img" src="{{ asset('userAssets/imgs/FDF.png') }}" alt="">--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="card-info">--}}
                    {{--                                        <h3>اسم المنتج</h3>--}}
                    {{--                                    </div>--}}

                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="col-3 card-padding">--}}
                    {{--                            <a class="to-active" id="to-active" href="#">--}}
                    {{--                                <div class="product-category">--}}
                    {{--                                    <div class="card-img">--}}
                    {{--                                        <img class="product-img" src="{{ asset('userAssets/imgs/FDF.png') }}" alt="">--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="card-info">--}}
                    {{--                                        <h3>اسم المنتج</h3>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="col-3 card-padding">--}}
                    {{--                            <a class="to-active" id="to-active" href="#">--}}
                    {{--                                <div class="product-category">--}}
                    {{--                                    <div class="card-img">--}}
                    {{--                                        <img class="product-img" src="{{ asset('userAssets/imgs/FDF.png') }}" alt="">--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="card-info">--}}
                    {{--                                        <h3>اسم المنتج</h3>--}}
                    {{--                                    </div>--}}

                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    <div class="product-display">
                        @if($supplier->products->count())
                            <div class="row" data-aos="fade-left">
                                @foreach($products as $product )
                                    @break($loop->index > 3)

                                    <div class="col-md-3 col-xs-12 {{ $loop->index = 0 ? :"card-padding" }}">
                                        <div class="card-img">
                                            @if($image = $product->productImages->first())
                                                <img class="product-img"
                                                     src="{{ asset($image['photo-path']) }}"
                                                     alt="">
                                            @endif
                                        </div>
                                        <div class="card-info">
                                            <h3>{{ $product->name }}</h3>
                                            <div class="stars">
                                                <form action="">
                                                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                                                    <label class="star star-5" for="star-5"></label>
                                                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                                                    <label class="star star-4" for="star-4"></label>
                                                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                                                    <label class="star star-3" for="star-3"></label>
                                                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                                                    <label class="star star-2" for="star-2"></label>
                                                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                                                    <label class="star star-1" for="star-1"></label>
                                                </form>
                                            </div>
                                            <span>
                                                @if(app()->isLocale('ar'))
                                                    {{ $product->catagory->name_ar }}
                                                @else
                                                    {{ $product->catagory->name_en }}
                                                @endif

                                            </span>
                                            <span class="price">
                                                @if($product->is_offer)
                                                    {{ $product->offer_price_per_hour }} $
                                                @else
                                                    {{ $product->price_per_hour }} $
                                                @endif
                                            </span>

                                            @if($product->is_offer)
                                                <button type="button" class="btn"
                                                        onclick="window.location = ' {{ route('product.editOffer' , $product->id) }}'">{{ trans('translation.edit') }}</button>
                                            @else
                                                <button type="button" class="btn"
                                                        onclick="window.location = ' {{ route('product.edit' , $product->id) }}'">{{ trans('translation.edit') }}</button>
                                            @endif
                                        </div>
                                    </div>

                                @endforeach
                            </div>


                            <div class="row" data-aos="fade-right">
                                @foreach($products as $product )
                                    @break($loop->index > 7)
                                    @continue($loop->index < 4)

                                    <div class="col-md-3 col-xs-12 {{ $loop->index = 0 ? :"card-padding" }}">
                                        <div class="card-img">
                                            @if($image = $product->productImages->first())
                                                <img class="product-img"
                                                     src="{{ asset($image['photo-path']) }}"
                                                     alt="">
                                            @endif
                                        </div>
                                        <div class="card-info">
                                            <h3>{{ $product->name }}</h3>
                                            <div class="stars">
                                                <form action="">
                                                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                                                    <label class="star star-5" for="star-5"></label>
                                                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                                                    <label class="star star-4" for="star-4"></label>
                                                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                                                    <label class="star star-3" for="star-3"></label>
                                                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                                                    <label class="star star-2" for="star-2"></label>
                                                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                                                    <label class="star star-1" for="star-1"></label>
                                                </form>
                                            </div>
                                            <span>
                                                @if(app()->isLocale('ar'))
                                                    {{ $product->catagory->name_ar }}
                                                @else
                                                    {{ $product->catagory->name_en }}
                                                @endif

                                            </span>
                                            <span class="price">
                                                @if($product->is_offer)
                                                    {{ $product->offer_price_per_hour }} $
                                                @else
                                                    {{ $product->price_per_hour }} $
                                                @endif
                                            </span>

                                            @if($product->is_offer)
                                                <button type="button" class="btn"
                                                        onclick="window.location = ' {{ route('product.editOffer' , $product->id) }}'">{{ trans('translation.edit') }}</button>
                                            @else
                                                <button type="button" class="btn"
                                                        onclick="window.location = ' {{ route('product.edit' , $product->id) }}'">{{ trans('translation.edit') }}</button>
                                            @endif
                                        </div>
                                    </div>

                                @endforeach
                            </div>


                            <div class="row" data-aos="fade-left">
                                @foreach($products as $product )
                                    @break($loop->index > 11)
                                    @continue($loop->index < 8)

                                    <div class="col-md-3 col-xs-12 {{ $loop->index = 0 ? :"card-padding" }}">
                                        <div class="card-img">
                                            @if($image = $product->productImages->first())
                                                <img class="product-img"
                                                     src="{{ asset($image['photo-path']) }}"
                                                     alt="">
                                            @endif
                                        </div>
                                        <div class="card-info">
                                            <h3>{{ $product->name }}</h3>
                                            <div class="stars">
                                                <form action="">
                                                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                                                    <label class="star star-5" for="star-5"></label>
                                                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                                                    <label class="star star-4" for="star-4"></label>
                                                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                                                    <label class="star star-3" for="star-3"></label>
                                                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                                                    <label class="star star-2" for="star-2"></label>
                                                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                                                    <label class="star star-1" for="star-1"></label>
                                                </form>
                                            </div>
                                            <span>
                                                @if(app()->isLocale('ar'))
                                                    {{ $product->catagory->name_ar }}
                                                @else
                                                    {{ $product->catagory->name_en }}
                                                @endif

                                            </span>
                                            <span class="price">
                                                @if($product->is_offer)
                                                    {{ $product->offer_price_per_hour }} $
                                                @else
                                                    {{ $product->price_per_hour }} $
                                                @endif
                                            </span>

                                            @if($product->is_offer)
                                                <button type="button" class="btn"
                                                        onclick="window.location = ' {{ route('product.editOffer' , $product->id) }}'">{{ trans('translation.edit') }}</button>
                                            @else
                                                <button type="button" class="btn"
                                                        onclick="window.location = ' {{ route('product.edit' , $product->id) }}'">{{ trans('translation.edit') }}</button>
                                            @endif
                                        </div>
                                    </div>

                                @endforeach
                            </div>

                        @endif

                        <nav class="text-center" aria-label="Page navigation example">
                            <ul class="pagination">
                                {{ $products->links() }}

                                {{--                                <li class="page-item"><a class="page-link" href="#">السابق</a></li>--}}
                                {{--                                <li class="page-item"><a class="page-link page-no" href="#">1</a></li>--}}
                                {{--                                <li class="page-item"><a class="page-link page-no" href="#">2</a></li>--}}
                                {{--                                <li class="page-item"><a class="page-link page-no" href="#">3</a></li>--}}
                                {{--                                <li class="page-item"><a class="page-link" href="#">التالي</a></li>--}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection