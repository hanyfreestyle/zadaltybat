<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  {!!htmlArDir()!!}  >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    {!! SEO::generate() !!}--}}
{{--    <x-website.fav-icon />--}}


{{--    <link rel="stylesheet" href="{{ defWebAssets('css/animate.css') }}">--}}
    <link rel="stylesheet" href="{{ defWebAssets('bootstrap/css/bootstrap.min_'.thisCurrentLocale().'.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/ionicons.min.css') }}">
{{--    <link rel="stylesheet" href="{{ defWebAssets('css/themify-icons.css') }}">--}}
    <link rel="stylesheet" href="{{ defWebAssets('css/linearicons.css') }}">
{{--    <link rel="stylesheet" href="{{ defWebAssets('css/flaticon.css') }}">--}}
    <link rel="stylesheet" href="{{ defWebAssets('css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('owlcarousel/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('owlcarousel/css/owl.theme.default.min.css') }}">
{{--    <link rel="stylesheet" href="{{ defWebAssets('css/magnific-popup.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ defWebAssets('css/slick.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ defWebAssets('css/slick-theme.css') }}">--}}

    <link rel="stylesheet" href="{{ defWebAssets('css/style.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/responsive.css') }}">
    @if(thisCurrentLocale() == 'ar')
        <link rel="stylesheet" href="{{ defWebAssets('css/rtl-style.css') }}">
    @endif

    <link rel="stylesheet" href="{{ defWebAssets('css/_restaurant_var.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/style_edit.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/_restaurant_def.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/_restaurant_footer.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/_restaurant_style.css') }}">





@livewireStyles
</head>
{{--{!! htmlArDir() !!}--}}
<body {!! htmlArDir() !!}>


<x-website.html-loader/>

@if(Session::get('mobileview') != 1)
    <header class="header_wrap">
        @include('shop.layouts.inc.header_top')
        @include('shop.layouts.inc.header_middle')
        @include('shop.layouts.inc.menu')
    </header>
@endif

@if(Session::get('mobileview') != 1)
    @if($agent->isDesktop() or $agent->isTablet())
        @yield('breadcrumb')
    @else
        @if(Auth::guard('customer')->check() == false)
            @yield('breadcrumb')
        @endif
    @endif
@endif



<div class="main_content">
    @yield('content')
</div>

@if(Session::get('mobileview') != 1)
    @if($agent->isDesktop() or $agent->isTablet())
            @include('shop.layouts.inc.footer')
    @else
        @if(Auth::guard('customer')->check() == false)
            @include('shop.layouts.inc.footer')
        @else
            @include('shop.layouts.inc.footer_mobile')
        @endif
    @endif
@endif


@if(Session::get('mobileview') == 1)
    @include('shop.layouts.inc.footer_mobile')
@endif


<script src="{{ defWebAssets('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ defWebAssets('js/jquery-ui.js') }}"></script>
<script src="{{ defWebAssets('js/popper.min.js') }}"></script>
<script src="{{ defWebAssets('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ defWebAssets('owlcarousel/js/owl.carousel.min.js') }}"></script>
{{--<script src="{{ defWebAssets('js/magnific-popup.min.js') }}"></script>--}}
{{--<script src="{{ defWebAssets('js/waypoints.min.js') }}"></script>--}}
{{--<script src="{{ defWebAssets('js/parallax.js') }}"></script>--}}
{{--<script src="{{ defWebAssets('js/jquery.countdown.min.js') }}"></script>--}}
{{--<script src="{{ defWebAssets('js/imagesloaded.pkgd.min.js') }}"></script>--}}
{{--<script src="{{ defWebAssets('js/isotope_'.thisCurrentLocale().'.min.js') }}"></script>--}}
{{--<script src="{{ defWebAssets('js/jquery.dd.min.js') }}"></script>--}}
{{--<script src="{{ defWebAssets('js/slick.min.js') }}"></script>--}}
{{--<script src="{{ defWebAssets('js/jquery.show-more.js') }}"></script>--}}

@yield('AddScript')
{{--<script src="{{ defWebAssets('js/jquery.elevatezoom.js') }}"></script>--}}

@yield('googleMaps')
<script src="{{ defWebAssets('js/scripts.js') }}"></script>
<script>
    async function loadarfont(){
        const font_ar = new FontFace('Tajawal','url({{ defWebAssets('fonts/Ar/TajawalRegular.woff2') }}');
        await font_ar.load();
        document.fonts.add(font_ar);
        document.body.classList.add('Tajawal');
    };
    loadarfont();

    async function loadarfont_en(){
        const font_en = new FontFace('Poppins','url({{ defWebAssets('fonts/En/Poppins-Regular.woff2') }}');
        await font_en.load();
        document.fonts.add(font_en);
        document.body.classList.add('Poppins');
    };
    loadarfont_en();

</script>
@livewireScripts
<script>
    document.addEventListener('livewire:load', () => {
        Livewire.onPageExpired((response, message) => {})
    })
</script>
</body>
</html>
