<div>
    <div class="container mx-auto my-8 p-8 bg-white shadow-md rounded-md">
        <div class="text-right cursor-pointer" wire:click="$set('switchView','main')">
            الرجوع
            <i class="fa fa-arrow-right"></i>

        </div>
        <div class="h-8"></div>
        <h2 class="text-2xl font-bold mb-4 text-right">نصائح و ارشادات</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" style="direction: rtl;">
            <!-- Tip 1 -->
            <div class="bg-blue-100 p-6 rounded-md">
                <h3 class="text-xl font-semibold mb-2 text-right">النصيحة الأولى</h3>
                <p class="text-gray-700 text-right"> قم بتقييم نمط حياتك وحدد الأوقات أو الأماكن التي تشجعك على التدخين.
                    حاول تغيير هذه العادات.</p>
            </div>

            <!-- Tip 2 -->
            <div class="bg-green-100 p-6 rounded-md">
                <h3 class="text-xl font-semibold mb-2 text-right">النصيحة الثانية</h3>
                <p class="text-gray- text-right"> ابحث عن بدائل صحية للتدخين، مثل ممارسة الرياضة أو الانخراط في أنشطة
                    ترفيهية.</p>
            </div>

            <!-- Tip 3 -->
            <div class="bg-yellow-100 p-6 rounded-md">
                <h3 class="text-xl font-semibold mb-2 text-right">النصيجة الثالثة</h3>
                <p class="text-gray-700 text-right"> حاول البقاء إيجابياً ومتفائلاً حيال تجربة الإقلاع عن التدخين. احتفل
                    بالإنجازات الصغيرة وتذكر الفوائد الصحية والشخصية للإقلاع.</p>
            </div>

            <!-- Add more tips as needed -->

        </div>
    </div>
</div>
