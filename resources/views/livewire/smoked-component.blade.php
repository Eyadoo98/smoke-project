<style>
    @media screen  and (min-width: 767px){

        .custom-lotties{
            width: 300px;
            height: 300px;
        }
    }
</style>
<div>
    <div class="container mx-auto my-8 p-8 bg-white shadow-md rounded-md">
        <div class="text-right cursor-pointer" wire:click="$set('switchView','main')">
            الرجوع
            <i class="fa fa-arrow-right"></i>
        </div>

        <div class="container mx-auto py-8">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

                <dotlottie-player class="custom-lotties" src="https://lottie.host/f9a2c899-124b-4737-badb-acce599bb41c/BPRfvyElLw.json" background="transparent" speed="1"  loop autoplay></dotlottie-player>
                <!-- Form for user input -->
                    <div class="mb-4">
                        <label for="username" class="block text-sm font-medium text-gray-600">كم عدد السجائر</label>
                        <input type="text" id="username" name="username" wire:model="takeCigarette"
                               placeholder="كم عدد السجائر" class="mt-1 p-2 w-full border border-gray-300 rounded-md">
                    </div>

                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-blue-600" wire:click="countOfCigarette()">ارسال</button>
            </div>
        </div>
    </div>
</div>
