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
                  <h1>Blog<br> <span class="white1">Landing Page 2019</span></h1>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                  <a href="#">Read More</a>
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