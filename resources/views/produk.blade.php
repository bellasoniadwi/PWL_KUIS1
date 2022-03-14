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
               <h2>Produk Kami</h2>
               <span>Kosmetik eksklusif kami yang tersedia untuk anda</span>
            </div>
         </div>
      </div>
      <!-- first section -->
      @foreach($barangs as $b)
      <div class="row">
         <div class="col-md-12">
            <div class="our_two_box">
               <div class="row d_flex">
                  
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                     <div class="our_img">
                        <figure><img height = "350" width = "350" src="{{ $b->gambar}}"/></figure>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                     <div class="our_text_box">
                        <h3 class="awesome pa_wi">{{ $b->nama}}</h3>
                        <p>{{ $b->konten }}</p>
                        <div class="post_box padding_bottom1">
                           <h4 class="flot_left1"><b>Rp. {{ $b->harga }}<b></h4>
                           <ul class="like">
                              <li><a href="#"><img src="{{ asset('style/images/like.png')}}" alt="#"/>Like</a></li>
                              <li><a href="#"><img src="{{ asset('style/images/comm.png')}}" alt="#"/>Comment</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endforeach
<!-- end first section -->

    </div>
</div>
 <!-- end blog_main -->
@endsection