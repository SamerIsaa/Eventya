@extends('dashboard.layouts.master')


@section('content')
    <div class="col-md-12">



        <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
                        <h3 class="m-portlet__head-text">
                            تعديل صنف
                        </h3>
                    </div>
                </div>
            </div>


            <!--begin::Form-->
            @if($errors->any())
                @foreach($errors->all() as $error)
                    @component('alerts.danger')
                        <stronge>{{ $error }}</stronge>
                    @endcomponent
                @endforeach
            @endif
            <form class="m-form m-form--fit m-form--label-align-right" action="{{ route('catagories.update' , $catagory->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT')}}
                <div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">الاسم باللغة العربية</label>
                        <input type="text" class="form-control m-input m-input--square" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الاسم باللغة العربية" name="name_ar" value="{{ $catagory->name_ar }}">
                    </div>

                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">الاسم باللغة الإنجليزية</label>
                        <input type="text" class="form-control m-input m-input--square" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الاسم باللغة الإنجليزية" name="name_en" value="{{ $catagory->name_en }}">
                    </div>

                    <div class="form-group m-form__group row text-center">
                        <label class="col-form-label col-lg-3 col-sm-12 text-left">صورة التصنيف</label>
                        <div class="col-lg-4 col-md-9 col-sm-12 text-center">
                            <div class="m-dropzone dropzone" action="{{url('/admin/catagory/upload')}}" id="m-dropzone-three">
                                <div class="m-dropzone__msg dz-message needsclick">
                                    <h3 class="m-dropzone__msg-title">إسقاط الملفات هنا أو انقر لتحميل.</h3>
                                    <input type="hidden" id="images" name="image_path" value="">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="m-portlet__foot m-portlet__foot--fit text-right">
                    <div class="m-form__actions">
                        <button type="submit" class="btn btn-metal">حفظ</button>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>

    </div>
@endsection

