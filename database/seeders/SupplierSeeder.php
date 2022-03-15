<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
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
            [
                'kategori' => 'Perusahaan',
                'nama' => 'ESTÉE LAUDER COMPANIES',
                'gambar' => 'https://imageio.forbes.com/specials-images/imageserve/5ac3e71f31358e4112b6b7b5/0x0.jpg?format=jpg&crop=416,416,x0,y0,safe&fit=crop',
                'alamat' => 'Jakarta, Indonesia'
            ],
            [
                'kategori' => 'Perusahaan',
                'nama' => 'PT PESONA NATASHA GEMILANG',
                'gambar' => 'https://s1.bukalapak.com/pavilion/logos/6395/medium/natasha_4BL.jpg',
                'alamat' => 'Yogyakarta, Indonesia'
            ],
            [
                'kategori' => 'Klinik',
                'nama' => 'MIRACLE AESTHETIC CLINIC',
                'gambar' => 'https://3.bp.blogspot.com/-i_Mka9H18dE/UEtQ7WOeaCI/AAAAAAAAH78/PFcy32ma8nA/s1600/miracle+aesthetic+clinic+logo.jpg',
                'alamat' => 'Surabaya, Indonesia'
            ],
            [
                'kategori' => 'Klinik',
                'nama' => 'MADELINE BEAUTY CENTER',
                'gambar' => 'https://scontent-sin6-2.xx.fbcdn.net/v/t1.18169-9/18221794_1060239757442610_8044304507533933619_n.png?_nc_cat=102&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=G3LR_JdiIUUAX8KE5f7&_nc_ht=scontent-sin6-2.xx&oh=00_AT-KAkXoLP3gTNi3BV9RTVN0mqQdS21DGCZRxGOlvgY_Fw&oe=62568947',
                'alamat' => 'Jakarta, Indonesia'
            ],
            [
                'kategori' => 'Klinik',
                'nama' => 'GAYA SPA WELLNESS',
                'gambar' => 'https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img,w_800/https://parasayu.net/wp-content/uploads/2019/10/4-8.jpg',
                'alamat' => 'Jakarta, Indonesia'
            ],

        ];
        \DB::table('suppliers')->insert($data);
    }
}
