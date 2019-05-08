@extends('dashboard.layouts.master')

@section('content')



    <div class="col-md-12">

        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            جميع التصنيفات
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">


                <!--begin::Section-->
                <div class="m-section">
                    @if(session()->has('success'))
                        @component('alerts.success')
                            <stronge>{{ session('success') }}</stronge>
                        @endcomponent
                    @endif
                    @if(session()->has('error'))
                        @component('alerts.danger')
                            <stronge>{{ session('error') }}</stronge>
                        @endcomponent
                    @endif
                    <div class="m-section__content">
                        <table class="table table-inverse">
                            <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>الإسم بالعربي</th>
                                <th>الإسم بالانجليزي</th>
                                <th>عمليات</th>
                            </tr>
                            </thead>
                            <tbody class="text-center">
                            @if($catagories->count())

                                @foreach($catagories as $catagory)

                                    <tr>
                                        <th scope="row">{{ $catagory->index	+ 1 }}</th>
                                        <td>{{ $catagory->name_ar }}</td>
                                        <td>{{ $catagory->name_en }}</td>
                                        <td>
                                            <a href="{{ route('catagories.edit' , $catagory->id) }}"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="تعديل تصنيف"> <i class="la la-edit"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>

                <!--end::Section-->
            </div>

            <!--end::Form-->
        </div>

    </div>


@endsection