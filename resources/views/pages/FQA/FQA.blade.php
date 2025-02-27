@extends('layouts.main')

@section('title')
    FQA
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('contents')
    <section class="w-full h-auto relative top-0">
        <div
            class="absolute inset-0 z-50 flex flex-col justify-center items-center gap-y-4 max-sm:gap-y-1 max-w-[1320px] m-auto">
            <div class="flex flex-col sm:gap-y-8">
                <p class="xl:text-[40px] text-3xl uppercase text-white font-[700] text-center ss:tracking-[8px] tracking-widest animate__animated animate__zoomIn" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    FQA
                </p>
            </div>
        </div>

        <div class="relative w-full lg:h-[250px] h-[150px]">
            <img src="/images/banner/image 63 (1).png" alt="About Banner" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-[#17449E] to-[#07CCEC]  opacity-80">
            </div>
        </div>
    </section>

    <div class="xl:py-16 py-[30px] max-w-[1320px] mx-auto w-full">

        <div class="flex md:flex-row flex-col justify-between md:items-start items-center xl:gap-16 md:gap-4 gap-y-8 px-4" data-aos="fade-up" data-aos-duration="500">

            <div class="w-full flex flex-col md:gap-8 gap-4">
                <div class="flex md:flex-row flex-col gap-4 justify-between items-center">
                    <div class="w-full border-l-4 border-blue pl-4">
                        <p class="text-black md:text-xl text-lg font-[600] uppercase">Lorem ipsum dolor sit amet
                            consectetur.</p>
                    </div>


                    <div class="w-full relative flex md:justify-end flex-row gap-4 items-center">
                        <div class="md:max-w-[50%] w-full">
                            <div class="absolute top-1/2 pl-2 -translate-y-1/2 z-50 pointer-events-none">
                                <img src="/images/icon/ri_search-line.png" alt="Search Icon" class="w-5 h-5">
                            </div>

                            <input type="text" id="input-group-1"
                                class="bg-[#F4F6FD] border outline-none placeholder-[#8A8E94] text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                                placeholder="SEARCH...">
                        </div>
                    </div>
                </div>

                <div class="border-t-2 rounded-full w-full"></div>

                <div class="w-full flex flex-col md:gap-y-6 gap-y-4 ">

                    @for ($i = 0; $i < 10; $i++)
                        <div class="flex flex-col items-center  shadow-md rounded-sm"
                            style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                            <div
                                class="flex justify-between w-full items-center open_q_detail cursor-pointer md:py-4 md:p-6 p-3 bg-gradient-to-r from-[#005DE1] to-[#25A7C6] rounded-sm">
                                <div class="flex gap-2 items-end">
                                    <p class="text-white font-[600] lg:text-2xl text-xl">Q.</p>
                                    <p class="text-white font-[600] sm:text-lg text-base text-left capitalize">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </div>

                                <div class="w-[30px] h-[30px]">
                                    <img src="/images/icon/ic_baseline-plus.png" alt=""
                                        class="w-full arrow-icon transition-all duration-300 ease-in-out">
                                </div>
                            </div>

                            <div
                                class="bg-transparent transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden q_detail">
                                <p
                                    class="font-[300] sm:text-base text-sm text-left w-full text-[#474747] md:p-6 p-4 indent-8">
                                    <strong class="font-[600]">Lorem ipsum dolor sit amet consectetur.</strong> Quisque
                                    id
                                    in tempor pellentesque vestibulum
                                    vulputate egestas fermentum. Mi odio magna lobortis adipiscing sit egestas. Id
                                    pharetra
                                    facilisi metus commodo tortor egestas. Odio cursus elit vitae maecenas imperdiet ut
                                    egestas
                                    orci. Amet at enim proin lacus ut quis. Amet phasellus risus viverra sed in
                                    malesuada
                                    nec.
                                </p>
                            </div>

                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @vite('resources/js/FQA/dropdown.js')
@endsection
