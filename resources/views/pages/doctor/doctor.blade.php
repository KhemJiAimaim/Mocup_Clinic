@extends('layouts.main')

@section('title')
    doctor
@endsection

@section('style')
    @vite('resources/css/home/swiper.css')
@endsection

@section('contents')
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

    <section class="w-full h-auto relative top-0">
        <div
            class="absolute inset-0 z-50 flex flex-col justify-center items-center gap-y-4 max-sm:gap-y-1 max-w-[1320px] m-auto">
            <div class="flex flex-col sm:gap-y-8">
                <p class="xl:text-[40px] text-3xl uppercase text-white font-[700] ss:tracking-[8px] tracking-widest animate__animated animate__zoomIn" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    doctor
                </p>
            </div>
        </div>

        <div class="relative w-full lg:h-[250px] h-[150px]">
            <img src="/images/banner/image 30.png" alt="About Banner" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-[#17449E] to-[#07CCEC]  opacity-80"></div>
        </div>
    </section>


    <div class="xl:py-16 py-[30px] max-w-[1320px] mx-auto flex flex-col justify-center items-center gap-8">

        <section class=" px-4 flex flex-col md:gap-8 ga-6 relative">
            <div class="flex flex-col justify-center items-center h-full gap-4"  data-aos="zoom-in" data-aos-duration="500">
                <p class="md:text-3xl text-xl font-[700] w-full text-center "> Meet Our Dedicated</p>
                <p class="md:text-3xl text-xl font-[700] w-full text-center text-blue"> Doctor’s Team</p>
            </div>



            <div class="grid xl:grid-cols-4 ss:grid-cols-3 grid-cols-1 gap-4 gap-y-6 place-items-center py-[30px]" data-aos="fade-up" data-aos-duration="500">
                @foreach ($data as $doctor)
                    <div
                        class="bg-white cursor-pointer group flex flex-col ss:w-full w-[320px] justify-between shadow-[rgba(50,_50,_105,_0.15)_0px_2px_5px_0px,_rgba(0,_0,_0,_0.05)_0px_1px_1px_0px] rounded-md">
                        <div class="w-full h-[285px]  relative">
                            <img src="{{ asset($doctor['img']) }}" alt=""
                                class="w-full h-full rounded-t-md object-cover opacity-100 group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-200">
                            <div
                                class="absolute inset-0 rounded-t-lg bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-blue group-hover:bg-opacity-80 group-hover:transition-all group-hover:duration-300">

                                <div
                                    class="absolute inset-0 px-4 flex flex-col justify-center items-center gap-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-300 group-hover:duration-300">
                                    <div class="flex flex-row gap-4">
                                        <a href="https://www.facebook.com/" title="Facebook"
                                            class="w-10 h-10 group cursor-pointer rounded-full p-2 bg-white flex justify-center items-center hover:scale-105"
                                            target="_blank">
                                            <img src="/images/icon/Vector (5).png" alt="Icon" class="w-full h-auto">
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
                                        class=" break-words text-white text-center text-sm font-extralight left-4 bottom-12 line-clamp-3 ">
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
                @endforeach
            </div>




        </section>

        <div class="flex flex-row justify-center gap-2 items-center">
            <div class="w-10 h-10 bg-white cursor-pointer transition-all duration-200 ease-in-out p-2 shadow-md rounded-sm">
                <img src="/images/icon/Group 349.png" alt="" class="w-full h-full">
            </div>
            <div
                class="w-10 h-10 bg-white cursor-pointer transition-all duration-200 ease-in-out flex justify-center items-center shadow-md rounded-sm">
                <div class="w-[15px] h-[30px] mx-auto">
                    <img src="/images/icon/Group 348.png" alt="" class="w-full h-full">
                </div>
            </div>

            <div
                class="w-10 h-10 bg-[#005DE1] cursor-pointer transition-all duration-200 ease-in-out flex justify-center items-center shadow-md rounded-sm">
                <p class="text-center text-2xl text-white w-full h-auto"> 1 </p>
            </div>

            <div
                class="w-10 h-10 bg-white group hover:bg-[#005DE1] cursor-pointer transition-all duration-200 ease-in-out flex justify-center items-center shadow-md rounded-sm">
                <p class="text-center text-[#8A8E94] text-2xl group-hover:text-white w-full h-auto"> 2 </p>
            </div>

            <div
                class="w-10 h-10 bg-white group hover:bg-[#005DE1] cursor-pointer transition-all duration-200 ease-in-out flex justify-center items-center shadow-md rounded-sm">
                <p class="text-center text-[#8A8E94] text-2xl group-hover:text-white w-full h-auto"> 3 </p>
            </div>

            <div
                class="w-10 h-10 bg-white hover:bg-[#005DE1] cursor-pointer transition-all duration-200 ease-in-out flex justify-center items-center shadow-md rounded-sm group">
                <div class="w-[15px] h-[30px] mx-auto">
                    <img src="/images/icon/Group 348(1).png" alt=""
                        class="w-full h-full transition-all duration-200 ease-in-out group-hover:invert group-hover:brightness-0">
                </div>
            </div>

            <div
                class="w-10 h-10 bg-white group hover:bg-[#005DE1] cursor-pointer transition-all duration-200 ease-in-out p-2 shadow-md rounded-sm">
                <img src="/images/icon/Group 349(1).png" alt=""
                    class="w-full h-full transition-all duration-200 ease-in-out group-hover:invert group-hover:brightness-0">
            </div>


        </div>

    </div>
@endsection

@section('script')
@endsection
