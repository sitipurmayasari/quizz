@extends('layouts.siswa')
@section('content')
  <h2 class="mb-4">D. Operasi Hitung Pengurangan Pecahan Biasa</h2>
  <p>
    Pengurangan pecahan disimbolkan dengan tanda kurang(-), 
    dalam pengurangan bilangan pecahan yang memiliki penyebut yang sama, 
    bilangan yang dikurangkan hanya bilangan pada pembilangnya saja. 
    Sedangkan pengurangan bilangan pecahan yang berbeda penyebutnya tidak dapat 
    dilakukan secara langsung, namun harus terlebih dahulu menyamakan penyebutnya 
    dengan menggunakan KPK dari penyebut-penyebutnya. <br>
    Rumus pengurangan pecahan dengan berpenyebut berbeda
  </p>
  <div style="border: solid 1px; padding: 10px; padding-bottom: 0px; width: fit-content;">
    <p>
      <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span>
      &nbsp;-&nbsp;
      <span class="frac"><sup>c</sup><span>&frasl;</span><sub>d</sub></span>
      &nbsp;=&nbsp;
      <span class="frac"><sup>ad - bc</sup><span>&frasl;</span><sub>bd</sub></span>
    </p>
  </div>
  <p><br>
    Contoh : <br>
    <img src="{{asset('front/images/kurbis.png')}}" style="width: 300px;"> <br> <br>
    <span class="frac"><sup>2</sup><span>&frasl;</span><sub>4</sub></span>
    &nbsp;-&nbsp;
    <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span>
    &nbsp;= &nbsp; ....
    <br><br>
    Penyelesaian : <br>
    Carilah Kelipatan Persekutuan Terkecil (KPK) dari penyebut 4 dan 2 <br>
    Kelipatan 4 adalah 4, 8, 12,.. <br>
    Kelipatan 2 adalah 2, 4, 6, 8, 10,... <br>
    KPK dari penyebut 4 dan 2 adalah 8, selanjutnya ubah pecahan menjadi pecahan senilai dengan penyebut 8. <br><br>
    Jadi, &nbsp;&nbsp;
    <span class="frac"><sup>2</sup><span>&frasl;</span><sub>4</sub></span>
    &nbsp;-&nbsp;
    <span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span>
    &nbsp;= &nbsp;
    <span class="frac"><sup>2</sup><span>&frasl;</span><sub>8</sub></span>
    &nbsp;-&nbsp;
    <span class="frac"><sup>1</sup><span>&frasl;</span><sub>8</sub></span>
    &nbsp;= &nbsp;
    <span class="frac"><sup>1</sup><span>&frasl;</span><sub>8</sub></span>
  </p>
  <br><br><hr>
  <h4 class="mb-4">Ayo Mencoba!</h4>
  <br>
  <p>
    Kakak memiliki susu 
    &nbsp;<span class="frac"><sup>5</sup><span>&frasl;</span><sub>6</sub></span>&nbsp;
    liter. Kemudian diberikan kepada adik
    &nbsp;<span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span>&nbsp;
    liter. maka, sisa berapa liter susu yang dimiliki kakak sekarang… <br>
    Jawab : <br>
    <span class="frac"><sup>5</sup><span>&frasl;</span><sub>6</sub></span>
    &nbsp;-&nbsp;
    <span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span>
    &nbsp;= &nbsp;
    <span class="frac"><sup>5
    </sup><span>&frasl;</span><sub>
      <input type="number" name="" id="bawah_a" style="width: 35px;" value="6" onkeyup="sum()" onclick="sum()">
    </sub></span>
    &nbsp;-&nbsp;
    <span class="frac"><sup>
      <input type="number" name="" id="atas_b" style="width: 35px;" value="4" onkeyup="sum()" onclick="sum()">
    </sup><span>&frasl;</span><sub>
      <input type="number" name="" id="bawah_b" style="width: 35px;" value="6" onkeyup="sum()" onclick="sum()">
    </sub></span>
    &nbsp;= &nbsp;
    <span class="frac"><sup>
      <input type="number" name="" id="atas_c" style="width: 35px;" value="1" onkeyup="sum()" onclick="sum()">
    </sup><span>&frasl;</span><sub>
      <input type="number" name="" id="bawah_c" style="width: 35px;" value="6" onkeyup="sum()" onclick="sum()">
    </sub></span>
      &nbsp;&nbsp;
      <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
      <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
      <input type="hidden" id="jawaban_benar" value="0">
  </p>
  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: left; float: left">
      <a href="{{Route('siswa.materi',['q' => 'penjumlahandesimal'])}}" class="call_to-btn btn_white-border">
      <img src="{{asset('front/images/left-arrow.png')}}" alt="">
      <span>
        Sebelumnya
      </span>
            </a>
    </div>
    <div class="hero_btn-continer" style="text-align: right; float: right">
      <form class="form-horizontal validate-form" role="form" method="post" action="{{route('siswa.store')}}">
        {{ csrf_field() }}
        <input type="hidden" id="status" name="status" value="{{$next->status}}">
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next->materi_code}}">
        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>

      <a hidden id="lanjut" href="{{Route('siswa.materi',['q' => 'pengurangancampuran'])}}" class="call_to-btn btn_white-border">
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
      var a2 = $("#bawah_a").val();
      var b1 = $("#atas_b").val();
      var b2 = $("#bawah_b").val();
      var c1 = $("#atas_c").val();
      var c2 = $("#bawah_c").val();

      if (a2 == 6 && b1 == 4 && b2 == 6 && c1 == 1 && c2 == 6) {
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