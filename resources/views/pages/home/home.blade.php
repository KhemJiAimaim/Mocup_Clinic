@extends('layouts.main')

@section('title')
    home
@endsection

@section('style')
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    @vite('resources/css/home/swiper.css')
    {{-- @vite('resources/css/home/preview_img.css') --}}
@endsection

@section('contents')
    @include('pages.home.swiper')

    @php
        $dataBlog = [
            '1' => [
                'id' => '1',
                'title' => 'Hospital has specialist surgeons',
                'img' => '/images/img/11.png',
            ],
            '2' => [
                'id' => '2',
                'title' => 'Brushing your teeth may keep your heart healthy',
                'img' => '/images/img/22.png',
            ],

            '3' => [
                'id' => '3',
                'title' => 'These blood markers may indicate a higher risk of disease',
                'img' => '/images/img/33.png',
            ],

            '4' => [
                'id' => '4',
                'title' => 'Surprising body cues that could be heart shown concern for all.',
                'img' => '/images/img/44.png',
            ],
        ];

        $dataDoctor = [
            '1' => [
                'id' => '1',
                'name' => 'Dr. Kelly Ann',
                'description' => 'Heart Specialist',
                'img' => '/images/img/d-1.png',
            ],
            '2' => [
                'id' => '2',
                'name' => 'Dr. Jane Green',
                'description' => 'Surgeon General',
                'img' => '/images/img/d-2.png',
            ],
            '3' => [
                'id' => '3',
                'name' => 'Dr. Marko Barker',
                'description' => 'Anesthesiologist',
                'img' => '/images/img/d-3.png',
            ],
            '4' => [
                'id' => '4',
                'name' => 'Dr. Maria Skar',
                'description' => 'Allergist',
                'img' => '/images/img/d-4.png',
            ],
            '5' => [
                'id' => '5',
                'name' => 'Dr. Abby Fisher',
                'description' => 'Neurosurgeon',
                'img' => '/images/img/d-5.png',
            ],
            '6' => [
                'id' => '6',
                'name' => 'Dr. Thomas Paul',
                'description' => 'Cardiology',
                'img' => '/images/img/d-6.png',
            ],
            '7' => [
                'id' => '7',
                'name' => 'Dr. Zhala Conner',
                'description' => 'Anesthesiologist',
                'img' => '/images/img/d-7.png',
            ],
            '8' => [
                'id' => '8',
                'name' => 'Dr. Emily Haden',
                'description' => 'Neurosurgeon',
                'img' => '/images/img/d-8.png',
            ],
        ];

        $dataServices = [
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
    @endphp

    <div class="xl:py-16 py-[30px]">
        {{-- 1 --}}
        <section class="max-w-[1320px] mx-auto px-4 lg:pb-16 pb-[30px]" data-aos="fade-up" data-aos-duration="500">
            <div class=" flex flex-col gap-6">
                <div class="flex flex-col gap-4">
                    <p class="xl:text-3xl md:text-2xl text-xl font-[600]">Why Choose MedicalGuide for Your Heart Care</p>
                    <p class="text-[#999999] font-light xl:text-lg md:text-base text-sm">Lorem ipsum dolor sit amet
                        consectetur. Convallis nisi quis consectetur morbi eget ac. <br> Ullamcorper eu vel id condimentum
                        nulla arcu.</p>
                </div>

                <div class="flex md:flex-row flex-col gap-4">
                    <div class="flex flex-col gap-4 w-full">

                        <div class="flex justify-start xl:gap-4 gap-2 cursor-pointer flex-row">
                            <div class="w-full xl:max-w-[70px] md:max-w-[40px] max-w-[30px]">
                                <div class="xl:w-[60px] xl:h-[60px] md:w-[40px] md:h-[40px] w-[30px] h-[30px]">
                                    <img src="/images/icon/prime_check-circle.png" alt="" class="w-full h-full">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 justify-center items-start w-full">
                                <p class="font-[700] md:text-xl text-base sm:text-left text-lext w-full capitalize">
                                    Empowering Patients Through Education</p>

                                <p class="md:txet-lg text-sm text-[#999999] font-light">Lorem ipsum dolor sit amet
                                    consectetur. Convallis nisi quis consectetur morbi eget ac. Ullamcorper eu vel id
                                    condimentum nulla arcu.</p>
                            </div>
                        </div>

                        <div class="flex justify-start xl:gap-4 gap-2 cursor-pointer flex-row">
                            <div class="w-full xl:max-w-[70px] md:max-w-[40px] max-w-[30px]">
                                <div class="xl:w-[60px] xl:h-[60px] md:w-[40px] md:h-[40px] w-[30px] h-[30px]">
                                    <img src="/images/icon/prime_check-circle.png" alt="" class="w-full h-full">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 justify-center items-start w-full">
                                <p class="font-[700] md:text-xl text-base sm:text-left text-lext w-full capitalize">
                                    Advanced Care and Technology</p>

                                <p class="md:txet-lg text-sm text-[#999999] font-light">Lorem ipsum dolor sit amet
                                    consectetur. Convallis nisi quis consectetur morbi eget ac. Ullamcorper eu vel id
                                    condimentum nulla arcu.</p>
                            </div>
                        </div>

                        <div class="flex justify-start xl:gap-4 gap-2 cursor-pointer flex-row">
                            <div class="w-full xl:max-w-[70px] md:max-w-[40px] max-w-[30px]">
                                <div class="xl:w-[60px] xl:h-[60px] md:w-[40px] md:h-[40px] w-[30px] h-[30px]">
                                    <img src="/images/icon/prime_check-circle.png" alt="" class="w-full h-full">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 justify-center items-start w-full">
                                <p class="font-[700] md:text-xl text-base sm:text-left text-lext w-full capitalize">
                                    Friendly and Compassionate</p>

                                <p class="md:txet-lg text-sm text-[#999999] font-light">Lorem ipsum dolor sit amet
                                    consectetur. Convallis nisi quis consectetur morbi eget ac. Ullamcorper eu vel id
                                    condimentum nulla arcu.</p>
                            </div>
                        </div>

                    </div>

                    <div
                        class="grid grid-cols-2 items-center place-items-center lg:gap-4 gap-2 max-w-full lg:w-[60%] w-full xl:h-[350px] h-[250px]">
                        <div class="relative w-full h-full">
                            <div class="lg:h-[90%] h-full w-full absolute top-0 right-0">
                                <img src="/images/img/1.png" alt="" class="w-full h-full shadow-md object-cover">
                            </div>
                        </div>

                        <div class="relative w-full h-full items-center">
                            <div class="lg:h-[90%] h-full w-full absolute bottom-0 left-0">
                                <img src="/images/img/2.png" alt="" class="w-full h-full  shadow-md object-cover">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        {{-- 2 --}}
        <section class="relative z-50 ">
            <div class="absolute w-full h-full">
                <img src="/images/bg_img/Group 113.png" alt="Banner Image" class="w-full h-full object-cover">
                <div class="absolute top-0 left-0 w-full h-full"></div>
            </div>

            <div
                class="xl:py-16 py-[30px] pb-[50px] max-w-[1320px] mx-auto items-center px-4 z-50 relative flex flex-col justify-between gap-4">
                <div class="flex flex-col justify-center items-center w-full gap-4" data-aos="zoom-in"
                    data-aos-duration="500">
                    <p class="text-white xl:text-3xl md:text-2xl text-xl font-[600] text-center">Providing Medical Care
                        For <br> The Sickest In Our Community.</p>
                    <p
                        class="text-white text-center max-w-full md:w-[60%] w-full font-light xl:text-lg md:text-base text-sm">
                        Lorem
                        ipsum dolor sit amet consectetur. Diam massa risus sit in. Sollicitudin orci convallis risus sed
                        interdum ultrices sagittis suspendisse. Sit accumsan a bibendum.</p>
                </div>

                <div class="swiper Swiper_Medical max-w-[1100px] mx-auto flex flex-col gap-2" data-aos="fade-up"
                    data-aos-duration="500">
                    <a href="{{ route('service.index') }}"
                        class="w-full flex flex-row justify-end items-center gap-2 group ">
                        <p
                            class="text-white relative group-hover:font-[700] cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-[#DFDFDF]  before:origin-center before:h-[2px] before:w-0 group-hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-[#DFDFDF] after:origin-center after:h-[2px] after:w-0 group-hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                            See All</p>
                        <div class="w-[20px] h-auto">
                            <img src="/images/icon/next_page.png" alt="">
                        </div>
                    </a>

                    <div class="swiper-wrapper">
                        @foreach ($dataServices as $medical)
                            <div class="swiper-slide rounded-lg" style="background-color: transparent">
                                <a href="{{ route('service.detail', ['id' => (int) $medical['id']]) }}"
                                    class="bg-white cursor-pointer group hover:bg-[#21CDAD] md:p-4 p-3 rounded-lg flex flex-col justify-start items-center xl:w-[350px] md:w-full w-[320px]  md:h-[380px] h-[350px] transition-all duration-200 ease-in-out">
                                    <div class="xl:w-[315px] w-full h-[180px] top-0 relative z-50 mb-10">
                                        <img src="{{ asset($medical['img']) }}" alt=""
                                            class="w-full h-full rounded-lg shadow-sm object-cover">
                                        <div class="absolute inset-0 -bottom-8 flex justify-center items-end z-50">
                                            <div
                                                class="w-[80px] h-[80px] bg-white p-2 rounded-full flex justify-center items-center shadow-sm">
                                                <div class="bg-[#07CCEC] p-2 rounded-full">
                                                    <img src="{{ asset($medical['icon']) }}" alt=""
                                                        class="w-full h-full">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col justify-center items-center">
                                        <p
                                            class="font-[700] md:text-xl text-base text-lext w-full capitalize text-center group-hover:text-white text-blue tracking-widest">
                                            {{ $medical['title'] }}</p>
                                        <p
                                            class="text-sm text-[#999999] font-light line-clamp-5 text-center group-hover:text-white">
                                            {{ $medical['description'] }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="swiper-pagination pagination_Medical"></div>

            </div>
        </section>

        {{-- 3 --}}
        <section class="max-w-[1320px] mx-auto px-4 xl:py-16 py-[30px] flex flex-col md:gap-8 ga-6 relative">


            <div class="flex md:flex-row flex-col justify-between items-center h-full md:gap-20 gap-4">
                <p class="xl:text-4xl md:text-3xl text-xl font-[600] tracking-widest w-full md:border-r-2 max-ss:border-b-2 border-[#8A8E94]"
                    data-aos="fade-right" data-aos-duration="500">
                    Latest News & <br> Announcement
                </p>

                <p class="text-[#474747] text-left w-full font-light xl:text-lg md:text-base text-sm" data-aos="fade-left"
                    data-aos-duration="500">Lorem
                    ipsum dolor sit amet consectetur. Diam massa risus sit in. Sollicitudin orci convallis risus sed
                    interdum ultrices sagittis suspendisse. Sit accumsan a bibendum.</p>
            </div>

            <div class="swiper swiper_news max-ss:max-w-[1100px] mx-auto flex flex-col gap-2  py-2 px-1"
                data-aos="fade-up" data-aos-duration="500">
                <a href="{{ route('blog.index') }}" class="w-full flex flex-row justify-end items-center gap-2 group ">
                    <p
                        class="text-blue relative group-hover:font-[700] cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-[#DFDFDF]  before:origin-center before:h-[2px] before:w-0 group-hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-[#DFDFDF] after:origin-center after:h-[2px] after:w-0 group-hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                        See All</p>
                    <div class="w-[20px] h-auto">
                        <img src="/images/icon/next-blue.png" alt="">
                    </div>
                </a>
                <div class="swiper-wrapper">
                    @foreach ($dataBlog as $blog)
                        <div class="swiper-slide rounded-lg " style="background-color: transparent">
                            <div
                                class="bg-white flex flex-col md:w-full w-[320px]  justify-between shadow-[rgba(50,_50,_105,_0.15)_0px_2px_5px_0px,_rgba(0,_0,_0,_0.05)_0px_1px_1px_0px] rounded-md">
                                <div class="w-full relative">
                                    <img src="{{ asset($blog['img']) }}" alt=""
                                        class="w-full h-full rounded-t-md">
                                    <div
                                        class="rounded-md bg-blue py-2 md:w-[120px] w-[85px] flex justify-center items-center text-white text-sm absolute top-2 right-2">
                                        01 jan 2025</div>
                                </div>

                                <div class="flex flex-col justify-between items-start p-4 gap-4">
                                    <div class="flex flex-col gap-2">
                                        <p
                                            class="font-[700] text-base w-full capitalize text-left group-hover:text-white text-black line-clamp-2 h-[50px] ">
                                            {{ $blog['title'] }}</p>
                                        <p
                                            class="text-sm text-[#999999] font-light group-hover:text-white line-clamp-3 text-left">
                                            Lorem ipsum dolor sit amet consectetur. Diam massa risus sit in. Sollicitudin
                                            orci convallis
                                            risus sed interdum ultrices sagittis suspendisse. Sit accumsan a bibendum.</p>
                                    </div>

                                    <div class="flex justify-center items-center w-full">
                                        <a href="{{ route('blog.detail', ['id' => (int) $blog['id']]) }}"
                                            class="rounded-full bg-blue hover:bg-[#21cdad] py-2 w-[120px] flex justify-center items-center text-white text-sm transition-all duration-200 ease-in-out">Read
                                            it</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="swiper-pagination pagination_news"></div>
        </section>

        {{-- 4 --}}
        <section class="relative z-50">
            <div class="absolute w-full h-full">
                <img src="/images/bg_img/image 14.png" alt="Banner Image" class="w-full h-full object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-[#00226C] opacity-80"></div>
            </div>

            <div class="xl:py-16 py-[30px] max-w-[1320px] mx-auto px-4  relative z-50 ">
                <div class="flex md:flex-row flex-col justify-between items-start lg:gap-x-8 gap-x-4 md:h-[600px]">

                    <div class="flex flex-col justify-between w-full h-full gap-4" data-aos="fade-right"
                        data-aos-duration="500">
                        <div class="flex flex-col gap-4">
                            <p class="xl:text-3xl md:text-2xl text-xl font-[600] text-white">Find Your Nearest Lab <br>
                                And Schedule An Appointment</p>
                            <p class="text-[#07CCEC] font-[600] xl:text-xl md:text-lg text-base">Your Health And Safety Is
                                Important To Us</p>
                        </div>

                        <div class="flex flex-col gap-4 ">
                            <div class="grid grid-cols-2 lg:gap-4 gap-2">
                                <div class="flex flex-col gap-2">
                                    <p class="ss:tex-lg text-sm text-white font-[600] capitalize">Name (required)</p>
                                    <input type="text"
                                        class="w-full text-white sm:text-sm text-sm font-extralight rounded-md p-4 outline-none bg-transparent border border-[#7693D280] placeholder-white"
                                        placeholder="Lorem ipsum...">
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="ss:tex-lg text-sm text-white font-[600] capitalize">Email (required)</p>
                                    <input type="email"
                                        class="w-full text-white sm:text-sm text-sm font-extralight rounded-md p-4 outline-none bg-transparent border border-[#7693D280] placeholder-white"
                                        placeholder="Lorem ipsum...">
                                </div>
                            </div>

                            <div class="grid md:grid-cols-3 grid-cols-2 lg:gap-4 gap-2">
                                <div class="flex flex-col gap-2">
                                    <p class="ss:tex-lg text-sm text-white font-[600] capitalize">Phone (required)</p>
                                    <input type="tel"
                                        class="w-full text-white sm:text-sm text-sm font-extralight rounded-md p-4 outline-none bg-transparent border border-[#7693D280] placeholder-white"
                                        placeholder="Phone">
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="ss:tex-lg text-sm text-white font-[600] capitalize">Date (required)</p>
                                    <div
                                        class="flex justify-start items-center rounded-md p-1.5 outline-none border border-[#7693D280] bg-transparent">
                                        <div class="w-6 h-auto">
                                            <img src="/images/icon/Group 282.png" alt="">
                                        </div>
                                        <input type="text" id="datepicker"
                                            class="mt-1 block  w-full bg-transparent text-white  outline-none px-3 py-2 placeholder-white"
                                            placeholder="Select Date">
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="ss:tex-lg text-sm text-white font-[600] capitalize">Time (required)</p>
                                    <div
                                        class="flex justify-start items-center rounded-md p-1.5 outline-none border border-[#7693D280] bg-transparent">
                                        <div class="w-6 h-auto">
                                            <img src="/images/icon/Group 72.png" alt="">
                                        </div>
                                        <input type="text" id="datepicker-time"
                                            class="mt-1 block  w-full bg-transparent text-white  outline-none px-3 py-2 placeholder-white"
                                            placeholder="Select Time">
                                    </div>
                                </div>

                            </div>

                            <div class="flex flex-col gap-2">
                                <p class="ss:tex-lg text-sm text-white font-[600] capitalize">details (required)</p>
                                <textarea name="" id=""
                                    class="w-full h-[170px] text-white sm:text-sm text-sm font-extralight rounded-md p-4 outline-none bg-transparent border border-[#7693D280] placeholder-white"
                                    placeholder="Lorem ipsum..."></textarea>
                            </div>
                        </div>

                        <div class="flex justify-center items-center">
                            <div
                                class="bg-[#21CDAD] cursor-pointer transition-all duration-200 ease-in-out w-full max-w-[50%] py-2 rounded-md capitalize text-white text-center xl:text-xl md:text-lg text-base hover:bg-blue font-[600] shadow-md">
                                contact us
                            </div>
                        </div>
                    </div>

                    <div class="lg:w-[65%] md:w-auto max-ss:hidden flex justify-end items-center w-full h-full"
                        data-aos="fade-left" data-aos-duration="500">
                        <div class="max-w-[536px] xl:h-auto rounded-md shadow-md">
                            <img src="/images/img/55.png" alt="" class="w-full h-full rounded-md">
                        </div>
                    </div>
                </div>

            </div>

        </section>

        {{-- 5 --}}
        <section class="max-w-[1320px] mx-auto px-4 lg:pt-16 pt-[30px] flex flex-col md:gap-8 ga-6 relative">
            <div class="flex flex-col justify-center items-center h-full gap-4" data-aos="zoom-in"
                data-aos-duration="500">
                <p class="md:text-3xl text-xl font-[700] w-full text-center "> Meet Our Dedicated</p>
                <p class="md:text-3xl text-xl font-[700] w-full text-center text-blue"> Doctor’s Team</p>
            </div>


            <div class="swiper swiper_Doctor max-ss:max-w-[1100px] mx-auto flex flex-col gap-2  py-2 px-1 pb-12"
                data-aos="fade-up" data-aos-duration="500">
                <a href="{{ route('doctor.index') }}" class="w-full flex flex-row justify-end items-center gap-2 group">
                    <p
                        class="text-blue relative group-hover:font-[700] cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-[#DFDFDF]  before:origin-center before:h-[2px] before:w-0 group-hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-[#DFDFDF] after:origin-center after:h-[2px] after:w-0 group-hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                        See All</p>
                    <div class="w-[20px] h-auto">
                        <img src="/images/icon/next-blue.png" alt="">
                    </div>
                </a>

                <div class="swiper-wrapper">
                    @foreach ($dataDoctor as $doctor)
                        <div class="swiper-slide rounded-lg " style="background-color: transparent">
                            <div
                                class="cursor-pointer group flex flex-col xl:w-[312px] w-[320px] justify-between shadow-[rgba(50,_50,_105,_0.15)_0px_2px_5px_0px,_rgba(0,_0,_0,_0.05)_0px_1px_1px_0px] rounded-md">

                                <div class="w-full h-[285px]  relative">
                                    <img src="{{ asset($doctor['img']) }}" alt=""
                                        class="w-full h-full rounded-t-md object-cover opacity-100 group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-200">

                                    <!-- Description -->
                                    <div
                                        class="absolute inset-0 rounded-t-lg bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-blue group-hover:bg-opacity-80 group-hover:transition-all group-hover:duration-300">

                                        <div
                                            class="absolute inset-0 px-4 flex flex-col justify-center items-center gap-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-300 group-hover:duration-300">
                                            <div class="flex flex-row gap-4">
                                                <a href="https://www.facebook.com/" title="Facebook"
                                                    class="w-10 h-10 group cursor-pointer rounded-full p-2 bg-white flex justify-center items-center hover:scale-105"
                                                    target="_blank">
                                                    <img src="/images/icon/Vector (5).png" alt="Icon"
                                                        class="w-full h-auto">
                                                </a>

                                                <a href="#" title="Facebook"
                                                    class="w-10 h-10 group cursor-pointer rounded-full p-2 bg-white flex justify-center items-center hover:scale-105"
                                                    target="_blank">
                                                    <img src="/images/icon/Group.png" alt="Icon"
                                                        class="w-full h-auto">
                                                </a>

                                                <a href="#" title="Facebook"
                                                    class="w-10 h-10 group cursor-pointer rounded-full p-2.5 bg-white flex justify-center items-center hover:scale-105"
                                                    target="_blank">
                                                    <img src="/images/icon/devicon_twitter.png" alt="Icon"
                                                        class="w-full h-auto">
                                                </a>
                                            </div>
                                            <p
                                                class=" break-words text-center text-white text-sm font-extralight left-4 bottom-12 line-clamp-3 ">
                                                Lorem ipsum dolor sit amet consectetur. Fermentum mauris in ut eget arcu
                                                faucibus cras
                                                sit.
                                            </p>
                                        </div>


                                    </div>
                                </div>

                                <a href="{{ route('doctor.detail', ['id' => (int) $doctor['id']]) }}"
                                    class="rounded-b-md flex flex-col gap-2  p-4 opacity-100 bg-white">

                                    <p class="font-[700] text-base w-full capitalize text-center text-black">
                                        {{ $doctor['name'] }}</p>
                                    <p class="text-sm text-[#999999] font-light line-clamp-3 text-center">
                                        {{ $doctor['description'] }}</p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="swiper-pagination pagination_doctor"></div>
        </section>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    @vite('resources/js/home/datepicker.js')
    @vite('resources/js/home/swiper.js')
    @vite('resources/js/home/dropdown.js')
@endsection
