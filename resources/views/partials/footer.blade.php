<footer class="pg-black text-white pb-45 pt-45">
    <div class="prg-footer">
        <div class="container-xl">
            <div class="row mt-3 mb-3 pt-3 pb-3 prg-footer">
                <div class="col-12 col-md-8 mb-3">
                    <!-- Logo on the left column -->
                    <img class="f-brand-logo" src="{{ asset('/images/brand-logo-white.svg') }}" alt="Page it logo">
                </div>
                <div class="col-12 col-md-4 d-flex justify-content-end pg-icc-wrp mt-3">
                    <div class="col-3">
                        <a href="https://www.instagram.com/pageit.io/" target="_tblank"><i class="pgs-icn bi bi-instagram"></i></a>
                    </div>
                    <div class="col-3">
                        <a href="https://facebook.com/pageit.io" target="_tblank"><i class="pgs-icn bi bi-facebook"></i></a>
                    </div>
                    <div class="col-3">
                        <a href="https://api.whatsapp.com/send?phone=905428748969&text=Hello%2C%20I%20am%20contacting%20from%20your%20website.%20" target="_tblank"><i class="pgs-icn bi bi-whatsapp"></i></a>
                    </div>
                    <div class="col-3">
                        <a href="https://www.linkedin.com/company/pageit-io"><i class="pgs-icn bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <!-- Second row -->
            <div class="row pt-45">
                <div class="col-lg-6 col-sm-12 col-md-12 mb-5">
                    <h5 class="mb-3 ems-mb-25">{{__('Subscribe to stay updated')}}</h5>
                    <div class="d-flex flex-column flex-sm-row justify-content-between">
                        <form class="d-flex flex-column flex-sm-row justify-content-between validate" action="https://pageit.us13.list-manage.com/subscribe/post?u=ef2dbb15aed630d7effad9e7a&amp;id=730ea3f9e2&amp;f_id=00fcc6e2f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                            <div class="form-group">
                                <input type="email" class="form-control pem-frm" id="mce-EMAIL"  name="EMAIL" 
                                       placeholder="{{ __('Enter email')}}" style="color: #fff;border-color:#fff !important">

                                      
                            </div>
                            <button type="submit" class="btn btn-pem-frm  ml-sm-2 mt-2 mt-sm-0">{{__('Subscribe')}}
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </form>
                    </div>

                </div>

                <div class="col-lg-6 col-sm-12 col-md-12">
                    <div class="row">
                        <aside class="col-md-4 col-sm-4 line-3">
                            <h5 class="title">{{__('What we do')}}</h5>
                            <ul class="mb-4 list-unstyled">
                                <li><a class="pgft-link" target="_tblank" href="https://pageit.io/en/services/ui-ux">{{__('UI & UX Design')}}</a></li>
                                <li><a class="pgft-link" target="_tblank" href="https://pageit.io/en/services/website-development">{{__('Web Development')}} </a></li>
                                <li><a class="pgft-link" target="_tblank" href="https://pageit.io/en/services/application-development">{{__('Application Development')}}</a></li>
            
                            </ul>
                        </aside>
                        <aside class="col-md-4 col-sm-4 line-3">
                            <h5 class="title">{{__('Corporate')}}</h5>
                            <ul class="mb-4 list-unstyled">
                                <li><a class="pgft-link"  target="_tblank" href="https://pageit.io/en/about-us">{{__('About us')}}</a></li>
                                <li><a class="pgft-link"  target="_tblank" href="https://pageit.io/en/about-us#team">{{__('The Tribe')}} </a></li>
                                <li><a class="pgft-link"  target="_tblank" href="https://pageit.io/en/case-study">{{__('Case Study')}}</a></li>
                            </ul>
                        </aside>
                        <aside class="col-md-4 col-sm-4 line-3">
                            <h5 class="title">{{__('Our Products')}}</h5>
                            <ul class="mb-4 list-unstyled">
                                <li><a class="pgft-link" href="https://tokocy.com/" target="_tblank">{{__('Toko Cy')}}</a></li>
                            </ul>
                        </aside>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div>
        <article class="text-center mt-5">
            <h6>© <?php echo date('Y'); ?> {{__('Pageit.io All Rights Reserved')}}</h6>
        </article>
    </div>
</footer>

<div class="modal fade zoom-in" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="border-radius: 0px !important">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Confirmation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>You're about to leave the Blog section and head to the main site.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Stay Here</button>
          <a href="https://www.pageit.io" class="btn btn-primary">Continue</a>
        </div>
      </div>
    </div>
  </div>
  
  
