<div class="types-section">
    <div class="container">
        <h3 class="use-policy-header text-center"><img class="right-line line" src="{{ asset('userAssets/imgs/R.png') }}" alt="">التصنيفات<img
                    class="left-line line" src="{{ asset('userAssets/imgs/L.png') }}" alt=""></h3>

        <div class="row" data-aos="fade-left">
            @if($catagories->count())
                @foreach($catagories as $catagory)
                    <div class="col-6 col-md-3">
                        <a href="#" class="type-card">
                            <div class="type-card-img">
                                <img src="{{ asset($catagory->image_path) }}" alt="">
                            </div>
                            <div class="type-card-header">
                                <h4>
                                    @if(app()->isLocale('ar'))
                                        {{ $catagory->name_ar }}
                                    @else
                                        {{ $catagory->name_en }}
                                    @endif

                                </h4>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif


        </div>
    </div>
</div>
