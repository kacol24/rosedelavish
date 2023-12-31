<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    {{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">--}}
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/combine/npm/magnific-popup@1.1.0/dist/magnific-popup.min.css,npm/jquery-nice-select@1.1.0/css/nice-select.min.css,npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css,npm/slick-carousel@1.8.1/slick/slick.min.css,npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <!-- Css Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
</head>

<body>
@livewire('partials.header')

<!-- Hero Section Begin -->
@yield('hero')
<!-- Hero Section End -->

<!-- Banner Section Begin -->
@yield('intro')
<!-- Banner Section End -->

<!-- Product Section Begin -->
@yield('showcase')
<!-- Product Section End -->

@yield('before_content')

{{ $slot }}

@yield('after_content')

<!-- Categories Section Begin -->
@yield('cta')
<!-- Categories Section End -->

<!-- Instagram Section Begin -->
@yield('outro')
<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
@yield('articles')
<!-- Latest Blog Section End -->

@livewire('partials.footer')

<!-- Js Plugins -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
<script
    src="https://cdn.jsdelivr.net/combine/npm/magnific-popup@1.1.0,npm/jquery-nice-select@1.1.0,npm/jquery.nicescroll@3.7.6,npm/jquery-countdown@2.2.0,npm/mixitup@3.3.1,npm/owl.carousel@2.3.4,npm/slicknav@1.0.8/dist/jquery.slicknav.min.js,npm/slick-carousel@1.8.1"></script>
<script src="{{ mix('js/app.js') }}"></script>
@livewireScripts
</body>
</html>
