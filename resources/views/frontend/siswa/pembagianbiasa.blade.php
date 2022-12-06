@extends('layouts.siswa')
@section('content')
  <h2 class="mb-4">D. Operasi Hitung Pembagian Pecahan Biasa</h2>
  <p>
    Pada dasarnya pembagian pecahan menggunakan konsep perkalian pecahan, 
    hanya saja pada perkalian dalam rumus pembagian pecahan , 
    kita harus membalikkan posisi pembilang dan penyebut pada pecahan pembagi. <br>
    Rumus <br>
  </p>

  <div style="border: solid 1px; padding: 10px; padding-bottom: 0px; width: fit-content;">
    <p>
      <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span>
      &nbsp;:&nbsp;
      <span class="frac"><sup>c</sup><span>&frasl;</span><sub>d</sub></span>
      &nbsp;menjadi&nbsp;
      <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span>
      &nbsp;x&nbsp;
      <span class="frac"><sup>d</sup><span>&frasl;</span><sub>c</sub></span>
    
    </p>
  </div>
  Pada rumus diatas pecahan  <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span> 
  dibagi <span class="frac"><sup>c</sup><span>&frasl;</span><sub>d</sub></span> 
  yang harus dilakukan pertama adalah menukar posisi c dan d, setelah dibalikkan, 
  d menjadi pembilang dan c menjadi penyebut, 
  contohnya adalah 2/3 maka pada penyelesaian pembagian harus dirubah menjadi 3/2
  Kebalikan anggota bilangan asli adalah 1, 2, 3, ... .
  Bilangan asli dapat diubah menjadi pecahan dengan bentuk yang paling sederhana adalah 
  pembilang bilangan itu sendiri dengan penyebut 1. <br>
  Contoh Bilangan 3 apabila diubah menjadi bentuk pecahan adalah  <span class="frac"><sup>3</sup><span>&frasl;</span><sub>1</sub></span><br>
  Kebalikan dari 3 atau <span class="frac"><sup>3</sup><span>&frasl;</span><sub>1</sub></span> adalah 
  <span class="frac"><sup>1</sup><span>&frasl;</span><sub>3</sub></span> <br>
  Contoh soal
  <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span>
  &nbsp;:&nbsp;
  <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span>
  &nbsp;=&nbsp;
  <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span>
  &nbsp;X&nbsp;
  <span class="frac"><sup>4</sup><span>&frasl;</span><sub>1</sub></span>
  &nbsp;=&nbsp;
  <span class="frac"><sup>8</sup><span>&frasl;</span><sub>3</sub></span> <br>

  Rumus pembagian pecahan dengan bilangan bulat
  <div style="border: solid 1px; padding: 10px; padding-bottom: 0px; width: fit-content;">
    <p>
      <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span>
      &nbsp;: c menjadi&nbsp;
      <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span>
      &nbsp;:&nbsp;
      <span class="frac"><sup>c</sup><span>&frasl;</span><sub>1</sub></span>
      &nbsp;atau&nbsp;
      <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span>
      &nbsp;x&nbsp;
      <span class="frac"><sup>1</sup><span>&frasl;</span><sub>c</sub></span><br>
    </p>
  </div>
  Contoh soal permasalahan dalam kehidupan sehari-hari <br>
  Ada seorang tukang jamu keliling yang memiliki jamu temulawak sebanyak 
  <span class="frac"><sup>12</sup><span>&frasl;</span><sub>4</sub></span> liter. 
  Setiap gelas yang dijual berisi 
  <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span> liter jamu. 
  Berapa banyak gelas yang harus disediakan tukang jamu untuk berjualan? <br>
  Penyelesaian <br>
  1 &nbsp;<span class="frac"><sup>2</sup><span>&frasl;</span><sub>4</sub></span>
  &nbsp;:&nbsp;
  <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span>
  &nbsp;=&nbsp;
  <span class="frac"><sup>6</sup><span>&frasl;</span><sub>5</sub></span>
  &nbsp;:&nbsp;
  <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span>
  &nbsp;=&nbsp;
  <span class="frac"><sup>6</sup><span>&frasl;</span><sub>5</sub></span>
  &nbsp;x&nbsp;
  <span class="frac"><sup>5</sup><span>&frasl;</span><sub>1</sub></span>
  &nbsp;=&nbsp;
  <span class="frac"><sup>30</sup><span>&frasl;</span><sub>5</sub></span>
  &nbsp;= 6 <br>
          </p>
  <br><br><hr>
  <h4 class="mb-4">Ayo Mencoba!</h4>
  <table>
    <tr>
      <td>
        <span class="frac"><sup>4</sup><span>&frasl;</span><sub>5</sub></span>
        &nbsp;:&nbsp;
        <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>
          <input type="number" name="" id="a" style="width: 35px;" value="4"  onkeyup="sum()" onclick="sum()">
        </sup><span>&frasl;</span><sub>5</sub></span>
        &nbsp;x&nbsp;
        <span class="frac"><sup>
          <input type="number" name="" id="b" style="width: 35px;" value="3"  onkeyup="sum()" onclick="sum()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="" id="c" style="width: 35px;" value="2"  onkeyup="sum()" onclick="sum()">
        </sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>
          <input type="number" name="" id="d" style="width: 40px;" value="12"  onkeyup="sum()" onclick="sum()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="" id="e" style="width: 40px;" value="10"  onkeyup="sum()" onclick="sum()">
        </sub></span>
      </td>
      <td>
        <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar" value="0">
      </td>
    </tr>
  </table>
  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: left; float: left">
      <a href="{{Route('siswa.materi',['q' => 'perkaliandesimal'])}}" class="call_to-btn btn_white-border">
        <img src="{{asset('front/images/left-arrow.png')}}" alt="">
        <span>
          Sebelumnya
        </span>
      </a>
    </div>
    <div class="hero_btn-continer" style="text-align: right; float: right"  >
      <form class="form-horizontal validate-form" role="form" method="post" action="{{route('siswa.store')}}">
        {{ csrf_field() }}
        <input type="hidden" id="status" name="status" value="{{$next->status}}">
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next->materi_code}}">
        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>

      <a hidden id="lanjut" href="{{Route('siswa.materi',['q' => 'pembagiancampuran'])}}" class="call_to-btn btn_white-border">
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

   function sum() {
      var a = $("#a").val();
      var b = $("#b").val();
      var c = $("#c").val();
      var d = $("#d").val();
      var e = $("#e").val();

      if (a == 4 && b == 3 && c == 2 && d == 12 && e == 10 ) {
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