@extends('users.layouts.master')

@section('title')
    {{ trans('titles.latestProducts') }}
@endsection

@section('content')

    <div class="product-section">
        <div class="container">
            <div class="product-info">
                <form class="product-form">
                    <div class="form-group">
                        <label for="exampleFormControlInput1 first-lable">المكان</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                               placeholder="أكتب العنوان">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1 pr-0">مزود الخدمة</label>
                        <select class="form-control name-select" id="exampleFormControlSelect1">

                            @if($suppliers->count())
                                @foreach($suppliers as $supplier)

                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>

                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">السعر</label>
                        <select class="form-control price-select" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">التقييم</label>
                        <select class="form-control rate-select" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </form>
            </div>

            <div class="product-display">
                @if($products->count())
                    <div class="row" data-aos="fade-left">
                        @foreach($products as $product)
                            @break($loop->index > 3)

                            <div class="col-md-3 col-xs-12 {{ $loop->index = 0 ? :"card-padding" }}">
                                <div class="card-img">
                                    <img class="product-img" src="{{ asset('userAssets/imgs/FDF.png') }}" alt="">
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
{{--                                        @if(app()->isLocale('ar'))--}}
                                        {{--                                            {{ $product->catagory->name_ar }}--}}
                                        {{--                                        @else--}}
                                        {{--                                            {{ $product->catagory->name_en }}--}}
                                        {{--                                        @endif--}}
                                    </span>
                                    <span>{{ $product->supplier->name }}</span>
                                    <span class="price">{{ $product->price_per_hour }}</span>
                                    <button type="button" class="btn">عرض التفاصيل</button>
                                    <button type="button" class="btn like-btn"><i class="far fa-heart"></i></button>
                                </div>
                            </div>

                        @endforeach
                    </div>
                    <div class="row" data-aos="fade-right">

                        @foreach($products as $product)
                            @break($loop->index > 7)
                            @continue($loop->index < 4)

                            <div class="col-md-3 col-xs-12 {{ $loop->index = 0 ? :"card-padding" }}">
                                <div class="card-img">
                                    <img class="product-img" src="{{ asset('userAssets/imgs/FDF.png') }}" alt="">
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
{{--                                    <span>--}}
{{--                                        @if(app()->isLocale('ar'))--}}
{{--                                                {{ $product->catagory->name_ar }}--}}
{{--                                        @else--}}
{{--                                            {{ $product->catagory->name_en }}--}}
{{--                                        @endif--}}
{{--                                    </span>--}}
                                    <span>{{ $product->supplier->name }}</span>
                                    <span class="price">{{ $product->price_per_hour }}</span>
                                    <button type="button" class="btn">عرض التفاصيل</button>
                                    <button type="button" class="btn like-btn"><i class="far fa-heart"></i></button>
                                </div>
                            </div>

                        @endforeach
                    </div>

                    <div class="row" data-aos="fade-left">

                        @foreach($products as $product)
                            @break($loop->index > 12)
                            @continue($loop->index < 8)

                            <div class="col-md-3 col-xs-12 {{ $loop->index = 0 ? :"card-padding" }}">
                                <div class="card-img">
                                    <img class="product-img" src="{{ asset('userAssets/imgs/FDF.png') }}" alt="">
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
{{--                                    <span>--}}
{{--                                        @if(app()->isLocale('ar'))--}}
{{--                                            {{ $product->catagory->name_ar }}--}}
{{--                                        @else--}}
{{--                                            {{ $product->catagory->name_en }}--}}
{{--                                        @endif--}}
{{--                                    </span>--}}
                                    <span>{{ $product->supplier->name }}</span>
                                    <span class="price">{{ $product->price_per_hour }}</span>
                                    <button type="button" class="btn">عرض التفاصيل</button>
                                    <button type="button" class="btn like-btn"><i class="far fa-heart"></i></button>
                                </div>
                            </div>

                        @endforeach
                    </div>
                @endif



                <nav class="text-center" aria-label="Page navigation example">
                    {{ $products->links() }}
{{--                    <ul class="pagination">--}}
{{--                        <li class="page-item"><a class="page-link" href="#">السابق</a></li>--}}
{{--                        <li class="page-item"><a class="page-link page-no" href="#">1</a></li>--}}
{{--                        <li class="page-item"><a class="page-link page-no" href="#">2</a></li>--}}
{{--                        <li class="page-item"><a class="page-link page-no" href="#">3</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">التالي</a></li>--}}
{{--                    </ul>--}}
                </nav>
            </div>
        </div>
    </div>



@endsection