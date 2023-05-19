@extends('layouts.siswa')
@section('content')
  <style>
    table{
      border-collapse: collapse;
    }
    tr,td{
      padding-top: 0;
      padding-bottom: 0;
      margin-top: 0;
      margin-bottom: 0;
    }

  </style>
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
  1. Peserta didik dapat mmengidentifikasi pengurangan dua pecahan Desimal dengan penyebut berbeda dengan benar. <br>
  2. Peserta didik dapat menyelesaikan masalah yang berkaitan dengan pengurangan dua pecahan Desimal penyebut berbeda dengan benar.
  </p>
  </div>
  <br>
  <h2 class="mb-4">F. Operasi Hitung Pengurangan Pecahan Desimal</h2>
  <p>
    Cara menyelesaikan operasi pengurangan pada pecahan decimal adalah sama seperti menyelesaikan operasi penjumlahan, bisa menggunakan cara bersusun. <br>
    <b>Ayo Amati!</b> <br>
    3,25 - 1,86 = … <br>
    <table>
      <tr>
        <td>3,25</td>
        <td></td>
      </tr>
      <tr>
        <td style="border-bottom: solid 1px;">3,25</td>
        <td rowspan="2" style="vertical-align: middle;"> &nbsp; -  &nbsp;&nbsp;kelompokkan kembali puluhan dan kurangkan bilangan ratusan</td>
      </tr>
      <tr>
        <td style="text-align: right"><b>9</b>
        </td>
      </tr>
      <tr>
        <td>3,25</td>
        <td></td>
      </tr>
      <tr>
        <td style="border-bottom: solid 1px;">1,86</td>
        <td rowspan="2" style="vertical-align: middle;"> &nbsp; -  &nbsp;&nbsp;kelompokkan kembali puluhan dan kurangkan bilangan puluhan</td>
      </tr>
      <tr>
        <td style="text-align: right"><b>39</b> 
        </td>
      </tr>
      <tr>
        <td>3,25</td>
        <td></td>
      </tr>
      <tr>
        <td style="border-bottom: solid 1px;">1,86</td>
        <td rowspan="2" style="vertical-align: middle;"> &nbsp; -  &nbsp;&nbsp;kelompokkan kembali satuan dan kurangkan bilangan satuan</td>
      </tr>
      <tr>
        <td><b>1,39</b> 
        </td>
      </tr>
    </table>

  </p>

<br><br><hr>
<h4 class="mb-4">Asyik Mencoba!</h4>
<br>
<p>
  Tentukan masalah pengurangan desimal pada di bawah ini! Jawaban benar akan berwarna biru, jika salah akan berwarna merah.
</p>
<table>
  <tr>
    <td style="width: 30px;">1. &nbsp;&nbsp;</td>
    <td style="width: 55px; height:auto;">7,5</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td style="border-bottom: solid 1px;">2,5</td>
    <td rowspan="2" style="vertical-align: middle;"> &nbsp; -</td>
  </tr>
  <tr>
    <td></td>
    <td style="padding-top: 1px;"><input type="number" name="a" id="a" step="0.01" style="width: 50px;"onkeyup="one()" onclick="one()"></td>
    <td>
      <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      <input type="hidden" id="jawaban_benar1" value="0">
    </td>
  </tr>
  <tr>
    <td>2. &nbsp;&nbsp;</td>
    <td>0,5</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td style="border-bottom: solid 1px;">0,3</td>
    <td rowspan="2" style="vertical-align: middle;"> &nbsp; -</td>
  </tr>
  <tr>
    <td></td>
    <td style="padding-top: 1px;"><input type="number" name="b" id="b" step="0.01" style="width: 50px;"onkeyup="two()" onclick="two()"></td>
    <td>
      <span id="s2_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s2_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      <input type="hidden" id="jawaban_benar2" value="0">
      <br><br>
    </td>
  </tr>
  <tr>
    <td >3. &nbsp;&nbsp;</td>
    <td>2,65</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td style="border-bottom: solid 1px;">1,20</td>
    <td rowspan="2" style="vertical-align: middle;"> &nbsp; -</td>
  </tr>
  <tr>
    <td></td>
    <td style="padding-top: 1px;"><input type="number" name="c" id="c" step="0.01" style="width: 50px;" onkeyup="three()" onclick="three()"></td>
    <td>
      <span id="s3_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s3_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      <input type="hidden" id="jawaban_benar3" value="0">
      <br><br>
    </td>
  </tr>
  <tr>
    <td>4. &nbsp;&nbsp;</td>
    <td colspan="2">
      Aminah membeli 2,5kg gula merah, kemudian digunakan 1,25kg. berapa sisa gula merah yang di miliki Aminah?
    </td>
  </tr>
  <tr>
    <td></td>
    <td>2,5</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td style="border-bottom: solid 1px;">1,25</td>
    <td rowspan="2" style="vertical-align: middle;"> &nbsp; -</td>
  </tr>
  <tr>
    <td></td>
    <td style="padding-top: 1px;"><input type="number" name="d" id="d" step="0.01" style="width: 50px;" onkeyup="four()" onclick="four()"></td>
    <td>
      <span id="s4_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s4_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      <input type="hidden" id="jawaban_benar4" value="0">
      <br><br>
    </td>
  </tr>
  <tr>
    <td>5. &nbsp;&nbsp;</td>
    <td colspan="2">
      Bayu mempunyai kayu dengan Panjang 1,5meter untuk membuat bingkai sebuah prakarya. Setelah digunakan, kayu tersebut masih tersisa 0,25meter. Berapa meter kayu yang terpakai untuk membingkai?
    </td>
  </tr>
  <tr>
    <td></td>
    <td>1,5</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td style="border-bottom: solid 1px;">0,25</td>
    <td rowspan="2" style="vertical-align: middle;"> &nbsp; -</td>
  </tr>
  <tr>
    <td></td>
    <td style="padding-top: 1px;"><input type="number" name="e" id="e" step="0.01" style="width: 50px;" onkeyup="five()" onclick="five()"></td>
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
      <a href="{{Route('siswa.materi',['q' => 'pengurangancampuran'])}}" class="call_to-btn btn_white-border">
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
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next ? $next->materi_code : 'rangkuman_1'}}">

        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>

      <a hidden id="lanjut" href="{{Route('siswa.materi',['q' => 'rangkuman_1'])}}" class="call_to-btn btn_white-border">
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

    function one(){
      var a = $("#a").val();
      if (a == "5") {
        $("#s1_benar").removeAttr("hidden");
        $("#s1_salah").attr("hidden",true);
        $("#jawaban_benar1").val(1);
      } else {
        $("#s1_salah").removeAttr("hidden");
        $("#s1_benar").attr("hidden",true);
        $("#jawaban_benar1").val(0);
      }
      sum()
    }

    function two(){
      var a = $("#b").val();
      if (a == "0.2") {
        $("#s2_benar").removeAttr("hidden");
        $("#s2_salah").attr("hidden",true);
        $("#jawaban_benar2").val(1);
      } else {
        $("#s2_salah").removeAttr("hidden");
        $("#s2_benar").attr("hidden",true);
        $("#jawaban_benar2").val(0);
      }
      sum()
    }

    function three(){
      var a = $("#c").val();
      if (a == "1.45") {
        $("#s3_benar").removeAttr("hidden");
        $("#s3_salah").attr("hidden",true);
        $("#jawaban_benar3").val(1);
      } else {
        $("#s3_salah").removeAttr("hidden");
        $("#s3_benar").attr("hidden",true);
        $("#jawaban_benar3").val(0);
      }
      sum()
    }

    function four(){
      var a = $("#d").val();
      if (a == "1.25") {
        $("#s4_benar").removeAttr("hidden");
        $("#s4_salah").attr("hidden",true);
        $("#jawaban_benar4").val(1);
      } else {
        $("#s4_salah").removeAttr("hidden");
        $("#s4_benar").attr("hidden",true);
        $("#jawaban_benar4").val(0);
      }
      sum()
    }

    function five(){
      var a = $("#e").val();
      if (a == "1.25") {
        $("#s5_benar").removeAttr("hidden");
        $("#s5_salah").attr("hidden",true);
        $("#jawaban_benar4").val(1);
      } else {
        $("#s5_salah").removeAttr("hidden");
        $("#s5_benar").attr("hidden",true);
        $("#jawaban_benar5").val(0);
      }
      sum()
    }

   function sum() {
      var a = $("#a").val();
      var b = $("#b").val();
      var c = $("#c").val();
      var d = $("#d").val();
      var e = $("#e").val();
     
      if (a == "5" && b == "0.2" && c == "1.45" && d == "1.25" && e == "1.25" ) {
        $("#simpan").removeAttr("hidden");
        $("#lanjut").attr("hidden",true);
    }
  }

    // function lanjut(params) {
    //   var benar = $("#jawaban_benar").val();
    //   var status = $("#status").val();
    //   if (benar == 1 && status==0) {
        
    //   }
    // }
</script>
@endsection