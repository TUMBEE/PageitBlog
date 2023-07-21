<!doctype html>
<html lang="en-US">
<head>
    <!-- 
    
  _____                 _ _     _       
 |  __ \               (_) |   (_)      
 | |__) |_ _  __ _  ___ _| |_   _  ___  
 |  ___/ _` |/ _` |/ _ \ | __| | |/ _ \ 
 | |  | (_| | (_| |  __/ | |_ _| | (_) |
 |_|   \__,_|\__, |\___|_|\__(_)_|\___/ 
              __/ |                     
             |___/                      

    -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>
      <title>@yield('page_title') | Page It</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('page_description')">
    <meta name="author" content="Romeo Tumbee">
    <meta property="og:title" content="@yield('page_title')">
    <meta property="og:description" content="@yield('page_description')">
    <meta property="og:image" content="@yield('page_image')">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="@yield('page_image')">
    <meta name="twitter:title" content="@yield('page_title')">
    <meta name="twitter:description" content="@yield('page_description')">
    <meta name="twitter:image" content="@yield('page_image')">


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }} ">
    <link href="{{ asset('assets/css/blog-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @stack('styles')
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-C4WMPNBWYH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-C4WMPNBWYH');
</script>
  
<body>
    @include('partials.header')
    <div id="app">
        <main class="py-5" style="padding-top: 5rem !important">
            @yield('content')
        </main>
        @include('partials.cookieMessage')
    </div>
    @include('partials.footer')
    
</body>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var toggleElement1 = document.querySelector('[data-bs-toggle="collapse"][data-bs-target="#home-collapse"]');
    var chevronIcon1 = toggleElement1.querySelector('.bi');

    var collapseElement1 = document.querySelector('#home-collapse');
    var isExpanded1 = false;

    toggleElement1.addEventListener('click', function () {
      isExpanded1 = !isExpanded1;

      if (isExpanded1) {
        chevronIcon1.classList.remove('bi-chevron-down');
        chevronIcon1.classList.add('bi-chevron-up');
      } else {
        chevronIcon1.classList.remove('bi-chevron-up');
        chevronIcon1.classList.add('bi-chevron-down');
      }
    });

    collapseElement1.addEventListener('hidden.bs.collapse', function () {
      isExpanded1 = false;
      chevronIcon1.classList.remove('bi-chevron-up');
      chevronIcon1.classList.add('bi-chevron-down');
    });

    var toggleElement2 = document.querySelector('[data-bs-toggle="collapse"][data-bs-target="#menu2"]');
    var chevronIcon2 = toggleElement2.querySelector('.bi');

    var collapseElement2 = document.querySelector('#menu2');
    var isExpanded2 = false;

    toggleElement2.addEventListener('click', function () {
      isExpanded2 = !isExpanded2;

      if (isExpanded2) {
        chevronIcon2.classList.remove('bi-chevron-down');
        chevronIcon2.classList.add('bi-chevron-up');
      } else {
        chevronIcon2.classList.remove('bi-chevron-up');
        chevronIcon2.classList.add('bi-chevron-down');
      }
    });

    collapseElement2.addEventListener('hidden.bs.collapse', function () {
      isExpanded2 = false;
      chevronIcon2.classList.remove('bi-chevron-up');
      chevronIcon2.classList.add('bi-chevron-down');
    });
  });
</script>


<script> //Cookie
  document.addEventListener('DOMContentLoaded', function() {
var cookieNotice = document.getElementById('cookieNotice');

var cookiesAccepted = localStorage.getItem('cookiesAccepted');

if (!cookiesAccepted) {
  cookieNotice.classList.remove('d-none');
}

document.getElementById('acceptCookies').addEventListener('click', function() {
  cookieNotice.classList.add('d-none');
  localStorage.setItem('cookiesAccepted', 'true');
});

document.getElementById('declineCookies').addEventListener('click', function() {
  cookieNotice.classList.add('d-none');
  localStorage.removeItem('cookiesAccepted');
});
});
</script>


</html>
