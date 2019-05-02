@extends('dashboard.layouts.master')

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">{{trans('supplier.supplier')}}</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">{{trans('supplier.supplier')}}</span>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">{{trans('supplier.supplier')}}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="m-content">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                                {{trans('supplier.supplier')}}
                            </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{trans('supplier.name')}}</th>
                            <th>{{trans('supplier.email')}}</th>
                            <th>{{trans('supplier.phone')}}</th>
                            <th>{{trans('supplier.rate')}}</th>
                            <th> {{trans('supplier.is_approved')}}</th>
                            <th> {{trans('supplier.receivable')}} </th>
                            <th> {{trans('supplier.city')}} </th>
                            <th>{{trans('supplier.action')}}</th>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="{{asset('dashboardAssets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var lastIdx = null;

            var table = $('#m_table_1').DataTable({
                processing: true,

                ajax: '{!! URL::asset('/admin/supplier/datatable') !!}',
                columns : [
                    { data: 'id'              , name:'id'},
                    { data: 'name'              , name:'name'},
                    { data: "email"           , name:'email'},
                    { data: "phone"           , name:'phone'},
                    { data: "rate"           , name:'rate'},
                    { data: 'is_aproved'           , name:'is_aproved'},
                    { data: 'receivable'      , name:'receivable'},
                    { data: 'city.name_ar'      , name:'city.name_ar'},
                    { data: 'Actions'         , name:'Actions'},
                ]
                ,
                "stateSave": false,
                "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
                "pagingType": "full_numbers",
                dom: 'Blfrtip',
                buttons: [
                    {
                        extend: 'print',
                        customize: function ( win ) {
                            $(win.document.body)
                                .css( 'direction', 'rtl' )
                        },
                        exportOptions: {
                            columns: [ 0,1,2,3 ]
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: [ 0,1,2,3 ]
                        }
                    },
                    {
                        extend: 'pdf',

                        exportOptions: {
                            columns: [ 0,1,2,3 ]
                        }
                    },
                    {
                        extend: 'csv',

                        exportOptions: {
                            columns: [ 3,2,1,0 ]
                        }
                    }
                ],
                "dom": "<'row' <'col-md-1'l><'col-md-8'f> <'col-md-3'B>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
            });
        });
    </script>

<script>
        $(document).on('click', '.approved', function (e) {
            e.preventDefault();
            var table = $('#m_table_1').DataTable();
            var id = $(this).data('id');
            swal({
                title: "هل تريد الموافقة على المورد ؟",
                type: "warning",
                confirmButtonClass: "btn-warning",
                confirmButtonText: "نعم",
                showCancelButton: true,
                cancelButtonText: "لا",
            }).then(
                function(result) {

                    if (result.value) {

                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('[name="_token"]').attr('value')
                            },
                            type: "post",
                            url: "{{url('/admin/supplier/approved')}}",
                            data: {id: id},
                            success: function (data) {
                                swal({
                                    title: "تمت الموافقة",
                                    text: "تمت الموافقة بنجاح .",
                                    type: "success",
                                    timer: 3000
                                }).then(
                                    function () {
                                        // location.reload(true);
                                        table.ajax.reload();
                                    }).catch(swal.noop)
                            }
                        })
                    }

                })
        });

    </script>
@endsection