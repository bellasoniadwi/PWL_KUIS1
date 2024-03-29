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
               <h2>Tim Kami</h2>
               <span>Perkenalkan anggota tim kami</span>
            </div>
         </div>
      </div>
      <!-- first section -->
      @foreach($tims as $t)
      <div class="row">
         <div class="col-md-12">
            <div class="our_two_box">
               <div class="row d_flex">
                  
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                     <div class="our_img">
                        <figure><img height = "350" width = "350" src="{{ $t->foto}}"/></figure>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                     <div class="our_text_box">
                        <h3 class="awesome pa_wi">{{ $t->nama}}</h3>
                        <p>{{ $t->deskripsi }}</p>
                        <div class="post_box padding_bottom1">
                           <h4 class="flot_left1"><b>{{ $t->posisi }}<b></h4>
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