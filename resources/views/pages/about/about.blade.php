@extends('layouts.main')

@section('title')
    about_us
@endsection

@section('style')
    @vite('resources/css/home/swiper.css')
@endsection

@section('contents')
    <section class="w-full h-auto relative top-0">
        <div
            class="absolute inset-0 z-50 flex flex-col justify-center items-center gap-y-4 max-sm:gap-y-1 max-w-[1320px] m-auto">
            <div class="flex flex-col sm:gap-y-8">
                <p class="xl:text-[40px] text-3xl uppercase text-white font-[700] ss:tracking-[8px] tracking-widest animate__animated animate__zoomIn"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    About Us
                </p>
            </div>
        </div>

        <div class="relative w-full lg:h-[250px] h-[150px]">
            <img src="/images/banner/about.png" alt="About Banner" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-[#17449E] to-[#07CCEC] opacity-80"></div>
        </div>
    </section>


    <div class="xl:py-16 py-[30px] px-4">
        <section class="max-w-[1320px] mx-auto  flex flex-col md:gap-16 gap-12 "  data-aos="fade-up" data-aos-duration="500">
            <div class="flex md:flex-row flex-col shadow-[rgba(50,_50,_105,_0.15)_0px_2px_5px_0px,_rgba(0,_0,_0,_0.05)_0px_1px_1px_0px] rounded-md bg-white ">
                <div class="w-full h-auto">
                    <img src="/images/img/Mask group (1).png" alt=""
                        class="w-full h-full md:rounded-l-md rounded-t-md">
                </div>
                <div class="flex flex-col justify-center items-start md:gap-4 gap-2 xl:py-20 xl:px-16 lg:p-12 p-4 w-full">
                    <p class="xl:text-3xl md:text-2xl text-xl font-[700]">Story about our Clinic</p>
                    <p class="text-[#08286F] xl:text-xl md:text-lg text-base">And how we get to this point</p>
                    <p class="text-[#474747] font-light xl:text-lg md:text-base text-sm">Lorem ipsum dolor sit amet
                        consectetur. Nunc urna lectus placerat nulla. Morbi cursus
                        varius posuere amet pulvinar diam volutpat. Nisl tristique ipsum vitae a sed eu elementum amet.
                        Egestas eu urna fusce tortor facilisis. Integer morbi mi nunc sed donec.</p>
                </div>
            </div>

            <div class="flex flex-col justify-center items-center gap-6">
                <div class="flex flex-col justify-center items-center gap-4 w-full">
                    <p class="text-[#08286F] xl:text-3xl md:text-2xl text-xl font-[700]">Excellence in Medical Service</p>
                    <p class="text-black xl:text-2xl md:text-lg text-base font-[700]">With Passion for Patient Care</p>
                    <p class="text-[#474747] text-center font-light xl:text-lg md:text-base text-sm md:w-[80%] w-full">
                        Lorem ipsum dolor sit amet consectetur. Nunc urna lectus placerat nulla. Morbi cursus
                        varius posuere amet pulvinar diam volutpat. Nisl tristique ipsum vitae a sed eu elementum amet.
                        Egestas eu urna fusce tortor facilisis. Integer morbi mi nunc sed donec.</p>
                </div>

                <div class="flex w-full md:flex-row flex-col gap-4">
                    <div class="w-full h-auto shadow-md">
                        <img src="/images/img/1 2.png" alt="" class="w-full h-full">
                    </div>
                    <div class="w-full h-auto shadow-md">
                        <img src="/images/img/Mask group (2).png" alt="" class="w-full h-full">
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    @for ($i = 0; $i < 2; $i++)
                        <p class="text-[#474747] text-left font-light xl:text-lg md:text-base text-sm w-full">
                            Lorem ipsum dolor sit amet consectetur. Facilisis ullamcorper nulla mi nunc pharetra amet. Nunc
                            vulputate diam sit magna diam velit ultrices quis morbi. Vitae eget in nibh dui pharetra. Nisi
                            viverra non neque phasellus eu mollis iaculis. Tempus a risus mauris turpis. Quisque varius ut
                            nunc nisl bibendum lectus ut. Et aliquet ullamcorper lobortis id ullamcorper luctus pharetra.
                            Pretium gravida arcu dictumst urna vitae et viverra malesuada sollicitudin. Est pellentesque et
                            morbi mauris id morbi. Dignissim elit mi ornare dapibus. Adipiscing egestas cursus neque nec.
                            Amet felis adipiscing ut tristique facilisis id sit. Nibh sed urna purus purus cursus lectus.
                            Habitasse sit hac ornare tincidunt quis amet. Enim aliquam.</p>
                        <p class="text-[#474747] text-left font-light xl:text-lg md:text-base text-sm w-full">
                            Lorem ipsum dolor sit amet consectetur. Facilisis ullamcorper nulla mi nunc pharetra amet. Nunc
                            vulputate diam sit magna diam velit ultrices quis morbi. Vitae eget in nibh dui pharetra. Nisi
                            viverra non neque phasellus eu mollis iaculis. </p>
                    @endfor
                </div>
            </div>
        </section>


        <div class="max-w-[60%] w-full mx-auto  border-t-2 rounded-full lg:my-16 my-[30px]" data-aos="zoom-in" data-aos-duration="500"></div>

        {{-- 5 --}}
        <section class="max-w-[1320px] mx-auto flex flex-col md:gap-8 ga-6 relative">
            <div class="flex flex-col justify-center items-center h-full gap-4" data-aos="zoom-in" data-aos-duration="500">
                <p class="md:text-3xl text-xl font-[700] w-full text-center "> Meet Our Dedicated</p>
                <p class="md:text-3xl text-xl font-[700] w-full text-center text-blue"> Doctor’s Team</p>
            </div>

            @php
                $data = [
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
            @endphp

            <div class="swiper swiper_Doctor max-ss:max-w-[1100px] mx-auto flex flex-col gap-2  py-2 px-1 pb-12" data-aos="fade-up" data-aos-duration="500">
                <a href="{{ route('doctor.index') }}" class="w-full flex flex-row justify-end items-center gap-2 group">
                    <p
                        class="text-blue relative group-hover:font-[700] cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-[#DFDFDF]  before:origin-center before:h-[2px] before:w-0 group-hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-[#DFDFDF] after:origin-center after:h-[2px] after:w-0 group-hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                        See All</p>
                    <div class="w-[20px] h-auto">
                        <img src="/images/icon/next-blue.png" alt="">
                    </div>
                </a>

                <div class="swiper-wrapper">
                    @foreach ($data as $doctor)
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
                                                    <img src="/images/icon/Group.png" alt="Icon" class="w-full h-auto">
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
    @vite('resources\js\about-us\swiper.js')
@endsection
