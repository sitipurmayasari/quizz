@extends('layouts.front')
@section('content')
<div class="hero-container container">
    <div class="hero_detail-box">
      <h3>
        Selamat Datang di <br>
      </h3>
      <h1>
        Belajar Pecahan Itu Seru!!
      </h1>
      <p style="margin-right:50px;">
        Buat Kalian yang sudah kelas 5 SD, Belajar Pecahan itu tidak sulit kok, yuk belajar disini .
      </p>
      <div class="hero_btn-continer">
        <a href="{{Route('login')}}" class="call_to-btn btn_white-border">
          <span>
            Login
          </span>
          <img src="{{ asset('front/images/right-arrow.png')}}" alt="">
        </a>
      </div>
    </div>
    <div class="hero_img-container">
      <div>
        <img src="{{ asset('front/images/hero.png')}}" alt="" class="img-fluid">
      </div>
    </div>
  </div>
@endsection