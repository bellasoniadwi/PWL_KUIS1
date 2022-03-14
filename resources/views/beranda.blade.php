@extends('layouts.main')

@section('title')
   {{ $title }}
@endsection

@section('banner')
    <!-- banner -->
    <section class="banner_main">
      <div class="container">
         <div class="row d_flex">
            <div class=" col-xl-8 col-lg-8 col-md-8 col-12-9">
               <div class="text-bg">
                  <h1>Shine Bright<br> <span class="white1">Like A Diamond</span></h1>
                  <p>Just like each fingerprint is unique,so is Your Skin.
                     At BeautyCare, we make the complicated so simple,
                     for Everyone!</p>
                  <a href="produk">Buy Now</a>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-12-3">
               <div class="text-img">
                  <figure><img src="{{ asset('style/images/box_img.png')}}" alt="#"/></figure>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end banner -->
@endsection