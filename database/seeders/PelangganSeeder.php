<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
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
                'nama' => 'Veronica Alexandria',
                'foto' => 'https://i0.wp.com/images.soco.id/875-dian-sastro-film.png.jpg?w=1140&ssl=1',
                'komentar' => 'Dpt bonus sticker sama masker yuhuhh terima kasih minn. 
                Saran klo mau beli jgn lihat model Korean sebaiknya lht model Indonesia Krn disitu lebih mendekati utk tone indonesia..kayak pnyaku hrsnya aku ambil shade no 05 bukan 04.gpp deh next aku bakal beli lagi',
                'posisi' => 'Pengguna produk NYX'
            ],
            [
                'nama' => 'Catherine McKnight',
                'foto' => 'https://klubwanita.com/wp-content/uploads/2017/07/6-1-300x300.jpg',
                'komentar' => 'Packing nya full buble wrap, barang sampai dengan aman. Efek serumnya melembabkan, mencerahkan dan meredakan jerawat.',
                'posisi' => 'Pengguna produk Somethinc'
            ],
            [
                'nama' => 'Kayana Olivia',
                'foto' => 'https://cdn-2.tstatic.net/pekanbaru/foto/bank/images/suzy-artis-korea_20180206_123606.jpg',
                'komentar' => 'Ini medium coverage ya.. untuk warnanya cocok² aja di aku dan ga kerasa berat di muka. Semoga ga bikin gatel/jerawat dan cocok. 
                Pengemasan lama banget, pesan dari tgl 4 baru nyampe sekarang. Untung produknya bagus.',
                'posisi' => 'Pengguna produk Emina'
            ],
            [
                'nama' => 'Roseanne Shirley',
                'foto' => 'https://cdn0-production-images-kly.akamaized.net/2RsrPj4tFKF2R_qRXL8wdlgqGOw=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1871456/original/078916900_1517919090-Jun-Ji-Hyun-3.jpg',
                'komentar' => 'awal pake dikit² tp akhirnya cocok jg, yg bikin kukit mulus dalam semalam
                repurchase lg krn udh habis, tanpa ada exfo tuh wajah rasanya kek pake topeng berat dan ga lega bgt  
                semoga ttp cocok sm cosrx aha bha ini',
                'posisi' => 'Pengguna produk COSRX'
            ],
            [
                'nama' => 'Isabella Jasmine',
                'foto' => 'http://phinemo.com/wp-content/uploads/2017/06/swedia.jpg',
                'komentar' => 'Akhirnya nemu juga merek sunscreen yg cocok di muka aku, terharu jdnya...
                Selama pemakaian 1 minggu ini kayaknya cocok, semoga cocok terus, amin
                Maaf foto gak sesuai karena lagi males beranjak',
                'posisi' => 'Pengguna produk Innisfree'
            ]
        ];
        \DB::table('pelanggans')->insert($data);
    }
}
