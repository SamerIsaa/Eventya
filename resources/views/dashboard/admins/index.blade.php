@extends('dashboard.layouts.master')

@section('content')



    <div class="col-md-12">
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
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            جميع المدراء
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">


                <!--begin::Section-->
                <div class="m-section">

                    <div class="m-section__content">
                        <table class="table table-inverse">
                            <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>الإسم</th>
                                <th>البريد الإلكتروني</th>
                                <th>عمليات</th>
                            </tr>
                            </thead>
                            <tbody class="text-center">
                            @if($admins)

                                @foreach($admins as $admin)

                                    <tr>
                                        <th scope="row">{{ $loop->index	+ 1 }}</th>
                                        <td>{{ $admin->name }}</td>
                                        <td>{{ $admin->email }}</td>
                                        <td>
                                            <a href="{{ route('admins.destroy' , $admin->id) }}"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="حذف مدير"> <i class="la la-remove"></i> </a>
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