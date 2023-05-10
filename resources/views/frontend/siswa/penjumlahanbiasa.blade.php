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
  1.	Peserta didik dapat menjelaskan penjumlahan dua pecahan biasa dengan penyebut berbeda dengan benar.<br>
  2.	Peserta didik dapat menyelesaikan masalah yang berkaitan dengan penjumlahan dua pecahan biasa penyebut berbeda dengan benar.
  
  </p>
</div>
</p>
<h2 class="mb-4">A. Operasi Hitung Penjumlahan Pecahan Biasa</h2>
<p>
  Penjumlahan bilangan pecahan disimbolkan dengan tanda tambah (+). Dalam penjumlahan bilangan pecahan dapat dilakukan jika penyebutnya sama. Untuk menjumlahkan pecahan 
yang penyebutnya berbeda, kita harus mengubahnya menjadi pecahan senilai yang mempunyai penyebut yang sama.
</p>
<p>Rumus penjumlahan pecahan dengan berpenyebut berbeda</p>
<div style="border: solid 1px; padding: 10px; padding-bottom: 0px; width: fit-content;">
<p>
    <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span>
    &nbsp;+&nbsp;
    <span class="frac"><sup>c</sup><span>&frasl;</span><sub>d</sub></span>
    &nbsp;=&nbsp;
    <span class="frac"><sup>ad + bc</sup><span>&frasl;</span><sub>bd</sub></span>
  </p>
</div>
<p><br>
  Perhatikan gambar dibawah! <br> 
  Gelas berikut berisi 
  &nbsp;<span class="frac"><sup>2</sup><span>&frasl;</span><sub>4</sub></span>&nbsp;
  liter air dan 
  &nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span>&nbsp;
  liter air. Jika keduanya kita gabungkan maka berapa liter jumlah seluruhnya?
  <div style="text-align: center;"><img src="{{asset('images/materi/tambah1/satu.png')}}" alt="" ></div>

  <br><br>
  <span class="frac"><sup>2</sup><span>&frasl;</span><sub>4</sub></span>
  &nbsp;+&nbsp;
  <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span>
  &nbsp;= &nbsp; ....
  <br><br>
  Jadi, &nbsp;&nbsp;
  <span class="frac"><sup>2</sup><span>&frasl;</span><sub>4</sub></span>
  &nbsp;+&nbsp;
  <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span>
  &nbsp;= &nbsp;
  <span class="frac"><sup>2 x 5</sup><span>&frasl;</span><sub>20</sub></span>
  &nbsp;+&nbsp;
  <span class="frac"><sup>1 x 4</sup><span>&frasl;</span><sub>20</sub></span>
  &nbsp;= &nbsp;
  <span class="frac"><sup>10</sup><span>&frasl;</span><sub>20</sub></span>
  &nbsp;+&nbsp;
  <span class="frac"><sup>4</sup><span>&frasl;</span><sub>20</sub></span>
  &nbsp;= &nbsp;
  <span class="frac"><sup>14</sup><span>&frasl;</span><sub>20</sub></span>
  &nbsp;= &nbsp;
  <span class="frac"><sup>7</sup><span>&frasl;</span><sub>10</sub></span>
</p>
<br><br>
<h4 class="mb-4">Asyik Mencoba!</h4>
<hr>
<p>
  Tentukan penjumlahan dua pecahan berpenyebut berbeda pada gambar di bawah ini! Jawaban benar akan berwarna biru, jika salah akan berwarna merah.
  <table>
    <tr>
      <td>
        1. <img src="{{asset('images/materi/tambah1/dua.png')}}" alt="" style="width: 200px;"> {{-- soal no 1 --}}
        <br><br>
      </td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>
        &nbsp; &nbsp; &nbsp;
        <span class="frac"><sup>
          <input type="number" name="a1" id="a1" value="" style="width: 40px;" onclick="satu()" onkeyup="satu()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="b1" id="b1" value="" style="width: 40px;" onclick="satu()" onkeyup="satu()">
        </sub></span>
        &nbsp; + &nbsp;
        <span class="frac"><sup>
          <input type="number" name="c1" id="c1" value="" style="width: 40px;" onclick="satu()" onkeyup="satu()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="d1" id="d1" value=""  style="width: 40px;" onclick="satu()" onkeyup="satu()">
        </sub></span>
      </td>
      <td>=</td>
      <td>
        <span class="frac"><sup>
          <input type="number" name="e1" id="e1" style="width: 40px;" value="" onclick="satu()" onkeyup="satu()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="f1" id="f1" style="width: 40px;" value="" onclick="satu()" onkeyup="satu()">
        </sub></span>
        &nbsp; + &nbsp;
        <span class="frac"><sup>
          <input type="number" name="g1" id="g1" value="" style="width: 40px;" onclick="satu()" onkeyup="satu()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="h1" id="h1" value=""  style="width: 40px;" onclick="satu()" onkeyup="satu()">
        </sub></span>
      </td>
      <td>=</td>
      <td>
        <span class="frac"><sup>
          <input type="number" name="i1" id="i1" style="width: 40px;" value="" onclick="satu()" onkeyup="satu()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="j1" id="j1" style="width: 40px;" value="" onclick="satu()" onkeyup="satu()">
        </sub></span>
      </td>
      <td>
        <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar1" value="0">
      </td>
    </tr>
  </table>

<br><br>

  <table>
    <tr>
      <td>
       2. <img src="{{asset('images/materi/tambah1/tiga.png')}}" alt="" style="width: 200px;">  {{-- soal no 2 --}}
        <br><br>
      </td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>
        &nbsp; &nbsp; &nbsp;
        <span class="frac"><sup>
          <input type="number" name="a2" id="a2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="b2" id="b2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sub></span>
        &nbsp; + &nbsp;
        <span class="frac"><sup>
          <input type="number" name="c2" id="c2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="d2" id="d2" value=""  style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sub></span>
      </td>
      <td>=</td>
      <td>
        <span class="frac"><sup>
          <input type="number" name="e2" id="e2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="f2" id="f2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sub></span>
        &nbsp; + &nbsp;
        <span class="frac"><sup>
          <input type="number" name="g2" id="g2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="h2" id="h2" value=""  style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sub></span>
      </td>
      <td>=</td>
      <td>
        <span class="frac"><sup>
          <input type="number" name="i2" id="i2" style="width: 40px;" value="" onclick="dua()" onkeyup="dua()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="j2" id="j2" style="width: 40px;" value="" onclick="dua()" onkeyup="dua()">
        </sub></span>
      </td>
      <td>
        <span id="s2_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s2_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar2" value="0">
      </td>
    </tr>
  </table>

  <br><br>
  <table>
    <tr>
      <td>
       3. <img src="{{asset('images/materi/tambah1/empat.png')}}" alt="" style="width: 200px;">  {{-- soal no 3 --}}
        <br><br>
      </td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>
        &nbsp; &nbsp; &nbsp;
        <span class="frac"><sup>
          <input type="number" name="a3" id="a3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="b3" id="b3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        </sub></span>
        &nbsp; + &nbsp;
        <span class="frac"><sup>
          <input type="number" name="c3" id="c3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="d3" id="d3" value=""  style="width: 40px;" onclick="tiga()" onkeyup="sum()">
        </sub></span>
      </td>
      <td>=</td>
      <td>
        <span class="frac"><sup>
          <input type="number" name="e3" id="e3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="f3" id="f3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        </sub></span>
        &nbsp; + &nbsp;
        <span class="frac"><sup>
          <input type="number" name="g3" id="g3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="h3" id="h3" value=""  style="width: 40px;" onclick="tiga()" onkeyup="sum()">
        </sub></span>
      </td>
      <td>=</td>
      <td>
        <span class="frac"><sup>
          <input type="number" name="i3" id="i3" style="width: 40px;" value="" onclick="tiga()" onkeyup="tiga()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="j3" id="j3" style="width: 40px;" value="" onclick="tiga()" onkeyup="tiga()">
        </sub></span>
      </td>
      <td>
        <span id="s3_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s3_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar3" value="0">
      </td>
    </tr>
  </table>
  <br><br>
   <table>
    <tr>
      <td>
       4. <img src="{{asset('images/materi/tambah1/lima.png')}}" alt="" style="width: 200px;">  {{-- soal no 4 --}}
        <br><br>
      </td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>
        &nbsp; &nbsp; &nbsp;
        <span class="frac"><sup>
          <input type="number" name="a4" id="a4" value="" style="width: 40px;" onclick="empat()" onkeyup="empat()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="b4" id="b4" value="" style="width: 40px;" onclick="empat()" onkeyup="empat()">
        </sub></span>
        &nbsp; + &nbsp;
        <span class="frac"><sup>
          <input type="number" name="c4" id="c4" value="" style="width: 40px;" onclick="empat()" onkeyup="empat()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="d4" id="d4" value=""  style="width: 40px;" onclick="empat()" onkeyup="empat()">
        </sub></span>
      </td>
      <td>=</td>
      <td>
        <span class="frac"><sup>
          <input type="number" name="e4" id="e4" value="" style="width: 40px;" onclick="empat()" onkeyup="empat()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="f4" id="f4" value="" style="width: 40px;" onclick="empat()" onkeyup="empat()">
        </sub></span>
        &nbsp; + &nbsp;
        <span class="frac"><sup>
          <input type="number" name="g4" id="g4" value="" style="width: 40px;" onclick="empat()" onkeyup="empat()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="h4" id="h4" value=""  style="width: 40px;" onclick="empat()" onkeyup="empat()">
        </sub></span>
      </td>
      <td>=</td>
      <td>
        <span class="frac"><sup>
          <input type="number" name="i4" id="i4" style="width: 40px;" value="" onclick="empat()" onkeyup="empat()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="j4" id="j4" style="width: 40px;" value="" onclick="empat()" onkeyup="empat()">
        </sub></span>
      </td>
      <td>
        <span id="s4_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s4_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar4" value="0">
      </td>
    </tr>
  </table>

  <br><br>
   <table>
    <tr>
      <td>
       5. <img src="{{asset('images/materi/tambah1/enam.png')}}" alt="" style="width: 200px;"> {{-- soal no 5 --}}
        <br><br>
      </td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>
        &nbsp; &nbsp; &nbsp;
        <span class="frac"><sup>
          <input type="number" name="a5" id="a5" value="" style="width: 40px;" onclick="lima()" onkeyup="lima()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="b5" id="b5" value="" style="width: 40px;" onclick="lima()" onkeyup="lima()">
        </sub></span>
        &nbsp; + &nbsp;
        <span class="frac"><sup>
          <input type="number" name="c5" id="c5" value="" style="width: 40px;" onclick="lima()" onkeyup="lima()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="d5" id="d5" value=""  style="width: 40px;" onclick="lima()" onkeyup="lima()">
        </sub></span>
      </td>
      <td>=</td>
      <td>
        <span class="frac"><sup>
          <input type="number" name="e5" id="e5" value="" style="width: 40px;" onclick="lima()" onkeyup="lima()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="f5" id="f5" value="" style="width: 40px;" onclick="lima()" onkeyup="lima()">
        </sub></span>
        &nbsp; + &nbsp;
        <span class="frac"><sup>
          <input type="number" name="g5" id="g5" value="" style="width: 40px;" onclick="lima()" onkeyup="lima()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="h5" id="h5" value=""  style="width: 40px;" onclick="lima()" onkeyup="lima()">
        </sub></span>
      </td>
      <td>=</td>
      <td>
        <span class="frac"><sup>
          <input type="number" name="i5" id="i5" style="width: 40px;" value="" onclick="lima()" onkeyup="lima()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="j5" id="j5" style="width: 40px;" value="" onclick="lima()" onkeyup="lima()">
        </sub></span>
      </td>
      <td>
        <span id="s5_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s5_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar5" value="0">
      </td>
    </tr>
  </table>

  
  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: left; float: left">
      <a href="{{Route('siswa.materi',['q' => 'pengertian'])}}" class="call_to-btn btn_white-border">
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
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next ? $next->materi_code : 'penjumlahancampuran'}}">

        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya <img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>
      <a id="lanjut" hidden href="{{Route('siswa.materi',['q' => 'penjumlahancampuran'])}}" class="call_to-btn btn_white-border">
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
      var b1 = $("#b1").val();
      var c1 = $("#c1").val();
      var d1 = $("#d1").val();
      var e1 = $("#e1").val();
      var f1 = $("#f1").val();
      var g1 = $("#g1").val();
      var h1 = $("#h1").val();
      var i1 = $("#i1").val();
      var j1 = $("#j1").val();

      if (a1 == 2 && b1 == 3 && c1 == 1 && d1 == 4 && e1 == 8 && f1 == 12 && g1 == 3 && h1 == 12 && i1 == 11 && j1 == 12) {
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
      var g2 = $("#g2").val();
      var h2 = $("#h2").val();
      var i2 = $("#i2").val();
      var j2 = $("#j2").val();

      if (a2 == 1 && b2 == 2 && c2 == 2 && d2 == 6 && e2 == 3 && f2 == 6  && g2 == 2 && h2 == 6 && i2 == 5 && j2 == 6) {
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
      var f3 = $("#f3").val();
      var g3 = $("#g3").val();
      var h3 = $("#h3").val();
      var i3 = $("#i3").val();
      var j3 = $("#j3").val();

      if (a3 == 1 && b3 == 6 && c3 == 2 && d3 == 5 && e3 == 5 && f3 == 30 && g3 == 12 && h3 == 30 && i3 == 17 && j3 == 30) {
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

    function empat() {
      var a4 = $("#a4").val();
      var b4 = $("#b4").val();
      var c4 = $("#c4").val();
      var d4 = $("#d4").val();
      var e4 = $("#e4").val();
      var f4 = $("#f4").val();
      var g4 = $("#g4").val();
      var h4 = $("#h4").val();
      var i4 = $("#i4").val();
      var j4 = $("#j4").val();

      if (a4 == 1 && b4 == 2 && c4 == 3 && d4 == 8 && e4 == 4 && f4 == 8  && g4 == 3 && h4 == 8 && i4 == 7 && j4 == 8) {
        $("#s4_benar").removeAttr("hidden");
        $("#s4_salah").attr("hidden",true);
        $("#jawaban_benar4").val(1);
      } else {
        $("#s4_salah").removeAttr("hidden");
        $("#s4_benar").attr("hidden",true);
        $("#jawaban_benar4").val(0);
      }
      lanjut()
    }

    function lima() {
      var a5 = $("#a5").val();
      var b5 = $("#b5").val();
      var c5 = $("#c5").val();
      var d5 = $("#d5").val();
      var e5 = $("#e5").val();
      var f5 = $("#f5").val();
      var g5 = $("#g5").val();
      var h5 = $("#h5").val();
      var i5 = $("#i5").val();
      var j5 = $("#j5").val();

      if (a5 == 2 && b5 == 9 && c5 == 1 && d5 == 3 && e5 == 2 && f5 == 9 && g5 == 3 && h5 == 9 && i5 == 5 && j5 == 9) {
        $("#s5_benar").removeAttr("hidden");
        $("#s5_salah").attr("hidden",true);
        $("#jawaban_benar5").val(1);
      } else {
        $("#s5_salah").removeAttr("hidden");
        $("#s5_benar").attr("hidden",true);
        $("#jawaban_benar5").val(0);
      }
      lanjut()
    }

    function lanjut(params) {
      var satu = $("#jawaban_benar1").val();
      var dua = $("#jawaban_benar2").val();
      var tiga = $("#jawaban_benar3").val();
      var empat = $("#jawaban_benar4").val();
      var lima = $("#jawaban_benar5").val();

      if (satu == 1 && dua == 1 && tiga == 1 && empat == 1 && lima == 1 && status==0) {
        $("#simpan").removeAttr("hidden");
        $("#lanjut").attr("hidden",true);
      }
    }
</script>
@endsection