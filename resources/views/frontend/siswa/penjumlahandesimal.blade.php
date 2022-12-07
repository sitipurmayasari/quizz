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
      <td>1,5</td>
      <td></td>
    </tr>
    <tr>
      <td style="border-bottom: solid 1px;">0,5</td>
      <td rowspan="2" style="vertical-align: middle;">+</td>
    </tr>
    <tr>
      <td style="padding-top: 1px;"><input type="number" name="" id="nilai" style="width: 45px;" step="0.1" value="2.0" onclick="sum()" onkeyup="sum()"></td>
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
        <input type="hidden" id="status" name="status" value="{{$next ? $next->status : 0}}">
        <input type="hidden" id="materi_code" name="materi_code" value="{{Request('q')}}">
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next ? $next->materi_code : 'penguranganbiasa'}}">

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


   function sum() {
      var a = $("#nilai").val();
     
      if (a == 2.0) {
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