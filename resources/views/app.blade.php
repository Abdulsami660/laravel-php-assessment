<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Php Assessment</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" type="text/css" href="{{ asset('front-end-resources/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end-resources/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- script
    ================================================== -->
    {{-- <script src="js/modernizr.js"></script> --}}





</head>

<body>

    <div id="app"></div>

    @vite('resources/js/app.js')
    <script src="{{asset('front-end-resources/js/jquery-1.11.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{asset('front-end-resources/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front-end-resources/js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('front-end-resources/js/script.js')}}"></script>
</body>

</html>
