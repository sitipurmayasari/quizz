@extends('layouts.siswa')
@section('content')
  <h2 class="mb-4">E. Operasi Hitung Pembagian Pecahan Campuran</h2>
  <p>
    Pembagian pecahan campuran yaitu pecahan yang terdiri dari bilangan bulat dan bilangan pecahan. 
    Untuk menyelesaikannya terlebih dahulu menyederhanakan pecahan campuran menjadi bentuk pecahan 
    biasa, cara menyederhanakannya seperti berikut: <br>
    <img src="images/bacam_1.png" alt="" style="width: 100px;"><br>
    Pada persoalan diatas cara menyederhanakan pecahan campuran yakni dengan mengalikan angka 
    penyebut dengan bilangan bulat kemudian menambahkan nilai hasilnya dengan angka pembilang. 
    Hasil dari perhitungan tersebut menjadi pembilang yang baru, sedangkan penyebutnya tetap. <br>
    contoh : <br>
    4&nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>8</sub></span> 
    &nbsp;= 4 x 8 = 32 + 1 = 
    &nbsp;<span class="frac"><sup>33</sup><span>&frasl;</span><sub>8</sub></span> <br>
    contoh soal : <br>
    2&nbsp;<span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span> 
    &nbsp;: 
    3&nbsp;<span class="frac"><sup>2</sup><span>&frasl;</span><sub>3</sub></span>
    &nbsp;= 
    &nbsp;<span class="frac"><sup>7</sup><span>&frasl;</span><sub>2</sub></span>
    &nbsp;: 
    &nbsp;<span class="frac"><sup>8</sup><span>&frasl;</span><sub>3</sub></span>
    &nbsp;= 
    &nbsp;<span class="frac"><sup>7</sup><span>&frasl;</span><sub>2</sub></span>
    &nbsp;x 
    &nbsp;<span class="frac"><sup>3</sup><span>&frasl;</span><sub>8</sub></span>
    &nbsp;= 
    &nbsp;<span class="frac"><sup>21</sup><span>&frasl;</span><sub>18</sub></span>
  </p>
  

  <br><br><hr>
  <h4 class="mb-4">Ayo Mencoba!</h4>
  <p>
    Ayah siti mempunyai 4&nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span>kg 
    rambutan. Sebanyak 1&nbsp;<span class="frac"><sup>5</sup><span>&frasl;</span><sub>10</sub></span>kg 
    rambutan akan dimasukkan ke dalam plastik. Berapakah plastik yang dibutuhkan ayah siti? <br>
    Penyelesaian : <br>
    4&nbsp;<span class="frac"><sup>1</sup><span>&frasl;</span><sub>2</sub></span> 
    &nbsp;: 
    1&nbsp;<span class="frac"><sup>5</sup><span>&frasl;</span><sub>10</sub></span>
    &nbsp;= 
    &nbsp;<span class="frac"><sup>
      <input type="number" name="" id="a" style="width: 45px;" value="9" onkeyup="sum()" onclick="sum()">
    </sup><span>&frasl;</span><sub>2</sub></span>
    &nbsp;: 
    &nbsp;<span class="frac"><sup>
      <input type="number" name="" id="b" style="width: 45px;" value="15" onkeyup="sum()" onclick="sum()">
    </sup><span>&frasl;</span><sub>10</sub></span>
    &nbsp;= 
    &nbsp;<span class="frac"><sup>
      <input type="number" name="" id="c" style="width: 45px;" value="9" onkeyup="sum()" onclick="sum()">
    </sup><span>&frasl;</span><sub>2</sub></span>
    &nbsp;x 
    &nbsp;<span class="frac"><sup>
      <input type="number" name="" id="d" style="width: 45px;" value="10" onkeyup="sum()" onclick="sum()">
    </sup><span>&frasl;</span><sub> 
      <input type="number" name="" id="e" style="width: 45px;" value="15" onkeyup="sum()" onclick="sum()">
    </sub></span>
    &nbsp;= 
    &nbsp;<span class="frac"><sup>
      <input type="number" name="" id="f" style="width: 45px;" value="90" onkeyup="sum()" onclick="sum()">
    </sup><span>&frasl;</span><sub>
      <input type="number" name="" id="g" style="width: 45px;" value="30" onkeyup="sum()" onclick="sum()">
    </sub></span>
    <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
    <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
    <input type="hidden" id="jawaban_benar" value="0">
  </p>
  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: left; float: left">
      <a href="{{Route('siswa.materi',['q' => 'pembagianbiasa'])}}" class="call_to-btn btn_white-border">
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

      <a hidden id="lanjut" href="{{Route('siswa.materi',['q' => 'pembagiandesimal'])}}" class="call_to-btn btn_white-border">
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

      if (a == 9 && b == 15 && c == 9 && d == 10 && e == 15 && f == 90 && g == 30 ) {
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