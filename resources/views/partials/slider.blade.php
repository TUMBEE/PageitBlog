<section> 
    <div class="container-xl py-4">
        <div class="row align-items-start">
            <div class="col-md-7 mb-5">
                <div class="image-container">
                    <img src="{{ asset('assets/' . $featured1Image) }}" alt="Image" class="img-fluid">
                    <a href="{{ $featured1Slug }}">
                    <div class="text-overlay">
                        <p class="blog-slide-title">{{ $featured1Title }}</p>
                        <div class="d-flex align-items-center action-row">
                            <div>
                                <p class="read-more">Read More</p>
                            </div>
                            <div class="ms-auto">
                                <i class="bi bi-arrow-up-right arrow-font"></i>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12 mb-4">
                         <a href="{{ $featured2Slug }}">
                        <div class="image-container">
                            <img src="{{asset('assets/'. $featured2Image )}}" alt="Image" class="img-fluid">
                            <div class="blog-card-overlay">
                                <p class="blog-slide-title-section text-white">{{ $featured2Title }}</p>
                                <div class="d-flex align-items-center ms-auto">
                                    <a href="{{ $featured2Slug }}" class="btn-more">Read More</a>
                                </div>
                            </div>
                        
                        </div>
                        </a>
                    </div>
                    <div class="col-md-12" style="margin-top:0.6rem !important">
                        <div class="image-container">
                            <img src="{{asset('assets/'. $featured3Image )}}" alt="Image" class="img-fluid">
                            <div class="blog-card-overlay">
                                <p class="blog-slide-title-section">{{ $featured3Title }}</p>
                                <div class="d-flex align-items-center ms-auto">
                                    <a href="{{ $featured3Slug }}" class="btn-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    </section>