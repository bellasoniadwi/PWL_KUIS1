@extends('layouts.main')

@section('title')
   {{ $title }}
@endsection

@section('content')
<!-- blog_main -->
<div class="blog_main">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>BeautyCare</h2>
               <span>Ofrece Muchas Marcas de Cosméticos de La Patria</span>
            </div>
         </div>
      </div>

       <!-- three section -->
               <div class="row">
                   <div class="col-md-6 padding_bottom2">
                     <div class="our_img">
                        <figure><img src="{{ asset('style/images/logo.png')}}" alt="#"/></figure>
                     </div>
                     <div class="our_text_box three_box">
                        
                        
                        <div class="post_box d_flex padding_top3">
                           <h3 class="awesome padding_flot">BeautyCare</h3>
                           <ul class="like padding_left2">
                              <li><a href="#"><img src="{{ asset('style/images/like.png')}}" alt="#"/>Like</a></li>
                               <li><a href="#"><img src="{{ asset('style/images/comm.png')}}" alt="#"/>Comment</a></li>
                           </ul>
                        </div>
                        <h4>By Ms Anjani and Ms Bella</h4>
                        <p>BeautyCare is a beauty shop that cares and understands the wish of every women to always feel calm and comfortable with their look. It is a professional cosmetic shop with a complete range of colors, textures and functions for each product category.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="our_img">
                        <figure><img src="{{ asset('https://cf.shopee.co.id/file/5a294175f3713eaf8465b860c388271c')}}" alt="#"/></figure>
                     </div>
                     <div class="our_text_box three_box">
                       
                        
                        <div class="post_box d_flex padding_top3">
                            <h3 class="awesome padding_flot">Professional Cosmetics</h3>
                           <ul class="like padding_left2">
                              <li><a href="#"><img src="{{ asset('style/images/like.png')}}" alt="#"/>Like</a></li>
                               <li><a href="#"><img src="{{ asset('style/images//comm.png')}}" alt="#"/>Comment</a></li>
                           </ul>
                        </div>
                        <h4>Since 1987</h4>
                        <p>BeautyCare didirikan pada tahun 1987. Nama tersebut diambil dari bahasa Inggris yang berarti perawatan wajah.
                           Ide untuk mendirikan BeautyCare ini berawal dari banyaknya konsumen wanita yang sudah membutuhkan kosmetik dan pada saat itu toko
                           kosmetik masih dibilang jarang. BeautyCare awalnya adalah sebuah kios kecil biasa yang menjual merk dagang dalam negri. Seiring berkembangnya
                           waktu, kebutuhan akan penunjang kecantikan khususnya bagi kaum wanita semakin bertambah. Pada saat ini BeautyCare sudah banyak menjual produk
                           dalam dan luar negri seperti : Rista, Wardah, Ponds, LaTulipe, Tloac Paris, Tull Jye, Tje Fuk, jade, Bless dan lain-lain. Hingga akhirnya sampai sekarang
                           BeautyCare merupakan the most complete cosmetic shop in the town!</p>
                     </div>
                  </div>
               </div>
<!-- end three section -->
    </div>
</div>
 <!-- end blog_main -->
@endsection