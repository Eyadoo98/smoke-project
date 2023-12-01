<?php

namespace Database\Seeders;

use App\Models\StartSmoking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StartSmokingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $startSmoking = [
            'الضغط الفردي',
            'تخفيف التوتر',
            'فضول',
            'الترابط الاجتماعي',
            'تأثير وسائل الإعلام',
            'سلوك الوالدين بشأن التدخين',
            'تمرد',
            'إمكانية الوصول: سهولة الوصول إلى السجائر',
            'التحكم في الوزن: يبدأ بعض الأشخاص بالتدخين معتقدين أنه يمكن أن يساعد في التحكم في الوزن.',
            'تكتيكات التسويق: يمكن للتسويق العدواني من قبل شركات التبغ أن يجذب الأفراد، خاصة من خلال الحملات الإعلانية الجذابة.',
            'الأعراف الثقافية: في بعض الثقافات، قد يكون التدخين مقبولاً اجتماعياً أو حتى يتم تشجيعه، مما يدفع الأفراد إلى البدء به.',
            'الشعور بالبرودة: يربط بعض الأفراد بين التدخين والشعور بالرقي أو التمرد أو "البرودة"، مما يحفزهم على البدء.',
            'ملل',
            'تبدو أكثر نضجا.',
            'الهروب من الواقع',
            'قلة الوعي',
            'قضايا الصحة العقلية',
            'الذوق والإحساس',
            'اخرى'
        ];
//        insert data into database
        foreach ($startSmoking as $startSmoking) {
            StartSmoking::query()->create(['name' => $startSmoking]);
        }
    }
}
