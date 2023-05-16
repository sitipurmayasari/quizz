@extends('layouts.siswa')
@section('content')
  <h1 class="mb-4"style=" width: auto;
  background-color: #EAEAEA;
  padding: 8px 8px;
  border-left: 5px solid  #064635;
  word-wrap: break-word;
  line-height: 1.e4m;;">Perkalian Pecahan</h1>
  <hr>
  <div style="border: solid 1px; width: fit-content;border-color:orange; color-back;  background-color:white;">
  <div style="margin:0; pading:0; text-align:center; background-color:orange; color:white">
  <b>Tujuan Pembelajaran</b>
  </div>
  <p> 
  1. Peserta didik dapat mengidentifikasi perkalian dua pecahan biasa dengan penyebut 
  berbeda dengan benar. <br>
  2. Peserta didik dapat menyelesaikan masalah yang berkaitan dengan perkalian dua 
  pecahan biasa penyebut berbeda dengan benar.
  </p>
  </div>
  <br>
  <h2 class="mb-4">A. Operasi Hitung Perkalian Pecahan Biasa</h2>
  <p>
    Setelah memahami operasi penjumlahan dan pengurangan, sekarang kamu akan mempelajari 
    operasi pekalian dan pembagian pecahan. <br>
    Pada perkalian bilangan pecahan biasa, langkah pertama yang harus kita lakukan adalah
    mengalikan pembilang dengan pembilang dan penyebut dengan penyebut. <br>
    Rumus perkalian pecahan biasa : <br>
    <div style="border: solid 1px; padding: 10px; padding-bottom: 0px; width: fit-content;">
      <p>
        <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span>
        &nbsp;x&nbsp;
        <span class="frac"><sup>c</sup><span>&frasl;</span><sub>d</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>a x c</sup><span>&frasl;</span><sub>b x d</sub></span>
        
      </p>
    </div>
    <br><br>
   <b>Ayo Amati dan simak penjelasan berikut!</b> <br>
    <p>
      <span class="frac"><sup>1</sup><span>&frasl;</span><sub>3</sub></span> &nbsp; x
      <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; = ... <br>
      <img src="{{asset('images/materi/kali1/satu.png')}}" alt="" >
      <br><br>
      Segiempat pertama kita bagi menjadi 3 bagian secara vertical dan 1bagian kita beri warna 
      merah, segiempat yang kedua kita bagi menjadi dua bagian sama besar secara horizontal dan 1 
      bagian diberi warna hijau. Setelah itu kita satukan kedua segiempat tersebut, nah dapat kita 
      lihat setelah kita satukan segiempat tersebut terbagi menjadi 6bagian yang sama besar dan 
      terdapat 1bagian yang warnanya bercampur , daerah yang tercampur disebut daerah hasil jadi <br>
      <span class="frac"><sup>1</sup><span>&frasl;</span><sub>3</sub></span> &nbsp; x
      <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; = 
      <span class="frac"><sup>1</sup><span>&frasl;</span><sub>6</sub></span> &nbsp; <br><br>
      Contoh <br>
      Pak Ahmad seorang petani, dia menanam berbagai macam tanaman di ladangnya. Setengah dari 
      seperenam luas lahannya akan ditanami cabai. Berapa bagian luas lahan yang di tanami cabai 
      pak Ahmad?
      <img src="{{asset('images/materi/kali1/dua.png')}}" alt="" >
      <br><br>
      <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; x
      <span class="frac"><sup>1</sup><span>&frasl;</span><sub>6</sub></span> &nbsp; = 
      <span class="frac"><sup>1</sup><span>&frasl;</span><sub>12</sub></span> &nbsp; <br><br>
      jadi pembilang dikali dengan pembilang, penyebut dikali dengan penyebut <br>
    </p>

    
  
  <br><br><hr>
  <h4 class="mb-4">Asyik Mencoba!</h4>
  <br>
  <p>Tentukan masalah perkalian pecahan biasa di bawah ini! Jawaban benar akan berwarna biru, 
    jika salah akan berwarna merah.</p>
  <table>
    <tr>
      <td style="vertical-align: top; width:30px;">1. </td>
      <td> <img src="{{asset('images/materi/kali1/tiga.png')}}" alt="" style="width: 200px;"> {{-- soal no 1 --}}
        <br><br>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; x
        <span class="frac"><sup>2</sup><span>&frasl;</span><sub>5</sub></span> &nbsp; = 
        <span class="frac"><sup>2</sup><span>&frasl;</span><sub>10</sub></span> &nbsp; <br><br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;">2. </td>
      <td> <img src="{{asset('images/materi/kali1/empat.png')}}" alt="" style="width: 200px;"> {{-- soal no 1 --}}
        <br><br>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; x
        <span class="frac"><sup>3</sup><span>&frasl;</span><sub>4</sub></span> &nbsp; = 
        <span class="frac"><sup>
          <input type="number" name="a1" id="a1" value="" style="width: 40px;" onclick="satu()" onkeyup="satu()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="b1" id="b1" value="" style="width: 40px;" onclick="satu()" onkeyup="satu()">
        </sub></span>
        <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar1" value="0">
        <br><br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;">3. </td>
      <td> <img src="{{asset('images/materi/kali1/lima.png')}}" alt="" style="width: 200px;"> {{-- soal no 1 --}}
        <br><br>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <span class="frac"><sup>
          <input type="number" name="a2" id="a2" style="width: 40px;" value="" onclick="dua()" onkeyup="dua()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="b2" id="b2" style="width: 40px;" value="" onclick="dua()" onkeyup="dua()">
        </sub></span>
        &nbsp; &nbsp; &nbsp; x &nbsp; &nbsp; &nbsp; 
        <span class="frac"><sup>
          <input type="number" name="c2" id="c2" value="" style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="d2" id="d2" value=""  style="width: 40px;" onclick="dua()" onkeyup="dua()">
        </sub></span>
        &nbsp; = &nbsp; 
        <span class="frac"><sup>
          <input type="number" name="e2" id="e2" style="width: 40px;" value="" onclick="dua()" onkeyup="dua()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="f2" id="f2" style="width: 40px;" value="" onclick="dua()" onkeyup="dua()">
        </sub></span>
        <span id="s2_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s2_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar2" value="0">
        <br><br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;">4. </td>
      <td>
        Rumah ayu memiliki taman,  <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span> &nbsp;
        bagian dari taman ayu ditanami bunga mawar, <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span> &nbsp;
        bagian yang 
        tidak ditanami bunga mawar, ditanami melati.
        Apabila taman yang ditanami melati dibandingkan dengan taman keseluruhan, berapakah 
        bagian taman yang ditanami melati ?
        <br><br>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span> &nbsp; x
        <span class="frac"><sup>1</sup><span>&frasl;</span><sub>5</sub></span> &nbsp; = 
        <span class="frac"><sup>1</sup><span>&frasl;</span><sub>
          <input type="number" name="a3" id="a3" style="width: 40px;" value="" onclick="tiga()" onkeyup="tiga()">
        </sub></span>
        &nbsp; &nbsp; &nbsp; x &nbsp; &nbsp; &nbsp; 
        <span class="frac"><sup>
          <input type="number" name="b3" id="b3" value="" style="width: 40px;" onclick="tiga()" onkeyup="tiga()">
        </sup><span>&frasl;</span><sub>5</sub></span>
        &nbsp; = &nbsp; 
        <span class="frac"><sup>
          <input type="number" name="c3" id="c3" style="width: 40px;" value="" onclick="tiga()" onkeyup="tiga()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="d3" id="d3" style="width: 40px;" value="" onclick="tiga()" onkeyup="tiga()">
        </sub></span>
        &nbsp;&nbsp;&nbsp;
        <span id="s3_benar" hidden class="badge badge-pill badge-success">Benar</span>
        <span id="s3_salah" hidden class="badge badge-pill badge-danger">Salah</span>
        <input type="hidden" id="jawaban_benar3" value="0">
        <br><br>
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
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next ? $next->materi_code : 'perkaliancampuran'}}">
        <input type="hidden" id="now" name="now" value="{{$lastkuis}}">
        

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
    var now = $("#now").val();
    
    if (status == 1) {
      $("#lanjut").removeAttr("hidden");
    }

    if (now != '1') {
      myFunction()
    }
  });

  function myFunction() {
      if (window.confirm('Wah, Nilai KKM mu masih belum memenuhi niiih, silahkan ulangi lagi kuisnya!'))
        {
          window.location.href = "/siswa/quiz/bab-1";
        }
        else{
          window.location.href = "/home";
        }

    } 

  function satu() {
      var a1 = $("#a1").val();
      var b1 = $("#b1").val();

      if (a1 == 3 && b1 == 8 ) {
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
      var c2 = $("#c2").val();
      var d2 = $("#d2").val();
      var e2 = $("#e2").val();
      var f2 = $("#f2").val();

      if (a2 == 2 && b2 == 6 && c2 == 3 && d2 == 2 && e2 == 6 && f2 == 12 ) {
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

      if (a3 == 4 && b3 == 1 && c3 == 1 && d3 == 20  ) {
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