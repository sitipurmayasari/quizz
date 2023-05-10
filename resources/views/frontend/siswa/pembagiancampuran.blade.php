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
    1. Peserta didik dapat mengidentifikasi pembagian dua pecahan campuran dengan 
    penyebut berbeda dengan benar. <br>
    2. Peserta didik dapat menyelesaikan masalah yang berkaitan dengan pembagian dua 
    pecahan campuran penyebut berbeda dengan benar.
    </p>
    </div>
  <br>
  <h2 class="mb-4">E. Operasi Hitung Pembagian Pecahan Campuran</h2>
  <p>
    pembagi bilangan pecahan camuran dikerjakan dengan cara mengubahnya ke dalam bentuk 
    pecahan biasa dan mengalikannya dengan kebalikan dari pecahan campuran kedua. <br>
    Pada pembagi, terdapat aturan bahwa hasil bagi tidak berubah jika kita mengalikan baik yang 
    dibagi maupun pembagi dengan bilangan yang sama dan tidak boleh 0. <br>
    <br><b>Ayo Amati!</b><br>
    contoh : <br>
    <span class="frac"><sup>4</sup><span>&frasl;</span><sub>5</sub></span> : 2 = &nbsp;
    <span class="frac"><sup>4</sup><span>&frasl;</span><sub>5</sub></span> X 5 : (2 X 5 ) 
    = 4 : (2 X 5) = 4 : (5 X 2)
    <br><br>

    Kemudian nyatakanlah sebagai pecahan, seperti berikut : <br><br>
    <span class="frac"><sup>4</sup><span>&frasl;</span><sub>5</sub></span> : 2 = &nbsp;
    <span class="frac"><sup>4</sup><span>&frasl;</span><sub>5 x 2</sub></span> = &nbsp;
    <span class="frac"><sup>4</sup><span>&frasl;</span><sub>10</sub></span> = &nbsp;
    <span class="frac"><sup>2</sup><span>&frasl;</span><sub>5</sub></span>
    <br><br>
    Contoh Soal : <br>
    <img src="{{asset('images/materi/bagi2/satu.png')}}" alt="" style="width: 200px;"> <br> &nbsp; <br>
    Putri ingi membuat jus jeruk, untuk membuat jus jeruk sebanyak 
    <span class="frac"><sup>3</sup><span>&frasl;</span><sub>4</sub></span> liter, putri membutuhkan 5 buah 
    jeruk. Berapa l jus jeruk yang didapat dari 1 buah jeruk? <br><br>
    <span class="frac"><sup>3</sup><span>&frasl;</span><sub>4</sub></span> : 5 = &nbsp;
    <span class="frac"><sup>3</sup><span>&frasl;</span><sub>4 x 5</sub></span> = &nbsp;
    <span class="frac"><sup>3</sup><span>&frasl;</span><sub>20</sub></span>
  </p>
  

  <br><br><hr>
  <h4 class="mb-4">Asyik Mencoba!</h4>
  <table>
    <tr>
      <td style="vertical-align: top; width:30px;">1.</td>
      <td>
        <span class="frac"><sup>4</sup><span>&frasl;</span><sub>6</sub></span>
        &nbsp;: 2&nbsp;
        &nbsp;=&nbsp;
        <span class="frac"><sup>4</sup><span>&frasl;</span><sub>6 x 2</sub></span>
        &nbsp;= &nbsp;
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
        Tali sepanjang 20 <span class="frac"><sup>2</sup><span>&frasl;</span><sub>5</sub></span>
        meter dipotong menjadi beberapa bagian sama Panjang. Jika setiap bagian panjangnya
        1 <span class="frac"><sup>7</sup><span>&frasl;</span><sub>10</sub></span>
        meter, maka banyak bagian potongan tali tersebut adalah… <br><br>

        20 <span class="frac"><sup>2</sup><span>&frasl;</span><sub>5</sub></span>
        &nbsp;:&nbsp;
        1 <span class="frac"><sup>7</sup><span>&frasl;</span><sub>10</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>102</sup><span>&frasl;</span><sub>5</sub></span>
        &nbsp;:&nbsp;
        <span class="frac"><sup>17</sup><span>&frasl;</span><sub>10</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>102</sup><span>&frasl;</span><sub>5</sub></span>
        &nbsp;X&nbsp;
        <span class="frac"><sup>10</sup><span>&frasl;</span><sub>17</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>6 x 2</sup><span>&frasl;</span><sub>1 x 1</sub></span>
        &nbsp;=&nbsp;
        <input type="number" name="a2" id="a2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
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
        Ayah siti mempunyai 4 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span>
        kg rambutan. Sebanyak 1 <span class="frac"><sup>5</sup><span>&frasl;</span><sub>10</sub></span>
        kg rambutan akan dimasukkan ke dalam plastik. Berapakah plastik yang dibutuhkan ayah siti? <br><br>


        4 <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span>
        &nbsp;:&nbsp;
        1 <span class="frac"><sup>5</sup><span>&frasl;</span><sub>10</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>9</sup><span>&frasl;</span><sub>2</sub></span>
        &nbsp;:&nbsp;
        <span class="frac"><sup>15</sup><span>&frasl;</span><sub>10</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>
          <input type="number" name="a3" id="a3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="b3" id="b3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        </sub></span>
        &nbsp;X&nbsp;
        <span class="frac"><sup>
          <input type="number" name="c3" id="c3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="d3" id="d3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        </sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>
          <input type="number" name="e3" id="e3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="f3" id="f3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        </sub></span>
        &nbsp;=&nbsp;
        <input type="number" name="g3" id="g3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
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
      <a href="{{Route('siswa.materi',['q' => 'pembagianbiasa'])}}" class="call_to-btn btn_white-border">
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
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next ? $next->materi_code : 'pembagiandesimal'}}">

        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>

      <a hidden id="lanjut" href="{{Route('siswa.materi',['q' => 'pembagiandesimal'])}}" class="call_to-btn btn_white-border">
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

      if (a1 == 4 && b1 == 12 ) {
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

      if (a2 == 12) {
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

      if (a3 == 9  && b3 == 2 && c3 == 10 && d3 == 15 && e3 == 90 && f3 == 30  && g3 == 3 ) {
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

      if (satu == 1 && dua == 1 && tiga == 1 && status==0) {
        $("#simpan").removeAttr("hidden");
        $("#lanjut").attr("hidden",true);
      }
    }
</script>
@endsection