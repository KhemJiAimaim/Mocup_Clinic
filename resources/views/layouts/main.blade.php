<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5/dist/fancybox.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @viteReactRefresh
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    @yield('style')

</head>

<body class="bg-slate-50 flex flex-col justify-start font-noto ">

    @include('layouts.navbar')

    <div class="flex flex-col justify-between h-screen ">
        <div class="flex flex-col justify-start ">

            @yield('contents')
        </div>

        <div class="flex flex-col justify-end h-auto">
            @include('layouts.footer')
        </div>
    </div>





    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5/dist/fancybox.umd.js"></script>

    <script>
        AOS.init({
            disable: window.innerWidth < 768, // ปิดใช้งาน AOS บนหน้าจอมือถือ
            offset: 0,
            once: true,
        });
    </script>
</body>

</html>
