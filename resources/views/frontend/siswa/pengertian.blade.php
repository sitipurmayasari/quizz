@extends('layouts.siswa')
@section('content')
<h2 class="mb-4">Pengertian Pecahan</h2>
<p>
  Pecahan adalah satu kesatuan yang memecah menjadi beberapa bagian-bagian yang lebih kecil. Pada bentuk bilangan pecahan biasanya dituliskan dalam a/b, Bilangan yang berada diatas garis (a) pemisah disebut dengan pembilang, sedangkan bilangan dibagian bawah garis pemisah disebut sebagai penyebut(b). Pembilang adalah bilangan yang dibagi, sedangkan penyebut adalah bilangan yang menjadi pembagi.
</p>
<p>Menentukan Pecahan dengan gambar :</p>
<div style="text-align: center;"><img src="{{asset('front/images/pengertian.png')}}" alt=""></div>

<br><br><br>
<div class="hero_btn-continer" style="text-align: right;">
  <a href="{{Route('siswa.materi',['q' => 'penjumlahanbiasa'])}}" class="call_to-btn btn_white-border"> 
    <span>
      Selanjutnya
    </span>
    <img src="{{asset('front/images/right-arrow.png')}}" alt="">
  </a>
</div>
</div>
@endsection