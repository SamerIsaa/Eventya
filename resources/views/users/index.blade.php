@extends('users.layouts.master')

@section('title')
    {{ trans('titles.eventya') }}
@endsection

@section('content')
    <!-- القسم الرئيسي -->
    @include('users.layouts.slider')

    <!-- التصنيفات -->
    @include('users.layouts.catagories')
    <!-- وقت الفلة -->
    @include('users.layouts.flaTime')


@endsection