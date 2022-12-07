@extends('layouts.siswa')
@section('content')
<h2 class="mb-4">C. Operasi Hitung Penjumlahan Pecahan Desimal</h2>
  <p>
    Pecahan decimal yaitu pecahan yang dituliskan dengan tanda koma (,) , sebagai contoh: <br>
    a. 0,1 dibaca nol koma Satu <br>
    b. 0,85 dibaca nol koma delapan lima <br>
  </p>
    <img src="{{asset('front/images/jumdes.png')}}" style="width: 300px;">
  <p>
    Pada Gambar diatas menunjukkan bagian yang diarsir adalah pecahan 
    <span class="frac"><sup>5</sup><span>&frasl;</span><sub>10</sub></span> . 
    Pecahan  <span class="frac"><sup>5</sup><span>&frasl;</span><sub>10</sub></span> &nbsp;
    dapat dituliskan dalam bentuk pecahan decimal yaitu 0,10 atau bisa dibaca nol koma sepuluh atau lima persepuluh . <br>
    Contoh: <br>
    0,1 + 0,2 = ... <br>
    Penyelesaian : </p>
    <table cellpadding="0">
      <tr>
        <td>0,1</td>
        <td></td>
      </tr>
      <tr>
        <td style="border-bottom: solid 1px;">0,2</td>
        <td rowspan="2" style="vertical-align: middle;">+</td>
      </tr>
      <tr>
        <td>0,3</td>
      </tr>
    </table>
    
    <p>
      1 ditambah 2 hasilnya 3 kasih koma nol ditambah  nol hasilnya tetap nol jadi 0,1 + 0,2 hasilnya 0,3
    </p>
  <br><br><hr>
  <h4 class="mb-4">Ayo Mencoba!</h4>
  <br>
  <p>
    Kerjakan soal pecahan tersebut menggunakan cara bersusun!
  </p>
  <table cellpadding="0">
    <tr>
      <td>1. &nbsp;&nbsp;</td>
      <td>1,5</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td style="border-bottom: solid 1px;">0,5</td>
      <td rowspan="2" style="vertical-align: middle;">+</td>
    </tr>
    <tr>
      <td></td>
      <td style="padding-top: 1px;"><input type="number" name="a" id="a" style="width: 45px;" step="0.01" value="2" onclick="one()" onkeyup="one()"></td>
      <td>
        <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar" value="0">
      </td>
    </tr>
    <tr>
      <td>2. &nbsp;&nbsp;</td>
      <td>0,8</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td style="border-bottom: solid 1px;">0,3</td>
      <td rowspan="2" style="vertical-align: middle;">+</td>
    </tr>
    <tr>
      <td></td>
      <td style="padding-top: 1px;"><input type="number" name="b" id="b" style="width: 55px;" step="0.01" value="1.1" onclick="two()" onkeyup="two()"></td>
      <td>
        <span id="s2_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s2_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      </td>
    </tr>
    <tr>
      <td>3. &nbsp;&nbsp;</td>
      <td>2,45</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td style="border-bottom: solid 1px;">3,15</td>
      <td rowspan="2" style="vertical-align: middle;">+</td>
    </tr>
    <tr>
      <td></td>
      <td style="padding-top: 1px;"><input type="number" name="c" id="c" style="width: 55px;" step="0.01" value="5.6" onclick="three()" onkeyup="three()"></td>
      <td>
        <span id="s3_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s3_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      </td>
    </tr>
    <tr>
      <td>4. &nbsp;&nbsp;</td>
      <td>5,87</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td style="border-bottom: solid 1px;">1,25</td>
      <td rowspan="2" style="vertical-align: middle;">+</td>
    </tr>
    <tr>
      <td></td>
      <td style="padding-top: 1px;"><input type="number" name="d" id="d" style="width: 55px;" step="0.01" value="7.12" onclick="four()" onkeyup="four()"></td>
      <td>
        <span id="s4_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s4_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      </td>
    </tr>
    <tr>
      <td>5. &nbsp;&nbsp;</td>
      <td>10,78</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td style="border-bottom: solid 1px;">2,05</td>
      <td rowspan="2" style="vertical-align: middle;">+</td>
    </tr>
    <tr>
      <td></td>
      <td style="padding-top: 1px;"><input type="number" name="e" id="e" style="width: 55px;" step="0.01" value="12.83" onclick="five()" onkeyup="five()"></td>
      <td>
        <span id="s5_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s5_salah" hidden class="badge badge-pill badge-danger">Salah</span>
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
        <input type="hidden" id="status" name="status" value="{{$next->status}}">
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next->materi_code}}">
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

    function one(){
      var a = $("#a").val();
      if (a == "2") {
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
      if (a == "1.1") {
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
      if (a == "5.6") {
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
      if (a == "7.12") {
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
      if (a == "12.83") {
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
     
      if (a == "2" && b == "1.1" && c == "5.6" && d == "7.12" && e == "12.83" ) {
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