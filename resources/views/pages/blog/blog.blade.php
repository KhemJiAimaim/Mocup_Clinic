@extends('layouts.main')

@section('title')
    blog
@endsection

@section('style')
    @vite('resources/css/home/swiper.css')
@endsection

@section('contents')
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

        '5' => [
            'id' => '5',
            'title' => 'Why Vaccination Matters: Vaccines for All Ages at Our Clinic',
            'img' => '/images/img/551.png',
        ],

        '6' => [
            'id' => '6',
            'title' => 'Surprising body cues that could be heart shown concern for all.',
            'img' => '/images/img/66.png',
        ],

        '7' => [
            'id' => '7',
            'title' => 'Lifestyle conditions to have today’s all time and age is diabetes for good health.',
            'img' => '/images/img/77.png',
        ],
        '8' => [
            'id' => '8',
            'title' => 'How to Take Care of Your Mental Health in Today’s Fast-Paced World',
            'img' => '/images/img/88.png',
        ],
        '9' => [
            'id' => '9',
            'title' => 'Managing Stress and Its Impact on Your Health',
            'img' => '/images/img/99.png',
        ],
        '10' => [
            'id' => '10',
            'title' => 'Knee Osteoarthritis Treatment at Our Clinic: Innovative Solutions for Pain Relief',
            'img' => '/images/img/110.png',
        ],

        '11' => [
            'id' => '11',
            'title' => '5 Simple Ways to Prevent Common Diseases Everyone Should Know',
            'img' => '/images/img/111.png',
        ],
        '12' => [
            'id' => '12',
            'title' => 'How to Choose the Right Clinic for Your Healthcare Needs',
            'img' => '/images/img/12.png',
        ],
    ];
   @endphp

    <section class="w-full h-auto relative top-0">
        <div
            class="absolute inset-0 z-50 flex flex-col justify-center items-center gap-y-4 max-sm:gap-y-1 max-w-[1320px] m-auto">
            <div class="flex flex-col sm:gap-y-8">
                <p class="xl:text-[40px] text-3xl uppercase text-white font-[700] ss:tracking-[8px] tracking-widest animate__animated animate__zoomIn" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    Our blog
                </p>
            </div>
        </div>

        <div class="relative w-full lg:h-[250px] h-[150px]">
            <img src="/images/banner/image 63 (1).png" alt="About Banner" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-[#17449E] to-[#07CCEC]  opacity-80"></div>
        </div>
    </section>


    <div class="xl:py-16 py-[30px] max-w-[1320px] mx-auto flex flex-col justify-center items-center gap-8" data-aos="fade-up" data-aos-duration="500">

        <section class=" px-4 flex flex-col md:gap-8 ga-6 relative">


            <div
                class="grid lg:grid-cols-4 md:grid-cols-3 ss:grid-cols-2 grid-cols-1 gap-4 gap-y-6 place-items-center pb-[30px]">

                @foreach ($dataBlog as $blog)
                    <div
                        class="bg-white flex flex-col md:w-full w-[320px]  justify-between shadow-[rgba(50,_50,_105,_0.15)_0px_2px_5px_0px,_rgba(0,_0,_0,_0.05)_0px_1px_1px_0px] rounded-md">
                        <div class="w-full relative">
                            <img src="{{ asset($blog['img']) }}" alt="" class="w-full h-full rounded-t-md">
                            <div
                                class="rounded-md bg-blue py-2 md:w-[120px] w-[85px] flex justify-center items-center text-white text-sm absolute top-2 right-2">
                                01 jan 2025</div>
                        </div>

                        <div class="flex flex-col justify-between items-start p-4 gap-4">
                            <div class="flex flex-col gap-2">
                                <p
                                    class="font-[700] text-base w-full capitalize text-left group-hover:text-white text-black line-clamp-2 lg:h-[50px]">
                                    {{ $blog['title'] }}</p>
                                <p class="text-sm text-[#999999] font-light group-hover:text-white line-clamp-3 text-left">
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
