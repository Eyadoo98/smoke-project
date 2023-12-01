<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeOfCigarettesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'سيجارة إلكترونية',
            'سيجارة عادية',
            'سيجارة فيب',
            'ارجيلة'
        ];

        foreach ($types as $type) {
            \App\Models\TypeOfCigarettes::query()->create([
                'name' => $type,
            ]);
        }
    }
}
