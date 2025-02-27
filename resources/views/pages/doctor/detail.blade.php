@extends('layouts.main')

@section('title')
doctor
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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
        $selectedDoctor = $data[$id] ?? null;
    @endphp


    <section class="w-full h-auto relative top-0">
        <div
            class="absolute inset-0 z-50 flex flex-col justify-center items-center gap-y-4 max-sm:gap-y-1 max-w-[1320px] m-auto">
            <div class="flex flex-col sm:gap-y-8">
                <p class="xl:text-[40px] text-3xl uppercase text-white font-[700] text-center ss:tracking-[8px] tracking-widest animate__animated animate__zoomIn" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    our Doctor
                </p>
            </div>
        </div>

        <div class="relative w-full lg:h-[250px] h-[150px]">
            <img src="/images/banner/image 63 (1).png" alt="About Banner" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-[#17449E] to-[#07CCEC]  opacity-80">
            </div>
        </div>
    </section>

    <div class="xl:py-16 py-[30px] max-w-[1320px] mx-auto w-full" data-aos="fade-up" data-aos-duration="500">

        <div class="flex md:flex-row flex-col justify-between md:items-start items-center xl:gap-16 md:gap-4 gap-y-8 px-4">
            <div class="max-w-full md:w-[50%]">
                <div class="w-full xl:h-[580px] lg:h-[400px] h-[350px] rounded-md">
                    <img src="{{ asset($selectedDoctor['img']) }}" alt=""
                        class="w-full h-full object-cover shadow-md rounded-md">
                </div>
            </div>

            <div class="w-full flex flex-col md:gap-8 gap-4">
                <div class="flex md:flex-row flex-col gap-4 justify-between">
                    <div class="flex flex-col gap-2">
                        <p class="text-black md:text-4xl text-2xl font-[600]">{{$selectedDoctor['name']}}</p>
                        <p class="text-[#005DE1] md:text-2xl text-lg font-[400]">{{$selectedDoctor['description']}}</p>
                    </div>

                    <div class="flex flex-row gap-4 items-center">
                        <a href="" class="rounded-full bg-transparent p-1 w-[45px] h-[45px] group hover:bg-blue transition-all duration-300 ease-in-out cursor-pointer" title="facebook">
                            <img src="/images/icon/Group 172.png" alt="" class="w-full h-full group-hover:invert group-hover:brightness-0">
                        </a>

                        <a href="" class="rounded-full bg-transparent p-1.5 w-[45px] h-[45px] group hover:bg-blue transition-all duration-300 ease-in-out cursor-pointer" title="instagram">
                            <img src="/images/icon/Group 173.png" alt="" class="w-full h-full group-hover:invert group-hover:brightness-0">
                        </a>

                        <a href="" class="rounded-full bg-transparent p-3 w-[45px] h-[45px] group hover:bg-blue transition-all duration-300 ease-in-out cursor-pointer" title="X">
                            <img src="/images/icon/devicon_twitter.png" alt="" class="w-full h-full group-hover:invert group-hover:brightness-0">
                        </a>
                    </div>
                </div>

                <div class="border-t-2 rounded-full w-full"></div>

                <div class="flex flex-col gap-4">
                    <p class="text-[#08286F] md:text-base text-sm"> Lorem ipsum dolor sit amet consectetur.
                        Consectetur nunc at sit aliquet velit rhoncus
                        sed. Risus elementum tortor turpis eu tristique viverra pellentesque tortor ipsum. Ut hac tellus
                        condimentum facilisis posuere. Purus ac cursus sed luctus sed vel sed nunc fermentum. Massa
                        facilisis nulla tellus scelerisque. Vestibulum in nam ornare lectus sodales risus congue amet
                        convallis. Duis et ultrices ornare egestas lacus. Id sed leo.
                    </p>
                    <p class="text-[#474747] md:text-base text-sm"> Lorem ipsum dolor sit amet consectetur.
                        Consectetur nunc at sit aliquet velit rhoncus
                        sed. Risus elementum tortor turpis eu tristique viverra pellentesque tortor ipsum. Ut hac tellus
                        condimentum facilisis posuere. Purus ac cursus sed luctus sed vel sed nunc fermentum. Massa
                        facilisis nulla tellus scelerisque. Vestibulum in nam ornare lectus sodales risus congue amet
                        convallis. Duis et ultrices ornare egestas lacus. Id sed leo.
                    </p>
                </div>

                <div class="bg-slate-100 xl:px-16 xl:py-8 p-6 rounded-md shadow-sm border flex flex-col gap-4 xl:w-[80%] w-full mt-[30px]">
                    <p class="text-blue xl:text-3xl md:text-2xl text-xl font-[700] text-left">My Time Schedule</p>
                    <div class="flex flex-col gap-4 ">
                        <div class="px-4 w-full flex justify-between flex-row border-b-2 p-2 border-dotted divide-solid items-center">
                            <p class="font-[600] md:text-xl text-lg">Mon - Fri:</p>
                            <p class="text-[#8A8E94] md:text-lg text-sm">08:00 - 13:00 AM</p>
                        </div>
                        <div class="px-4 w-full flex justify-between flex-row border-b-2 p-2 border-dotted divide-solid items-center">
                            <p class="font-[600] md:text-xl text-lg">Saturday:</p>
                            <p class="text-[#8A8E94] md:text-lg text-sm">09:00 - 12:00 AM</p>
                        </div>
                        <div class="px-4 w-full flex justify-between flex-row border-b-2 p-2 border-dotted divide-solid items-center">
                            <p class="font-[600] md:text-xl text-lg">Msunday:</p>
                            <p class="text-[#8A8E94] md:text-lg text-sm">13:00 - 20:00 AM</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
@endsection

@section('script')
@endsection
