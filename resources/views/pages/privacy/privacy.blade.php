@extends('layouts.main')

@section('title')
    Privacy poilcy
@endsection

@section('style')
@endsection

@section('contents')
    <section class="w-full h-auto relative top-0">
        <div
            class="absolute inset-0 z-50 flex flex-col justify-center items-center gap-y-4 max-sm:gap-y-1 max-w-[1320px] m-auto">
            <div class="flex flex-col sm:gap-y-8">
                <p class="xl:text-[40px] text-3xl uppercase text-white font-[700] text-center ss:tracking-[8px] tracking-widest animate__animated animate__zoomIn" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    Privacy poilcy
                </p>
            </div>
        </div>

        <div class="relative w-full lg:h-[250px] h-[150px]">
            <img src="/images/banner/image 63 (1).png" alt="About Banner" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-[#17449E] to-[#07CCEC]  opacity-80">
            </div>
        </div>
    </section>

    <div class="xl:py-16 py-[30px] max-w-[1320px] mx-auto w-full flex flex-col gap-6 px-4" data-aos="fade-up" data-aos-duration="500">
        <p class=" capitalize md:text-3xl text-2xl text-black font-[700] text-center">Privacy poilcy</p>
        <div class="flex flex-col gap-4">
            @for ($i = 0; $i < 2; $i++)
                
            <p class="indent-8 text-[#474747] md:text-base text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing
                elit. In non vitae illum? Voluptates
                distinctio dolorem aspernatur totam nemo nihil deserunt hic possimus vel harum quod fuga doloribus delectus
                repellendus praesentium suscipit, illo incidunt quasi, porro eos nesciunt recusandae, dolor non. Laudantium
                dolorum eveniet numquam, dolore saepe iste alias obcaecati molestiae porro ad quasi inventore! Iusto illum
                aliquid architecto repellat voluptatibus, vero nemo molestiae esse adipisci enim vel? Ea et sed eaque eius
                beatae non, eos veniam aut suscipit hic fuga iure explicabo odit alias molestiae cum nostrum facilis
                mollitia quam deserunt. Voluptatem quidem impedit esse eaque dolorum soluta harum quaerat aliquam, dolorem
                delectus ut iure odio repellat consectetur nostrum dolore. Beatae nisi eligendi nemo vel itaque adipisci
                necessitatibus odio obcaecati iusto, sed fugit blanditiis. Magnam modi nemo ipsum necessitatibus quod
                nostrum, tempora assumenda consectetur delectus quidem vero repellat, omnis expedita debitis adipisci
                reprehenderit? Ratione delectus aspernatur dolorem illo quae, labore harum obcaecati itaque nulla id
                nesciunt, odio inventore dolor quam sunt esse error voluptatem,
            </p>

            <p class="indent-8 text-[#474747] md:text-base text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing
                elit. In non vitae illum? Voluptates
                distinctio dolorem aspernatur totam nemo nihil deserunt hic possimus vel harum quod fuga doloribus delectus
                repellendus praesentium suscipit, illo incidunt quasi, porro eos nesciunt recusandae, dolor non. Laudantium
                dolorum eveniet numquam, dolore saepe iste alias obcaecati molestiae porro ad quasi inventore! Iusto illum
                aliquid architecto repellat voluptatibus, vero nemo molestiae esse adipisci enim vel? Ea et sed eaque eius
                beatae non, eos veniam aut suscipit hic fuga iure explicabo odit alias molestiae cum nostrum facilis
                mollitia quam deserunt. Voluptatem quidem impedit esse eaque dolorum soluta harum quaerat aliquam, dolorem
                delectus ut iure odio repellat consectetur nostrum dolore.
            </p>
            <p class="indent-8 text-[#474747] md:text-base text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing
                elit. In non vitae illum? Voluptates
                distinctio dolorem aspernatur totam nemo nihil deserunt hic possimus vel harum quod fuga doloribus delectus
                repellendus praesentium suscipit, illo incidunt quasi,
            </p>
            <p class="indent-8 text-[#474747] md:text-base text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing
                elit. In non vitae illum? Voluptates
                distinctio dolorem aspernatur totam nemo nihil deserunt hic possimus vel harum quod fuga doloribus delectus
                repellendus praesentium suscipit, illo incidunt quasi,
            </p>@endfor
        </div>
    </div>
@endsection

@section('script')
@endsection
