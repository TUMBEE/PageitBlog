@extends('pages.layout')
@section('page_title', $term->title )
@section('page_image', asset('images/brand-meta-image.jpg'))
@section('content')
@php
$perPage = 12;
$currentPage = request()->input('page', 1);
$entriesPaginated = $entries->slice(($currentPage - 1) * $perPage, $perPage)->all();
$entries = new \Illuminate\Pagination\LengthAwarePaginator($entriesPaginated, count($entries), $perPage, $currentPage);
@endphp
<section class="py-5">
    <div class="container-xl">
       <div class="d-flex align-items-center">
        <div class="col-lg-1 col-md-1 col-sm-1">
            <button onclick="window.history.back();" class="cs-back mb-3"><i class="bi bi-chevron-left"></i></button>
            </div>
           <h4>{{ $term->get('title')}}</h4>
           <hr style="color: #000; width:15%;">
       </div>
   
       <div class="row mt-5 blog-row">
        @foreach ($entries as $entry)
        <div class="col-md-4 d-flex align-items-stretch mb-4">
            <div class="card">
                <div class="">
                    <a class="text-black" href="/p{{ $entry->url() }}"> <img src="{{ $entry->blog_featured_image }}" class="card-img-top br-0" style="border-radius: 0px"> </a>
                    <div class="category-overlay">
                        <h6 class="card-category">{{ $entry->get('category') }}</h6>
                    </div>
                </div>
                <a class="text-black" href="/p{{ $entry->url() }}">
                    <div class="card-body plr-0 d-flex flex-column blog-card-bc">
                        <div class="d-flex post-details pt-3">
                            <img src="{{ $entry->blog_author->avatar }}" class="card-img-top br-0" style="border-radius: 50px; width: 40px; height: 40px; margin-right: 5px">
                            <div class="">
                                <h6>{{ $entry->blog_author->name }}</h6>
                                <p>{{ $entry->get('blog_date') }}</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div>
                                <h5 class="card-title" style="line-height: 2">{{ $entry->get('title') }}</h5>
                            </div>
                            <div class="ms-auto">
                                <i class="bi bi-arrow-up-right arrow-font-small"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endforeach
    <div class="pagination-container">
        <ul class="pagination">
            @if ($entries->onFirstPage())
                <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $entries->previousPageUrl() }}">&laquo;</a></li>
            @endif
    
            @for ($i = 1; $i <= $entries->lastPage(); $i++)
                <li class="page-item{{ $entries->currentPage() === $i ? ' active' : '' }}">
                    <a class="page-link" href="{{ url('category/' . $entry->category->slug . '?page=' . $i) }}">{{ $i }}</a>
                </li>
            @endfor
    
            @if ($entries->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ url('category/' . $entry->category->slug . '?page=' . ($entries->currentPage() + 1)) }}">&raquo;</a></li>
            @else
                <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
            @endif
        </ul>
    </div>
    
    
    </div>

    </div>   
   </section>

@endsection