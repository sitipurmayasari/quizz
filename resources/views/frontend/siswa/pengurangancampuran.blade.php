@extends('layouts.siswa')
@section('content')
  <h1 class="mb-4"style=" width: auto;
  background-color: #EAEAEA;
  padding: 8px 8px;
  border-left: 5px solid  #064635;
  word-wrap: break-word;
  line-height: 1.e4m;;">Pengurangan Pecahan</h1>
  <hr>
  <div style="border: solid 1px; width: fit-content;border-color:orange; color-back;  background-color:white;">
  <div style="margin:0; pading:0; text-align:center; background-color:orange; color:white">
  <b>Tujuan Pembelajaran</b>
  </div>
  <p> 
  1. Peserta didik dapat mengidentifikasi pengurangan dua pecahan campuran dengan penyebut berbeda dengan benar. <br>
  2. Peserta didik dapat menyelesaikan masalah yang berkaitan dengan pengurangan dua pecahan campuran penyebut berbeda dengan benar.
  </p>
  </div>
  <br>
  <h2 class="mb-4">E. Operasi Hitung Pengurangan Pecahan Campuran</h2>
  <p>
    Pada pengurangan pecahan campuran, cara mengurangi pecahan campuran pada dasarnya tidak 
    jauh berbeda dengan pengurangan pecahan biasa. Untuk menghitung dalam pecahan campuran 
    ini terlebih dahulu pisahkan antara nilai pecahan dengan nilai bilangan bulatnya.
    Ayo Amati!
    Agar kamu memahami pengurangan pecahan campuran, maka simak penjelasan di bawah ini 
    Contoh
    Ibu Ani membeli daging sebanyak 3
    <span class="frac"><sup>2</sup><span>&frasl;</span><sub>4</sub></span>
    kg. sesampainya dirumah ibu Ani memasak daging 
    tersebut sebanyak 2
    <span class="frac"><sup>1</sup><span>&frasl;</span><sub>3</sub></span>
    . Berapa kg daging sisa yang dimiliki ibu Ani?
  </p>
  <div style="text-align: center;"><img src="{{asset('images/materi/kurang2/satu.png')}}" alt="" style="width: 300px;"></div>
  <p>
    Jawab : &nbsp; &nbsp;
    3 <span class="frac"><sup>2</sup><span>&frasl;</span><sub>4</sub></span> - 
    2 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>3</sub></span> =
    3 <span class="frac"><sup>6</sup><span>&frasl;</span><sub>12</sub></span> - 
    2 <span class="frac"><sup>4</sup><span>&frasl;</span><sub>12</sub></span> =
    1 <span class="frac"><sup>2</sup><span>&frasl;</span><sub>12</sub></span>
    <br><br>
  </p>
  <br><br><hr>
  <h4 class="mb-4">Asyik Mencoba!</h4>
  <br>
  <p>
    Tentukan pengurangan pecahan campuran pada gambar berarsir di bawah ini! Jawaban benar akan berwarna biru, jika salah akan berwarna merah.
  </p>
  <table style="width: 100%">
    <tr>
      <td style="width: 5%; vertical-align:top;">1.</td>
      <td>
        <img src="{{asset('images/materi/kurang2/dua.png')}}" alt="" style="width: 200px;"> {{-- soal no 1 --}} <br>
        Ayu membeli 2 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span>
        kg gula. Gula tersebut Ayu gunakan untuk membuat kue 
        sebanyak 1 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span>
        kg. berapa kg sisa gula yang dimiliki Ayu?
        <br><br>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        2 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span> &nbsp;&nbsp; - &nbsp;&nbsp;
        1 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span> &nbsp; = &nbsp; 
          <span class="frac"><sup>9</sup><span>&frasl;</span><sub>4</sub></span> &nbsp;&nbsp; - &nbsp;&nbsp; 
          <span class="frac"><sup>6</sup><span>&frasl;</span><sub>5</sub></span> &nbsp; = &nbsp;
          <span class="frac"><sup>45</sup><span>&frasl;</span><sub>20</sub></span> &nbsp;&nbsp; - &nbsp;&nbsp;
          <span class="frac"><sup>24</sup><span>&frasl;</span><sub>20</sub></span> &nbsp; = &nbsp; 
        <span class="frac"><sup>
          <input type="number" name="a1" id="a1" value="" style="width: 40px;" onclick="satu()" onkeyup="satu()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="b1" id="b1" value=""  style="width: 40px;" onclick="satu()" onkeyup="satu()">
        </sub></span>
        &nbsp; = &nbsp;
        <input type="number" name="c1" id="c1" style="width: 40px;" value="" onclick="satu()" onkeyup="satu()">
        <span class="frac"><sup>
          <input type="number" name="d1" id="d1" style="width: 40px;" value="" onclick="satu()" onkeyup="satu()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="e1" id="e1" style="width: 40px;" value="" onclick="satu()" onkeyup="satu()">
        </sub></span>
        &nbsp; &nbsp; &nbsp;
        <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar1" value="0">
        <br><br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;">2.</td>
      <td>
        <img src="{{asset('images/materi/kurang2/tiga.png')}}" alt="" style="width: 200px;"> {{-- soal no 2 --}} <br>
        Seorang ibu masih memiliki stok 5 <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span>
        kg beras, ibu kemudian memasak beras tersebut untuk makan sebanyak 
        1 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span>
        kg, tinggal berapakah sisa persediaan beras ibu?
        <br><br>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        5 <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span> &nbsp;&nbsp; - &nbsp;&nbsp;
        1 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; = &nbsp; 
          <span class="frac"><sup>17</sup><span>&frasl;</span><sub>3</sub></span> &nbsp;&nbsp; - &nbsp;&nbsp; 
          <span class="frac"><sup>3</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; = &nbsp;
          <span class="frac"><sup>51</sup><span>&frasl;</span><sub>6</sub></span> &nbsp;&nbsp; - &nbsp;&nbsp;
          <span class="frac"><sup>6</sup><span>&frasl;</span><sub>6</sub></span> &nbsp; = &nbsp; 
        <span class="frac"><sup>
          <input type="number" name="a2" id="a2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="b2" id="b2" value=""  style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sub></span>
        &nbsp; = &nbsp;
        <input type="number" name="c2" id="c2" style="width: 40px;" value="" onclick="dua()" onkeyup="dua()">
        <span class="frac"><sup>
          <input type="number" name="d2" id="d2" style="width: 40px;" value="" onclick="dua()" onkeyup="dua()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="e2" id="e2" style="width: 40px;" value="" onclick="dua()" onkeyup="dua()">
        </sub></span>
        &nbsp; &nbsp; &nbsp;
        <span id="s2_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s2_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar2" value="0">
        <br><br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;">3.</td>
      <td>
        <img src="{{asset('images/materi/kurang2/empat.png')}}" alt="" style="width: 200px;"> {{-- soal no 3--}} <br>
        Seorang pedagang memiliki semangka 3 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span>
        kuintal. Jika hari ini terjual 1 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span>
        kuintal, berapa kuintal semangka yang tersisa?
        <br><br>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        3 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span> &nbsp;&nbsp; - &nbsp;&nbsp;
        1 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; = &nbsp; 
          <span class="frac"><sup>13</sup><span>&frasl;</span><sub>4</sub></span> &nbsp;&nbsp; - &nbsp;&nbsp; 
          <span class="frac"><sup>3</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; = &nbsp;
          <span class="frac"><sup>13</sup><span>&frasl;</span><sub>4</sub></span> &nbsp;&nbsp; - &nbsp;&nbsp;
          <span class="frac"><sup>6</sup><span>&frasl;</span><sub>4</sub></span> &nbsp; = &nbsp; 
        <span class="frac"><sup>
          <input type="number" name="a3" id="a3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="b3" id="b3" value=""  style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        </sub></span>
        &nbsp; = &nbsp;
        <input type="number" name="c3" id="c3" style="width: 40px;" value="" onclick="tiga()" onkeyup="tiga()">
        <span class="frac"><sup>
          <input type="number" name="d3" id="d3" style="width: 40px;" value="" onclick="tiga()" onkeyup="tiga()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="e3" id="e3" style="width: 40px;" value="" onclick="tiga()" onkeyup="tiga()">
        </sub></span>
        &nbsp; &nbsp; &nbsp;
        <span id="s3_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s3_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar3" value="0">
        <br><br>
      </td>
    </tr>
  </table>

  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: left; float: left">
      <a href="{{Route('siswa.materi',['q' => 'penguranganbiasa'])}}" class="call_to-btn btn_white-border">
        <img src="{{asset('front/images/left-arrow.png')}}" alt="">
        <span>
          Sebelumnya
        </span>
      </a>
    </div>
    <div class="hero_btn-continer" style="text-align: right; float: right" >
      <form class="form-horizontal validate-form" role="form" method="post" action="{{route('siswa.store')}}">
        {{ csrf_field() }}
        <input type="hidden" id="status" name="status" value="{{$next ? $next->status : 0}}">
        <input type="hidden" id="materi_code" name="materi_code" value="{{Request('q')}}">
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next ? $next->materi_code : 'pengurangandesimal'}}">

        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>

      <a hidden id="lanjut" href="{{Route('siswa.materi',['q' => 'pengurangandesimal'])}}" class="call_to-btn btn_white-border">
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
      var c1 = $("#c1").val();
      var d1 = $("#d1").val();
      var e1 = $("#e1").val();

      if (a1 == 21 && b1 == 20 && c1 == 1 && d1 == 1 && e1 == 20 ) {
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

      if (a2 == 45 && b2 == 6 && c2 == 5 && d2 == 15 && e2 == 6 ) {
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

      if (a3 == 7 && b3 == 4 && c3 == 1 && d3 == 3 && e3 == 4 ) {
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