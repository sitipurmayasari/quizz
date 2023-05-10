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
  1. Peserta didik dapat mengidentifikasi perkalian campuran dengan penyebut 
  berbeda dengan benar. <br>
  2. Peserta didik dapat menyelesaikan masalah yang berkaitan dengan perkalian 
  pecahan campuran penyebut berbeda dengan benar.
  </p>
  </div>
  <br>
<h2 class="mb-4">B. Operasi Hitung Perkalian Pecahan Campuran</h2>
<p>
  Perkalian bilangan campuran dilakukan dengan cara mengubah pecahan campuran tersebut 
menjadi pecahan biasa. Setelah itu, mengalikannya seperti pada cara perkalian pecahan biasa. <br>
<b>Contoh</b> <br>
2 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; X &nbsp;
4 <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span> &nbsp; = &nbsp;
  <span class="frac"><sup>5</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; X &nbsp;
  <span class="frac"><sup>14</sup><span>&frasl;</span><sub>3</sub></span> &nbsp; = &nbsp;
  <span class="frac"><sup>5 x 14</sup><span>&frasl;</span><sub>2 x 3</sub></span> &nbsp; = &nbsp;
  <span class="frac"><sup>70</sup><span>&frasl;</span><sub>6</sub></span> &nbsp; = &nbsp;
11 <span class="frac"><sup>4</sup><span>&frasl;</span><sub>6</sub></span> &nbsp; = &nbsp;
11 <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span> 
<br><br>
Cara lain dengan mencoret atau menyederhanakan dengan cara pembilang dan penyebutnya 
dengan bilangan yang sama. <br>
2 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; X &nbsp;
4 <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span> &nbsp; = &nbsp;
  <span class="frac"><sup>5</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; X &nbsp;
  <span class="frac"><sup>14</sup><span>&frasl;</span><sub>3</sub></span> &nbsp; = &nbsp;
  <span class="frac"><sup>5 x 7</sup><span>&frasl;</span><sub>1 x 3</sub></span> &nbsp; = &nbsp;
  <span class="frac"><sup>35</sup><span>&frasl;</span><sub>3</sub></span> &nbsp; = &nbsp;
11 <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span> 
<br><br>
<b>Ayo Amati!</b> <br>
2 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span> <br>
<img src="{{asset('images/materi/kali2/satu.png')}}" alt="" style="width: 350px;"><br><br>
Kita ingat kembali bahwa namanya perkalian merupakan penjumlahan yang berulang sehingga
2 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span>
itu sama saja jumlahan
<span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span>
sebanyak 2 kali, coba amati gambar ada 2 gambar yang masing - masing nilainya
<span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span>
, kita jumlahkan kedua gambar tersebut dan didapatkan hasil dengan nilai 
2 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span>
sehingga kita bisa melihat bahwa 2
<span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span>
sama saja
<span class="frac"><sup>2</sup><span>&frasl;</span><sub>5</sub></span>
, pembilang 2 kita dapattkan dari 2x1 
dan penyebut 5 kita dapatkan dari bilangan 5 itu sendiri
Jadi,
a <span class="frac"><sup>b</sup><span>&frasl;</span><sub>c</sub></span> &nbsp; = &nbsp;
  <span class="frac"><sup>a</sup><span>&frasl;</span><sub>1</sub></span> &nbsp; X &nbsp;
  <span class="frac"><sup>b</sup><span>&frasl;</span><sub>c</sub></span> &nbsp; = &nbsp;
  <span class="frac"><sup>a x b</sup><span>&frasl;</span><sub>1 x c</sub></span>
</p>
<div style="border: dashed 1px; text-align:center; padding:10px;">
  <p>
    Jika jawaban dapat disederhanakan, maka kamu harus 
    menyederhanakannya menjadi pecahan yang paling sederhana.
  </p>
</div>

<br><br><hr>
<h4 class="mb-4">Asyik Mencoba!</h4>
<p>Tentukan masalah perkalian pecahan campuran di bawah ini! Jawaban benar akan berwarna 
  biru, jika salah akan berwarna merah. <br><br>
</p>
<table>
  <tr>
    <td style="vertical-align: top; width:30px;">1. </td>
    <td>
      3 X <span class="frac"><sup>2</sup><span>&frasl;</span><sub>9</sub></span> &nbsp; = &nbsp;
      <span class="frac"><sup>3 x 2</sup><span>&frasl;</span><sub>9</sub></span> &nbsp; = 
      <span class="frac"><sup>6</sup><span>&frasl;</span><sub>9</sub></span> &nbsp; = 
      <span class="frac"><sup>
        <input type="number" name="a1" id="a1" value="" style="width: 40px;" onclick="satu()" onkeyup="satu()">
      </sup><span>&frasl;</span><sub>
        <input type="number" name="b1" id="b1" value="" style="width: 40px;" onclick="satu()" onkeyup="satu()">
      </sub></span>
      <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      <input type="hidden" id="jawaban_benar1" value="0">
      <br><br>
    </td>
  </tr>
  <tr>
    <td style="vertical-align: top; width:30px;">2. </td>
    <td>
      5 X <span class="frac"><sup>1</sup><span>&frasl;</span><sub>6</sub></span> &nbsp; = &nbsp;
      <span class="frac"><sup>5 x 1</sup><span>&frasl;</span><sub>6</sub></span> &nbsp; = 
      <span class="frac"><sup>
        <input type="number" name="a2" id="a2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
      </sup><span>&frasl;</span><sub>
        <input type="number" name="b2" id="b2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
      </sub></span>
      <span id="s2_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s2_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      <input type="hidden" id="jawaban_benar2" value="0">
      <br><br>
    </td>
  </tr>
  <tr>
    <td style="vertical-align: top; width:30px;">3. </td>
    <td>
      8 X <span class="frac"><sup>2</sup><span>&frasl;</span><sub>4</sub></span> &nbsp; = &nbsp;
      <span class="frac"><sup>8 x 2</sup><span>&frasl;</span><sub>4</sub></span> &nbsp; = 
      <span class="frac"><sup>16</sup><span>&frasl;</span><sub>4</sub></span> &nbsp; = 
      <span class="frac"><sup>
        <input type="number" name="a3" id="a3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
      </sup><span>&frasl;</span><sub>
        <input type="number" name="b3" id="b3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
      </sub></span>
      <span id="s3_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s3_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      <input type="hidden" id="jawaban_benar3" value="0">
      <br><br>
    </td>
  </tr>
  <tr>
    <td style="vertical-align: top;">4. </td>
    <td> <img src="{{asset('images/materi/kali2/dua.png')}}" alt="" style="width: 200px;"> {{-- soal no 1 --}}
      <br><br>
      Dari gambar diatas dapat dilihat bahwa kebun ayah
      <span class="frac"><sup>2</sup><span>&frasl;</span><sub>5</sub></span> m2
      adalah gabungan dari <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span> m2
      sebanyak 2 kali, sedangkan 
      <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span> x 3 adalah gabungan dari
      <span class="frac"><sup>2</sup><span>&frasl;</span><sub>5</sub></span>
      m2 sebanyak 3 kali. Dengan demikian,
      <span class="frac"><sup>2</sup><span>&frasl;</span><sub>5</sub></span> X 3 
      adalah gabungan dari <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span> sebanyak (2x3).
    </td>
  </tr>
  <tr>
    <td></td>
    <td>
      Jadi, <span class="frac"><sup>2</sup><span>&frasl;</span><sub>5</sub></span> &nbsp; X 3 =  &nbsp;
      <span class="frac"><sup>2 x 3</sup><span>&frasl;</span><sub>5</sub></span> &nbsp; = &nbsp;
      <span class="frac"><sup>
        <input type="number" name="a4" id="a4" style="width: 40px;" value="" onclick="empat()" onkeyup="empat()">
      </sup><span>&frasl;</span><sub>
        <input type="number" name="b4" id="b4" style="width: 40px;" value="" onclick="empat()" onkeyup="empat()">
      </sub></span>
      &nbsp; &nbsp; &nbsp;
      <span id="s4_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s4_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      <input type="hidden" id="jawaban_benar4" value="0">
      <br><br>
    </td>
  </tr>
</table>




  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: left; float: left">
      <a href="{{Route('siswa.materi',['q' => 'perkalianbiasa'])}}" class="call_to-btn btn_white-border">
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
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next ? $next->materi_code : 'perkaliandesimal'}}">

        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>

      <a hidden id="lanjut" href="{{Route('siswa.materi',['q' => 'perkaliandesimal'])}}" class="call_to-btn btn_white-border">
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

      if (a1 == 2 && b1 == 3 ) {
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

      if (a2 == 5 && b2 == 6 ) {
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

      if (a3 == 4 && b3 == 1 ) {
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

      if (a4 == 6 && b4 == 5 ) {
        $("#s4_benar").removeAttr("hidden");
        $("#s4_salah").attr("hidden",true);
        $("#jawaban_benar3").val(1);
      } else {
        $("#s4_salah").removeAttr("hidden");
        $("#s4_benar").attr("hidden",true);
        $("#jawaban_benar3").val(0);
      }
      lanjut()
    }

    function lanjut(params) {
      var satu = $("#jawaban_benar1").val();
      var dua = $("#jawaban_benar2").val();
      var tiga = $("#jawaban_benar3").val();
      var empat = $("#jawaban_benar4").val();

      if (satu == 1 && dua == 1 && tiga == 1 && empat == 1 && status==0) {
        $("#simpan").removeAttr("hidden");
        $("#lanjut").attr("hidden",true);
      }
    }
</script>
@endsection