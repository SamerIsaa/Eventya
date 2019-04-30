<footer>
    <div class="container footer-container">
        <div class="row">
            <div class="col-md-4 col-sm-12 first-col">
                <img src="{{ asset('userAssets/imgs/logo_.png') }}" alt="">
                <p>
                    @if(app()->isLocale('ar'))
                        {{ $about->about_us_ar }}
                    @else
                        {{ $about->about_us_en }}
                    @endif

                </p>
                <span><i class="fas fa-envelope"></i> {{ $about->email }}</span>
                <span><i class="fas fa-phone"></i> {{ $about->phone }}</span>
{{--                <a href="#" class="in"><i class="fab fa-linkedin-in"></i></a>--}}
                <a href="{{ $about->google_plus }}" target="_blank" class="google"><i class="fab fa-google-plus-g"></i></a>
                <a href="{{ $about->twitter }}" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="{{ $about->facebook }}" target="_blank" class="fb"><i class="fab fa-facebook-f"></i></a>
            </div>
            <div class="col-6 col-md-2 second-col sm-padding">
                <h3>روابط سريعة</h3>
                <ul>
                    <li><a href="{{ route('index')}}">{{ trans('translation.index') }}</a></li>
                    <li><a href="#"></a>{{ trans('translation.latestOffers') }}</li>
                    <li><a href="{{ route('lastProducts') }}">{{ trans('translation.latestProducts') }}</a></li>
                    <li><a href="{{ route('contactEventya') }}">{{ trans('translation.contactUs') }}</a></li>
                    <li><a href="">{{ trans('translation.aboutUs') }}</a></li>
                    <li><a href="#"></a>{{ trans('translation.usagePolicy') }}</li>
                </ul>
            </div>
            <div class="col-6 col-md-3 third-col sm-padding">
                <h3>حمل التطبيق</h3>
                <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية</p>
                <a href="#" class="app-store">App Store<i class="fab fa-apple"></i></a>
                <a href="#" class="google-play">Google Play<i class="fab fa-google-play"></i></a>
            </div>
            <div class="col-md-3 col-sm-12 fourth-col sm-padding">
                <h3>اشترك بالنشرة البريدية</h3>
                <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                    بعض النوادر أو الكلمات</p>
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="البريد الالكتروني">
                    </div>
                    <button type="submit" class="btn btn-primary">اشتراك</button>
                </form>
            </div>
        </div>
    </div>
    <div class="blue-div">
        <div class="container">
            <span>&copy; WEPAPP 2018</span>
        </div>

    </div>
</footer>
