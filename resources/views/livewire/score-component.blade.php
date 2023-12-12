<div>

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

        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            /*body{*/
            /*    font-family: 'Nunito', sans-serif;*/
            /*}*/
        </style>
{{--        <link rel="shortcut icon" sizes="114x114" href="{{{ asset('assets/Images/top-view-words-made-by-cigarretes.png') }}}">--}}
        <link rel="shortcut icon" sizes="114x114" href="assets/Images/top-view-words-made-by-cigarretes.png">
{{--        <link rel="icon" href="{{ url('assets/Images/top-view-words-made-by-cigarretes.png') }}" type="image/png">--}}
    </head>

    @switch($switchView)
        @case('main')
            @include('livewire.main-score-component')
            @break
        @case('tips')
            @include('livewire.tip-and-tricks-component')
            @break

        @case('smoked')
            @include('livewire.smoked-component')
            @break
    @endswitch
</div>
