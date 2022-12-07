@extends('layouts.siswa')
@section('content')
<h2 class="mb-4">B. Operasi Hitung Perkalian Pecahan Campuran</h2>
<p>
  Perkalian pecahan campuran yaitu pecahan yang terdiri dari bilangan bulat dan bilangan pecahan 
  biasa. Pada perkalian pecahan campuran sebenarnya hampir sama seperti perkalian pecahan biasa, 
  hanya saja pecahan campuran harus disederhanakan dan diubah terlebih dahulu menjadi bentuk pecahan 
  biasa. <br>
  Contoh: <br>
  1&nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span>
  &nbsp;x&nbsp;
  2&nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>6</sub></span>
  &nbsp;= ... <br>
  Langkah pertama mengubah masing-masing pecahan campuran menjadi pecahan biasa , 
  mengalikan bilangan bulat dengan penyebut, kemudian hasilnya ditambah dengan pembilang. 
  rumus mengubah pecahan campuran menjadi pecahan biasa, <br>
  <img src="images/kalicam_1.png" alt="" style="width: 100px;"> <br>
  1&nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span>
  &nbsp;x&nbsp;
  2&nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>6</sub></span>
  &nbsp;=&nbsp;
  &nbsp;<span class="frac"><sup>5</sup><span>&frasl;</span><sub>4</sub></span>
  &nbsp;x&nbsp;
  &nbsp;<span class="frac"><sup>13</sup><span>&frasl;</span><sub>6</sub></span> <br>
  Bila sudah diubah menjadi pecahan biasa maka bisa dikerjakan dengan menggunakan rumus perkalian pecahan biasa, 
  yaitu mengalikan sesame pembilang dan penyebut, maka hasilnya <br>
  1&nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span>
  &nbsp;x&nbsp;
  2&nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>6</sub></span>
  &nbsp;=&nbsp;
  &nbsp;<span class="frac"><sup>5</sup><span>&frasl;</span><sub>4</sub></span>
  &nbsp;x&nbsp;
  &nbsp;<span class="frac"><sup>13</sup><span>&frasl;</span><sub>6</sub></span>
  &nbsp;=&nbsp;
  &nbsp;<span class="frac"><sup>65</sup><span>&frasl;</span><sub>24</sub></span>
  &nbsp;=&nbsp;
  2 &nbsp;<span class="frac"><sup>17</sup><span>&frasl;</span><sub>24</sub></span>
</p>
 

<br><br><hr>
<h4 class="mb-4">Ayo Mencoba!</h4>
<p>Ubahlah pecahan campuran menjadi pecahan biasa <br><br>
</p>
<table>
  <tr>
    <td style="vertical-align: top; width: 30px;">1.</td>
    <td> 
      1&nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span>
      &nbsp;=&nbsp;
      <span class="frac"><sup> 
        <input type="number" name="a" id="a" style="width: 40px;" value="3" onkeyup="one()" onclick="one()">
      </sup><span>&frasl;</span><sub>2</sub></span>
    </td>
    <td>
      <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      <input type="hidden" id="jawaban_benar" value="0">
    </td>
  </tr>
  <tr>
    <td style="vertical-align: top;"> <br> 2.</td>
    <td> 
      <br>
      2&nbsp;<span class="frac"><sup>3</sup><span>&frasl;</span><sub>4</sub></span>
      &nbsp;=&nbsp;
      <span class="frac"><sup>
        <input type="number" name="b" id="b" style="width: 40px;" value="11" onkeyup="two()" onclick="two()">
      </sup><span>&frasl;</span><sub>4</sub></span></td>
      <td>
        <span id="s2_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s2_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      </td>
  </tr>
  <tr>
    <td style="vertical-align: top;"> <br> 3.</td>
    <td> 
      <br>
      2&nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span>
      &nbsp;=&nbsp;
      <span class="frac"><sup>5</sup><span>&frasl;</span><sub>
        <input type="number" name="c" id="c" style="width: 40px;" value="2" onkeyup="three()" onclick="three()">
      </sub></span></td>
      <td>
        <span id="s3_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s3_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      </td>
  </tr>
  <tr>
    <td style="vertical-align: top;"> <br> 4.</td>
    <td> 
      <br>
      3&nbsp;<span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span>
      &nbsp;=&nbsp;
      <span class="frac"><sup>
        <input type="number" name="d" id="d" style="width: 40px;" value="11" onkeyup="four()" onclick="four()">
      </sup><span>&frasl;</span><sub>3</sub></span></td>
      <td>
        <span id="s4_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s4_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      </td>
  </tr>
  <tr>
    <td style="vertical-align: top;"> <br> 5.</td>
    <td> 
      <br>
      4&nbsp;<span class="frac"><sup>4</sup><span>&frasl;</span><sub>5</sub></span>
      &nbsp;=&nbsp;
      <span class="frac"><sup>
        <input type="number" name="e" id="e" style="width: 40px;" value="24" onkeyup="five()" onclick="five()">
      </sup><span>&frasl;</span><sub>5</sub></span></td>
      <td>
        <span id="s5_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s5_salah" hidden class="badge badge-pill badge-danger">Salah</span>
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
    
    function one(){
      var a = $("#a").val();
      if (a == "3") {
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
      if (a == "11") {
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
      if (a == "2") {
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
      if (a == "11") {
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
      if (a == "24") {
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
     
      if (a == "3" && b == "11" && c == "2" && d == "11" && e == "24" ) {
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