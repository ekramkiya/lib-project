<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TestDefinition;

class TestDefinitionSeeder extends Seeder
{
    public function run(): void
    {
        $tests = [
            [
                'name' => 'Complete Blood Count (CBC)',
                'category' => 'Blood',
                'unit' => '',
                'reference_range' => 'Varies by age and gender',
                'price' => 300,
            ],
            [
                'name' => 'Blood Sugar (Fasting)',
                'category' => 'Blood',
                'unit' => 'mg/dL',
                'reference_range' => '70–100 mg/dL',
                'price' => 150,
            ],
            [
                'name' => 'Lipid Profile',
                'category' => 'Blood',
                'unit' => 'mg/dL',
                'reference_range' => 'Varies by component',
                'price' => 400,
            ],
            [
                'name' => 'Urine Routine Examination',
                'category' => 'Urine',
                'unit' => '',
                'reference_range' => 'Normal',
                'price' => 200,
            ],
            [
                'name' => 'Liver Function Test (LFT)',
                'category' => 'Blood',
                'unit' => 'IU/L',
                'reference_range' => 'Varies per enzyme',
                'price' => 500,
            ],
            [
                'name' => 'Renal Function Test (RFT)',
                'category' => 'Blood',
                'unit' => 'mg/dL',
                'reference_range' => 'Varies per marker',
                'price' => 450,
            ],
            [
                'name' => 'Thyroid Profile (T3, T4, TSH)',
                'category' => 'Blood',
                'unit' => 'ng/dL / µIU/mL',
                'reference_range' => 'Varies per test',
                'price' => 600,
            ],
            [
                'name' => 'Hepatitis B Surface Antigen (HBsAg)',
                'category' => 'Blood',
                'unit' => '',
                'reference_range' => 'Negative',
                'price' => 250,
            ],
            [
                'name' => 'Pregnancy Test (Urine)',
                'category' => 'Urine',
                'unit' => '',
                'reference_range' => 'Negative',
                'price' => 180,
            ],
            [
                'name' => 'COVID-19 PCR Test',
                'category' => 'Swab',
                'unit' => '',
                'reference_range' => 'Negative',
                'price' => 1200,
            ],
        ];

        foreach ($tests as $test) {
            TestDefinition::updateOrCreate(
                ['name' => $test['name']], // Avoid duplicates
                $test
            );
        }

   
    }
}
