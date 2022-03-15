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
                'kategori' => 'Perusahaan',
                'nama' => 'PT KOSMETIKA GLOBAL INDONESIA',
                'gambar' => 'https://yt3.ggpht.com/ytc/AKedOLSv_UQkHD2UbaldXtZVHbhZm1kEGrmP0z7jNNTj=s900-c-k-c0x00ffffff-no-rj',
                'alamat' => 'Surabaya, Indonesia'
            ],
        ];
        \DB::table('suppliers')->insert($data);
    }
}
