@extends('layouts.main')

@section('title')
   {{ $title }}
@endsection

@section('content')
<!-- contact -->
<div id="contact" class="contact">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Contact us</h2>
                <span>Ada yang ingin disampaikan kepada kami para tim BeautyCare? Tulis disini yaaa</span>
             </div>
          </div>
       </div>
    </div>
    <div class="container">
       <div class="row">
          <div class="col-md-12 ">
             <form class="main_form ">
                <div class="row">
                   <div class="col-md-12 ">
                      <input class="form_contril" placeholder="Name " type="text" name="Name ">
                   </div>
                   <div class="col-md-12">
                      <input class="form_contril" placeholder="Phone Number" type="text" name=" Phone Number">
                   </div>
                   <div class="col-md-12">
                      <input class="form_contril" placeholder="Email" type="text" name="Email">
                   </div>
                   <div class="col-md-12">
                     <input class="form_contril" placeholder="Message" type="text" name="Message">
                   </div>
                   <div class="col-sm-12">
                      <button class="send_btn">Send</button>
                   </div>
                </div>
             </form>
          </div>
       </div>
    </div>
 </div>
 <!-- end contact -->
 @endsection