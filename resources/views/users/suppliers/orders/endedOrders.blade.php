@extends('users.layouts.master')

@section('title')
    {{ trans('translation.endedOrders') }}
@endsection
@section('content')




    <div class="end-request-page">
        <div class="container personal-request-container">
            <h3 class="use-policy-header text-center"><img class="right-line" src="{{ asset('userAssets/imgs/R.png') }}" alt="">{{ trans('translation.endedOrders') }}<img
                        class="left-line" src="{{ asset('userAssets/imgs/L.png') }}" alt=""></h3>

            @if($endedOrders->count())
                @foreach($endedOrders as $order)
                    <div class="row requested-product">
                        <div class="col-md-2 requested-product-img">
                            @if($image = $order->product->productImages->first())
                                <img src="{{ asset($image['photo-path']) }}" alt="">
                            @endif
                        </div>
                        <div class="col-md-10 requested-product-info">
                            <p><span class="lable-span header-span">{{ trans('translation.orderNumber') }}:</span><span
                                        class="product-id header-span">{{ $order->order_number }}</span></p>

                            <p><span class="lable-span">{{ trans('translation.productName') }} :</span><span class="answer-span">{{ $order->product->name }}</span></p>
                            <p><span class="lable-span">{{ trans('translation.city') }}  :</span><span class="answer-span">
                            @if(app()->isLocale('ar'))
                                        {{ $order->city->name_ar }}
                                    @else
                                        {{ $order->city->name_en }}
                                    @endif
                            </span></p>
                            <p><span class="lable-span">{{ trans('translation.address') }}  :</span><span class="answer-span">{{ $order->address }} </span></p>
                            <p><span class="lable-span">{{ trans('translation.reservationFrom') }} :</span><span class="answer-span">{{ \Carbon\Carbon::parse($order->from_time)->format('G:iA') }}  | {{ $order->from_date }}</span>
                            </p>
                            <p><span class="lable-span">{{ trans('translation.reservationTo') }} :</span><span class="answer-span">{{  \Carbon\Carbon::parse($order->to_time)->format('g:iA')  }} | {{ $order->to_date }}</span>
                            </p>
                            <p><span class="lable-span">{{ trans('translation.quentity') }}  :</span><span class="answer-span">{{ $order->quentity }}</span></p>
                            <p><span class="lable-span">{{ trans('translation.color') }} :</span><span class="answer-span color-span" style="background: {{ $order->product->color }}"></span></p>
                            <p><span class="lable-span">{{ trans('translation.notes') }}  :</span><span class="answer-span">
                                @if($order->deliver_longitude > 0)
                                        {{ trans('translation.payerDeliver') }}
                                    @else
                                        -
                                    @endif
                            </span></p>
                            <p class="price-para"><span class="lable-span price-span">{{ trans('translation.totalPrice') }} </span><span
                                        class="answer-span">{{ $order->total_after_tax }} $</span>
                            </p>


                        </div>
                    </div>
                @endforeach
            @endif


        </div>
    </div>



@endsection