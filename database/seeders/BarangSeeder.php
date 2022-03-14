<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
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
                'nama' => 'Eye Shadow Palette Make Over',
                'gambar' => 'https://cf.shopee.co.id/file/e2880870115d0acf7d958c238daf1a5c',
                'konten' => 'Eyeshadow dengan 9 warna dinamis dalam 1 palette yang dapat menghasilkan beragam tampilan untuk berbagai acara. Warna eyeshadow dalam 1 palette untuk menciptakan beragam tampilan sesuai keinginan. Memiliki pigmentasi yang tinggi untuk riasan mata yang indah. Memiliki tekstur lembut yang mudah dibaurkan untuk hasil yang lebih optimal.',
                'harga' => 220000,
                'status' => 'Kosong'
            ],
            [
                'nama' => 'Toner COSRX',
                'gambar' => 'https://akcdn.detik.net.id/community/media/visual/2020/03/12/5258c714-a737-486a-b7b5-e001ff2322e8.jpeg?q=90&w=480',
                'konten' => 'Toner COSRX ini mengandung 10% Galactomyces Ferment Filtrate, yang dikenal dapat meratakan skintone dan menghaluskan kulit wajah. Bahan dalam toner COSRX ini mengandung hyaluronic acid yang mampu melembapkan kulit kusam dan lelah.Toner COSRX ini bebas alkohol dan cocok untuk semua jenis kulit, termasuk kulit sensitif.',
                'harga' => 140000,
                'status' => 'Ada'
            ],
            [
                'nama' => 'Serum Somethinc',
                'gambar' => 'https://www.99.co/blog/indonesia/wp-content/uploads/2021/07/Somethinc-Bakuchiol-Skinpair-Oil.jpg',
                'konten' => 'Kalau kamu belum berani menggunakan Somethinc retinol, kamu bisa lo mencoba produk yang satu ini.
                Pasalnya, produk Somthinc yang memiliki kandungan bakuchiol tersebut diklaim sebagai alternatif lain dari retinol karena lembut di kulit. 
                Manfaat serum Somethinc ini sebagai senyawa anti-inflamasi, mengatasi jerawat, menstimulasi kolagen, sekaligus memperbaiki tekstur kulit.
                Lalu, kandungan lainnya di dalam produk ini juga bermanfaat untuk mencegah penuaan dini, mempertahankan skin barrier, melembapkan, dan mengatasi pori-pori tersumbat.',
                'harga' => 54000,
                'status' => 'Kosong'
            ],
            [
                'nama' => 'Mineral Cushion Emina',
                'gambar' => 'https://cf.shopee.co.id/file/e0aabc4837e01218f795c97a20b0f550',
                'konten' => 'Emina Bare With Me Mineral Cushion ini punya manfaat melindungi kulit dari UVA dan UVB kok. Berkat diperkaya dengan titanium dioxide yang merupakan elemen sunscreen yang memberikan perlindungan pada paparan sinar matahari. Cushion ini juga bersifat non-comedogenic, sehingga nggak gampang menyumbat pori-pori.',
                'harga' => 126000,
                'status' => 'Ada'
            ],
            [
                'nama' => 'Make Up Remover Wardah',
                'gambar' => 'https://id-test-11.slatic.net/p/c630f458b7a3f172b13ac5e529732057.jpg',
                'konten' => 'Digunakan untuk membantu mengangkat make up (mascara, eyeliner dan lipstik) dengan cepat sekaligus terasa lembut di mata dan bibir tanpa meninggalkan rasa berminyak.',
                'harga' => 22000,
                'status' => 'Kosong'
            ],
            [
                'nama' => 'Mascara Maybelline',
                'gambar' => 'https://www.maybelline.co.id/~/media/mny/id_id/eyes/mascara/hypercurl%20mascara/hypercurl-mascara-5.jpg?h=250&thn=1&w=175&hash=18B2BAEFFEA2C0A5211F9C50035BF618F9C46C70|hypercurl%20mascara',
                'konten' => 'Maybelline Hypercurl Mascara adalah maskara waterproof dengan formula yang dapat melentikkan dan menebalkan bulu mata hingga 4 kali. Tahan hingga 24 jam* dan nyaman dipakai seharian.',
                'harga' => 69000,
                'status' => 'Ada'
            ],
            [
                'nama' => 'SunScreen Innisfree',
                'gambar' => 'https://cf.shopee.co.id/file/6412218c3690c716cf8e9af2253b8cb0',
                'konten' => 'Innisfree Tone Up No Sebum Sunscreen merupakan sunscreen untuk kulit berminyak dan sensitif. Dengan matte finish yang mampu melindungi dari sinar UV serta juga mudah menyerap ke dalam lapisan kulit. Mengandung minyak bunga matahari dan ekstrak teh hijau Jeju untuk melindungi kulit Anda dari sinar UV.',
                'harga' => 90000,
                'status' => 'Kosong'
            ],
            [
                'nama' => 'SMLC 02 Stockholm NYX',
                'gambar' => 'https://pinhome.id/blog/wp-content/uploads/2021/08/NYX2BSMLC2B022BStockholm.jpg',
                'konten' => 'Tipe lipstick yang satu ini memiliki warna nude dari rangkaian Soft Matte Lip Cream yang paling disukai penggunanya. Warna beige pink terlihat natural, tanpa membuat kamu terlihat pucat karena unsur pink-nya. Cocok untuk semua kalangan yang memiliki warna kulit berbeda-beda.',
                'harga' => 111000,
                'status' => 'Ada'
            ]
        ];
        \DB::table('barangs')->insert($data);
    }
}
