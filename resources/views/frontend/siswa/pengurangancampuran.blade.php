@extends('layouts.siswa')
@section('content')
  <h2 class="mb-4">E. Operasi Hitung Pengurangan Pecahan Campuran</h2>
  <p>
    Pada pengurangan pecahan campuran, cara mengurangi pecahan campuran pada dasarnya tidak 
    jauh berbeda dengan pengurangan pecahan biasa. Untuk menghitung dalam pecahan campuran 
    ini terlebih dahulu pisahkan antara nilai pecahan dengan nilai bilangan bulatnya. <br>
    Contoh Soal : <br>
    2 &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span> 
    &nbsp; - &nbsp;
    1 &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span> 
    &nbsp; = .... &nbsp;
    <br>
    Ilustrasi penyelesaian <br>
    <img src="{{asset('front/images/kurcam.png')}}" style="width: 500px;">
    <br>
    Pisahkan antara bilangan bulat dengan bilangan pecahan, kemudian samakan kedua penyebut pecahan tersebut menggunakan kpk.
    <br>
    <img src="{{asset('front/images/kurcam2.png')}}" style="width: 500px;">
    <br><br>
    Jadi, &nbsp;
    2 &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span> 
    &nbsp; - 
    1 &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span> 
    &nbsp; = ( 2 - 1 ) - 
    &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span> 
    &nbsp; - 
    &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span> 
    &nbsp; = 1 - 
    &nbsp; <span class="frac"><sup>5</sup><span>&frasl;</span><sub>20</sub></span> 
    &nbsp; - 
    &nbsp; <span class="frac"><sup>4</sup><span>&frasl;</span><sub>20</sub></span> 
    &nbsp; = 
    1 &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>20</sub></span> 
  <br><br><hr>
  <h4 class="mb-4">Ayo Mencoba!</h4>
  <br>
  <p>
    Ibu Membeli 
    5&nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>3</sub></span> &nbsp; 
    Kg telur. Kemudian sebanyak 
    2&nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span> &nbsp;
    telur digunakan untuk membuat kue sarang semut. 
    Lalu sisa berapakah telur yang dimiliki ibu sekarang? <br>
    Jawab : <br>
    5&nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>3</sub></span>  
    &nbsp; -  &nbsp;
    2&nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span> &nbsp;
    &nbsp; =
    ( 5 - 
    <input type="number" name="" id="a" style="width: 35px;" value="3" onkeyup="sum()" onclick="sum()"> ) +
    &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>3</sub></span> &nbsp; -
    &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>
      <input type="number" name="" id="b" style="width: 35px;" value="5" onkeyup="sum()" onclick="sum()">
    </sub></span>
    &nbsp; = 
    <input type="number" name="" id="c" style="width: 35px;" value="3" onkeyup="sum()" onclick="sum()"> +
    &nbsp; <span class="frac"><sup>5</sup><span>&frasl;</span><sub>
      <input type="number" name="" id="d" style="width: 35px;" value="15" onkeyup="sum()" onclick="sum()">
    </sub></span> &nbsp; -
    &nbsp; <span class="frac"><sup>
      <input type="number" name="" id="e" style="width: 35px;" value="3" onkeyup="sum()" onclick="sum()">
    </sup><span>&frasl;</span><sub>
      <input type="number" name="" id="f" style="width: 35px;" value="15" onkeyup="sum()" onclick="sum()">
    </sub></span>
    &nbsp; = 
    <input type="number" name="" id="g" style="width: 35px;" value="3" onkeyup="sum()" onclick="sum()">
    &nbsp; <span class="frac"><sup>
      <input type="number" name="" id="h" style="width: 35px;" value="2" onkeyup="sum()" onclick="sum()">
    </sup><span>&frasl;</span><sub>
      <input type="number" name="" id="i" style="width: 35px;" value="15" onkeyup="sum()" onclick="sum()">
    </sub></span>
    &nbsp;&nbsp;
    <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
    <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
    <input type="hidden" id="jawaban_benar" value="0">
  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: left; float: left">
      <a href="{{Route('siswa.materi',['q' => 'penguranganbiasa'])}}" class="call_to-btn btn_white-border">
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
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next ? $next->materi_code : 'pengurangandesimal'}}">

        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>

      <a hidden id="lanjut" href="{{Route('siswa.materi',['q' => 'pengurangandesimal'])}}" class="call_to-btn btn_white-border">
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

   function sum() {
      var a = $("#a").val();
      var b = $("#b").val();
      var c = $("#c").val();
      var d = $("#d").val();
      var e = $("#e").val();
      var f = $("#f").val();
      var g = $("#g").val();
      var h = $("#h").val();
      var i = $("#i").val();

      if (a == 3 && b == 5 && c == 3 && d == 15 && e == 3 && f == 15 && g == 3 && h == 2 && i == 15) {
        $("#s1_benar").removeAttr("hidden");
        $("#s1_salah").attr("hidden",true);
        $("#jawaban_benar").val(1);
      } else {
        $("#s1_salah").removeAttr("hidden");
        $("#s1_benar").attr("hidden",true);
        $("#jawaban_benar").val(0);
      }
      lanjut()
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