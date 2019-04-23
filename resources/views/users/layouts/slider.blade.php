<div class="main-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 center">
                <div class="">
                    <h1>الموقع الاضخم في المملكة لتاجير جميع مستلزمات المناسبات</h1>
                    <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                    </p>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-down">
                <div class="form-div">
                    <h3>مناسبات , أفراح , أحزان , طلعات خلوية , وأكثر</h3>
                    <p>ابحث عن مستلزمات مناسباتك , باقل الاسعار وافضل جودة</p>
                    <form action="">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">المدينة</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                @if($cities->count())
                                    @foreach($cities as $city)

                                        @if(app()->isLocale('ar'))
                                            <option value="{{ $city->id }}">{{ $city->name_ar }}</option>
                                        @else
                                            <option value="{{ $city->id }}">{{ $city->name_en }}</option>

                                        @endif

                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">العنوان</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                   placeholder="اكتب المكان">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">التصنيف</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                @if($catagories->count())
                                    @foreach($catagories as $catagory)

                                        @if(app()->isLocale('ar'))
                                            <option value="{{ $catagory->id }}">{{ $catagory->name_ar }}</option>
                                        @else
                                            <option value="{{ $catagory->id }}">{{ $catagory->name_en }}</option>

                                        @endif

                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label for="example-time-input">الحجز من</label>
                            </div>
                            <div class="col-6">
                                <label for="example-time-input">الوقت</label>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                            </div>
                            <div class="col-6">
                                <label for="example-time-input">الحجز الى</label>
                            </div>
                            <div class="col-6">
                                <label for="example-time-input">الوقت</label>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                            </div>
                        </div>

                        <button class="btn search-btn">بحث</button>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>