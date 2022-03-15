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
               <h2>Our Blogs</h2>
               <span>It is a long established fact that a reader will be distracted by the readable content of a page </span>
            </div>
         </div>
      </div>
      <!-- three section -->
      @foreach($suppliers as $s)
      <div class="row">
         <div class="col-md-6 padding_bottom2">
           <div class="our_img">
              <figure><img src="{{ $s->gambar}}" alt="#"/></figure>
           </div>
           <div class="our_text_box three_box">
              <div>
               <h4 class="flot_left1">{{ $s->kategori }}</h4>
              </div>
               <div class="post_box d_flex padding_top3">
                  
                  <h3 class="awesome padding_flot">{{ $s->nama}}</h3>
               </div>
               <p>{{ $s->alamat }}</p>
            </div>
         </div>
      </div>
      @endforeach
      <!-- end three section -->
   </div>
</div>
<!-- end blog_main -->
@endsection