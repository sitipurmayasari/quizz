@extends('layouts.siswa')
@section('content')
<h2 class="mb-4">B.  Operasi Hitung Penjumlahan Pecahan Campuran</h2>
<p>
  Pecahan campuran merupakan gabungan antara bilangan bulat dengan bilangan pecahan. Contohnya 
  1 &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span> &nbsp;
  yang artinya angka 1 bilangan bulat sedangkan 
  <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span> &nbsp;
  adalah bilangan pecahan. <br>
  Contoh : <br>
  1 &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> 
  &nbsp; + &nbsp;
  2 &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>3</sub></span> 
  &nbsp; = .... &nbsp;
  <br>
  Caranya dengan memisahkan bilangan bulat dengan bilangan bulat dan 
  bilangan pecahan dengan bilangan pecahan. 
  Setelah menjumlahkan masing-masing bilangan baru bisa menggambungkan antara 
  bilangan bulat dengan bilangan pecahan sebagai hasilnya.
  <br>
  Penyelesaian : <br>
  1 &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> 
  &nbsp; + 
  2 &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>3</sub></span> 
  &nbsp; = ( 1 + 2 ) + 
  &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> 
  &nbsp; + 
  &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>3</sub></span> 
  &nbsp; = 3 + 
  &nbsp; <span class="frac"><sup>3</sup><span>&frasl;</span><sub>6</sub></span> 
  &nbsp; + 
  &nbsp; <span class="frac"><sup>2</sup><span>&frasl;</span><sub>6</sub></span> 
  &nbsp; = 
  3 &nbsp; <span class="frac"><sup>5</sup><span>&frasl;</span><sub>6</sub></span> 
  <br><br>
  Contoh permasalahan dalam kehidupan sehari-hari : <br>
  Ibu membeli 
  1 &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> kg telur dan 
  2 &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span> kg 
  tepung. Berapa kg seluruh belanjaan ibu? <br>
  Penyelesaian :
</p>
<table style="width: 100%;">
  <tr>
    <td>
      1 &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> 
      &nbsp; + 
      2 &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span> 
      &nbsp; = ( 1 + 2 ) + 
      &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> 
      &nbsp; + 
      &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span> 
      &nbsp; = 3 + 
      &nbsp; <span class="frac"><sup>2</sup><span>&frasl;</span><sub>4</sub></span> 
      &nbsp; + 
      &nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span> 
      &nbsp; = 
      3 &nbsp; <span class="frac"><sup>3</sup><span>&frasl;</span><sub>4</sub></span>
      &nbsp; Kg
    </td>
    <td><img src="{{asset('front/images/tepung.jpg')}}" style="width: 200px;"></td>
  </tr>
</table>

<br><br><hr>
<h4 class="mb-4">Ayo Mencoba!</h4>
<br>
<p>
  Perhatikan gambar berikut.<br>
  Disebuah posyandu, terdapat bayi kembar yang masing-masing beratnya adalah 
  2&nbsp; <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span> &nbsp; Kg
  dan 
  3&nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> &nbsp; Kg.
  Jika jumlah berat kedua bayi kembar tersebut dijumlahkan, maka total berat kedua bayi tersebut adalah…
  <br>
  Jawab : <br>
  2&nbsp; <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span> &nbsp;
  &nbsp; + 
  3&nbsp; <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> &nbsp;
  &nbsp; = 
  ( 3 + 
  <input type="number" name="a" id="a" style="width: 35px;"  onclick="sum()" onkeyup="sum()"  value="2"> ) +
  &nbsp; <span class="frac"><sup>
    <input type="number" name="b" id="b" style="width: 35px;"  onclick="sum()" onkeyup="sum()"  value="2">
  </sup><span>&frasl;</span><sub>3</sub></span> &nbsp; +
  &nbsp; <span class="frac"><sup>
    <input type="number" name="c" id="c" style="width: 35px;"  onclick="sum()" onkeyup="sum()"  value="1">
  </sup><span>&frasl;</span><sub>2</sub></span>
  &nbsp; = 
  <input type="number" name="d" id="d" style="width: 35px;"  onclick="sum()" onkeyup="sum()" value="5"> +
  &nbsp; <span class="frac"><sup>
    4
  </sup><span>&frasl;</span><sub>
    <input type="number" name="e" id="e" style="width: 35px;"  onclick="sum()" onkeyup="sum()" value="6">
  </sub></span> &nbsp; +
  &nbsp; <span class="frac"><sup>
    <input type="number" name="f" id="f" style="width: 35px;"  onclick="sum()" onkeyup="sum()" value="3">
  </sup><span>&frasl;</span><sub>
    <input type="number" name="g" id="g" style="width: 35px;"  onclick="sum()" onkeyup="sum()" value="6">
  </sub></span>
  &nbsp; = 
  <input type="number" name="h" id="h" style="width: 35px;"  onclick="sum()" onkeyup="sum()" value="5">
  &nbsp; <span class="frac"><sup>
    <input type="number" name="st_hsl_atas" id="st_hsl_atas" style="width: 35px;"  onclick="sum()" onkeyup="sum()" value="7">
  </sup><span>&frasl;</span><sub>
    <input type="number" name="st_hsl_bwh" id="st_hsl_bwh" style="width: 35px;"  onclick="sum()" onkeyup="sum()" value="6">
  </sub></span> Kg
  <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
  <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
  <input type="hidden" id="jawaban_benar" value="0">
  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: left; float: left">
      <a href="{{Route('siswa.materi',['q' => 'penjumlahanbiasa'])}}" class="call_to-btn btn_white-border">
        <img src="{{asset('front/images/left-arrow.png')}}" alt="">
        <span>
        Sebelumnya
        </span>
      </a>
    </div>
    <div  class="hero_btn-continer" style="text-align: right; float: right">
      <form class="form-horizontal validate-form" role="form" method="post" action="{{route('siswa.store')}}">
        {{ csrf_field() }}
        <input type="hidden" id="status" name="status" value="{{$next ? $next->status : 0}}">
        <input type="hidden" id="materi_code" name="materi_code" value="{{Request('q')}}">
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next ? $next->materi_code : 'penjumlahandesimal'}}">

        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>

      <a id="lanjut" hidden href="{{Route('siswa.materi',['q' => 'penjumlahandesimal'])}}" class="call_to-btn btn_white-border">
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
      var i = $("#st_hsl_atas").val();
      var j = $("#st_hsl_bwh").val();

      if (a == 2 && b == 2 && c == 1 && d == 5 && e == 6 && f == 3 && g == 6 && h == 5 && i == 7 && j == 6 ) {
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

// function soal1() {
//       var bawah1 = document.getElementById("st_bawah");
//       var bawah2 = document.getElementById("st_bwh_knn");

//       var masukAtas = document.getElementById("st_atas");
//       var masuk2Atas = document.getElementById("st_atas_knn");
      

//       var keluar = document.getElementById("st_hsl_bwh");
//       var keluarAtas = document.getElementById("st_hsl_ats");

//       var m = Number(bawah1.value);
//       var m2 = Number(bawah2.value);
//       var a, b, c = m*m2, d;
//       for( i = 1; i <= c; i++ ) {
//           a = i%m;
//           b = i%m2;
//           if ( a == 0 && b == 0 ) {
//               d = i;
//               break;
//           }
//       }
//      // keluar.value = d;
//       // alert(d);
//       var jwbn = $("#jawaban_benar").val();
//       hasilAtas = (Number(masukAtas.value) * Number(bawah2.value)) + (Number(masuk2Atas.value) * Number(bawah1.value));
//       if (d == Number(keluar.value) && hasilAtas == Number(keluarAtas.value)) {
//         $("#s1_benar").removeAttr("hidden");
       
//         var res = Number(jwbn)+1;
//         $("#jawaban_benar").val(res);
//       }else{
//         $("#s1_benar").attr("hidden",true);
//         $("#jawaban_benar").val("0");
//       }

//       var newJwbn = $("#jawaban_benar").val();
//       if (Number(newJwbn) >= 1) {
//         $("#next").removeAttr("hidden");
//       }else{
//         $("#next").attr("hidden",true);
//       }
//      // keluarAtas.value = hasilAtas;
// }
</script>
@endsection