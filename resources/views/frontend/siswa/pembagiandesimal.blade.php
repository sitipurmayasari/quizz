@extends('layouts.siswa')
@section('content')
<h2 class="mb-4">F. Operasi Hitung Pembagian Pecahan Desimal</h2>
<p>
  Pembagian desimal dengan mengubah pecahan bilangan desimal adalah bentuk lain dari pecahan dengan 
  penyebut 10, 100, 1000, dan seterusnya. Pembagian bilangan desimal dapat dilakukan dengan 
  cara mengubah bilangan desimal tersebut menjadi bentuk pecahan. <br>
  Contoh 0,5 : 0,35 = ... <br>
  Penyelesaian <br>
  0,5 : 0,35 = 
  &nbsp;<span class="frac"><sup>5</sup><span>&frasl;</span><sub>10</sub></span>
  &nbsp;: 
  &nbsp;<span class="frac"><sup>35</sup><span>&frasl;</span><sub>100</sub></span>
  &nbsp;= 
  &nbsp;<span class="frac"><sup>5</sup><span>&frasl;</span><sub>10</sub></span>
  &nbsp;x 
  &nbsp;<span class="frac"><sup>100</sup><span>&frasl;</span><sub>35</sub></span>
  &nbsp;= 
  &nbsp;<span class="frac"><sup>500</sup><span>&frasl;</span><sub>350</sub></span> 
  &nbsp;= 
  1&nbsp;<span class="frac"><sup>150</sup><span>&frasl;</span><sub>350</sub></span> 
</p>

<br><br><hr>
<h4 class="mb-4">Ayo Mencoba!</h4>
<p>
  Siti ingin membantu ibu membuat kue sarang semut , setiap adonan membutuhkan 1,5kg tepung. 
  Siti memiliki 0,05kg tepung. Berapa adonan yang dapat dibuat Aminah dan ibu? <br>
  Jawab : <br>
  Masing-masing pecahan decimal diubah ke pecahan biasa, sehingga <br>
  1.5 &rarr; karena ada satu angka dibelakang koma maka menjadi persepuluh <br>
  0,05 &rarr; karena ada dua angka dibelakang koma maka menjadi perseratus <br>
  1,5 : 0,05 =
  <span class="frac"><sup>
    <input type="number" name="" id="a" style="width: 45px;" value="15" onkeyup="sum()" onclick="sum()">
  </sup><span>&frasl;</span><sub>10</sub></span>
  &nbsp;: 
  <span class="frac"><sup>
    <input type="number" name="" id="b" style="width: 45px;" value="5" onkeyup="sum()" onclick="sum()">
  </sup><span>&frasl;</span><sub>100</sub></span>
  &nbsp;= 
  <span class="frac"><sup>
    <input type="number" name="" id="c" style="width: 45px;" value="15" onkeyup="sum()" onclick="sum()">
  </sup><span>&frasl;</span><sub>10</sub></span>
  &nbsp;x 
  <span class="frac"><sup>100</sup><span>&frasl;</span><sub>
    <input type="number" name="" id="d" style="width: 45px;"  value="5" onkeyup="sum()" onclick="sum()">
  </sub></span>
  &nbsp;= 
  <span class="frac"><sup>
    <input type="number" name="" id="e" style="width: 50px;"  value="150" onkeyup="sum()" onclick="sum()">
  </sup><span>&frasl;</span><sub>
    <input type="number" name="" id="f" style="width: 50px;"  value="50" onkeyup="sum()" onclick="sum()">
  </sub></span> 
  <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
    <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
    <input type="hidden" id="jawaban_benar" value="0">
</p>
  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: left; float: left">
      <a href="{{Route('siswa.materi',['q' => 'pembagiancampuran'])}}" class="call_to-btn btn_white-border">
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

      <a hidden id="lanjut" href="{{Route('siswa.materi',['q' => 'rangkuman_2'])}}" class="call_to-btn btn_white-border">
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

      if (a == 15 && b == 5 && c == 15 && d == 5 && e == 150 && f == 50 ) {
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