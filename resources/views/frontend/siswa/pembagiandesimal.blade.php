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
  1. Peserta didik dapat mengidentifikasi pembagian dua pecahan desimal dengan 
  penyebut berbeda dengan benar. <br>
  2. Peserta didik dapat menyelesaikan masalah yang berkaitan dengan pembagian dua 
  pecahan desimal penyebut berbeda dengan benar.
  </p>
  </div>
  <br>
<h2 class="mb-4">F. Operasi Hitung Pembagian Pecahan Desimal</h2>
<p>
  pembagian bilangan pecahan decimal dapat dilakukan seperti menyelesaikan pembilang 
  bilangan cacah. Penyelesaian akhir dengan mengurangkan jumlah 0 bilangan yang dibagi 
  dengan 0 pembagi. <br>
  Pembagian desimal dengan mengubah pecahan bilangan desimal adalah bentuk lain dari 
  pecahan dengan penyebut 10, 100, 1000, dan seterusnya. Pembagian bilangan desimal dapat 
  dilakukan dengan cara mengubah bilangan desimal tersebut menjadi bentuk pecahan. <br>
  <br><b>Ayo Amati!</b><br>
  Contoh 0,5 : 0,35 = … <br>
  2,3 : 0,4 =
  <span class="frac"><sup>23</sup><span>&frasl;</span><sub>10</sub></span>
  &nbsp;: &nbsp;
  <span class="frac"><sup>4</sup><span>&frasl;</span><sub>10</sub></span>
  &nbsp;= &nbsp;
  <span class="frac"><sup>23</sup><span>&frasl;</span><sub>10</sub></span>
  &nbsp;X &nbsp;
  <span class="frac"><sup>10</sup><span>&frasl;</span><sub>4</sub></span>
  &nbsp;= &nbsp;
  <span class="frac"><sup>230</sup><span>&frasl;</span><sub>40</sub></span>
  &nbsp;= 5,75&nbsp;
  <br><br>
  Seekor katak mampu melompot sejauh 2,4 meter dalam sekali lompatan, jika katak tersebut 
  telah menempuh jarak sejauh 64,8 meter. Berapa kali katak melompat? <br>
  <img src="{{asset('images/materi/bagi3/satu.png')}}" alt="" > <br> &nbsp; <br>
  64,8 : 2,4 =
  <span class="frac"><sup>648</sup><span>&frasl;</span><sub>10</sub></span>
  &nbsp;: &nbsp;
  <span class="frac"><sup>24</sup><span>&frasl;</span><sub>10</sub></span>
  &nbsp;= &nbsp;
  <span class="frac"><sup>648</sup><span>&frasl;</span><sub>10</sub></span>
  &nbsp;X &nbsp;
  <span class="frac"><sup>10</sup><span>&frasl;</span><sub>24</sub></span>
  &nbsp;= &nbsp;
  <span class="frac"><sup>648</sup><span>&frasl;</span><sub>24</sub></span>
  &nbsp;= 27&nbsp;
</p>

<br><br><hr>
<h4 class="mb-4">Asyik Mencoba!</h4>
<p>
  <table>
    <tr>
      <td style="vertical-align: top; width:30px;">1.</td>
      <td>
        1,25 : 0,5 = 
        <span class="frac"><sup>125</sup><span>&frasl;</span><sub>100</sub></span>
        &nbsp;: &nbsp;
        <span class="frac"><sup>5</sup><span>&frasl;</span><sub>10</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>125</sup><span>&frasl;</span><sub>100</sub></span>
        &nbsp;X &nbsp;
        <span class="frac"><sup>10</sup><span>&frasl;</span><sub>5</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>1250</sup><span>&frasl;</span><sub>100</sub></span>
        &nbsp;= &nbsp;
        <input type="number" name="a1" id="a1" value="" step="0.01" style="width: 55px;" onclick="satu()" onkeyup="satu()">
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
        2,7 : 0,45 =
        <span class="frac"><sup>27</sup><span>&frasl;</span><sub>10</sub></span>
        &nbsp;: &nbsp;
        <span class="frac"><sup>45</sup><span>&frasl;</span><sub>100</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>27</sup><span>&frasl;</span><sub>10</sub></span>
        &nbsp;X &nbsp;
        <span class="frac"><sup>100</sup><span>&frasl;</span><sub>45</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>2700</sup><span>&frasl;</span><sub>450</sub></span>
        &nbsp;=&nbsp;
        <input type="number" name="a2" id="a2" value="" step="0.01" style="width: 55px;" onclick="dua()" onkeyup="dua()">
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
        Putri mengisi bak air yang volumenya 38,5liter. Jika volume seember air 5,5 liter maka berapa 
        ember air yang harus disikan ke bak mandi? <br><br>

        38,5 : 5,5 =
        <span class="frac"><sup>385</sup><span>&frasl;</span><sub>10</sub></span>
        &nbsp;: &nbsp;
        <span class="frac"><sup>55</sup><span>&frasl;</span><sub>10</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>385</sup><span>&frasl;</span><sub>10</sub></span>
        &nbsp;X &nbsp;
        <span class="frac"><sup>
          <input type="number" name="a3" id="a3" value="" step="0.01" style="width: 55px;" onclick="tiga()" onkeyup="tiga()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="b3" id="b3" value="" step="0.01" style="width: 55px;" onclick="tiga()" onkeyup="tiga()">
        </sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>
          <input type="number" name="c3" id="c3" value="" step="0.01" style="width: 55px;" onclick="tiga()" onkeyup="tiga()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="d3" id="d3" value="" step="0.01" style="width: 55px;" onclick="tiga()" onkeyup="tiga()">
        </sub></span>
        &nbsp;=&nbsp;
        <input type="number" name="e3" id="e3" value="" step="0.01" style="width: 55px;" onclick="tiga()" onkeyup="tiga()">
        &nbsp;&nbsp;&nbsp;
        <span id="s3_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s3_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar3" value="0">
        <br> &nbsp; <br> &nbsp;
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top; width:30px;">4.</td>
      <td>
        Siti ingin membantu ibu membuat kue sarang semut , setiap adonan membutuhkan 1,5kg 
        tepung. Siti memiliki 0,05kg tepung. Berapa adonan yang dapat dibuat Aminah dan ibu? <br><br>
        1,5 : 0,05 =
        <span class="frac"><sup>
          <input type="number" name="a4" id="a4" value="" step="0.01" style="width: 55px;" onclick="empat()" onkeyup="empat()">  
        </sup><span>&frasl;</span><sub>10</sub></span>
        &nbsp;: &nbsp;
        <span class="frac"><sup>
          <input type="number" name="b4" id="b4" value="" step="0.01" style="width: 55px;" onclick="empat()" onkeyup="empat()">  
        </sup><span>&frasl;</span><sub>100</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>
          <input type="number" name="c4" id="c4" value="" step="0.01" style="width: 55px;" onclick="empat()" onkeyup="empat()">
        </sup><span>&frasl;</span><sub>10</sub></span>
        &nbsp;X &nbsp;
        <span class="frac"><sup>100</sup><span>&frasl;</span><sub>
          <input type="number" name="d4" id="d4" value="" step="0.01" style="width: 55px;" onclick="empat()" onkeyup="empat()">  
        </sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>
          <input type="number" name="e4" id="e4" value="" step="0.01" style="width: 55px;" onclick="empat()" onkeyup="empat()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="f4" id="f4" value="" step="0.01" style="width: 55px;" onclick="empat()" onkeyup="empat()">
        </sub></span>
        &nbsp;=&nbsp;
        <input type="number" name="g4" id="g4" value="" step="0.01" style="width: 55px;" onclick="empat()" onkeyup="empat()">
        &nbsp;&nbsp;&nbsp;
        <span id="s4_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s4_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar4" value="0">
        <br> &nbsp; <br> &nbsp;
      </td>
    </tr>
  </table>



  
  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: left; float: left">
      <a href="{{Route('siswa.materi',['q' => 'pembagiancampuran'])}}" class="call_to-btn btn_white-border">
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
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next ? $next->materi_code : 'rangkuman_2'}}">

        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>

      <a hidden id="lanjut" href="{{Route('siswa.materi',['q' => 'rangkuman_2'])}}" class="call_to-btn btn_white-border">
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

      if (a1 == 12.5) {
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

      if (a2 == 6) {
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

      if (a3 == 10  && b3 == 55 && c3 == 3850 && d3 == 550 && e3 == 7) {
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

    if (a4 == 15  && b4 == 5 && c4 == 15 && d4 == 5 && e4 == 1500 && f4 == 50  && g4 == 30 ) {
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
  
    function lanjut(params) {
      var satu = $("#jawaban_benar1").val();
      var dua = $("#jawaban_benar2").val();
      var tiga = $("#jawaban_benar3").val();

      if (satu == 1 && dua == 1 && tiga == 1 && empat == 1 && status==0) {
        $("#simpan").removeAttr("hidden");
        $("#lanjut").attr("hidden",true);
      }
    }
</script>
@endsection