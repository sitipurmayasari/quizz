@extends('layouts.siswa')
@section('content')
<h2 class="mb-4">F. Operasi Hitung Pengurangan Pecahan Desimal</h2>
<p>
  Cara menyelesaikan operasi pengurangan pada pecahan decimal adalah sama seperti menyelesaikan 
  operasi penjumlahan, bisa menggunakan cara bersusun. <br>
  Contoh: <br>
  5,9 - 2,5 = ...
</p>
  <table cellpadding="0">
    <tr>
      <td>5,9</td>
      <td></td>
    </tr>
    <tr>
      <td style="border-bottom: solid 1px;">2,5</td>
      <td rowspan="2" style="vertical-align: middle;"> &nbsp;- &nbsp;&nbsp; tulis kedua angka dengan posisi tanda koma sejajar</td>
    </tr>
    <tr>
      <td>...</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>5,9</td>
      <td></td>
    </tr>
    <tr>
      <td style="border-bottom: solid 1px;">2,5</td>
      <td rowspan="2" style="vertical-align: middle;"> &nbsp;- &nbsp;&nbsp; kurangkan nilai paling belakang 9-5, lakukan hal yang sama diangka depan</td>
    </tr>
    <tr>
      <td>3,4</td>
    </tr>
  </table>
<br><br><hr>
<h4 class="mb-4">Ayo Mencoba!</h4>
<br>
<p>
  Kerjakan soal pecahan tersebut menggunakan cara bersusun!
</p>
<table cellpadding="0">
  <tr>
    <td>1. &nbsp;&nbsp;</td>
    <td>7,5</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td style="border-bottom: solid 1px;">2,5</td>
    <td rowspan="2" style="vertical-align: middle;">-</td>
  </tr>
  <tr>
    <td></td>
    <td style="padding-top: 1px;"><input type="number" name="a" id="a" step="0.01" style="width: 50px;" value="5.0" onkeyup="one()" onclick="one()"></td>
    <td>
      <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      <input type="hidden" id="jawaban_benar" value="0">
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
    <td rowspan="2" style="vertical-align: middle;">-</td>
  </tr>
  <tr>
    <td></td>
    <td style="padding-top: 1px;"><input type="number" name="b" id="b" step="0.01" style="width: 50px;" value="0.2" onkeyup="two()" onclick="two()"></td>
    <td>
      <span id="s2_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s2_salah" hidden class="badge badge-pill badge-danger">Salah</span>
    </td>
  </tr>
  <tr>
    <td>3. &nbsp;&nbsp;</td>
    <td>2,65</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td style="border-bottom: solid 1px;">1,20</td>
    <td rowspan="2" style="vertical-align: middle;">-</td>
  </tr>
  <tr>
    <td></td>
    <td style="padding-top: 1px;"><input type="number" name="c" id="c" step="0.01" style="width: 50px;" value="1.45" onkeyup="three()" onclick="three()"></td>
    <td>
      <span id="s3_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s3_salah" hidden class="badge badge-pill badge-danger">Salah</span>
    </td>
  </tr>
  <tr>
    <td>4. &nbsp;&nbsp;</td>
    <td>5,57</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td style="border-bottom: solid 1px;">1,25</td>
    <td rowspan="2" style="vertical-align: middle;">-</td>
  </tr>
  <tr>
    <td></td>
    <td style="padding-top: 1px;"><input type="number" name="d" id="d" step="0.01" style="width: 50px;" value="4.32" onkeyup="four()" onclick="four()"></td>
    <td>
      <span id="s4_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s4_salah" hidden class="badge badge-pill badge-danger">Salah</span>
    </td>
  </tr>
  <tr>
    <td>5. &nbsp;&nbsp;</td>
    <td>6,78</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td style="border-bottom: solid 1px;">2,55</td>
    <td rowspan="2" style="vertical-align: middle;">-</td>
  </tr>
  <tr>
    <td></td>
    <td style="padding-top: 1px;"><input type="number" name="e" id="e" step="0.01" style="width: 50px;" value="4.23" onkeyup="five()" onclick="five()"></td>
    <td>
      <span id="s5_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s5_salah" hidden class="badge badge-pill badge-danger">Salah</span>
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
        <input type="hidden" id="status" name="status" value="{{$next->status}}">
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next->materi_code}}">
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
      } else {
        $("#s1_salah").removeAttr("hidden");
        $("#s1_benar").attr("hidden",true);
      }
      sum()
    }

    function two(){
      var a = $("#b").val();
      if (a == "0.2") {
        $("#s2_benar").removeAttr("hidden");
        $("#s2_salah").attr("hidden",true);
      } else {
        $("#s2_salah").removeAttr("hidden");
        $("#s2_benar").attr("hidden",true);
      }
      sum()
    }

    function three(){
      var a = $("#c").val();
      if (a == "1.45") {
        $("#s3_benar").removeAttr("hidden");
        $("#s3_salah").attr("hidden",true);
      } else {
        $("#s3_salah").removeAttr("hidden");
        $("#s3_benar").attr("hidden",true);
      }
      sum()
    }

    function four(){
      var a = $("#d").val();
      if (a == "4.32") {
        $("#s4_benar").removeAttr("hidden");
        $("#s4_salah").attr("hidden",true);
      } else {
        $("#s4_salah").removeAttr("hidden");
        $("#s4_benar").attr("hidden",true);
      }
      sum()
    }

    function five(){
      var a = $("#e").val();
      if (a == "4.23") {
        $("#s5_benar").removeAttr("hidden");
        $("#s5_salah").attr("hidden",true);
      } else {
        $("#s5_salah").removeAttr("hidden");
        $("#s5_benar").attr("hidden",true);
      }
      sum()
    }

   function sum() {
      var a = $("#a").val();
      var b = $("#b").val();
      var c = $("#c").val();
      var d = $("#d").val();
      var e = $("#e").val();
     
      if (a == "5" && b == "0.2" && c == "1.45" && d == "4.32" && e == "4.23" ) {
        $("#jawaban_benar").val(1);
        lanjut()
      } else {
        $("#jawaban_benar").val(0);
      }
      
    }

    function lanjut(params) {
      var benar = $("#jawaban_benar").val();
      var status = $("#status").val();
      if (benar == 1 && status==0) {
        $("#simpan").removeAttr("hidden");
        $("#lanjut").attr("hidden",true);
      }
    }
</script>
@endsection