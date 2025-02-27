<nav id="navbar"
    class="block w-full z-[80] mx-auto bg-white text-white items-center py-2 max-xl:px-2 transition-all ease-in-out shadow-md">
    <div class="max-w-[1320px] m-auto flex justify-between gap-2 items-center">
        <div
            class="lg:w-1/6 flex justify-start md:text-3xl text-xl font-afacadFlux sm:p-4 text-black font-[700]">
            <a href="/">LOGO</a>
        </div>

        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="mobile-menu-button inline-flex items-center py-2 w-12 h-10 justify-center lg:hidden"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="80"
                onclick="this.classList.toggle('active')">
                <path class="line top"
                    d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                <path class="line middle" d="m 30,50 h 40" />
                <path class="line bottom"
                    d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
            </svg>
        </button>


        {{-- MENU --}}
        <div class="flex min-w-[50%] mx-auto justify-between xl:text-lg text-base items-center max-lg:hidden">
            <a href="/" class="flex justify-center xl:min-w-[120px] min-w-[95px] flex-shrink-0">
                <div id="text_menu"
                    class="{{ request()->is('/') ? 'border-b-4 border-[#DFDFDF] text-blue font-[700]' : '' }} font-[400] capitalize relative hover:font-[700] text-[#8A8E94] hover:text-blue cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-[#DFDFDF]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-[#DFDFDF] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%] ">
                    Home
                </div>
            </a>
            <a href="{{ route('about.index') }}" class="flex justify-center xl:min-w-[120px] min-w-[95px] flex-shrink-0">
                <div id="text_menu"
                    class="{{ request()->is('about*') ? 'border-b-4 border-[#DFDFDF] text-blue font-[700]' : '' }} font-[400] capitalize relative hover:font-[700] text-[#8A8E94] hover:text-blue cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-[#DFDFDF]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-[#DFDFDF] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%] ">
                    about us
                </div>
            </a>
            <a href="{{ route('service.index') }}" class="flex justify-center xl:min-w-[120px] min-w-[95px] flex-shrink-0">
                <div id="text_menu"
                    class="{{ request()->is('service*') ? 'border-b-4 border-[#DFDFDF] text-blue font-[700]' : '' }} font-[400] capitalize relative hover:font-[700] text-[#8A8E94] hover:text-blue cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-[#DFDFDF]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-[#DFDFDF] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%] ">
                    services
                </div>
            </a>
            <a href="{{ route('doctor.index') }}" class="flex justify-center xl:min-w-[120px] min-w-[95px] flex-shrink-0">
                <div id="text_menu"
                    class="{{ request()->is('doctor*') ? 'border-b-4 border-[#DFDFDF] text-blue font-[700]' : '' }} font-[400] capitalize relative hover:font-[700] text-[#8A8E94] hover:text-blue cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-[#DFDFDF]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-[#DFDFDF] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%] ">
                    doctor
                </div>
            </a>
            <a href="{{ route('blog.index') }}" class="flex justify-center xl:min-w-[120px] min-w-[95px] flex-shrink-0">
                <div id="text_menu"
                    class="{{ request()->is('blog*') ? 'border-b-4 border-[#DFDFDF] text-blue font-[700]' : '' }} font-[400] capitalize relative hover:font-[700] text-[#8A8E94] hover:text-blue cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-[#DFDFDF]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-[#DFDFDF] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%] ">
                    blog & page
                </div>
            </a>
            <a href="{{ route('contact.index') }}" class="flex justify-center xl:min-w-[120px] min-w-[95px] flex-shrink-0">
                <div id="text_menu"
                    class="{{ request()->is('contact*') ? 'border-b-4 border-[#DFDFDF] text-blue font-[700]' : '' }} font-[400] capitalize relative hover:font-[700] text-[#8A8E94] hover:text-blue cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-[#DFDFDF]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-[#DFDFDF] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%] ">
                    contact
                </div>
            </a>
            <a href="{{ route('FQA.index') }}" class="flex justify-center xl:min-w-[120px] min-w-[95px] flex-shrink-0">
                <div id="text_menu"
                    class="{{ request()->is('FQA*') ? 'border-b-4 border-[#DFDFDF] text-blue font-[700]' : '' }} font-[400] capitalize relative hover:font-[700] text-[#8A8E94] hover:text-blue cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-200 before:absolute before:bg-[#DFDFDF]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-200 after:absolute after:bg-[#DFDFDF] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%] ">
                    FQA
                </div>
            </a>
        </div>

        <a href="{{ route('contact.index') }}"
            class="w-1/6 flex justify-center  max-lg:hidden items-center cursor-pointer drop-shadow-md">
            <p
                class="{{ request()->is('contact*') ? 'bg-[#21CDAD]' : '' }} bg-[#005DE1] px-4 py-2 rounded-full txet-white text-center hover:bg-[#21CDAD] font-[600] capitalize xl:text-lg text-sm">
                Book appointment
            </p>

        </a>
    </div>
    </div>
</nav>


{{-- mobile --}}
<div class="m-nav inset-0 shadow-md overflow-hidden z-[1000] flex justify-end fixed bg-[rgba(0,93,225,0.6)] backdrop-blur-sm">
    <div class="w-[50%] max-sm:w-[80%] h-full bg-slate-50 p-2 px-4 flex flex-col gap-y-4 ">
        <div class="flex justify-end">
            <div class="w-6 h-6 cursor-pointer hover:scale-110 transition-opacity duration-200" id="close-cate">
                <img src="/images/icon/close.png" alt="Close Icon" class="w-full h-full">
            </div>
        </div>
        <div class="flex flex-col gap-y-8 flex-grow">
            {{-- MENU --}}
            <div class="w-full flex justify-start flex-col text-base gap-y-2 font-kanit font-normal">
                <a href="/"
                    class="{{ request()->is('/') ? 'text-white bg-[#21CDAD] ' : '' }} capitalize flex justify-start rounded-lg p-2 hover:bg-[#21CDAD] hover:text-white">
                    Home
                </a>
                <hr>

                <a href="{{ route('about.index') }}"
                    class="{{ request()->is('about*') ? 'text-white bg-[#21CDAD] ' : '' }} capitalize flex justify-start rounded-lg p-2 hover:bg-[#21CDAD] hover:text-white">
                    about us
                </a>
                <hr>
                <a href="{{ route('service.index') }}"
                    class="{{ request()->is('service*') ? 'text-white bg-[#21CDAD] ' : '' }} capitalize flex justify-start rounded-lg p-2 hover:bg-[#21CDAD] hover:text-white">
                    services
                </a>
                <hr>
                <a href="{{ route('doctor.index') }}"
                    class="{{ request()->is('doctor*') ? 'text-white bg-[#21CDAD] ' : '' }} capitalize flex justify-start rounded-lg p-2 hover:bg-[#21CDAD] hover:text-white">
                    doctor
                </a>
                <hr>
                <a href="{{ route('blog.index') }}"
                    class="{{ request()->is('blog*') ? 'text-white bg-[#21CDAD] ' : '' }} capitalize flex justify-start rounded-lg p-2 hover:bg-[#21CDAD] hover:text-white">
                    blog & page
                </a>
                <hr>
                <a href="{{ route('contact.index') }}"
                    class="{{ request()->is('contact*') ? 'text-white bg-[#21CDAD] ' : '' }} capitalize flex justify-start rounded-lg p-2 hover:bg-[#21CDAD] hover:text-white">
                    contact
                </a>
                <hr>
                <a href="{{ route('FQA.index') }}"
                    class="{{ request()->is('FQA*') ? 'text-white bg-[#21CDAD] ' : '' }} capitalize flex justify-start rounded-lg p-2 hover:bg-[#21CDAD] hover:text-white">
                    FQA
                </a>
                <hr>

                <a href="{{ route('contact.index') }}"
                    class="w-full flex justify-center items-center cursor-pointer shadow-md mt-4 {{ request()->is('contact*') ? 'bg-[#21CDAD]' : '' }} font-[600] capitalize bg-[#005DE1] px-4 py-2 rounded-full txet-white text-center hover:bg-[#21CDAD] text-white">
                    <p
                        class="">
                        Book appointment
                    </p>
                </a>

            </div>


        </div>
    </div>
</div>


@vite('resources/js/navbar/navbarM.js')
@vite('resources/js/navbar/navbar.js')
