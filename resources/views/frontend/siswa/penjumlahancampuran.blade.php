@extends('layouts.siswa')
@section('content')
<h1 class="mb-4"style=" width: auto;
    background-color: #EAEAEA;
    padding: 8px 8px;
    border-left: 5px solid  #064635;
    word-wrap: break-word;
    line-height: 1.e4m;;">Penjumlahan Pecahan</h1>
<hr>
<div style="border: solid 1px; width: fit-content;border-color:orange; color-back;  background-color:white;">
  <div style="margin:0; pading:0; text-align:center; background-color:orange; color:white">
    <b>Tujuan Pembelajaran</b>
  </div>
  <p style="margin-left:10px; margin-top:10px;">
  1.	Peserta didik dapat mengidentifikasi penjumlahan dua pecahan campuran dengan penyebut berbeda dengan benar<br>
  2.	Peserta didik dapat menyelesaikan masalah yang berkaitan dengan penjumlahan dua pecahan campuran penyebut berbeda dengan benar.
  </p>
</div>
<br>
<h2 class="mb-4">B.  Operasi Hitung Penjumlahan Pecahan Campuran</h2>
<br>
<p>
  Pecahan campuran adalah gabungan dari bilangan bulat dan bilangan pecahan.<br>
  <b>Ayo Amati!</b> <br>
  Agar kamu memahami pecahan campuran, maka amati gambar di bawah ini dan simak penjelasannya
</p>
<div style="text-align: center;"><img src="{{asset('images/materi/tambah2/satu.png')}}" alt=""></div>
<p>
  Jadi, Deni mendapatkan 
  &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> &nbsp;
  bagian donat dari Bayu jumlah keseluruhan donat yang dimiliki Deni adalah 
  1 &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> &nbsp;
</p>

<br><br><hr>
<h4 class="mb-4">Asyik Mencoba!</h4>
<br>
<p>
  Tentukan pecahan campuran pada gambar berarsir di bawah ini! Jawaban benar akan berwarna biru, jika salah akan berwarna merah.
</p>
<table>
  <tr>
    <td>
      <img src="{{asset('images/materi/tambah2/dua.png')}}" alt="" style="width: 200px;"> 
      <br> &nbsp; <br>
    </td>
    <td style="vertical-align: top;">
       &nbsp; = &nbsp; 
      <input type="number" name="ag1" id="ag1" style="width: 35px;"  onclick="gambar1()" onkeyup="gambar1()" >
      &nbsp; <span class="frac"><sup>
        <input type="number" name="bg1" id="bg1" style="width: 35px;"  onclick="gambar1()" onkeyup="gambar1()" >
      </sup><span>&frasl;</span><sub>
        <input type="number" name="cg1" id="cg1" style="width: 35px;"  onclick="gambar1()" onkeyup="gambar1()" >
      </sub></span>
    </td>
    <td style="vertical-align: middle;">
      <span id="g1_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="g1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      <input type="hidden" id="jawaban_gambar1" value="0">
    </td>
  </tr>
  <tr>
    <td>
      <img src="{{asset('images/materi/tambah2/tiga.png')}}" alt="" style="width: 200px;">
      <br> &nbsp; <br>
    </td>
    <td style="vertical-align: top;">
      &nbsp; = &nbsp; 
        <input type="number" name="ag2" id="ag2" style="width: 35px;"  onclick="gambar2()" onkeyup="gambar2()" >
      &nbsp; <span class="frac"><sup>
      <input type="number" name="bg2" id="bg2" style="width: 35px;"  onclick="gambar2()" onkeyup="gambar2()" >
      </sup><span>&frasl;</span><sub>
        <input type="number" name="cg2" id="cg2" style="width: 35px;"  onclick="gambar2()" onkeyup="gambar2()" >
      </sub></span>
    </td>
    <td style="vertical-align: middle;">
      <span id="g2_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="g2_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      <input type="hidden" id="jawaban_gambar2" value="0">
    </td>
  </tr>
  <tr>
    <td>
      <img src="{{asset('images/materi/tambah2/empat.png')}}" alt="" style="width: 200px;">
      <br> &nbsp; <br>
    </td>
    <td style="vertical-align: top;">
      &nbsp; = &nbsp; 
        <input type="number" name="ag3" id="ag3" style="width: 35px;"  onclick="gambar3()" onkeyup="gambar3()" >
      &nbsp; <span class="frac"><sup>
      <input type="number" name="bg3" id="bg3" style="width: 35px;"  onclick="gambar3()" onkeyup="gambar3()" >
      </sup><span>&frasl;</span><sub>
        <input type="number" name="cg3" id="cg3" style="width: 35px;"  onclick="gambar3()" onkeyup="gambar3()" >
      </sub></span>
    </td>
    <td style="vertical-align: middle;">
      <span id="g3_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="g3_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      <input type="hidden" id="jawaban_gambar3" value="0">
    </td>
  </tr>
</table>
 {{--------------------------- Tambahan ----------------------}}
 <br>
 <div class="hero_btn-continer" style="text-align: left; float: left">
  <button id="cek1" type="button" class="call_to-btn btn_white-border" onclick="cek1()" >
    Cek Jawaban
  </button>
  <br>&nbsp;<br>
  <div style="border: dashed 1px; text-align:center; padding:10px;" id="bahasan1_benar" hidden>
    <p>
      <mark>Jawaban Kamu Benar!</mark> <br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quibusdam perferendis voluptatum soluta maiores labore officiis cum molestiae molestias veniam expedita libero iure dolorem, provident quam nobis id amet aspernatur?
    </p>
  </div>
  <div style="border: dashed 1px; text-align:center; padding:10px;" id="bahasan1_salah" hidden>
    <p>
      <mark>Jawaban Kamu Masih Ada yang Salah!</mark> <br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quibusdam perferendis voluptatum soluta maiores labore officiis cum molestiae molestias veniam expedita libero iure dolorem, provident quam nobis id amet aspernatur?
    </p>
  </div>
  <div></div>
</div>
<br> &nbsp;<br> &nbsp;<br>
{{--------------------------- Batas Tambahan ----------------------}}
<br>
<p>
  Contoh:
  Sebuah benda
  1 &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> &nbsp;
  kg dimasukkan ke dalam sebuah kotak seberat
  2 &nbsp; <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span> &nbsp;
  kg. Berapa kg berat seluruhnya? <br>
  Penyelesaian <br>
  Tambahkan bilangan bulat dengan bilangan bulat dan tambahkan bagian pecahan dengan pecahan. <br>
  1&nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; + &nbsp;
  2&nbsp;<span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span> &nbsp; = &nbsp;
  1&nbsp;<span class="frac"><sup>3</sup><span>&frasl;</span><sub>6</sub></span> &nbsp; + &nbsp;
  2&nbsp;<span class="frac"><sup>4</sup><span>&frasl;</span><sub>6</sub></span> &nbsp; = &nbsp;
  3&nbsp;<span class="frac"><sup>7</sup><span>&frasl;</span><sub>6</sub></span> &nbsp; = &nbsp;
  4&nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>6</sub></span> &nbsp; <br>
 <br>
 <b>Asyik mencoba</b><br>
  Tentukan masalah penjumlahan dua pecahan campuran berpenyebut berbeda pada di bawah ini! Jawaban benar akan berwarna biru, jika salah akan berwarna merah.
</p>
<br>
<table>
  <tr>
    <td style="vertical-align: top; width:50px;">
      1. 
    </td>
    <td style="vertical-align: top;">
      1&nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>6</sub></span> &nbsp; + &nbsp;
      1&nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; = &nbsp;
      1&nbsp;<span class="frac"><sup>
        <input type="number" name="a1" id="a1" style="width: 35px;"  onclick="satu()" onkeyup="satu()" >
      </sup><span>&frasl;</span><sub>6</sub></span> &nbsp; + &nbsp;
      1&nbsp;<span class="frac"><sup>
        <input type="number" name="b1" id="b1" style="width: 35px;"  onclick="satu()" onkeyup="satu()" >
      </sup><span>&frasl;</span><sub>6</sub></span> &nbsp; = &nbsp;
      <input type="number" name="c1" id="c1" style="width: 35px;"  onclick="satu()" onkeyup="satu()" >
      &nbsp;<span class="frac"><sup>
        <input type="number" name="d1" id="d1" style="width: 35px;"  onclick="satu()" onkeyup="satu()" >
      </sup><span>&frasl;</span><sub>
        <input type="number" name="e1" id="e1" style="width: 35px;"  onclick="satu()" onkeyup="satu()" >
      </sub></span> &nbsp;

      <br> &nbsp; <br>
    </td>
    <td style="vertical-align: middle;">
      <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      <input type="hidden" id="jawaban_benar1" value="0">
    </td>
  </tr>
  <tr>
    <td style="vertical-align: top;">
      2. 
    </td>
    <td style="vertical-align: top;">
      2&nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>6</sub></span> &nbsp; + &nbsp;
      1&nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; = &nbsp;
        <input type="number" name="a2" id="a2" style="width: 35px;"  onclick="dua()" onkeyup="dua()" >
      &nbsp;<span class="frac"><sup>
        <input type="number" name="b2" id="b2" style="width: 35px;"  onclick="dua()" onkeyup="dua()" >
      </sup><span>&frasl;</span><sub>
        <input type="number" name="c2" id="c2" style="width: 35px;"  onclick="dua()" onkeyup="dua()" >
      </sub></span> &nbsp; + &nbsp;
      1&nbsp;<span class="frac"><sup>
        <input type="number" name="d2" id="d2" style="width: 35px;"  onclick="dua()" onkeyup="dua()" >
      </sup><span>&frasl;</span><sub>6</sub></span> &nbsp; = &nbsp;
      <input type="number" name="e2" id="e2" style="width: 35px;"  onclick="dua()" onkeyup="dua()" >
      &nbsp;<span class="frac"><sup>
        <input type="number" name="f2" id="f2" style="width: 35px;"  onclick="dua()" onkeyup="dua()" >
      </sup><span>&frasl;</span><sub>
        <input type="number" name="g2" id="g2" style="width: 35px;"  onclick="dua()" onkeyup="dua()" >
      </sub></span> &nbsp;

      <br> &nbsp; <br>
    </td>
    <td style="vertical-align: middle;">
      <span id="s2_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s2_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      <input type="hidden" id="jawaban_benar2" value="0">
    </td>
  </tr>
  <tr>
    <td style="vertical-align: top;">
      3.
    </td>
    <td style="vertical-align: top;">
      1&nbsp;<span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span> &nbsp; + &nbsp;
      2&nbsp;<span class="frac"><sup>3</sup><span>&frasl;</span><sub>4</sub></span> &nbsp; = &nbsp;
        <input type="number" name="a3" id="a3" style="width: 35px;"  onclick="tiga()" onkeyup="tiga()" >
      &nbsp;<span class="frac"><sup>
        <input type="number" name="b3" id="b3" style="width: 35px;"  onclick="tiga()" onkeyup="tiga()" >
      </sup><span>&frasl;</span><sub>
        <input type="number" name="c3" id="c3" style="width: 35px;"  onclick="tiga()" onkeyup="tiga()" >
      </sub></span> &nbsp; + &nbsp;
      <input type="number" name="d3" id="d3" style="width: 35px;"  onclick="tiga()" onkeyup="tiga()" >
      &nbsp;<span class="frac"><sup>
        <input type="number" name="e3" id="e3" style="width: 35px;"  onclick="tiga()" onkeyup="tiga()" >
      </sup><span>&frasl;</span><sub>
        <input type="number" name="f3" id="f3" style="width: 35px;"  onclick="tiga()" onkeyup="tiga()" >
      </sub></span> &nbsp; = &nbsp;
      <input type="number" name="g3" id="g3" style="width: 35px;"  onclick="tiga()" onkeyup="tiga()" >
      &nbsp;<span class="frac"><sup>
        <input type="number" name="h3" id="h3" style="width: 35px;"  onclick="tiga()" onkeyup="tiga()" >
      </sup><span>&frasl;</span><sub>
        <input type="number" name="i3" id="i3" style="width: 35px;"  onclick="tiga()" onkeyup="tiga()" >
      </sub></span> &nbsp;

      <br> &nbsp; <br>
    </td>
    <td style="vertical-align: middle;">
      <span id="s3_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s3_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      <input type="hidden" id="jawaban_benar3" value="0">
    </td>
  </tr>
</table>
{{--------------------------- Tambahan ----------------------}}
<br>
<div class="hero_btn-continer" style="text-align: left; float: left">
 <button id="cek2" type="button" class="call_to-btn btn_white-border" onclick="cek2()" >
   Cek Jawaban
 </button>
 <br>&nbsp;<br>
 <div style="border: dashed 1px; text-align:center; padding:10px;" id="bahasan2_benar" hidden>
   <p>
     <mark>Jawaban Kamu Benar!</mark> <br>
     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quibusdam perferendis voluptatum soluta maiores labore officiis cum molestiae molestias veniam expedita libero iure dolorem, provident quam nobis id amet aspernatur?
   </p>
 </div>
 <div style="border: dashed 1px; text-align:center; padding:10px;" id="bahasan2_salah" hidden>
   <p>
     <mark>Jawaban Kamu Masih Ada yang Salah!</mark> <br>
     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quibusdam perferendis voluptatum soluta maiores labore officiis cum molestiae molestias veniam expedita libero iure dolorem, provident quam nobis id amet aspernatur?
   </p>
 </div>
 <div></div>
</div>
<br> &nbsp;<br>
{{--------------------------- Batas Tambahan ----------------------}}
  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: left; float: left">
      <a href="{{Route('siswa.materi',['q' => 'penjumlahanbiasa'])}}" class="call_to-btn btn_white-border">
        <img src="{{asset('front/images/left-arrow.png')}}" alt="">
        <span>
        Sebelumnya
        </span>
      </a>
    </div>
    <div  class="hero_btn-continer" style="text-align: right; float: right">
      <form class="form-horizontal validate-form" role="form" method="post" action="{{route('siswa.store')}}">
        {{ csrf_field() }}
        <input type="hidden" id="status" name="status" value="{{$next ? $next->status : 0}}">
        <input type="hidden" id="materi_code" name="materi_code" value="{{Request('q')}}">
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next ? $next->materi_code : 'penjumlahandesimal'}}">

        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>

      <a id="lanjut" hidden href="{{Route('siswa.materi',['q' => 'penjumlahandesimal'])}}" class="call_to-btn btn_white-border">
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

    function gambar1() {
      var ag1 = $("#ag1").val();
      var bg1 = $("#bg1").val();
      var cg1 = $("#cg1").val();

      if (ag1 == 1 && bg1 == 1 && cg1 == 6) {
        $("#g1_benar").removeAttr("hidden");
        $("#g1_salah").attr("hidden",true);
        $("#jawaban_gambar1").val(1);
      } else {
        $("#g1_salah").removeAttr("hidden");
        $("#g1_benar").attr("hidden",true);
        $("#jawaban_gambar1").val(0);
      }
     // --------------------------- Perubahan ----------------------
      // lanjut()
    // --------------------------- Batas Perubahan ----------------------
    }

    function gambar2() {
      var ag2 = $("#ag2").val();
      var bg2 = $("#bg2").val();
      var cg2 = $("#cg2").val();

      if (ag2 == 1 && bg2 == 2 && cg2 == 3) {
        $("#g2_benar").removeAttr("hidden");
        $("#g2_salah").attr("hidden",true);
        $("#jawaban_gambar2").val(1);
      } else {
        $("#g2_salah").removeAttr("hidden");
        $("#g2_benar").attr("hidden",true);
        $("#jawaban_gambar2").val(0);
      }
      // --------------------------- Perubahan ----------------------
      // lanjut()
    // --------------------------- Batas Perubahan ----------------------
    }

    function gambar3() {
      var ag3 = $("#ag3").val();
      var bg3 = $("#bg3").val();
      var cg3 = $("#cg3").val();

      if (ag3 == 2 && bg3 == 3 && cg3 == 9) {
        $("#g3_benar").removeAttr("hidden");
        $("#g3_salah").attr("hidden",true);
        $("#jawaban_gambar3").val(1);
      } else {
        $("#g3_salah").removeAttr("hidden");
        $("#g3_benar").attr("hidden",true);
        $("#jawaban_gambar3").val(0);
      }
      // --------------------------- Perubahan ----------------------
      // lanjut()
    // --------------------------- Batas Perubahan ----------------------
    }

    function satu() {
      var a1 = $("#a1").val();
      var b1 = $("#b1").val();
      var c1 = $("#c1").val();
      var d1 = $("#d1").val();
      var e1 = $("#e1").val();

      if (a1 == 11 && b1 == 3 && c1 == 2 && d1 == 14 && e1 == 6) {
        $("#s1_benar").removeAttr("hidden");
        $("#s1_salah").attr("hidden",true);
        $("#jawaban_benar1").val(1);
      } else {
        $("#s1_salah").removeAttr("hidden");
        $("#s1_benar").attr("hidden",true);
        $("#jawaban_benar1").val(0);
      }
      // --------------------------- Perubahan ----------------------
      // lanjut()
    // --------------------------- Batas Perubahan ----------------------
    }

    function dua() {
      var a2 = $("#a2").val();
      var b2 = $("#b2").val();
      var c2 = $("#c2").val();
      var d2 = $("#d2").val();
      var e2 = $("#e2").val();
      var f2 = $("#f2").val();
      var g2 = $("#g2").val();

      if (a2 == 2 && b2 == 13 && c2 == 6 && d2 == 3 && e2 == 3 && f2 == 16 && g2 == 6) {
        $("#s2_benar").removeAttr("hidden");
        $("#s2_salah").attr("hidden",true);
        $("#jawaban_benar2").val(1);
      } else {
        $("#s2_salah").removeAttr("hidden");
        $("#s2_benar").attr("hidden",true);
        $("#jawaban_benar2").val(0);
      }
      // --------------------------- Perubahan ----------------------
      // lanjut()
    // --------------------------- Batas Perubahan ----------------------
    }

    function tiga() {
      var a3 = $("#a3").val();
      var b3 = $("#b3").val();
      var c3 = $("#c3").val();
      var d3 = $("#d3").val();
      var e3 = $("#e3").val();
      var f3 = $("#f3").val();
      var g3 = $("#g3").val();
      var h3 = $("#h3").val();
      var i3 = $("#i3").val();

      if (a3 == 1 && b3 == 5 && c3 == 12 && d3 == 2 && e3 == 11 && f3 == 12 && g3 == 3 && h3 == 16 && i3 == 12) {
        $("#s3_benar").removeAttr("hidden");
        $("#s3_salah").attr("hidden",true);
        $("#jawaban_benar3").val(1);
      } else {
        $("#s3_salah").removeAttr("hidden");
        $("#s3_benar").attr("hidden",true);
        $("#jawaban_benar3").val(0);
      }
      // --------------------------- Perubahan ----------------------
      // lanjut()
    // --------------------------- Batas Perubahan ----------------------
    }

    // --------------------------- Tambahan ----------------------
    function cek1(){
      var gsatu = $("#jawaban_gambar1").val();
      var gdua = $("#jawaban_gambar2").val();
      var gtiga = $("#jawaban_gambar3").val();

      if (gsatu == 1 && gdua == 1 && gtiga == 1 ) {
        $("#bahasan1_benar").removeAttr("hidden");
        $("#bahasan1_salah").attr("hidden",true);
      }else{
        $("#bahasan1_salah").removeAttr("hidden");
        $("#bahasan1_benar").attr("hidden",true);
      }

      lanjut()
    }

    function cek2(){
      var satu = $("#jawaban_benar1").val();
      var dua = $("#jawaban_benar2").val();
      var tiga = $("#jawaban_benar3").val();

      if (satu == 1 && dua == 1 && tiga == 1 ) {
        $("#bahasan2_benar").removeAttr("hidden");
        $("#bahasan2_salah").attr("hidden",true);
      }else{
        $("#bahasan2_salah").removeAttr("hidden");
        $("#bahasan2_benar").attr("hidden",true);
      }
      
      lanjut()
    }

    // --------------------------- batas Tambahan ----------------------

    function lanjut(params) {
      var gsatu = $("#jawaban_gambar1").val();
      var gdua = $("#jawaban_gambar2").val();
      var gtiga = $("#jawaban_gambar3").val();
      var satu = $("#jawaban_benar1").val();
      var dua = $("#jawaban_benar2").val();
      var tiga = $("#jawaban_benar3").val();
    

      if (satu == 1 && dua == 1 && tiga == 1 && gsatu == 1 && gdua == 1 && gtiga == 1 && status==0) {
        $("#simpan").removeAttr("hidden");
        $("#lanjut").attr("hidden",true);
      }
    }
</script>
@endsection