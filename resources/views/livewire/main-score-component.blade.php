<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<style>
    body {
        font-family: "Hedvig Letters Sans", sans-serif;
        /*font-size: 30px;*/
        /*text-shadow: 3px 3px 3px #ababab;*/
    }
</style>
<div>
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
{{--                        <span>{{$numberOfAvoidedCigarettesPerDays}}</span>--}}
                        <span>{{$avoidedCigarette}}</span>
                        <span> السجائر المتروكة </span>
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
    <div class="flex flex-col items-center bg-blue-500 cursor-pointer" wire:click="$set('switchView','tips')">
        <div class="p-4">
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

            <dotlottie-player src="https://lottie.host/90fdaebe-f35f-4a7b-90d7-d034c6c5fc92/j6SEfBqcw8.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
        </div>
        <div class="p-4" style="margin-top: -66px;">
            <!-- Content of the second div -->
            <p class="text-3xl text-white">نصائح اليوم</p>
        </div>
    </div>

    <div class="flex justify-center items-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 cursor-pointer" wire:click="$set('switchView','smoked')">
        <div class="p-4">
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

            <dotlottie-player src="https://lottie.host/5ece7cf0-3858-475e-92cb-285bd116bd0f/gYo6exQtDS.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></dotlottie-player>

        </div>
        <div class="p-4">
            <!-- Content of the second div -->
            <p class="text-3xl text-white">هل قمت بالتدخين اليوم؟</p>
        </div>
    </div>


</div>

