@extends('layouts.siswa')
@section('content')
<div class="hero-container container">
    <div class="hero_detail-box">
      <h4>
        Selamat Datang "{{auth()->user()->name}}" 
      </h4>
      <h1>
        Belajar Pecahan Itu Seru!!
      </h1>
      <div class="hero_btn-continer" style="margin-top: 0px;padding-top: 0px;">
        <a href="{{Route('siswa.materi',['q' => 'pengertian'])}}" class="call_to-btn btn_white-border">
          <span>
            Mulai Belajar
          </span>
          <img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </a>
      </div>
    </div>
    <div class="hero_img-container">
      <div>
        <img src="{{asset('front/images/hero.png')}}" alt="" class="img-fluid">
      </div>
    </div>
  </div>
  <!-- teacher section -->
  <section class="teacher_section layout_padding-bottom">
    <div class="container">
      <h2 class="main-heading ">
        Nilai Test Kamu
      </h2>
      <div class="teacher_container layout_padding2">
        <div class="card-deck">
          <div class="card" style="text-align: center;">
            <h1 style="color: blue;"><b>72</b></h1>
            <div class="card-body">
              <h5 class="card-title">Penambahan dan Pengurangan Pecahan</h5>

            </div>
          </div>
          <div class="card"  style="text-align: center;">
            <h1 style="color: red;"><b>64</b></h1>
            <div class="card-body">
              <h5 class="card-title">Perkalian dan Pembagian Pecahan</h5>
            </div>

          </div>
          <div class="card"  style="text-align: center;">
            <h1 style="color: grey;"><b>0</b></h1>
            <div class="card-body">
              <h5 class="card-title">Evaluasi Akhir</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection