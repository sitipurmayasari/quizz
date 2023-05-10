@extends('layouts.siswa')
@section('content')
<h1 class="mb-4"style=" width: auto;
  background-color: #EAEAEA;
  padding: 8px 8px;
  border-left: 5px solid  #064635;
  word-wrap: break-word;
  line-height: 1.e4m;;">Perkalian Pecahan</h1>
  <hr>
  <div style="border: solid 1px; width: fit-content;border-color:orange; color-back;  background-color:white;">
  <div style="margin:0; pading:0; text-align:center; background-color:orange; color:white">
  <b>Tujuan Pembelajaran</b>
  </div>
  <p> 
  1. Peserta didik dapat mengidentifikasi perkalian dua pecahan desimal dengan 
  penyebut berbeda dengan benar. <br>
  2. Peserta didik dapat menyelesaikan masalah yang berkaitan dengan perkalian dua 
  pecahan desimal penyebut berbeda dengan benar.
  </p>
  </div>
  <br>
<h2 class="mb-4">C. Operasi Hitung Perkalian Pecahan Desimal</h2>
<p>
  perkalian bilangan pecahan desimal dapat dilakukan seperti menyelesaikan perkalian bilangan 
  cacah. Penyelesaian akhir dengan menambahkan sejumlah angka di belakang koma sebanyak 
  angka di belakang koma dari faktor perkaliannya. <br>
  <b>Ayo Amati!</b> <br>
  <img src="{{asset('images/materi/kali3/satu.png')}}" alt="" style="width: 150px;"> <br>
  Ayu membeli apel buah. Berat setiap buah apel 0,165kg. berapa berat apel yang dibeli ayu?
  Berat keempat apel tersebut dapat dihitung dengan cara berikut <br>
  0,165 + 0,165 + 0,165 + 0,165 , atau 4 x 0,165
</p>
  <div style="border: dashed 1px; padding:5px;">
    <p>
      Bilangan Pecahan desimal adalah bentuk lain dari suatu pecahan. Ciri dari pecahan 
      desimal adalah tanda koma ( , ) <br>
      Contoh Pecahan Desimal <br>
      Bentuk pecahan desimal dari 
      <span class="frac"><sup>2</sup><span>&frasl;</span><sub>10</sub></span> adalah 0,2 <br><br>
      Bentuk pecahan desimal dari 
      <span class="frac"><sup>2</sup><span>&frasl;</span><sub>100</sub></span> adalah 0,02 <br><br>
      Bentuk pecahan desimal dari 
      <span class="frac"><sup>2</sup><span>&frasl;</span><sub>1000</sub></span> adalah 0,002 <br><br>
    </p>
  </div>
  <br>
  <p>
    Ada dua acara untuk menyelesaikan soal perkalian pecahan decimal <br>
    Cara pertama diselesaikan dengan cara perkalian bersusun <br>
    Contoh <br>
    3,5 x 0,4 =… <br>
    <img src="{{asset('images/materi/kali3/dua.png')}}" alt="" style="width: 300px;"> <br>
    Jadi hasilnya 1,4 <br>
    <br>
    Cara kedua diselesaikan dengan cara mengubah bentuk pecahan decimal ke pecahan biasa. <br>
    3,5 x 0,4 =… <br><br>
    <span class="frac"><sup>35</sup><span>&frasl;</span><sub>10</sub></span> &nbsp; X &nbsp;
    <span class="frac"><sup>4</sup><span>&frasl;</span><sub>10</sub></span> &nbsp; = &nbsp;
    <span class="frac"><sup>7</sup><span>&frasl;</span><sub>5</sub></span> &nbsp; X &nbsp;
    <span class="frac"><sup>2</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; = &nbsp;
    <span class="frac"><sup>14</sup><span>&frasl;</span><sub>10</sub></span> &nbsp; = &nbsp;
    1,4
    <br>
    Ubahlah pecahan decimal menjadi bentuk pecahan biasa, sederhanakan terlebih dahulu, 
kalikan pembilan dengan pembilan dan penyebut dengan penyebut, nyatakan hasilnya sebagai 
pecahan biasa atau decimal.
  </p>

<br><br><hr>
<h4 class="mb-4">Asyik Mencoba!</h4>
<p>Tentukan masalah perkalian pecahan desimal di bawah ini! Jawaban benar akan berwarna biru, 
  jika salah akan berwarna merah.</p>
<p>
  3,5 x 0,5 = 
  <input type="number" name="" id="a1" style="width: 55px;" step="0.01" onkeyup="satu()" onclick="satu()"> 
  &nbsp;&nbsp;&nbsp;
  <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
  <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
  <input type="hidden" id="jawaban_benar1" value="0">
</p>
<br><br>
<p>
  <span class="frac"><sup>35</sup><span>&frasl;</span><sub>10</sub></span> &nbsp; X &nbsp;
  <span class="frac"><sup>5</sup><span>&frasl;</span><sub>10</sub></span> &nbsp; = &nbsp;
  <span class="frac"><sup>7</sup><span>&frasl;</span><sub>5</sub></span> &nbsp; X &nbsp;
  <span class="frac"><sup>2</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; = &nbsp;
  <span class="frac"><sup>
    <input type="number" name="" id="a2" style="width: 45px;" onkeyup="dua()" onclick="dua()"> 
  </sup><span>&frasl;</span><sub>
    <input type="number" name="" id="b2" style="width: 45px;" onkeyup="dua()" onclick="dua()"> 
  </sub></span>
  &nbsp; = &nbsp;
  <input type="number" name="" id="c2" step="0.01" style="width: 55px;" onkeyup="dua()" onclick="dua()"> 
  &nbsp;&nbsp;&nbsp;
  <span id="s2_benar" hidden class="badge badge-pill badge-success">Benar</span>
  <span id="s2_salah" hidden class="badge badge-pill badge-danger">Salah</span>
  <input type="hidden" id="jawaban_benar2" value="0">
</p>
<p>
  Ibu akan memasak opor ayam sebanyak 5porsi. Setiap porsi opor ayam memerlukan 0,55 liter santan. 
  Berapa liter santtan yang diperlukan oleh ibu <br>
  Penyelesaian: <br>
  Cara pertama menggunakan bentuk pecahan <br><br>
  0,55 x 5 = 
  <span class="frac"><sup>55</sup><span>&frasl;</span><sub>
    <input type="number" name="" id="a3" style="width: 45px;" onkeyup="tiga()" onclick="tiga()">
  </sub></span>
  &nbsp;X&nbsp;
  <input type="number" name="" id="b3" style="width: 45px;" onkeyup="tiga()" onclick="tiga()">
  &nbsp;=&nbsp;
  <span class="frac"><sup>
    <input type="number" name="" id="c3" style="width: 45px;" onkeyup="tiga()" onclick="tiga()">
  </sup><span>&frasl;</span><sub>
    <input type="number" name="" id="d3" style="width: 45px;" onkeyup="tiga()" onclick="tiga()">
  </sub></span>
  &nbsp;=&nbsp;
  <input type="number" name="" id="e3" style="width: 55px;" step="0.01" onkeyup="tiga()" onclick="tiga()"> 
  &nbsp;&nbsp;&nbsp;
  <span id="s3_benar" hidden class="badge badge-pill badge-success">Benar</span>
  <span id="s3_salah" hidden class="badge badge-pill badge-danger">Salah</span>
  <input type="hidden" id="jawaban_benar3" value="0">
  <br>
</p>
  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: left; float: left">
      <a href="{{Route('siswa.materi',['q' => 'perkaliancampuran'])}}" class="call_to-btn btn_white-border">
        <img src="{{asset('front/images/left-arrow.png')}}" alt="">
        <span>
          Sebelumnya
        </span>
      </a>
    </div>
    <div class="hero_btn-continer" style="text-align: right; float: right">
      <form class="form-horizontal validate-form" role="form" method="post" action="{{route('siswa.store')}}">
        {{ csrf_field() }}
        <input type="hidden" id="status" name="status" value="{{$next ? $next->status : 0}}">
        <input type="hidden" id="materi_code" name="materi_code" value="{{Request('q')}}">
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next ? $next->materi_code : 'pembagianbiasa'}}">

        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>
      
      <a hidden id="lanjut" href="{{Route('siswa.materi',['q' => 'pembagianbiasa'])}}" class="call_to-btn btn_white-border">
        <span>
          Selanjutnya
        </span>
        <img src="{{asset('front/images/right-arrow.png')}}" alt="">
      </a>
    </div>
  </div>
@endsection

@section('script')
<script>
   $().ready( function () {
    var status = $("#status").val();
      if (status == 1) {
        $("#lanjut").removeAttr("hidden");
      }
    } );

    function satu() {
      var a1 = $("#a1").val();

      if (a1 == 1.75  ) {
        $("#s1_benar").removeAttr("hidden");
        $("#s1_salah").attr("hidden",true);
        $("#jawaban_benar1").val(1);
      } else {
        $("#s1_salah").removeAttr("hidden");
        $("#s1_benar").attr("hidden",true);
        $("#jawaban_benar1").val(0);
      }
      lanjut()
    }

    function dua() {
      var a2 = $("#a2").val();
      var b2 = $("#b2").val();
      var c2 = $("#c2").val();

      if (a2 == 14 && b2 == 10 && c2 == 1.4) {
        $("#s2_benar").removeAttr("hidden");
        $("#s2_salah").attr("hidden",true);
        $("#jawaban_benar2").val(1);
      } else {
        $("#s2_salah").removeAttr("hidden");
        $("#s2_benar").attr("hidden",true);
        $("#jawaban_benar2").val(0);
      }
      lanjut()
    }

    function tiga() {
      var a3 = $("#a3").val();
      var b3 = $("#b3").val();
      var c3 = $("#c3").val();
      var d3 = $("#d3").val();
      var e3 = $("#e3").val();

      if (a3 == 100 && b3 == 5 && c3 == 275 && d3 == 100 && e3 == 2.75 ) {
        $("#s3_benar").removeAttr("hidden");
        $("#s3_salah").attr("hidden",true);
        $("#jawaban_benar3").val(1);
      } else {
        $("#s3_salah").removeAttr("hidden");
        $("#s3_benar").attr("hidden",true);
        $("#jawaban_benar3").val(0);
      }
      lanjut()
    }

    function lanjut(params) {
      var satu = $("#jawaban_benar1").val();
      var dua = $("#jawaban_benar2").val();
      var tiga = $("#jawaban_benar3").val();
      var empat = $("#jawaban_benar4").val();

      if (satu == 1 && dua == 1 && tiga == 1 && status==0) {
        $("#simpan").removeAttr("hidden");
        $("#lanjut").attr("hidden",true);
      }
    }
</script>
@endsection