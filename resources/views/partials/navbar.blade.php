<nav class="bg-white border-gray-200 dark:bg-orange-400 dark:border-orange-400 fixed w-full top-0 left-0 z-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{asset('assets/Images/logo.jpg')}}" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Turn It Off</span>
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-orange-400 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-orange-400 md:dark:bg-orange-400 dark:border-gray-700">
                <li>
                    <a href="/" class="font-bold block py-2 px-3 text-white bg-black rounded md:bg-transparent md:text-black-700 md:p-0 md:dark:text-black dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">الرئيسية</a>
                </li>

                <li>
                    <a href="#service-section" class="font-bold block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">الخدمات</a>
                </li>

                <li>
                    <a href="#contact-form" class="font-bold block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">تواصل معنا</a>
                </li>

                {{--auth--}}
                <li>
                    @if (Route::has('login'))
                        <div class="">
{{--                            sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10--}}
                            @auth
                                <a href="home"
                                   class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else

                                <a href="{{ route('login') }}"
                                   class="font-semibold text-white hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" id="loginNavbar">تسجيل الدخول</a>
                                {{--                    dark:hover:text-white--}}

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                       class="ml-4 mr-4 font-semibold text-white hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">تسجيل حساب</a>
                                @endif
                                <a href="{{ route('wizard-form') }}" target="_blank"
                                   class="ml-4 mr-4 font-semibold text-white hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Test</a>
                            @endauth
                        </div>
                    @endif
                </li>
                {{--auth--}}
            </ul>
        </div>

    </div>
</nav>