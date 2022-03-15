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
                'kategori' => 'Company',
                'nama' => 'PT KOSMETIKA GLOBAL INDONESIA',
                'foto' => 'https://images.glints.com/unsafe/768x0/glints-dashboard.s3.amazonaws.com/company-logo/6da356484c09a579fd4775460d903328.jpg',
                'alamat' => 'Surabaya, Indonesia'
            ],

        ];
        \DB::table('suppliers')->insert($data);
    }
}
