<footer class="bg-[#03203E] bg-gradient-to-r from-[#005DE1] to-[#25A7C6]">

    <!-- Content -->
    <div class="max-w-[1320px] m-auto z-10 flex flex-col justify-center  text-white pt-4">
        <div
            class="sm:grid place-items-center lg:grid-cols-3 md:grid-cols-2 gap-y-4 gap-4 flex flex-col w-full items-start  p-4">

            <div class=" flex flex-col justify-start sm:items-start items-center w-full">
                <p class="sm:text-2xl text-xl font-[700]">Logo</p>
                <p class="font-[300] ssm:text-base text-sm  sm:text-left text-center w-full py-4">
                    Lorem ipsum dolor sit amet consectetur. Facilisis vel pellentesque pretium fringilla venenatis
                    sed. Maecenas id urna curabitur consequat. Dictumst nisl lacus volutpat.
                </p>

                <div class="flex justify-start gap-4">

                    <a href="https://www.facebook.com/" title="Facebook"
                        class="w-10 h-10 group cursor-pointer rounded-full p-2 bg-white flex justify-center items-center hover:scale-105"
                        target="_blank">
                        <img src="/images/icon/fff.png" alt="Icon" class="w-full h-auto">
                    </a>

                    <a href="#" title="youtube"
                        class="w-10 h-10 group cursor-pointer rounded-full p-2 bg-white flex justify-center items-center hover:scale-105"
                        target="_blank">
                        <img src="/images/icon/fy.png" alt="Icon" class="w-full h-auto">
                    </a>

                    <a href="#" title="instagram"
                        class="w-10 h-10 group cursor-pointer rounded-full p-2 bg-white flex justify-center items-center hover:scale-105"
                        target="_blank">
                        <img src="/images/icon/Group.png" alt="Icon" class="w-full h-auto">
                    </a>

                    <a href="#" title="x"
                        class="w-10 h-10 group cursor-pointer rounded-full p-2.5 bg-white flex justify-center items-center hover:scale-105"
                        target="_blank">
                        <img src="/images/icon/devicon_twitter.png" alt="Icon" class="w-full h-auto">
                    </a>

                </div>
            </div>

            <div class="grid grid-cols-2 place-items-center w-full items-start h-full">
                <div class="flex flex-col gap-6 ">
                    <a href="{{ route('about.index') }}"
                        class="{{ request()->is('about*') ? 'border-b-2 border-white' : '' }} font-[500] tracking-widest xl:text-base text-sm  relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">About
                        us</a>
                    <a href="{{ route('service.index') }}"
                        class="{{ request()->is('service*') ? 'border-b-2 border-white' : '' }} font-[500] tracking-widest xl:text-base text-sm relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">Services</a>
                    <a href="{{ route('doctor.index') }}"
                        class="{{ request()->is('doctor*') ? 'border-b-2 border-white' : '' }} font-[500] tracking-widest xl:text-base text-sm relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">Doctor</a>
                    <a href="{{ route('blog.index') }}"
                        class="{{ request()->is('blog*') ? 'border-b-2 border-white' : '' }} font-[500] tracking-widest xl:text-base text-sm relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">Blog
                        & page</a>
                </div>
                <div class="flex flex-col gap-6 ">
                    <a href="{{ route('contact.index') }}"
                        class="{{ request()->is('contact') ? 'border-b-2 border-white' : '' }} font-[500] tracking-widest xl:text-base text-sm relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">Contact</a>
                    <a href="{{ route('FQA.index') }}"
                        class="{{ request()->is('FQA') ? 'border-b-2 border-white' : '' }} font-[500] tracking-widest xl:text-base text-sm relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">FQA</a>
                    <a href="{{ route('terms.index') }}"
                        class="{{ request()->is('terms') ? 'border-b-2 border-white' : '' }} font-[500] tracking-widest xl:text-base text-sm relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">Terms
                        & conditions</a>
                    <a href="{{ route('privacy.index') }}"
                        class="{{ request()->is('privacy') ? 'border-b-2 border-white' : '' }} font-[500] tracking-widest xl:text-base text-sm relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">Privacy
                        poilcy</a>

                </div>
            </div>


            <div class="lg:flex flex-col justify-start items-start gap-4 w-full hidden">
                <div class="flex justify-start gap-4 cursor-pointer flex-row">
                    <div class="w-full max-w-[25px]">
                        <div class="w-[25px] h-[30px]">
                            <img src="/images/icon/map.png" alt="" class="w-full h-full">
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 justify-center items-start w-full">
                        <p class="font-[500] sm:text-base text-sm sm:text-left text-lext w-full ">
                            Main location</p>

                        <p class="txet-sm  font-light">Lorem ipsum dolor sit amet
                            consectetur. Donec senectus.</p>
                    </div>
                </div>

                <a href="mailto:Clinic@gmail.co.th" class="flex justify-start gap-4 cursor-pointer flex-row">
                    <div class="w-full max-w-[25px]">
                        <div class="w-[25px] h-[20px]">
                            <img src="/images/icon/mail.png" alt="" class="w-full h-full">
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 justify-center items-start w-full">
                        <p class="font-[500] sm:text-base text-sm sm:text-left text-lext w-full capitalize ">Genneral
                            inquiries</p>

                        <p class="txet-sm  font-light">Clinic@gmail.co.th</p>
                    </div>
                </a>

                <div class="flex justify-start gap-4 cursor-pointer flex-row">
                    <div class="w-full max-w-[25px]">
                        <div class="w-[25px] h-[25px]">
                            <img src="/images/icon/time.png" alt="" class="w-full h-full">
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 justify-center items-start w-full">
                        <p class="font-[500] sm:text-base text-sm sm:text-left text-lext w-full capitalize">
                            working hours</p>

                        <p class="txet-sm  font-light">Monday - Sunday 09:00 - 20:00 AM</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative w-full p-1 border-t flex justify-center items-center">
            <p class="text-white sm:text-base text-sm font-[300]">
                Copyright © 2025 Clinic
            </p>
        </div>
    </div>



</footer>