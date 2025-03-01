@extends('layouts.main')

@section('title')
    contact
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('contents')
    @php
        $data = [
            '1' => [
                'id' => 1,
                'title' => 'Gynecology',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur. Ornare nisl aliquam adipiscing dignissim. Arcu rhoncus dui.',
                'img' => '/images/img/Gynecology.png',
                'icon' => '/images/icon/Gynecology.png',
            ],
            '2' => [
                'id' => 2,
                'title' => 'Neurophysiology',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur. Ornare nisl aliquam adipiscing dignissim. Arcu rhoncus dui.',
                'img' => '/images/img/Neurophysiology.png',
                'icon' => '/images/icon/iconoir_brain.png',
            ],
            '3' => [
                'id' => 3,
                'title' => 'Gastroenterology',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur. Ornare nisl aliquam adipiscing dignissim. Arcu rhoncus dui.',
                'img' => '/images/img/Gastroenterology.png',
                'icon' => '/images/icon/gas.png',
            ],
            '4' => [
                'id' => 4,
                'title' => 'Pulmonology',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur. Ornare nisl aliquam adipiscing dignissim. Arcu rhoncus dui.',
                'img' => '/images/img/Pulmonology.png',
                'icon' => '/images/icon/Pulmonology.png',
            ],
            '5' => [
                'id' => 5,
                'title' => 'Cardiology',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur. Ornare nisl aliquam adipiscing dignissim. Arcu rhoncus dui.',
                'img' => '/images/img/Cardiology.png',
                'icon' => '/images/icon/Cardiology.png',
            ],
            '6' => [
                'id' => 6,
                'title' => 'Ophthalmology',
                'description' =>
                    'Lorem ipsum dolor sit amet consectetur. Ornare nisl aliquam adipiscing dignissim. Arcu rhoncus dui.',
                'img' => '/images/img/Ophthalmology.png',
                'icon' => '/images/icon/Ophthalmology.png',
            ],
        ];
        $selectedService = $data[$id] ?? null;

        $title = [
            'Heart Cardioversion',
            'Kidney Stone Treatment',
            "Dupuytren's Fasciectomy",
            'Pain management',
            'Hip Resurfacing Surgery',
            'Prostate Cancer',
            'Laparoscopy',
            'Radiology',
            'Knee Arthroscopy',
            'Removing wisdom teeth',
            'Local anaesthetic',
        ];
    @endphp

    @if ($selectedService)
        <section class="w-full h-auto relative top-0">
            <div
                class="absolute inset-0 z-50 flex flex-col justify-center items-center gap-y-4 max-sm:gap-y-1 max-w-[1320px] m-auto">
                <div class="flex flex-col sm:gap-y-8">
                    <p class="xl:text-[40px] text-3xl uppercase text-white font-[700] text-center ss:tracking-[8px] tracking-widest animate__animated animate__zoomIn" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                        {{ $selectedService['title'] }}
                    </p>
                    <p class="xl:text-[20px] text-lg capitalizetext-white font-[400] ss:tracking-[8px] text-center text-white tracking-widest animate__animated animate__zoomIn" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                        Detail about our service
                    </p>
                </div>
            </div>

            <div class="relative w-full lg:h-[250px] h-[150px]">
                <img src="/images/banner/image 63 (1).png" alt="About Banner" class="w-full h-full object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-[#17449E] to-[#07CCEC]  opacity-80">
                </div>
            </div>
        </section>
    @endif

    <div class="xl:py-16 py-[30px] max-w-[1320px] mx-auto w-full flex md:flex-row flex-col lg:gap-6 gap-2 px-4">
        <div class="md:w-[40%] w-full max-w-full"  data-aos="fade-right" data-aos-duration="500">
            <div class=" rounded-md border h-auto md:flex md:flex-col md:justify-start md:items-start grid grid-cols-2 md:gap-4 gap-2 md:px-4 md:py-8 p-4 shadow-[rgba(17,_17,_26,_0.1)_0px_0px_8px]">
                <p class="text-lg text-[#08286F] font-[700] max-md:col-span-2">Tests and Services</p>

                @foreach ($data as $services)
                    <a href="{{ route('service.detail', ['id' => $services['id']]) }}"
                        class=" hover:bg-[#21CDAD] cursor-pointer  {{ (int) $services['id'] === $id ? 'bg-[#21CDAD]' : 'bg-[#08286F]' }} p-4 rounded-md w-full flex lg:gap-4 gap-2 items-center transition-all duration-200 ease-in-out">
                        <div class="w-[25px] h-[25px] max-md:hidden">
                            <img src="/images/icon/typcn_arrow-up.png" alt="" class="w-full h-full">
                        </div>
                        <p class="text-white font-[700] lg:text-base text-sm">{{ $services['title'] }}</p>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="w-full h-full p-4 flex flex-col justify-between gap-8"  data-aos="fade-left" data-aos-duration="500">
            <div class="flex flex-col gap-8">
                <p class="text-blue xl:text-3xl md:text-2xl text-xl font-[700]">Overview</p>
                <div class="flex flex-col gap-2">
                    <p class="text-[#474747] md:text-base text-sm indent-8"> Lorem ipsum dolor sit amet consectetur.
                        Consectetur nunc at sit aliquet velit rhoncus
                        sed. Risus elementum tortor turpis eu tristique viverra pellentesque tortor ipsum. Ut hac tellus
                        condimentum facilisis posuere. Purus ac cursus sed luctus sed vel sed nunc fermentum. Massa
                        facilisis nulla tellus scelerisque. Vestibulum in nam ornare lectus sodales risus congue amet
                        convallis. Duis et ultrices ornare egestas lacus. Id sed leo.
                    </p>
                </div>

                <div class="relative w-full max-h-[500px] shadow-md">
                    <img src="/images/img/detail.png" alt="" class="w-full h-full object-cover">
                    <div class="absolute inset-0 flex items-center justify-center hover:scale-105 transition-all duration-100 ease-in-out cursor-pointer"
                        id="video-open">
                        <img src="/images/icon/Group 124.png" alt="" class="w-[80px] h-[80px] drop-shadow-md">
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <p class="text-[#474747] md:text-base text-sm indent-8"> Lorem ipsum dolor sit amet consectetur.
                        Consectetur nunc at sit aliquet velit rhoncus
                        sed. Risus elementum tortor turpis eu tristique viverra pellentesque tortor ipsum. Ut hac tellus
                        condimentum facilisis posuere. Purus ac cursus sed luctus sed vel sed nunc fermentum. Massa
                        facilisis nulla tellus scelerisque.
                    </p>
                </div>

                <div class="flex lg:flex-row flex-col gap-4">
                    <div class="w-full max-h-[280px] shadow-md">
                        <img src="/images/img/image.png" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="w-full max-h-[280px] shadow-md">
                        <img src="/images/img/image 29.png" alt="" class="w-full h-full object-cover">
                    </div>
                </div>

            </div>

            <div class="border-t-4 border-blue pt-8 flex flex-col justify-center gap-4">
                <p class="text-blue xl:text-3xl md:text-2xl text-xl text-center font-[700]">Treatment Price List</p>

                <div class="grid lg:grid-cols-2 gap-4 gap-y-2">
                    @foreach ($title as $item)
                        <div class="flex flex-row gap-4 w-full justify-start items-end">
                            <p class="text-[#8A8E94] xl:text-lg md:text-base text-sm font-light">
                                {{ $item }}
                            </p>
                            <div class="flex-grow border-t border-[#8A8E94] pb-2 ml-4"></div>
                            <div class="flex flex-row justify-start items-center">
                                <div class="w-[30px] h-[30px]">
                                    <img src="/images/icon/bx_dollar.png" alt="">
                                </div>
                                <p class="text-black font-[700] xl:text-lg md:text-base text-sm">0000.00</p>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>

    </div>



    <!-- Popup แสดงวิดีโอ -->
    <div id="video-modal"
        class="fixed inset-0 bg-black bg-opacity-70 flex justify-center items-center hidden z-[100] w-full">
        <div
            class="relative bg-transparent xl:w-[950px] sm:w-[700px] ss:w-[500px] w-[380px] h-[650px] max-xl:h-[500px] max-md:h-[350px] p-4">


            <div class="flex justify-end items-center cursor-pointer group mb-2 " id="video-close">
                <div class="md:w-12 md:h-12 w-8 h-8 cursor-pointer border-2 flex justify-center items-center bg-white rounded-full md:p-2 p-1 group-hover:border-blue transition-all duration-300 ease-in-out"
                    id="close-cate">
                    <img src="/images/icon/close.png" alt="Close Icon" class="w-full h-full">
                </div>

            </div>
            <iframe id="video-frame" class="w-full h-full" frameborder="0" allow="autoplay; encrypted-media"
                allowfullscreen></iframe>

        </div>
    </div>
@endsection

@section('script')
    @vite('resources\js\Services_pages\video.js')
@endsection
