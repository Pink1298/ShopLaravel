@extends('frontend.layouts.master')

@section('title')
XE MÁY META
@endsection
{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.master` --}}
@section('custom-css')
@endsection
{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layouts.master` --}}
@section('main-content')
<div class="container text-center">
    {{-- <h1>{{ __('sunshine.welcome') }}</h1> --}}
</div>
@include('frontend.widgets.product-list', [$data = $listdanhsachxetheohang])
@endsection
{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection