@extends('layouts.siswa')
@section('content')

<h1 class="mb-4"style=" width: auto;
    background-color: #EAEAEA;
    padding: 8px 8px;
    border-left: 5px solid  #064635;
    word-wrap: break-word;
    line-height: 1.e4m;;">Operasi Hitung Pecahan</h1>
<hr>
<div style="border: solid 1px;width: auto;border-color:orange; color-back;  background-color:white;">
  <div style="margin:0; pading:0; text-align:center; background-color:orange; color:white">
    <b>Tujuan Pembelajaran</b>
  </div>
  <p style="margin-left:10px; margin-top:10px;">
    Peserta didik dapat menjelaskan pengertian pecahan dengan benar.
  </p>
</div>
<br>
<p>
  Masih ingatkah kamu, apa yang dimaksud dengan pecahan? Sebelumnya kamu sudah mengenal pecahan dikelas IV, Nah sekarang dikelas V kita akan belajar tentang operasi hitung pecahan. Untuk mengingat kembali ingatanmu mengenai pecahan, amatilah peristiwa dibawah dan simaklah penjelasannya dengan cermat! 
  <br>&nbsp;<br>
  <b>Ayo Amati!</b>
</p>
<div style="text-align: center;"><img src="{{asset('images/materi/pengertian/satu.png')}}" alt="" style="width: 250px;"></div>
<p>
  Siti membawa 1 nampan yang berisi kue. Dia ingin memberikan kue itu kepada 4 adiknya dengan bagian yang sama besar. Coba perhatikan pada gambar diatas, berapakah kue yang diterima oleh masing-masing adiknya siti? <br>
  Jadi, Dari gambar diatas, terlihat bahwa masing-masing anak mendapatkan &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span> &nbsp; bagian karena 1 bagian nampan yang berisi kue dibagikan kepada 4 anak.
</p>
<br>
<div style="border: dashed 1px; text-align:center; padding:10px;">
  <p>
    Bilangan pecahan dapat diartikan sebagai sebuah bilangan yang memiliki pembilang dan juga penyebut. Pecahan dapat ditulis
    &nbsp; <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span> &nbsp; 
    , yang artinya a disebut pembilang dan b disebut penyebut nilai b tidak boleh sama dengan 0.
  </p>
</div>
<br>
Mari perhatikan penjelasan video bilangan pecahan di bawah ini!
<div style="text-align: center;"><img src="{{asset('images/materi/pengertian/dua.png')}}" alt="" style="width: 400px;"></div>
<br>
Menentukan pecahan dengan gambar
<div style="text-align: center;"><img src="{{asset('images/materi/pengertian/tiga.png')}}" alt=""></div>
<br>
<p>
  Operasi hitung pecahan dalam matematika terdiri dari penjumlahan, pengurangan, perkalian, dan pembagian. Cara melakukan operasi hitung pecahan pada penjumlahan dan pengurangan hanya bisa dilakukan apabila penyebutnya sama. Sedangkan pada operasi hitung pecahan perkalian dan pembagian dapat dilakukan pada bentuk pecahan biasa dengan penyebut yang sama maupun berbeda.
</p>
<br><br>
<h4 class="mb-4">Asyik Mencoba!</h4>
<hr>
<p>
  Perhatikan gambar dibawah. Isilah titik-titik dan tentukan nilai pecahan sesuai gambar! <br>
  inputkan jawaban di dalam kolom. Jawaban benar akan berwarna biru, jika salah berwarna merah.
  <table>
    <tr>
      <td style="width: 100px;">
        <img src="{{asset('images/materi/pengertian/empat.png')}}" alt="" style="width: 100px;">
      </td>
      <td>
        = &nbsp; &nbsp; &nbsp;
      <input type="number" name="a1" id="a1" value="" style="width: 40px;" onclick="satu()" onkeyup="satu()">
      </td>
      <td>
        <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar1" value="0">
      </td>
    </tr>
    <tr>
      <td style="width: 100px;">
        <img src="{{asset('images/materi/pengertian/lima.png')}}" alt="" style="width: 100px;">
      </td>
      <td>
        = &nbsp; &nbsp; &nbsp;
        <span class="frac"><sup>
          <input type="number" name="a2" id="a2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="b2" id="b2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sub></span>
      </td>
      <td>
        <span id="s2_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s2_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar2" value="0">
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td style="width: 100px;text-align:center;">
        <img src="{{asset('images/materi/pengertian/enam.png')}}" alt="" style="width: 50px;">
      </td>
      <td>
        = &nbsp; &nbsp; &nbsp;
        <span class="frac"><sup>
          <input type="number" name="a3" id="a3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="b3" id="b3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        </sub></span>
      </td>
      <td>
        <span id="s3_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s3_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar3" value="0">
      </td>
    </tr>
  </table>

  <br><br><br>
  <div>
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

      if (a1 == 1) {
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
      if (a2 == 1 && b2 == 2) {
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
      if (a3 == 1 && b3 == 4) {
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

      if (satu == 1 && dua == 1 && tiga == 1 ) {
        $("#simpan").removeAttr("hidden");
        $("#lanjut").attr("hidden",true);
      }
    }
</script>
@endsection