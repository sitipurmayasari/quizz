@extends('layouts.siswa')
@section('content')
<h1 class="mb-4"style=" width: auto;
  background-color: #EAEAEA;
  padding: 8px 8px;
  border-left: 5px solid  #064635;
  word-wrap: break-word;
  line-height: 1.e4m;;">Pembagian Pecahan</h1>
  <hr>
  <div style="border: solid 1px; width: fit-content;border-color:orange; color-back;  background-color:white;">
  <div style="margin:0; pading:0; text-align:center; background-color:orange; color:white">
  <b>Tujuan Pembelajaran</b>
  </div>
  <p> 
  1. Peserta didik dapat mengidentifikasi pembagian dua pecahan biasa dengan 
  penyebut berbeda dengan benar. <br>
  2. Peserta didik dapat menyelesaikan masalah yang berkaitan dengan pembagian dua 
  pecahan biasa penyebut berbeda dengan benar.
  </p>
  </div>
  <br>
  <h2 class="mb-4">D. Operasi Hitung Pembagian Pecahan Biasa</h2>
  <p>
    Pada dasarnya pembagian pecahan menggunakan konsep perkalian pecahan, 
    hanya saja pada perkalian dalam rumus pembagian pecahan , 
    kita harus membalikkan posisi pembilang dan penyebut pada pecahan pembagi. <br>
    Rumus <br>
  </p>
  <div style="border: solid 1px; padding: 10px; padding-bottom: 0px; width: fit-content;">
    <p>
      <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span>
      &nbsp;:&nbsp;
      <span class="frac"><sup>c</sup><span>&frasl;</span><sub>d</sub></span>
      &nbsp;menjadi&nbsp;
      <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span>
      &nbsp;x&nbsp;
      <span class="frac"><sup>d</sup><span>&frasl;</span><sub>c</sub></span>
    
    </p>
  </div>
  Pada rumus diatas pecahan  <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span> 
  dibagi <span class="frac"><sup>c</sup><span>&frasl;</span><sub>d</sub></span> 
  yang harus dilakukan pertama adalah menukar posisi c dan d, setelah dibalikkan, 
  d menjadi pembilang dan c menjadi penyebut, 
  contohnya adalah 2/3 maka pada penyelesaian pembagian harus dirubah menjadi 3/2
  Kebalikan anggota bilangan asli adalah 1, 2, 3, ... .
  Bilangan asli dapat diubah menjadi pecahan dengan bentuk yang paling sederhana adalah 
  pembilang bilangan itu sendiri dengan penyebut 1. <br>
  <br><b>Ayo Amati!</b><br><br>
  Contoh soal
  <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span>
  &nbsp;:&nbsp;
  <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span>
  &nbsp;=&nbsp;
  <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span>
  &nbsp;X&nbsp;
  <span class="frac"><sup>4</sup><span>&frasl;</span><sub>1</sub></span>
  &nbsp;=&nbsp;
  <span class="frac"><sup>8</sup><span>&frasl;</span><sub>3</sub></span> <br>

 
 </p>
  <br><br><hr>
  <h4 class="mb-4">Asyik Mencoba!</h4>
  <p></p>
  <table>
    <tr>
      <td style="vertical-align: top; width:30px;">1.</td>
      <td>
        <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span>
        &nbsp;:&nbsp;
        <span class="frac"><sup>3</sup><span>&frasl;</span><sub>4</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span>
        &nbsp;X&nbsp;
        <span class="frac"><sup>4</sup><span>&frasl;</span><sub>3</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>
          <input type="number" name="a1" id="a1" value="" style="width: 40px;" onclick="satu()" onkeyup="satu()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="b1" id="b1" value="" style="width: 40px;" onclick="satu()" onkeyup="satu()">
        </sub></span>
        &nbsp;&nbsp;&nbsp;
        <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar1" value="0">
        <br> &nbsp; <br> &nbsp;
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top; width:30px;">2.</td>
      <td>
        <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span>
        &nbsp;:&nbsp;
        <span class="frac"><sup>4</sup><span>&frasl;</span><sub>5</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>
          <input type="number" name="a2" id="a2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="b2" id="b2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sub></span>
        &nbsp;X&nbsp;
        <span class="frac"><sup>
          <input type="number" name="c2" id="c2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="d2" id="d2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>
          <input type="number" name="e2" id="e2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="f2" id="f2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sub></span>
        &nbsp;&nbsp;&nbsp;
        <span id="s2_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s2_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar2" value="0">
        <br> &nbsp; <br> &nbsp;
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top; width:30px;">3.</td>
      <td>
        Pak Tani mempunyai kebun yang dikelilingnya  <span class="frac"><sup>20</sup><span>&frasl;</span><sub>3</sub></span>
        m . jika disekeliling kebun tersebut hendak ditanami bunga matahari dan setiap bunga berjarak 
        <span class="frac"><sup>1</sup><span>&frasl;</span><sub>6</sub></span>
        m. maka berapa banyak bunga yang akan ditanam pak Tani? <br>
        <img src="{{asset('images/materi/bagi1/satu.png')}}" alt="" style="width: 200px;"> <br> &nbsp; <br>
        <span class="frac"><sup>20</sup><span>&frasl;</span><sub>3</sub></span>
        &nbsp;:&nbsp;
        <span class="frac"><sup>1</sup><span>&frasl;</span><sub>6</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>20</sup><span>&frasl;</span><sub>3</sub></span>
        &nbsp;X&nbsp;
        <span class="frac"><sup>6</sup><span>&frasl;</span><sub>1</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>120</sup><span>&frasl;</span><sub>3</sub></span>
        &nbsp;=&nbsp;
        <input type="number" name="a3" id="a3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        &nbsp;&nbsp;&nbsp;
        <span id="s3_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s3_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar3" value="0">
        <br> &nbsp; <br> &nbsp;
      </td>
    </tr>
  </table>
  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: left; float: left">
      <a href="{{Route('siswa.materi',['q' => 'perkaliandesimal'])}}" class="call_to-btn btn_white-border">
        <img src="{{asset('front/images/left-arrow.png')}}" alt="">
        <span>
          Sebelumnya
        </span>
      </a>
    </div>
    <div class="hero_btn-continer" style="text-align: right; float: right"  >
      <form class="form-horizontal validate-form" role="form" method="post" action="{{route('siswa.store')}}">
        {{ csrf_field() }}
        <input type="hidden" id="status" name="status" value="{{$next ? $next->status : 0}}">
        <input type="hidden" id="materi_code" name="materi_code" value="{{Request('q')}}">
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next ? $next->materi_code : 'pembagiancampuran'}}">

        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>

      <a hidden id="lanjut" href="{{Route('siswa.materi',['q' => 'pembagiancampuran'])}}" class="call_to-btn btn_white-border">
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
  });

  function satu() {
      var a1 = $("#a1").val();
      var b1 = $("#b1").val();

      if (a1 == 4 && b1 == 6 ) {
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
      var d2 = $("#d2").val();
      var e2 = $("#e2").val();
      var f2 = $("#f2").val();

      if (a2 == 2 && b2 == 3 && c2 == 5 && d2 == 4 && e2 == 10 && f2 == 12 ) {
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

      if (a3 == 40 ) {
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

      if (satu == 1 && dua == 1 && tiga == 1 && status==0 ) {
        $("#simpan").removeAttr("hidden");
        $("#lanjut").attr("hidden",true);
      }
    }
</script>
@endsection