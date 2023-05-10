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
  1.	Peserta didik dapat mengidentifikasi penjumlahan dua pecahan desimal dengan penyebut berbeda dengan benar<br>
  2.	Peserta didik dapat menyelesaikan masalah yang berkaitan dengan penjumlahan dua pecahan desimal penyebut berbeda dengan benar.
  </p>
</div>
<br>
<h2 class="mb-4">C. Operasi Hitung Penjumlahan Pecahan Desimal</h2>
  <p>
    Pecahan decimal ditulis dengan tanda koma jika satu angka dibelakang koma artinya pecahan persepuluh , jika dua angka dibelakang koma artinya pecahan perseratus. <br>
    <b>Ayo Amati!</b> <br>
    Agar kamu memahami pecahan desimal, maka amati gambar di bawah ini dan simak penjelasannya
  </p>
  <div style="text-align: center;"><img src="{{asset('images/materi/tambah3/satu.png')}}" alt="" style="width: 250px;"></div>
  <br>
  <p>
    Ayu membeli buah di toko A seberat 1,8 , kemudian ayu membeli lagi buah di toko B seberat 0,15 . maka jumlah keseluruhan buah yang dibeli ayu adalah
  </p>
    <table cellpadding="0">
      <tr>
        <td>0,15</td>
        <td></td>
      </tr>
      <tr>
        <td style="border-bottom: solid 1px;">1,8</td>
        <td rowspan="2" style="vertical-align: middle;">+</td>
      </tr>
      <tr>
        <td>1,95</td>
      </tr>
    </table>
    
    <p>
      Penjelasan :<br>
      1,8 bisa ditulis juga
      &nbsp;<span class="frac"><sup>18</sup><span>&frasl;</span><sub>10</sub></span> &nbsp;
      artinya pecahan persepuluh karena satu angka dibelakang koma, sedangkan 0,15 bisa ditulis juga
      &nbsp;<span class="frac"><sup>15</sup><span>&frasl;</span><sub>100</sub></span> &nbsp; 
      . Memiliki dua angka dibelakang koma artinya pecahan perseratus.
    </p>
  <br><br><hr>
  <h4 class="mb-4">Asyik Mencoba!</h4>
  <br>
  <p>
    Tentukan pecahan biasa dan pecahan desimal pada gambar berarsir di bawah ini! Jawaban benar akan berwarna biru, jika salah akan berwarna merah.
  </p>
  <table>
    <tr>
      <td>
        <img src="{{asset('images/materi/tambah3/dua.png')}}" alt="" style="width: 200px;"> 
        <br> &nbsp; <br>
      </td>
      <td style="vertical-align: top;">
        &nbsp; = &nbsp; 0,4 = &nbsp; 
        <span class="frac"><sup>4</sup><span>&frasl;</span><sub>10</sub></span>
      </td>
      <td style="vertical-align: middle;">
      </td>
    </tr>
    <tr>
      <td>
        <img src="{{asset('images/materi/tambah3/tiga.png')}}" alt="" style="width: 200px;"> 
        <br> &nbsp; <br>
      </td>
      <td style="vertical-align: top;">
         &nbsp; = &nbsp; 
        <input type="number" name="ag1" id="ag1" style="width: 60px;" step="0.01"  onclick="gambar1()" onkeyup="gambar1()" > =
        &nbsp; <span class="frac"><sup>
          <input type="number" name="bg1" id="bg1" style="width: 60px;" step="0.01"  onclick="gambar1()" onkeyup="gambar1()" >
        </sup><span>&frasl;</span><sub>
          <input type="number" name="cg1" id="cg1" style="width: 60px;" step="0.01"  onclick="gambar1()" onkeyup="gambar1()" >
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
        <img src="{{asset('images/materi/tambah3/empat.png')}}" alt="" style="width: 200px;">
        <br> &nbsp; <br>
      </td>
      <td style="vertical-align: top;">
        &nbsp; = &nbsp; 
          <input type="number" name="ag2" id="ag2" style="width: 60px;" step="0.01"  onclick="gambar2()" onkeyup="gambar2()" > =
        &nbsp; <span class="frac"><sup>
        <input type="number" name="bg2" id="bg2" style="width: 60px;" step="0.01"  onclick="gambar2()" onkeyup="gambar2()" >
        </sup><span>&frasl;</span><sub>
          <input type="number" name="cg2" id="cg2" style="width: 60px;"  step="0.01" onclick="gambar2()" onkeyup="gambar2()" >
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
        <img src="{{asset('images/materi/tambah3/lima.png')}}" alt="" style="width: 200px;">
        <br> &nbsp; <br>
      </td>
      <td style="vertical-align: top;">
        &nbsp; = &nbsp; 
          <input type="number" name="ag3" id="ag3" style="width: 60px;" step="0.01"  onclick="gambar3()" onkeyup="gambar3()" > =
        &nbsp; <span class="frac"><sup>
        <input type="number" name="bg3" id="bg3" style="width: 60px;" step="0.01"  onclick="gambar3()" onkeyup="gambar3()" >
        </sup><span>&frasl;</span><sub>
          <input type="number" name="cg3" id="cg3" style="width: 60px;" step="0.01" onclick="gambar3()" onkeyup="gambar3()" >
        </sub></span>
      </td>
      <td style="vertical-align: middle;">
        <span id="g3_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="g3_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_gambar3" value="0">
      </td>
    </tr>
  </table>
<br>
<p>
  <b>Contoh :</b>
  Termometer berikut menunjukkan pengukuran suhu badan anak yang sedang sakit demam. <br>
  <div><img src="{{asset('images/materi/tambah3/enam.png')}}" alt="" style="width: 200px;"></div>
  Dari termometer tersebut, berapakah jumlah kedua termometer tersebut? Penyelesaian <br>
</p>
<table cellpadding="0">
  <tr>
    <td>27,06</td>
    <td></td>
  </tr>
  <tr>
    <td style="border-bottom: solid 1px;">36,08</td>
    <td rowspan="2" style="vertical-align: middle;">+</td>
  </tr>
  <tr>
    <td>63,14</td>
  </tr>
</table>
<p>jadi total gabungan kedua thermometer tersebut adalah 63,14
<br><br>
<b>Asyik Mencoba</b>  <br>
Tentukan masalah penjumlahan desimal pada di bawah ini! Jawaban benar akan berwarna biru, jika salah akan berwarna merah. <br>
</p> <br>
  <table cellpadding="0">
    <tr>
      <td>1. &nbsp;&nbsp;</td>
      <td style="width: 50px;">1,5</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td style="border-bottom: solid 1px;">0,5</td>
      <td rowspan="2" style="vertical-align: top;">+</td>
    </tr>
    <tr>
      <td></td>
      <td style="padding-top: 1px;"><input type="number" name="a" id="a" style="width: 60px;" step="0.01" onclick="one()" onkeyup="one()"> 
        <br> &nbsp; <br>
      </td>
      <td style="text-align:left;">
        <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar1" value="0">
      </td>
    </tr>
    <tr>
      <td>2. &nbsp;&nbsp;</td>
      <td>5,87</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td style="border-bottom: solid 1px;">1,25</td>
      <td rowspan="2" style="vertical-align: top;">+</td>
    </tr>
    <tr>
      <td></td>
      <td style="padding-top: 1px;"><input type="number" name="b" id="b" style="width: 60px;" step="0.01" onclick="two()" onkeyup="two()">
        <br> &nbsp; <br>
      </td>
      <td style="text-align:left;">
        <span id="s2_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s2_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar2" value="0">
        
      </td>
    </tr>
    <tr>
      <td>3. &nbsp;&nbsp;</td>
      <td colspan="2">
        Luas lahan perkebunan milik ayah Deni adalah 13,25 ha. Ayah Deni membeli kebun lagi seluas 9,37 ha . berapa luas kebun ayah Deni sekarang?
      </td>
    </tr>
    <tr>
      <td></td>
      <td><input type="number" name="c1" id="c1" style="width: 60px;" step="0.01" onclick="three()" onkeyup="three()"></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="number" name="c2" id="c2" style="width: 60px;" step="0.01" onclick="three()" onkeyup="three()">
      </td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td><hr></td>
      <td style="vertical-align: top;">+</td>
    </tr>
    <tr>
      <td></td>
      <td style="padding-top: 1px;"><input type="number" name="c3" id="c3" style="width: 60px;" step="0.01" onclick="three()" onkeyup="three()">
        <br> &nbsp; <br>
      </td>
      <td style="text-align:left;">
        &nbsp;&nbsp;
        <span id="s3_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s3_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar3" value="0">
      </td>
    </tr>
  </table>
  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: left; float: left">
      <a href="{{Route('siswa.materi',['q' => 'penjumlahancampuran'])}}" class="call_to-btn btn_white-border">
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
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next ? $next->materi_code : 'penguranganbiasa'}}">

        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>

      <a id="lanjut" hidden  href="{{Route('siswa.materi',['q' => 'penguranganbiasa'])}}" class="call_to-btn btn_white-border">
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

      if (ag1 == 0,7 && bg1 == 7 && cg1 == 10) {
        $("#g1_benar").removeAttr("hidden");
        $("#g1_salah").attr("hidden",true);
        $("#jawaban_gambar1").val(1);
      } else {
        $("#g1_salah").removeAttr("hidden");
        $("#g1_benar").attr("hidden",true);
        $("#jawaban_gambar1").val(0);
      }
      lanjut()
    }

    function gambar2() {
      var ag2 = $("#ag2").val();
      var bg2 = $("#bg2").val();
      var cg2 = $("#cg2").val();

      if (ag2 == 0,25 && bg2 == 25 && cg2 == 100) {
        $("#g2_benar").removeAttr("hidden");
        $("#g2_salah").attr("hidden",true);
        $("#jawaban_gambar2").val(1);
      } else {
        $("#g2_salah").removeAttr("hidden");
        $("#g2_benar").attr("hidden",true);
        $("#jawaban_gambar2").val(0);
      }
      lanjut()
    }

    function gambar3() {
      var ag3 = $("#ag3").val();
      var bg3 = $("#bg3").val();
      var cg3 = $("#cg3").val();

      if (ag3 == 0,58 && bg3 == 58  && cg3 == 100) {
        $("#g3_benar").removeAttr("hidden");
        $("#g3_salah").attr("hidden",true);
        $("#jawaban_gambar3").val(1);
      } else {
        $("#g3_salah").removeAttr("hidden");
        $("#g3_benar").attr("hidden",true);
        $("#jawaban_gambar3").val(0);
      }
      lanjut()
    }

    function one(){
      var a = $("#a").val();
      if (a == "2") {
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

    function two(){
      var b = $("#b").val();
      if (b == "7.12") {
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

    function three(){
      var c1 = $("#c1").val();
      var c2 = $("#c2").val();
      var c3 = $("#c3").val();
      if (c1 == "13.25" && c2 == "9.37" && c3 == "22.62") {
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