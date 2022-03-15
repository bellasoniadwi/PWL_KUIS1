<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'nama' => 'Anjani Dwilestari',
                'foto' => 'https://th.bing.com/th/id/OIP.NkPEwrnxewCTiGmF_kxv_wHaHZ?pid=ImgDet&rs=1',
                'posisi' => 'System Analist',
                'deskripsi' => 'Seorang analis sistem selalu menghadirkan solusi-solusi terbaik'
            ],
            [
                'nama' => 'Bella Sonia Dwi Angelina',
                'foto' => 'https://cdn-images.livecareer.es/pages/foto_cv_lc_es_7.jpg',
                'posisi' => 'System Developer',
                'deskripsi' => 'Seorang pengembang cerdas yang menghadirdan inovasi-inovasi kreatif'
            ],
        ];
        \DB::table('tims')->insert($data);
    }
}
