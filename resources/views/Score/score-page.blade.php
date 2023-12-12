<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Turn It Now</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{--    @vite('resources/css/app.css')--}}
    {{--    @livewireStyles--}}
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /*body{*/
        /*    font-family: 'Nunito', sans-serif;*/
        /*}*/
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-color: black !important;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" style="color: white;">
            اطفيها الان
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           style="color: white;"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
{{--<p>Time Spent: {{ $timeSpent / 60 }} minutes</p>--}}


<div class="mx-auto">
    <div class="flex justify-around">
        <div class="flex flex-col items-center">
            <div class="p-4 ">
                {{--                bg-blue-500--}}
                <!-- Content of the first div -->
                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
                        type="module"></script>

                <dotlottie-player src="https://lottie.host/6614c1f0-8882-46a0-9aee-55686b733cfb/MrKw4QjvoR.json"
                                  background="transparent" speed="1" style="width: 300px; height: 300px;" loop
                                  autoplay></dotlottie-player>
            </div>

            <div class="p-4" style="margin-top: -66px;">
                <!-- Content of the second div -->
                <p class="text-3xl">مستوى التقدم</p>
            </div>

            <div class="flex items-center justify-center">

                <!-- First set of elements -->
                <div class="text-center mx-4">
                    <i class="fa fa-calendar" style="font-size:48px;color: deepskyblue"></i>

                    <div class="h-2"></div>
                    <span>{{$daysDifference}}</span>
                    <span>ايام ترك التدخين</span>
                </div>

                <!-- Second set of elements -->
                <div class="text-center mx-4">
                    <i class="fa fa-bitcoin" style="font-size:48px;color: #ff00a7"></i>
                    <div class="h-2"></div>
                    <span>{{$numberOfAvoidedCigarettesPerDays}}</span>
                    <span> السجائر المتروكة في اليوم </span>
                </div>

                <div class="text-center mx-4">
                    <i class="fa fa-money" style="font-size:48px;color: #ffa700"></i>
                    <div class="h-2"></div>
                    <span>{{$savingMoneyPerDay}}</span>
                    <span> المبلغ الذي تم توفيره في اليوم </span>
                </div>

            </div>

        </div>
    </div>
</div>
<div class="h-4"></div>
<div class="flex flex-col items-center bg-blue-500 cursor-pointer">
    <div class="p-4">
        {{--                bg-blue-500--}}
        <!-- Content of the first div -->

        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

        <dotlottie-player src="https://lottie.host/90fdaebe-f35f-4a7b-90d7-d034c6c5fc92/j6SEfBqcw8.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
    </div>
    <div class="p-4" style="margin-top: -66px;">
        <!-- Content of the second div -->
        <p class="text-3xl text-white">نصائح اليوم</p>
    </div>
</div>

<div class="container mx-auto my-8 p-8 bg-white shadow-md rounded-md">
    <h2 class="text-2xl font-bold mb-4 text-right">نصائح و ارشادات</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Tip 1 -->
        <div class="bg-blue-100 p-6 rounded-md">
            <h3 class="text-xl font-semibold mb-2 text-right">النصيحة الأولى</h3>
            <p class="text-gray-700 text-right">    قم بتقييم نمط حياتك وحدد الأوقات أو الأماكن التي تشجعك على التدخين. حاول تغيير هذه العادات.</p>
        </div>

        <!-- Tip 2 -->
        <div class="bg-green-100 p-6 rounded-md">
            <h3 class="text-xl font-semibold mb-2 text-right">النصيحة الثانية</h3>
            <p class="text-gray- text-right">    ابحث عن بدائل صحية للتدخين، مثل ممارسة الرياضة أو الانخراط في أنشطة ترفيهية.</p>
        </div>

        <!-- Tip 3 -->
        <div class="bg-yellow-100 p-6 rounded-md">
            <h3 class="text-xl font-semibold mb-2 text-right">النصيجة الثالثة</h3>
            <p class="text-gray-700 text-right">    حاول البقاء إيجابياً ومتفائلاً حيال تجربة الإقلاع عن التدخين. احتفل بالإنجازات الصغيرة وتذكر الفوائد الصحية والشخصية للإقلاع.</p>
        </div>

        <!-- Add more tips as needed -->

    </div>
</div>
</body>
</html>