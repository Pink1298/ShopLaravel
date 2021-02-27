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
@include('frontend.widgets.product-info', [$xe = $xe, $mausac = $mausac ,$tskt = $tskt, $dactinh = $dactinh])
@endsection
{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
<script>
jQuery(document).ready(function($){ 
    var banner=document.getElementById('banner').clientHeight;
    $('.show table.htgia').css('left', ($('div.slidect').position().left + $('div.slidect').width() + 50)+'px' );
    $(window).scroll(function () {
        var e = $(window).scrollTop();
        if (e > ($('#banner').position().top + banner/2) && e < ($('#slidemain').position().top + $('#slidemain').height()/2)) {
            $(".htgia").show()
        } else {
            $(".htgia").hide()
        }
    });	
});
</script>
@endsection