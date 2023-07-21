@extends('pages.layout')
@section('page_title', $entry->title)
@section('page_image', url($entry->blog_featured_image))
@section ('page_description', $entry->blog_description)
@section('content')

@php
    use Statamic\Facades\Markdown;
@endphp

@section('header')
<div class="progress-container">
  <div class="progress-bar" id="myBar"></div>
</div>
@endsection
<section class="pg-black p-2" style="height: 40px">
    <div class="container-xl">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
              <li class="breadcrumb-item"><a class="text-white" href="/category/{{ $entry->category->slug}}" style="text-transform:capitalize">{{ $entry->get('category')}}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{!! \Illuminate\Support\Str::limit($entry->title, 10)!!}</li>
            </ol>
          </nav>
          
    </div>
</section>



<section class="py-5 overflow-hidden">
    <div class="blog-body">
       <div class="d-flex">
        <div class="col-lg-1 col-md-1 col-sm-1">
            <button onclick="window.history.back();" class="cs-back mb-3"><i class="bi bi-chevron-left"></i></button>
            </div>
        <h1 class="mb-4" style="padding-left: 20px">{{ $entry->get('title') }}</h1>
       </div>
       <div class="position-relative"> 
        <img src="{{ $entry->blog_page_image }}" class="img-fluid mt-3 mb-5">
        <a href="/category/{{ $entry->category->slug}}" >  
            <div class="blog-category-overlay">
                  <h6 class="card-category" style="text-transform: capitalize">{{ $entry->get('category')}}</h6>
              </div>
            </a>
       </div>
       
        
        <div class="d-flex">
            <img src="{{ $entry->blog_author->avatar }}" class="card-img-top br-0" style="border-radius: 50px; width:60px;height:60px;margin-right:5px">
            <div class="">
                <h4>{{ $entry->blog_author->name }}</h4>
             
                <p>{{ $entry->get('blog_date') }}</p>
            </div>
            <div style="margin-left: 20px">
                <h4>Share Post</h4>
                <div class="share-icons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('p/' . $entry->slug) }}" class="share-icon" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ url('p/' . $entry->slug) }}" class="share-icon"><i class="bi bi-twitter"></i></a>
                    <a href="https://api.whatsapp.com/send?text={{ url('p/' . $entry->slug) }}" class="share-icon" target="_blank" rel="noopener noreferrer"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://www.linkedin.com/shareArticle?url={{ url('p/' . $entry->slug) }}" class="share-icon" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-linkedin"></i>
                    </a>

                </div>
            </div>
            
        </div>


       
    </div>
    <div class="container-xl" >
        <div class="blog-body">
            {!! Markdown::parse($entry->get('content')) !!}
        </div>

    </div>

  
</section>

<script>
    window.onscroll = function() {
        myFunction();
    };

    function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myBar").style.width = scrolled + "%";
    }
</script>
@endsection