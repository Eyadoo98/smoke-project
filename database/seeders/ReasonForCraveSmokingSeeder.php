<?php

namespace Database\Seeders;

use App\Models\ReasonForCraveSmoking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReasonForCraveSmokingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $crave = [
            'المواقف العصيبة',
            'شرب القهوة أو الشاي',
            'بعد الوجبات: غالبًا ما يرتبط التدخين بنهاية الوجبة، مما يؤدي إلى الرغبة الشديدة في تناول الطعام بعد تناول الطعام.',
            'ملل',
            'رائحة الدخان',
            'مناسبات احتفالية',
            'التغييرات الروتينية',
            'مع الكحول',
            'رؤية السجائر أو التغليف',
            'التواجد حول المدخنين',
            'حنين للماضي',
            'الضغوط المالية',
            'عندما يقدم شخص ما سيجارة',
            'الروتين الصباحي: لدى العديد من المدخنين عادة تدخين سيجارة في الصباح، مما يجعل هذا الأمر محفزًا شائعًا.',
            'القيادة أو التنقل: قد ترتبط أنشطة مثل القيادة أو التنقل بالتدخين بالنسبة لبعض الأفراد.',
            'مشاهدة التلفاز أو الأفلام: قد تؤدي بعض الأنشطة، مثل مشاهدة التلفاز أو الأفلام، إلى إثارة الرغبة في التدخين.',
            'فترات الراحة الروتينية في العمل',
            'إشارة من الرائحة: يمكن أن تكون رائحة دخان السجائر، سواء من الآخرين أو من الرائحة المتبقية، محفزًا قويًا.',
            'اخرى'
        ];
//        insert data into database
        foreach ($crave as $crave) {
           ReasonForCraveSmoking::query()->create(['reason_for_crave_smoking' => $crave]);
        }
    }
}
