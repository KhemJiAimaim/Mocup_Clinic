@extends('layouts.main')

@section('title')
    blog
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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

        $selectedBlog = $dataBlog[$id] ?? null;
        $shuffledBlogs = collect($dataBlog)->shuffle()->take(3);
    @endphp

    <section class="w-full h-auto relative top-0">
        <div class="relative w-full lg:h-[250px] h-[150px]">
            <img src="/images/banner/image 63 (1).png" alt="About Banner" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-[#17449E] to-[#07CCEC] opacity-80"></div>

            <div class="absolute inset-0 z-50 flex flex-col justify-center items-center max-w-[1320px] mx-auto px-4">
                <p class="xl:text-[40px]/normal text-xl/normal uppercase text-white font-[700] text-center tracking-widest animate__animated animate__zoomIn" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    {{ $selectedBlog['title']}}
                </p>
            </div>
        </div>
    </section>



    <div class="xl:py-16 py-[30px] max-w-[1320px] mx-auto w-full" >
        <div class="flex md:flex-row flex-col justify-between md:items-start items-center xl:gap-16 md:gap-4 gap-y-8 px-4">
            <div class="w-full flex flex-col md:gap-y-8 gap-4" data-aos="fade-right" data-aos-duration="500">

                <div class=" w-full xl:h-[630px] shadow-sm">
                    <img src="{{ asset($selectedBlog['img']) }}" alt=""
                        class="w-full h-full object-cover shadow-sm">
                </div>

                <div class="flex flex-col gap-4">
                    <p class="xl:text-3xl md:text-2xl text-xl font-[700]">{{ $selectedBlog['title'] }}</p>

                    <p class="text-[#474747] md:text-base text-sm"> Lorem ipsum dolor sit amet consectetur.
                        Consectetur nunc at sit aliquet velit rhoncus
                        sed. Risus elementum tortor turpis eu tristique viverra pellentesque tortor ipsum. Ut hac tellus
                        condimentum facilisis posuere. Purus ac cursus sed luctus sed vel sed nunc fermentum. Massa
                        facilisis nulla tellus scelerisque. Vestibulum in nam ornare lectus sodales risus congue amet
                        convallis. Duis et ultrices ornare egestas lacus. Id sed leo.
                    </p>
                    <p class="text-[#474747] md:text-base text-sm"> Lorem ipsum dolor sit amet consectetur.
                        Consectetur nunc at sit aliquet velit rhoncus
                        sed. Risus elementum tortor turpis eu tristique viverra pellentesque tortor ipsum. Ut hac tellus
                        condimentum facilisis posuere.
                    </p>
                </div>

                <div class="relative w-full max-h-full xl:h-[500px] shadow-md">
                    <img src="/images/img/detail.png" alt="" class="w-full h-full object-cover">
                    <div class="absolute inset-0 flex items-center justify-center hover:scale-105 transition-all duration-100 ease-in-out cursor-pointer"
                        id="video-open">
                        <img src="/images/icon/Group 124.png" alt="" class="w-[80px] h-[80px] drop-shadow-md">
                    </div>
                </div>


                <div class="flex flex-col gap-4">
                    <p class="text-[#474747] md:text-base text-sm"> Lorem ipsum dolor sit amet consectetur.
                        Consectetur nunc at sit aliquet velit rhoncus
                        sed. Risus elementum tortor turpis eu tristique viverra pellentesque tortor ipsum. Ut hac tellus
                        condimentum facilisis posuere. Purus ac cursus sed luctus sed vel sed nunc fermentum. Massa
                        facilisis nulla tellus scelerisque. Vestibulum in nam ornare lectus sodales risus congue amet
                        convallis. Duis et ultrices ornare egestas lacus. Id sed leo.
                    </p>
                </div>
            </div>

            <div class="max-w-full xl:w-[30%] md:w-[50%] w-full" data-aos="fade-left" data-aos-duration="500">
                <div class="w-full h-auto flex flex-col gap-y-8">
                    <div class="flex flex-col gap-y-4">
                        <p class="lg:text-xl text-base font-[700]">Recent Articles</p>
                        @foreach ($shuffledBlogs as $blog)
                            <a href="{{ route('blog.detail', ['id' => (int) $blog['id']]) }}"
                                class="flex flex-row gap-4 items-center">
                                <div class="w-full max-w-[90px]">
                                    <div class="w-[90px] h-[90px] shadow-sm">
                                        <img src="{{ asset($blog['img']) }}" alt=""
                                            class="w-full h-full object-cover">
                                    </div>
                                </div>

                                <div class="flex flex-col gap-4 w-full group">
                                    <p class="text-sm font-[700] group-hover:text-blue line-clamp-2">
                                        {{ $blog['title'] }}</p>
                                    <div class="flex flex-row gap-4">
                                        <div class="flex flex-row gap-1 items-center">
                                            <div class="w-[20px] h-[20px]">
                                                <img src="/images/icon/ri_time-line.png" alt=""
                                                    class="w-full h-full">
                                            </div>
                                            <p class="text-[#8A8E94] text-sm">05 jan 2025</p>
                                        </div>
                                        <div class="flex flex-row gap-1 items-center">
                                            <div class="w-[20px] h-[20px]">
                                                <img src="/images/icon/Group 323.png" alt="" class="w-full h-full">
                                            </div>
                                            <p class="text-[#8A8E94] text-sm">1210</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    <div class="flex flex-col gap-y-4">
                        <p class="lg:text-xl text-base font-[700]">Teg</p>
                        <div class="flex flex-row flex-wrap gap-2">
                            <a class="bg-blue text-white px-4 py-1 text-center rounded-md text-sm hover:bg-[#21cdad]">
                                Adults
                            </a>

                            <a class="bg-blue text-white px-4 py-1 text-center rounded-md text-sm hover:bg-[#21cdad]">
                                Gene
                            </a>

                            <a class="bg-blue text-white px-4 py-1 text-center rounded-md text-sm hover:bg-[#21cdad]">
                                Mice
                            </a>

                            <a class="bg-blue text-white px-4 py-1 text-center rounded-md text-sm hover:bg-[#21cdad]">
                                COVID-19
                            </a>

                            <a class="bg-blue text-white px-4 py-1 text-center rounded-md text-sm hover:bg-[#21cdad]">
                                Autophagy
                            </a>

                            <a class="bg-blue text-white px-4 py-1 text-center rounded-md text-sm hover:bg-[#21cdad]">
                                Testing
                            </a>
                        </div>
                    </div>
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
    @vite('resources\js\blog\video.js')
@endsection
