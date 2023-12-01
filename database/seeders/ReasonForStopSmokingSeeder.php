<?php

namespace Database\Seeders;

use App\Models\ReasonForStopSmoking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReasonForStopSmokingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reasonStop = [
            'سبب صحي',
            'الضغط العائلي',
            'مخاطر السرطان',
            'توفير المال',
            'حمل',
            'تطوير الذات',
            'يشتهي',
            'وصمة العار الاجتماعية',
            'تحسين اللياقة البدنية',
            'مظهر محسّن: يهدف إلى تحسين حالة الجلد وتقليل الشيخوخة المبكرة والحفاظ على مظهر أكثر شبابًا.',
            'تحسين حاستي الشم والتذوق: الرغبة في استعادة حاسة التذوق والشم بعد الإقلاع عن التدخين.',
            'انخفاض مشاكل الجهاز التنفسي: البحث عن الراحة من مشاكل الجهاز التنفسي وتحسين وظائف الرئة.',
            'وضع مثال إيجابي',
            'متوسط العمر المتوقع: إدراك أن الإقلاع عن التدخين يمكن أن يزيد متوسط العمر المتوقع ونوعية الحياة بشكل عام.',
            'نوم أفضل',
            'تقليل المخاطر على الآخرين',
            'تحسين الخصوبة: الرغبة في تعزيز الخصوبة والصحة الإنجابية، وخاصة بالنسبة لأولئك الذين يخططون لبدء عائلة أو توسيعها.',
            'التأثير الإيجابي على العلاقات',
            'زيادة فرص العمل',
            'اخرى'
        ];
//        insert data into database
        foreach ($reasonStop as $reasonStop) {
            ReasonForStopSmoking::query()->create(['reason_for_stop_smoking' => $reasonStop]);
        }
    }
}
