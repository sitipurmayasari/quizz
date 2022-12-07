@inject('query', 'App\Http\Services\Quiz')
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
            <h1 style="color: blue;"><b>
              @php
                  $totalSoalBab1 = $query->getTotalSoal(1);
                  $jawabanBenarBab1 = $query->getJawabanBenar(auth()->user()->email,1);
                  $jawabanSalahBab1 = $totalSoalBab1 - $jawabanBenarBab1;

                  $totalNilaiBab1 = 100;
                  if ($totalSoalBab1) {
                     $nilaiPerSoalBab1 = $totalNilaiBab1 / $totalSoalBab1 ;
                    $nilaiBab1 = $jawabanBenarBab1 * $nilaiPerSoalBab1;
                    echo $nilaiBab1;
                  }else{
                    echo "0";
                  }
              @endphp
            </b></h1>
            <div class="card-body">
              <h5 class="card-title">Penambahan dan Pengurangan Pecahan</h5>

            </div>
          </div>
          <div class="card"  style="text-align: center;">
            <h1 style="color: red;"><b>
              @php
              $totalSoalBab2 = $query->getTotalSoal(2);
              $jawabanBenarBab2 = $query->getJawabanBenar(auth()->user()->email,2);
              $jawabanSalahBab2 = $totalSoalBab2 - $jawabanBenarBab2;

              $totalNilaiBab2 = 100;
              if ($totalSoalBab2) {
                $nilaiPerSoalBab2 = $totalNilaiBab2 / $totalSoalBab2 ;
                $nilaiBab2 = $jawabanBenarBab2 * $nilaiPerSoalBab2;
                echo $nilaiBab2;
              }else{
                echo "0";
              }
             
          @endphp
          </b></h1>
            <div class="card-body">
              <h5 class="card-title">Perkalian dan Pembagian Pecahan</h5>
            </div>

          </div>
          <div class="card"  style="text-align: center;">
            <h1 style="color: grey;"><b>
              @php
              $totalSoalEvaluasi = $query->getTotalSoal(3);
              $jawabanBenarEvaluasi = $query->getJawabanBenar(auth()->user()->email,3);
              $jawabanSalahEvaluasi = $totalSoalEvaluasi - $jawabanBenarEvaluasi;

              $totalNilaiEvaluasi = 100;
              if ($totalSoalEvaluasi) {
                $nilaiPerSoalEvaluasi = $totalNilaiEvaluasi / $totalSoalEvaluasi ;
                $nilaiEvaluasi = $jawabanBenarEvaluasi * $nilaiPerSoalEvaluasi;
                echo $nilaiEvaluasi;
              }else{
                echo "0";
              }
             
          @endphp
          </b></h1>
            <div class="card-body">
              <h5 class="card-title">Evaluasi Akhir</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <h2 class="main-heading ">
        Progress Materi Kamu
      </h2>
      <div class="teacher_container">
        <div class="card-deck">
          <div class="card" style="text-align: center;">
            <h1 style="color: blue;"><b>
              @php
                $progress = $query->openMateri(auth()->user()->id);
                $progressDone = $query->openMateriDone(auth()->user()->id);
                $persentase = 0.0;
                $donePersen = 100;
                if ($progress->count()>0) {
                  $perSatuan = $donePersen / $progress->count();
                  $persentase = $progressDone->count() * $perSatuan;
                }
            @endphp
            {{number_format($persentase,2)}}%</b></h1>
            <div class="card-body">
              <h5 class="card-title">
                {{$progressDone->first() ? $progressDone->first()->materi_code : '-'}}
              </h5>

            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
@endsection