@extends('layouts.main')

@section('title')
   {{ $title }}
@endsection

@section('content')
   <!-- Testimonial -->
   <div class="section">
        
      <div id="" class="Testimonial">
          <div class="container">
         <div class="row">
            <div class="col-md-6 offset-md-3">
               <div class="titlepage">
                  <h2>Testimonial</h2>
               </div>
            </div>
         </div>
         <div class="row d_flex">
            <div class="col-md-3">
               <div class="Testimonial_box">
                  <i><img src="{{ asset('style/images/plan1.png')}}" alt="#"/></i>
               </div>
            </div>
            <div class="col-md-9">
               <div class="Testimonial_box">
                  <h4>will smithe</h4>
                  <p>Tof Lorem Ipsum, you need to be There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a pass
                  <br>
                  age of Lorem Ipsum, you need to be
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- end Testimonial -->
@endsection