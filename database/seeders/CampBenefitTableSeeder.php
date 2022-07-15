<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Harga Terjangkau'
            ],
            [
                'camp_id' => 1,
                'name' => 'Foto berkualitas High Definition'
            ],
            [
                'camp_id' => 1,
                'name' => 'Tidak perlu waktu lama'
            ],
            [
                'camp_id' => 1,
                'name' => 'Sudah bersertifikat dan berpengalaman'
            ],
            [
                'camp_id' => 2,
                'name' => 'Harga Terjangkau'
            ],
            [
                'camp_id' => 2,
                'name' => 'Foto berkualitas High Definition'
            ],
            [
                'camp_id' => 2,
                'name' => 'Sudah melayani lebih dari 100 event'
            ],
        ];

        CampBenefit::insert($campBenefits);
    }
}