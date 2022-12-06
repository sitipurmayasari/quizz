@extends('layouts.siswa')
@section('content')
  <h2 class="mb-4">A. Operasi Hitung Perkalian Pecahan Biasa</h2>
  <p>
    Perkalian pecahan disimbolkan dengan tanda kali(x), 
    pada perkalian pecahan tidak perlu lagi menyamakan penyebutnya seperti pada penjumlahan dan 
    pengurangan pecahan. Perkalian pecahan dilakukan dengan mengalikan pembilang dengan pembilang 
    dan penyebut dengan penyebut. <br>
    Rumus :
    <div style="border: solid 1px; padding: 10px; padding-bottom: 0px; width: fit-content;">
      <p>
        <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span>
        &nbsp;x&nbsp;
        <span class="frac"><sup>c</sup><span>&frasl;</span><sub>d</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>a x c</sup><span>&frasl;</span><sub>b x d</sub></span>
        
      </p>
    </div>
    Perhatikan contoh gambar dibawah ini : <br>
    <span class="frac"><sup>1</sup><span>&frasl;</span><sub>3</sub></span>
    &nbsp;x&nbsp;
    <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span>
    &nbsp;= ... <br>
    Pertama gambar segiempat yang sama besar, 
    lalu kita bagi tiga bagian yang sama besar secara vertical, dan 1 bagian kita beri warna kuning.
    <br>
    <img src="{{asset('front/images/kasa_1.png')}}" style="width: 200px;"><br>
    Berbeda dengan yang pertama segiempat ini kita bagi dua bagian 
    yang sama besar secara horizontal dan satu bagian kita beri warna biru. <br>
    <img src="{{asset('front/images/kasa_2.png')}}" style="width: 200px;"><br>
    Lalu kita satukan kedua segiempat tersebut dan dapat dilihat setelah disatukan kedua 
    segiempat tersebut terbagi menjadi enam bagian yang sama besar dan terdapat satu bagian yang warna nya 
    tercampur atau bisa disebut daerah hasil, 
    jadi karena daerah hasil satu dan segiempat tersebut terbagi enam maka hasilnya adalah
    <span class="frac"><sup>1</sup><span>&frasl;</span><sub>6</sub></span><br>
    <img src="{{asset('front/images/kasa_3.png')}}" style="width: 200px;"><br>
  </p>
    
  
  <br><br><hr>
  <h4 class="mb-4">Ayo Mencoba!</h4>
  <br>
  Rumah ayu memiliki taman, 
  <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span> 
  bagian dari taman ayu ditanami bunga mawar, 
  <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span>
  bagian yang tidak ditanami bunga mawar, ditanami melati. <br>
  Apabila taman yang ditanami melati dibandingkan dengan taman keseluruhan, 
  berapakah bagian taman yang ditanami melati ? <br>
  Jawab: <br>
  <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span> 
  &nbsp;X&nbsp;
  <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span> 
  &nbsp;=&nbsp;
  <span class="frac"><sup>1 X 
    <input type="number" name="" id="a" style="width: 35px;" value="1" onkeyup="sum()" onclick="sum()">
  </sup><span>&frasl;</span><sub>
    <input type="number" name="" id="b" style="width: 35px;" value="4" onkeyup="sum()" onclick="sum()">
  X 5</sub></span>
  &nbsp;=&nbsp; 
  <span class="frac"><sup><input type="number" name="" id="c" style="width: 45px;" value="1" onkeyup="sum()" onclick="sum()">
  </sup><span>&frasl;</span><sub><input type="number" name="" id="d" style="width: 45px;" value="20" onkeyup="sum()" onclick="sum()">
  </sub></span> 
    <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
    <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
    <input type="hidden" id="jawaban_benar" value="0">
  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: right; float: right">
      <form class="form-horizontal validate-form" role="form" method="post" action="{{route('siswa.store')}}">
        {{ csrf_field() }}
        <input type="hidden" id="status" name="status" value="{{$next->status}}">
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next->materi_code}}">
        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>

      <a hidden id="lanjut" href="{{Route('siswa.materi',['q' => 'perkaliancampuran'])}}" class="call_to-btn btn_white-border">
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
      var f = $("#f").val();
      var g = $("#g").val();
      var h = $("#h").val();
      var i = $("#i").val();

      if (a == 1 && b == 4 && c == 1 && d == 20 ) {
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