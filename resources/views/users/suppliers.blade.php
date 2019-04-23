@extends('users.layouts.master')

@section('title')
    {{ trans('titles.suppliers') }}
@endsection

@section('content')

    <div class="product-providers-page">
        <div class="container">

            <div class="product-providers-display">
                <h3 class="product-providers-header text-center">
                    <img class="right-line" src="{{ asset('userAssets/imgs/R.png') }}" alt="">
                    {{ trans('titles.suppliers') }}
                    <img class="left-line" src="{{ asset('userAssets/imgs/L.png') }}" alt="">
                </h3>

{{--                @if($suppliers->count())--}}
{{--                    @foreach($suppliers as $supplier)--}}
{{--                        --}}
{{--                    @endforeach--}}
{{--                @endif--}}
                <div class="row" data-aos="fade-left">
                    <div class="col-md-3 col-xs-12">
                        <div class="card-img">
                            <img class="product-providers-img align-middle" src="imgs/man-flu-2.png" alt="">
                        </div>
                        <div class="card-info">
                            <h3>اسم مزود الخدمة</h3>
                            <div class="stars">
                                <form action="">
                                    <input class="star star-5" id="star-5" type="radio" name="star" />
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="star" />
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="star" />
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="star" />
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="star" />
                                    <label class="star star-1" for="star-1"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 card-padding">
                        <div class="card-img">
                            <img class="product-providers-img align-middle" src="imgs/man-flu-2.png" alt="">
                        </div>
                        <div class="card-info">
                            <h3>اسم مزود الخدمة</h3>
                            <div class="stars">
                                <form action="">
                                    <input class="star star-5" id="star-5" type="radio" name="star" />
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="star" />
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="star" />
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="star" />
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="star" />
                                    <label class="star star-1" for="star-1"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 card-padding">
                        <div class="card-img">
                            <img class="product-providers-img align-middle" src="imgs/man-flu-2.png" alt="">
                        </div>
                        <div class="card-info">
                            <h3>اسم مزود الخدمة</h3>
                            <div class="stars">
                                <form action="">
                                    <input class="star star-5" id="star-5" type="radio" name="star" />
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="star" />
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="star" />
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="star" />
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="star" />
                                    <label class="star star-1" for="star-1"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 card-padding">
                        <div class="card-img">
                            <img class="product-providers-img align-middle" src="imgs/man-flu-2.png" alt="">
                        </div>
                        <div class="card-info">
                            <h3>اسم مزود الخدمة</h3>
                            <div class="stars">
                                <form action="">
                                    <input class="star star-5" id="star-5" type="radio" name="star" />
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="star" />
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="star" />
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="star" />
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="star" />
                                    <label class="star star-1" for="star-1"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="row" data-aos="fade-right">--}}
{{--                    <div class="col-md-3 col-xs-12">--}}
{{--                        <div class="card-img">--}}
{{--                            <img class="product-providers-img align-middle" src="imgs/man-flu-2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="card-info">--}}
{{--                            <h3>اسم مزود الخدمة</h3>--}}
{{--                            <div class="stars">--}}
{{--                                <form action="">--}}
{{--                                    <input class="star star-5" id="star-5" type="radio" name="star" />--}}
{{--                                    <label class="star star-5" for="star-5"></label>--}}
{{--                                    <input class="star star-4" id="star-4" type="radio" name="star" />--}}
{{--                                    <label class="star star-4" for="star-4"></label>--}}
{{--                                    <input class="star star-3" id="star-3" type="radio" name="star" />--}}
{{--                                    <label class="star star-3" for="star-3"></label>--}}
{{--                                    <input class="star star-2" id="star-2" type="radio" name="star" />--}}
{{--                                    <label class="star star-2" for="star-2"></label>--}}
{{--                                    <input class="star star-1" id="star-1" type="radio" name="star" />--}}
{{--                                    <label class="star star-1" for="star-1"></label>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 col-xs-12 card-padding">--}}
{{--                        <div class="card-img">--}}
{{--                            <img class="product-providers-img align-middle" src="imgs/man-flu-2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="card-info">--}}
{{--                            <h3>اسم مزود الخدمة</h3>--}}
{{--                            <div class="stars">--}}
{{--                                <form action="">--}}
{{--                                    <input class="star star-5" id="star-5" type="radio" name="star" />--}}
{{--                                    <label class="star star-5" for="star-5"></label>--}}
{{--                                    <input class="star star-4" id="star-4" type="radio" name="star" />--}}
{{--                                    <label class="star star-4" for="star-4"></label>--}}
{{--                                    <input class="star star-3" id="star-3" type="radio" name="star" />--}}
{{--                                    <label class="star star-3" for="star-3"></label>--}}
{{--                                    <input class="star star-2" id="star-2" type="radio" name="star" />--}}
{{--                                    <label class="star star-2" for="star-2"></label>--}}
{{--                                    <input class="star star-1" id="star-1" type="radio" name="star" />--}}
{{--                                    <label class="star star-1" for="star-1"></label>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 col-xs-12 card-padding">--}}
{{--                        <div class="card-img">--}}
{{--                            <img class="product-providers-img align-middle" src="imgs/man-flu-2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="card-info">--}}
{{--                            <h3>اسم مزود الخدمة</h3>--}}
{{--                            <div class="stars">--}}
{{--                                <form action="">--}}
{{--                                    <input class="star star-5" id="star-5" type="radio" name="star" />--}}
{{--                                    <label class="star star-5" for="star-5"></label>--}}
{{--                                    <input class="star star-4" id="star-4" type="radio" name="star" />--}}
{{--                                    <label class="star star-4" for="star-4"></label>--}}
{{--                                    <input class="star star-3" id="star-3" type="radio" name="star" />--}}
{{--                                    <label class="star star-3" for="star-3"></label>--}}
{{--                                    <input class="star star-2" id="star-2" type="radio" name="star" />--}}
{{--                                    <label class="star star-2" for="star-2"></label>--}}
{{--                                    <input class="star star-1" id="star-1" type="radio" name="star" />--}}
{{--                                    <label class="star star-1" for="star-1"></label>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 col-xs-12 card-padding">--}}
{{--                        <div class="card-img">--}}
{{--                            <img class="product-providers-img align-middle" src="imgs/man-flu-2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="card-info">--}}
{{--                            <h3>اسم مزود الخدمة</h3>--}}
{{--                            <div class="stars">--}}
{{--                                <form action="">--}}
{{--                                    <input class="star star-5" id="star-5" type="radio" name="star" />--}}
{{--                                    <label class="star star-5" for="star-5"></label>--}}
{{--                                    <input class="star star-4" id="star-4" type="radio" name="star" />--}}
{{--                                    <label class="star star-4" for="star-4"></label>--}}
{{--                                    <input class="star star-3" id="star-3" type="radio" name="star" />--}}
{{--                                    <label class="star star-3" for="star-3"></label>--}}
{{--                                    <input class="star star-2" id="star-2" type="radio" name="star" />--}}
{{--                                    <label class="star star-2" for="star-2"></label>--}}
{{--                                    <input class="star star-1" id="star-1" type="radio" name="star" />--}}
{{--                                    <label class="star star-1" for="star-1"></label>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row" data-aos="fade-left">--}}
{{--                    <div class="col-md-3 col-xs-12">--}}
{{--                        <div class="card-img">--}}
{{--                            <img class="product-providers-img align-middle" src="imgs/man-flu-2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="card-info">--}}
{{--                            <h3>اسم مزود الخدمة</h3>--}}
{{--                            <div class="stars">--}}
{{--                                <form action="">--}}
{{--                                    <input class="star star-5" id="star-5" type="radio" name="star" />--}}
{{--                                    <label class="star star-5" for="star-5"></label>--}}
{{--                                    <input class="star star-4" id="star-4" type="radio" name="star" />--}}
{{--                                    <label class="star star-4" for="star-4"></label>--}}
{{--                                    <input class="star star-3" id="star-3" type="radio" name="star" />--}}
{{--                                    <label class="star star-3" for="star-3"></label>--}}
{{--                                    <input class="star star-2" id="star-2" type="radio" name="star" />--}}
{{--                                    <label class="star star-2" for="star-2"></label>--}}
{{--                                    <input class="star star-1" id="star-1" type="radio" name="star" />--}}
{{--                                    <label class="star star-1" for="star-1"></label>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 col-xs-12 card-padding">--}}
{{--                        <div class="card-img">--}}
{{--                            <img class="product-providers-img align-middle" src="imgs/man-flu-2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="card-info">--}}
{{--                            <h3>اسم مزود الخدمة</h3>--}}
{{--                            <div class="stars">--}}
{{--                                <form action="">--}}
{{--                                    <input class="star star-5" id="star-5" type="radio" name="star" />--}}
{{--                                    <label class="star star-5" for="star-5"></label>--}}
{{--                                    <input class="star star-4" id="star-4" type="radio" name="star" />--}}
{{--                                    <label class="star star-4" for="star-4"></label>--}}
{{--                                    <input class="star star-3" id="star-3" type="radio" name="star" />--}}
{{--                                    <label class="star star-3" for="star-3"></label>--}}
{{--                                    <input class="star star-2" id="star-2" type="radio" name="star" />--}}
{{--                                    <label class="star star-2" for="star-2"></label>--}}
{{--                                    <input class="star star-1" id="star-1" type="radio" name="star" />--}}
{{--                                    <label class="star star-1" for="star-1"></label>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 col-xs-12 card-padding">--}}
{{--                        <div class="card-img">--}}
{{--                            <img class="product-providers-img align-middle" src="imgs/man-flu-2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="card-info">--}}
{{--                            <h3>اسم مزود الخدمة</h3>--}}
{{--                            <div class="stars">--}}
{{--                                <form action="">--}}
{{--                                    <input class="star star-5" id="star-5" type="radio" name="star" />--}}
{{--                                    <label class="star star-5" for="star-5"></label>--}}
{{--                                    <input class="star star-4" id="star-4" type="radio" name="star" />--}}
{{--                                    <label class="star star-4" for="star-4"></label>--}}
{{--                                    <input class="star star-3" id="star-3" type="radio" name="star" />--}}
{{--                                    <label class="star star-3" for="star-3"></label>--}}
{{--                                    <input class="star star-2" id="star-2" type="radio" name="star" />--}}
{{--                                    <label class="star star-2" for="star-2"></label>--}}
{{--                                    <input class="star star-1" id="star-1" type="radio" name="star" />--}}
{{--                                    <label class="star star-1" for="star-1"></label>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 col-xs-12 card-padding">--}}
{{--                        <div class="card-img">--}}
{{--                            <img class="product-providers-img align-middle" src="imgs/man-flu-2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="card-info">--}}
{{--                            <h3>اسم مزود الخدمة</h3>--}}
{{--                            <div class="stars">--}}
{{--                                <form action="">--}}
{{--                                    <input class="star star-5" id="star-5" type="radio" name="star" />--}}
{{--                                    <label class="star star-5" for="star-5"></label>--}}
{{--                                    <input class="star star-4" id="star-4" type="radio" name="star" />--}}
{{--                                    <label class="star star-4" for="star-4"></label>--}}
{{--                                    <input class="star star-3" id="star-3" type="radio" name="star" />--}}
{{--                                    <label class="star star-3" for="star-3"></label>--}}
{{--                                    <input class="star star-2" id="star-2" type="radio" name="star" />--}}
{{--                                    <label class="star star-2" for="star-2"></label>--}}
{{--                                    <input class="star star-1" id="star-1" type="radio" name="star" />--}}
{{--                                    <label class="star star-1" for="star-1"></label>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <nav class="text-center" aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">السابق</a></li>
                        <li class="page-item"><a class="page-link page-no" href="#">1</a></li>
                        <li class="page-item"><a class="page-link page-no" href="#">2</a></li>
                        <li class="page-item"><a class="page-link page-no" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">التالي</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


@endsection