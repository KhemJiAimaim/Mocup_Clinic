@extends('layouts.main')

@section('title')
    services
@endsection

@section('style')
    @vite('resources/css/home/swiper.css')
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
    @endphp

    <section class="w-full h-auto relative top-0">
        <div
            class="absolute inset-0 z-50 flex flex-col justify-center items-center gap-y-4 max-sm:gap-y-1 max-w-[1320px] m-auto">
            <div class="flex flex-col sm:gap-y-8">
                <p class="xl:text-[40px] text-3xl uppercase text-white font-[700] ss:tracking-[8px] tracking-widest animate__animated animate__zoomIn" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    Services
                </p>
            </div>
        </div>

        <div class="relative w-full lg:h-[250px] h-[150px]">
            <img src="/images/banner/image 24.png" alt="About Banner" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-[#17449E] to-[#07CCEC]  opacity-80"></div>
        </div>
    </section>


    <div class="xl:py-16 py-[30px]  flex flex-col justify-center items-center gap-8">

        <div class="max-w-[1320px] mx-auto px-4 flex flex-col justify-center items-center gap-4 w-full"  data-aos="zoom-in" data-aos-duration="500">
            <p class="text-[#08286F] xl:text-3xl md:text-2xl text-xl font-[700] text-center">Providing Medical Care For
                <br>
                The Sickest In Our Community.
            </p>
            <p class="text-[#474747] text-center font-light xl:text-lg md:text-base text-sm md:w-[80%] w-full ">
                Lorem ipsum dolor sit amet consectetur. Nunc urna lectus placerat nulla. Morbi cursus
                varius posuere amet pulvinar diam volutpat. Nisl tristique ipsum vitae a sed eu elementum amet.
                Egestas eu urna fusce tortor facilisis. Integer morbi mi nunc sed donec.</p>
        </div>


        <section class="relative z-50 w-full">
            <div class="absolute w-full h-full">
                <img src="/images/bg_img/Group 113.png" alt="Banner Image" class="w-full h-full object-cover">
                <div class="absolute top-0 left-0 w-full h-full"></div>
            </div>


            <div
                class="xl:py-16 py-[30px] pb-[50px] max-w-[1100px] mx-auto items-center px-4 z-50 relative grid md:grid-cols-3 ss:grid-cols-2 grid-cols-1 place-items-center gap-4 "  data-aos="fade-up" data-aos-duration="500">
                @foreach ($data as $medical)
                    <a href="{{ route('service.detail', ['id' => (int) $medical['id']]) }}"
                        class="bg-white cursor-pointer group hover:bg-[#21CDAD] md:p-4 p-3 rounded-lg flex flex-col justify-start items-center xl:w-[350px] md:w-full w-[320px]  md:h-[380px] h-[350px] transition-all duration-200 ease-in-out">
                        <div class="xl:w-[315px] w-full h-[180px] top-0 relative z-50 mb-10">
                            <img src="{{ asset($medical['img']) }}" alt=""
                                class="w-full h-full rounded-lg shadow-sm object-cover">
                            <div class="absolute inset-0 -bottom-8 flex justify-center items-end z-50">
                                <div
                                    class="w-[80px] h-[80px] bg-white p-2 rounded-full flex justify-center items-center shadow-sm">
                                    <div class="bg-[#07CCEC] p-2 rounded-full">
                                        <img src="{{ asset($medical['icon']) }}" alt="" class="w-full h-full">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <p
                                class="font-[700] md:text-xl text-base text-lext w-full capitalize text-center group-hover:text-white text-blue tracking-widest">
                                {{ $medical['title'] }}</p>
                            <p class="text-sm text-[#999999] font-light line-clamp-5 text-center group-hover:text-white">
                                {{ $medical['description'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>


    </div>
@endsection

@section('script')
    @vite('resources\js\Services_pages\swiper.js')
@endsection
