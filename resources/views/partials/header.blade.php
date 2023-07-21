<header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:80px">
        <div class="container-xl">
           <div class="d-flex align-items-center">
            <a href="https://pageit.io/" target="_blank" data-bs-toggle="modal" data-bs-target="#myModal">
                <img class="brand-logo" src="{{ asset('/images/brand-logo.png') }}" alt="Page it logo">
              </a>
              
              <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">
                <img class="brand-logo" src="{{ asset('/images/brand-blog-logo.svg') }}" alt="Page it Blog logo">
              </a>
              
           </div>
            <div class="collapse navbar-collapse" style="padding-left: 25px; margin-top: -4px;">
                <ul class="navbar-nav me-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_tblank" href="https://pageit.io/en/what-we-do">What we do</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_tblank" href="https://pageit.io/en/about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_tblank" href="https://pageit.io/en/case-study">Case Study</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_tblank" href="https://pageit.io/en/our-products">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_tblank" href="https://pageit.io/en/contact-us">Contact Us</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center ms-auto">
                    <a href="https://pageit.io/en/contact-us" target="_tblank" class="btn-blk">{{__('Start a Project')}}</a>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu"
                aria-controls="mobileMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    @yield('header')
</header>
<!-- Offcanvas menu -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" style="background: #1E1D28">
    <div class="offcanvas-header d-flex justify-content-between align-items-center">
      <a href=""><img class="brand-logo" src="{{ asset('/images/pageit-logo-white.png') }}" alt="Page it logo"></a>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav flex-column">
            <li class="nav-item mobile-nav">
              <a class="nav-link px-0 py-2 _txt_mobile_menu" href="{{route('home')}}">{{__('Home')}}</a>
            </li>
            <li class="nav-item mobile-nav has-sub-menu">
                <a class="nav-link px-0 py-2 _txt_mobile_menu" href="/account/posts/pending-approval" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">{{__('What we do')}} <i class="bi bi-chevron-down"></i></a>
                <ul class="sub-menu collapse list-unstyled ps-0" id="home-collapse">
                <a class="sub_menu_textm" href="https://pageit.io/en/services/website-development" target="_tblank"><li>{{__('Website Development')}}
                <P class="sub_menu_textmini">{{__('Professional and Responsive Websites')}}</P>
                </li></a>
                <a class="sub_menu_textm" href="https://pageit.io/en/services/application-development" target="_tblank"><li>{{__('Application Development')}}
                    <P class="sub_menu_textmini">{{__('Customized and Efficient Apps')}}</P>
                </li></a>
                <a class="sub_menu_textm" href="https://pageit.io/en/services/application-re-engineering-service" target="_tblank"><li>{{__('Application Re-engineering')}}
                    <P class="sub_menu_textmini">{{__('Revitalized and Enhanced Solutions')}}</P>
                </li></a>
                <a class="sub_menu_textm" href="https://pageit.io/en/services/design-and-branding" target="_tblank"><li>{{__('Design and Branding')}}
                    <P class="sub_menu_textmini">{{__('Targeted and Results-Driven Promotion')}}</P>
                </li></a>
                <a class="sub_menu_textm" href="https://pageit.io/en/services/ui-ux" target="_tblank"><li>{{__('UI & UX Design')}}
                    <P class="sub_menu_textmini">{{__('Intuitive and Engaging Interfaces')}}</P>
                </li></a>
                <a class="sub_menu_textm" href="https://pageit.io/en/services/digital-marketing" target="_tblank"><li>{{__('Digital Marketing')}}
                    <P class="sub_menu_textmini">{{__('Strategic and Impactful Branding')}}</P>
                </li></a>
                </ul>
              </li>

              <li class="nav-item mobile-nav has-sub-menu">
                <a class="nav-link px-0 py-2 _txt_mobile_menu" href="/account/posts/pending-approval" data-bs-toggle="collapse" data-bs-target="#menu2" aria-expanded="false">{{__('Corporate')}} <i class="bi bi-chevron-down"></i></a>
                <ul class="sub-menu collapse list-unstyled ps-0" id="menu2">
                  <a class="sub_menu_textm" href="https://pageit.io/en/about-us" target="_tblank"><li>{{__('About us')}}
                <P class="sub_menu_textmini">{{__('Find out more about us')}}</P>
                    </li></a>
                    <a class="sub_menu_textm" href="https://pageit.io/en/case-study" target="_tblank"><li>{{__('Case Study')}}
                        <P class="sub_menu_textmini">{{__('Check out our previous projects')}}</P>
                    </li></a>
                    <a class="sub_menu_textm" href="https://pageit.io/en/our-products" target="_tblank"><li>{{__('Our Products')}}
                        <P class="sub_menu_textmini">View our products</P>
                    </li></a>
                </ul>
              </li>
            <li class="nav-item mobile-nav">
              <a class="nav-link px-0 py-2 _txt_mobile_menu" href="https://pageit.io/en/contact-us" target="_tblank">{{__('Contact us')}}</a>
            </li>
          </ul>

<div class="mobile-footer">
    <hr style="color: #fff">
          <a href="" class="btn-blk btn-org">{{ __('Start a Project') }}</a>
          
          <div class="col-12 col-md-4 d-flex justify-content-end mt-6 pg-icc-wrp">
              <div class="col-3">
                  <a  href="https://www.instagram.com/pageit.io" target="_tblank"><i class="pgs-icn-mobile bi bi-instagram"></i></a>
              </div>
              <div class="col-3">
                  <a href="https://www.facebook.com/pageit.io" target="_tblank"><i class="pgs-icn-mobile bi bi-facebook"></i></a>
              </div>
              <div class="col-3">
                  <a href="https://api.whatsapp.com/send?phone=905428748969&text=Hello%2C%20I%20am%20contacting%20from%20your%20website.%20" target="_tblank"><i class="pgs-icn-mobile bi bi-whatsapp"></i></a>
              </div>
              <div class="col-3">
                  <a href="https://linkedin.com/company/pageit-io" target="_tblank"><i class="pgs-icn-mobile bi bi-linkedin"></i></a>
              </div>
          </div>
        </div>
          </div>
          
  </div>
  
  
