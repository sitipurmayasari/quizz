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
    <td> 
      <br>
      2&nbsp;<span class="frac"><sup>3</sup><span>&frasl;</span><sub>4</sub></span>
      &nbsp;=&nbsp;
      <span class="frac"><sup>
        <input type="number" name="" id="a" style="width: 35px;" value="6" onkeyup="sum()" onclick="sum()">
      </sup><span>&frasl;</span><sub>4</sub></span>
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
    
   function sum() {
      var a = $("#a").val();

      if (a == 6 ) {
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