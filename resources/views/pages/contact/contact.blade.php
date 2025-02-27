@extends('layouts.main')

@section('title')
    contact
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('contents')
    <section class="w-full h-auto relative top-0">
        <div
            class="absolute inset-0 z-50 flex flex-col justify-center items-center gap-y-4 max-sm:gap-y-1 max-w-[1320px] m-auto">
            <div class="flex flex-col sm:gap-y-8">
                <p class="xl:text-[40px] text-3xl uppercase text-white font-[700] ss:tracking-[8px] tracking-widest animate__animated animate__zoomIn"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    contact
                </p>
            </div>
        </div>

        <div class="relative w-full lg:h-[250px] h-[150px]">
            <img src="/images/banner/image 63 (1).png" alt="About Banner" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-[#17449E] to-[#07CCEC]  opacity-80"></div>
        </div>
    </section>


    <div class="xl:py-16 py-[30px] ">
        <section class="relative z-50" data-aos="fade-up" data-aos-duration="500">
            <div class="absolute w-full h-full">
                <img src="/images/bg_img/image 14.png" alt="Banner Image" class="w-full h-full object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-[#00226C] opacity-80"></div>
            </div>

            <div class="xl:py-16 py-[30px] max-w-[1320px] mx-auto px-4  relative z-50 ">
                <div class="flex md:flex-row flex-col justify-between items-start lg:gap-x-8 gap-x-4 md:h-[600px]">

                    <div class="flex flex-col justify-between w-full h-full gap-4">
                        <div class="flex flex-col gap-4">
                            <p class="xl:text-3xl md:text-2xl text-xl font-[600] text-white">Find Your Nearest Lab <br>
                                And Schedule An Appointment</p>
                            <p class="text-[#07CCEC] font-[600] xl:text-xl md:text-lg text-base">Your Health And Safety Is
                                Important To Us</p>
                        </div>

                        <div class="flex flex-col gap-4">
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
                                            class="block  w-full bg-transparent text-white  outline-none px-3 py-2 placeholder-white"
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
                                            class="block  w-full bg-transparent text-white  outline-none px-3 py-2 placeholder-white"
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

                    <div class="lg:w-[65%] md:w-auto max-ss:hidden flex justify-end items-center w-full h-full">
                        <div class="max-w-[536px] xl:h-auto rounded-md shadow-md">
                            <img src="/images/img/55.png" alt="" class="w-full h-full rounded-md">
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>

    <div class="md:py-[30px] py-[20px] bg-black/95 ">
        <div class="max-w-[1320px] mx-auto px-4 grid md:grid-cols-3 grid-cols-1 gap-4 place-items-center">
            <div class="flex flex-col justify-start md:items-start items-center lg:gap-3 gap-2 w-full">
                <div class="ss:w-[50px] ss:h-[50px] w-[30px] h-[30px]">
                    <img src="/images/icon/phone.png" alt="" class="w-full h-full">
                </div>
                <p class="text-white lg:text-2xl md:text-xl font-[700]">Phone</p>
                <p class="text-white lg:text-lg text-sm font-light md:line-clamp-3 line-clamp-2 md:text-left text-center">
                    Lorem ipsum dolor sit amet consectetur. Leo risus diam id faucibus facilisi duis.</p>
                <p class="text-[#25A7C6] lg:text-xl md:text-base text-[12px]">555-555-5555</p>
            </div>

            <div class="flex flex-col justify-start md:items-start items-center lg:gap-3 gap-2 w-full">
                <div class="ss:w-[50px] ss:h-[50px] w-[30px] h-[30px]">
                    <img src="/images/icon/outline-mail.png" alt="" class="w-full h-full">
                </div>
                <p class="text-white lg:text-2xl md:text-xl font-[700]">Email</p>
                <p class="text-white lg:text-lg text-sm  font-light md:line-clamp-3 line-clamp-2 md:text-left text-center ">
                    Lorem ipsum dolor sit amet consectetur. Leo risus diam id faucibus facilisi duis.</p>
                <p class="text-[#25A7C6] lg:text-xl md:text-base text-[12px]">Clinic@gmail.co.th</p>
            </div>

            <div class="flex flex-col justify-start md:items-start items-center lg:gap-3 gap-2 w-full">
                <div class="ss:w-[50px] ss:h-[50px] w-[30px] h-[30px]">
                    <img src="/images/icon/Group 234.png" alt="" class="w-full h-full">
                </div>
                <p class="text-white lg:text-2xl md:text-xl font-[700]">Location</p>
                <p class="text-white lg:text-lg text-sm  font-light md:line-clamp-3 line-clamp-2 md:text-left text-center">
                    Lorem ipsum dolor sit amet consectetur. Leo risus diam id faucibus facilisi duis.</p>
                <p class="text-[#25A7C6] lg:text-xl md:text-base text-[11px] ">View On Google Map</p>
            </div>
        </div>
    </div>

    <div class="w-full lg:h-[450px] h-[250px]">
        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.441469868089!2d102.83429837649591!3d16.487388317589055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228ae99b598b43%3A0x56b4538d2ace7037!2z4Lij4Lix4Lia4LiX4Liz4LmA4Lin4LmH4Lia4LmE4LiL4LiV4LmMIOC4guC4reC4meC5geC4geC5iOC4mSBXWU5OU09GVCBTT0xVVElPTiBDTy4sTFRELg!5e0!3m2!1sth!2sth!4v1740453007684!5m2!1sth!2sth" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        <img src="/images/img/map.png" alt="" class="w-full h-full object-cover">
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    @vite('resources/js/home/datepicker.js')
@endsection
