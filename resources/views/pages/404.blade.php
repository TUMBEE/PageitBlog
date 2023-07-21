@extends('pages.layout')
@section('page_title', __('404'))
@push ('styles')
<style>
    .error-code {
        font-size: 120px;
        color: #f17a00;
        font-weight: 700
    }
    .message {
        font-size: 25px;
        color: #666;
    }
 </style>
@endpush
@section('content')
<section class="py-4">
    <div class="container-xl">
        <h1 class="error-code ">404</h1>
        <h1>Sorry, Page Not Found</h1>
        <p class="message">The page you are looking for was moved, removed, renamed or might never existed</p>
    </div>
</section>
@endsection