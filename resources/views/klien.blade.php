@extends('layouts.main')

@section('title')
   {{ $title }}
@endsection

@section('content')
<div class="blog_main">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>What our BeautyCare Darlings Say...</h2>
               <span>Kepuasan pelanggan adalah prioritas kami</span>
            </div>
         </div>
      </div>

   <!-- Testimonial -->
   @foreach($pelanggans as $pl)
   <div class="section">
      <div id="" class="Testimonial">
         <div class="container">
         <div class="row">
            <div class="col-md-6 offset-md-3">
               <div class="titlepage">
                  <h2>{{ $pl->posisi }}</h2>
               </div>
            </div>
         </div>
         <div class="row d_flex">
            <div class="col-md-3">
               <div class="Testimonial_box">
                  <img height = "350" width = "350" src="{{ $pl->foto}}"/>
               </div>
            </div>
            <div class="col-md-9">
               <div class="Testimonial_box">
                  <h4>{{ $pl->nama }}</h4>
                  <p>{{ $pl->komentar }}</p>
               </div>
            </div>
         </div>
         </div>
      </div>
   </div><br><br>
   @endforeach
   </div>
</div>
<!-- end Testimonial -->
@endsection