@extends('layouts.siswa')
@section('content')
<h2 class="mb-4">A. Operasi Hitung Penjumlahan Pecahan Biasa</h2>
<p>
  Penjumlahan bilangan pecahan disimbolkan dengan tanda tambah (+) , 
  Dalam penjumlahan bilangan pecahan dapat dilakukan jika penyebutnya sama. 
  Ubah pecahan menjadi pecahan lain senilai sehingga penyebutnya sama, 
  bilangan yang dijumlahkan hanya bilangan pada pembilang saja. 
  Apabila penyebutnya berbeda maka harus dilakukan terlebih dahulu dengan cara mencari KPK 
  dari penyebut-penyebutnya.
</p>
<p>Rumus penjumlahan pecahan dengan berpenyebut berbeda</p>
<div style="border: solid 1px; padding: 10px; padding-bottom: 0px; width: fit-content;">
  <p>
    <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span>
    &nbsp;+&nbsp;
    <span class="frac"><sup>c</sup><span>&frasl;</span><sub>d</sub></span>
    &nbsp;=&nbsp;
    <span class="frac"><sup>ad + bc</sup><span>&frasl;</span><sub>bd</sub></span>
  </p>
</div>
<p><br>
  Contoh : <br><br>
  <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span>
  &nbsp;+&nbsp;
  <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span>
  &nbsp;= &nbsp; ....
  <br><br>
  Penyelesaian : <br>
  Mencari KPK dari penyebut 3 dan 4 <br>
  Kelipatan 3 adalah 3, 6, 9, 12, 15, 18, 21, 24,…. <br>
  Kelipatan 4 adalah 4, 8, 12, 16, 20, 24,….. <br>
  KPK dari penyebut 3 dan 4 adalah 12 <br><br>
  Jadi, &nbsp;&nbsp;
  <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span>
  &nbsp;+&nbsp;
  <span class="frac"><sup>1</sup><span>&frasl;</span><sub>4</sub></span>
  &nbsp;= &nbsp;
  <span class="frac"><sup>2 x 4</sup><span>&frasl;</span><sub>12</sub></span>
  &nbsp;+&nbsp;
  <span class="frac"><sup>1 x 3</sup><span>&frasl;</span><sub>12</sub></span>
  &nbsp;= &nbsp;
  <span class="frac"><sup>8</sup><span>&frasl;</span><sub>12</sub></span>
  &nbsp;+&nbsp;
  <span class="frac"><sup>3</sup><span>&frasl;</span><sub>12</sub></span>
  &nbsp;= &nbsp;
  <span class="frac"><sup>11</sup><span>&frasl;</span><sub>12</sub></span>
</p>
<!-- 3&frac25; -->
<br><br><hr>
<h4 class="mb-4">Ayo Mencoba!</h4>
<br>
<p>
  Perhatikan gambar berikut.<br>
  Tuliskan pecahan-pecahannya dengan pecahan senilai. Buatlah penyebutnya sama!</p>
  <table>
    <tr>
      <td>
        <img src="{{asset('front/images/modul1/A_1_1.png')}}" style="width: 200px;">
      </td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>
        &nbsp; &nbsp; &nbsp;
        <span class="frac"><sup>
          <input type="number" name="st_atas" id="st_atas" value="1" style="width: 40px;" onclick="sum()" onkeyup="sum()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="st_bawah" id="st_bawah" value="2" style="width: 40px;" onclick="sum()" onkeyup="sum()">
        </sub></span>
        &nbsp; &nbsp; &nbsp; + &nbsp; &nbsp; &nbsp; 
        <span class="frac"><sup>
          <input type="number" name="st_atas_knn" id="st_atas_knn" value="1" style="width: 40px;" onclick="sum()" onkeyup="sum()">
        </sup><span>&frasl;</span><sub>
          <input type="number" name="st_bwh_knn" id="st_bwh_knn" value="3"  style="width: 40px;" onclick="sum()" onkeyup="sum()">
        </sub></span>
      </td>
      <td>=</td>
      <td>
        <span class="frac"><sup>
          {{-- <input type="text" name="st_hsl_ats" id="st_hsl_ats" style="width: 40px;" onkeyup="soal1()" value="5"> --}}
          <input type="number" name="st_hsl_ats" id="st_hsl_ats" style="width: 40px;" value="5" onclick="sum()" onkeyup="sum()">
        </sup><span>&frasl;</span><sub>
          {{-- <input type="text" name="st_hsl_bwh" id="st_hsl_bwh" style="width: 40px;" onkeyup="soal1()" value="6"> --}}
          <input type="number" name="st_hsl_bwh" id="st_hsl_bwh" style="width: 40px;" value="6" onclick="sum()" onkeyup="sum()">
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
      <a href="{{Route('siswa.materi',['q' => 'pengertian'])}}" class="call_to-btn btn_white-border">
      <img src="{{asset('front/images/left-arrow.png')}}" alt="">
      <span>
        Sebelumnya
      </span>
            </a>
    </div>
    <div class="hero_btn-continer" style="text-align: right; float: right">
      <form class="form-horizontal validate-form" role="form" method="post" action="{{route('siswa.store')}}">
        {{ csrf_field() }}
        <input type="hidden" id="status" name="status" value="{{$next ? $next->status : 0}}">
        <input type="hidden" id="materi_code" name="materi_code" value="{{Request('q')}}">
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next ? $next->materi_code : 'penjumlahancampuran'}}">

        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya <img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>
      <a id="lanjut" hidden href="{{Route('siswa.materi',['q' => 'penjumlahancampuran'])}}" class="call_to-btn btn_white-border">
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
    var a = $("#st_atas").val();
      var b = $("#st_bawah").val();
      var c = $("#st_atas_knn").val();
      var d = $("#st_bwh_knn").val();
      var e = $("#st_hsl_ats").val();
      var f = $("#st_hsl_bwh").val();

      if (a == 1 && b == 2 && c == 1 && d == 3 && e == 5 && f == 6) {
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
// function soal2() {
//       var bawah1 = document.getElementById("st_bawah2");
//       var bawah2 = document.getElementById("st_bwh_knn2");

//       var masukAtas = document.getElementById("st_atas2");
//       var masuk2Atas = document.getElementById("st_atas_knn2");
      

//       var keluar = document.getElementById("st_hsl_bwh2");
//       var keluarAtas = document.getElementById("st_hsl_ats2");

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
//       // keluar.value = d;

//       hasilAtas = (Number(masukAtas.value) * Number(bawah2.value)) + (Number(masuk2Atas.value) * Number(bawah1.value));
//       // keluarAtas.value = hasilAtas;
//       var jwbn = $("#jawaban_benar").val();
//       if (d == Number(keluar.value) && hasilAtas == Number(keluarAtas.value)) {
//         $("#s2_benar").removeAttr("hidden");
//         var res = Number(jwbn)+1;
//         $("#jawaban_benar").val(res);
//       }else{
//         $("#s2_benar").attr("hidden",true);
//         var res = Number(jwbn)+0;
//         $("#jawaban_benar").val(res);
//       }
//       var newJwbn = $("#jawaban_benar").val();
//       if (Number(newJwbn) == 3) {
//         $("#next").removeAttr("hidden");
//       }
// }
// function soal3() {
//       var bawah1 = document.getElementById("st_bawah3");
//       var bawah2 = document.getElementById("st_bwh_knn3");

//       var masukAtas = document.getElementById("st_atas3");
//       var masuk2Atas = document.getElementById("st_atas_knn3");
      

//       var keluar = document.getElementById("st_hsl_bwh3");
//       var keluarAtas = document.getElementById("st_hsl_ats3");

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
//       // keluar.value = d;

//       hasilAtas = (Number(masukAtas.value) * Number(bawah2.value)) + (Number(masuk2Atas.value) * Number(bawah1.value));
//       // keluarAtas.value = hasilAtas;
//       var jwbn = $("#jawaban_benar").val();
//       if (d == Number(keluar.value) && hasilAtas == Number(keluarAtas.value)) {
//         $("#s3_benar").removeAttr("hidden");
//         var res = Number(jwbn)+1;
//         $("#jawaban_benar").val(res);
//       }else{
//         $("#s3_benar").attr("hidden",true);
//         var res = Number(jwbn)+0;
//         $("#jawaban_benar").val(res);

//       }
//       var newJwbn = $("#jawaban_benar").val();
//       if (Number(newJwbn) == 3) {
//         $("#next").removeAttr("hidden");
//       }
// }
</script>
@endsection