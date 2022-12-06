@extends('layouts.siswa')
@section('content')
<h2 class="mb-4">F. Operasi Hitung Pengurangan Pecahan Desimal</h2>
<p>
  Cara menyelesaikan operasi pengurangan pada pecahan decimal adalah sama seperti menyelesaikan 
  operasi penjumlahan, bisa menggunakan cara bersusun. <br>
  Contoh: <br>
  5,9 - 2,5 = ...
</p>
  <table cellpadding="0">
    <tr>
      <td>5,9</td>
      <td></td>
    </tr>
    <tr>
      <td style="border-bottom: solid 1px;">2,5</td>
      <td rowspan="2" style="vertical-align: middle;"> &nbsp;- &nbsp;&nbsp; tulis kedua angka dengan posisi tanda koma sejajar</td>
    </tr>
    <tr>
      <td>...</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>5,9</td>
      <td></td>
    </tr>
    <tr>
      <td style="border-bottom: solid 1px;">2,5</td>
      <td rowspan="2" style="vertical-align: middle;"> &nbsp;- &nbsp;&nbsp; kurangkan nilai paling belakang 9-5, lakukan hal yang sama diangka depan</td>
    </tr>
    <tr>
      <td>3,4</td>
    </tr>
  </table>
<br><br><hr>
<h4 class="mb-4">Ayo Mencoba!</h4>
<br>
<p>
  Kerjakan soal pecahan tersebut menggunakan cara bersusun!
</p>
<table cellpadding="0">
  <tr>
    <td>7,5</td>
    <td></td>
  </tr>
  <tr>
    <td style="border-bottom: solid 1px;">2,5</td>
    <td rowspan="2" style="vertical-align: middle;">-</td>
  </tr>
  <tr>
    <td style="padding-top: 1px;"><input type="number" name="" step="0.1" id="a" style="width: 45px;" value="5.0" onkeyup="sum()" onclick="sum()"></td>
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
      <a href="{{Route('siswa.materi',['q' => 'pengurangancampuran'])}}" class="call_to-btn btn_white-border">
        <img src="{{asset('front/images/left-arrow.png')}}" alt="">
        <span>
          Sebelumnya
        </span>
      </a>
    </div>
    <div class="hero_btn-continer" style="text-align: right; float: right" >
      <form class="form-horizontal validate-form" role="form" method="post" action="{{route('siswa.store')}}">
        {{ csrf_field() }}
        <input type="hidden" id="status" name="status" value="{{$next->status}}">
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next->materi_code}}">
        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>

      <a hidden id="lanjut" href="{{Route('siswa.materi',['q' => 'rangkuman_1'])}}" class="call_to-btn btn_white-border">
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
      if (a == 5 ) {
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