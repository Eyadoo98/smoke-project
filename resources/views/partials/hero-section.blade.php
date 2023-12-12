<!-- Section: Design Block -->

<style>
    .loading-overlay {
        background-color: #222;
        color: #FFF;
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 99999;
    }
    .image-loading{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%); /* IE 9 */
        -webkit-transform: translate(-50%, -50%); /* Chrome, Safari, Opera */
    }
    body{
        overflow: hidden;
    }
    @media screen and (max-width:767px){
        .tracking-tight,.customBtn{
            font-size: 30px !important;
            color: white !important;
        }
        .customBtn{
            width: 100px;
            margin-top: -25px !important;
            border: 1px solid white !important;
            padding: 10px !important;
        }
        .sectionTextHero{
            position: absolute;
            top: 20%;
        }
        .sectionTextHero{
            position: absolute !important;
            top: 20% !important;
        }
        .bg-image-custom{
            background-size: cover !important;
            height: 700px !important;
        }

    }
</style>
<section class="loading-overlay">
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

    <dotlottie-player class="image-loading" src="https://lottie.host/adef5a1b-462b-4e98-8b99-341c9870e9dd/mWzkqV7zK4.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></dotlottie-player>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>

    $(window).on('load', function(){
        $(".loading-overlay").fadeOut(8000);

    });
    $('.loginBtn').on('click',function(){
        $(".loading-overlay").fadeOut();
    });
</script>
<section>
    <div class="relative overflow-hidden bg-cover bg-no-repeat bg-image-custom" style="
        background-position: top;
        background-image: url({{ asset('assets/Images/cigarettes-smoking.jpg') }});
        /*url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp')*/
        height: 947px;
      ">
        <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
            <div class="flex h-full items-center justify-center">
                <div class="sectionTextHero px-6 text-center text-white md:px-12" style="margin-top: 70px;">
                    <h1 class="mt-2 mb-16 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl font-serif">
                        إطفيها الان<br/><span>من أجل صحتك</span>
                    </h1>

                    <a href="{{route('login')}}">
                        <button type="button"
                                class="customBtn rounded border-2 border-neutral-50 font-sans
                                px-[46px] pt-[14px] pb-[12px] text-sm font-medium
                                uppercase leading-normal text-neutral-50 transition
                                duration-150 ease-in-out hover:border-neutral-100
                                hover:bg-neutral-100 hover:bg-opacity-10 hover:text-neutral-100
                                focus:border-neutral-100 focus:text-neutral-100 focus:outline-none
                                 focus:ring-0 active:border-neutral-200 active:text-neutral-200"
                                data-te-ripple-init data-te-ripple-color="light">
                            أبدأ
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</section>