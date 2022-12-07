@extends('layouts.siswa')
@section('content')
<h2 class="mb-4">C. Operasi Hitung Perkalian Pecahan Desimal</h2>
<p>
  Bilangan Pecahan desimal adalah bentuk lain dari suatu pecahan. 
  Ciri dari pecahan desimal adalah tanda koma ( , ) 
  Bilangan desimal merupakan bentuk lain dari pecahan dengan penyebut 10, 100, 1000, dan seterusnya. 
  Penyelesaian perkalian desimal dapat dilakukan dengan cara mengubah bentuk desimal menjadi pecahan,
  atau mengalikan langsung dengan cara susun <br>
  Contoh Bentuk Pecahan Desimal <br>
  Bentuk pecahan desimal dari 
  <span class="frac"><sup>2</sup><span>&frasl;</span><sub>10</sub></span> adalah 0,2 <br>
  Bentuk pecahan desimal dari 
  <span class="frac"><sup>2</sup><span>&frasl;</span><sub>100</sub></span> adalah 0,02 <br>
  Bentuk pecahan desimal dari 
  <span class="frac"><sup>2</sup><span>&frasl;</span><sub>1000</sub></span> adalah 0,002 <br>
  contoh <br>
  <table style="width: 100%;">
    <tr>
      <td>
        Ani membeli buah apel 4 buah. Setiap buah apel memiliki berat 0,165 kg. 
        Berapakah berat buah apel yang dibeli Ani? <br>
        Berat keempat buah apel tersebut dapat dihitung dengan cara  
        0,165 + 0,165 + 0,165 + 0,165 atau 4 x 0,165 <br>
        Contoh :<br>
        0,1 x 0,25 = ... <br>
        Cara pertama dapat diubah menjadi bentuk pecahan. Kemudian, pecahan tersebut dikalikan. <br>
        0,1 x 0,25 =&nbsp;
        <span class="frac"><sup>1</sup><span>&frasl;</span><sub>10</sub></span>
        &nbsp;X&nbsp;
        <span class="frac"><sup>25</sup><span>&frasl;</span><sub>100</sub></span>
        &nbsp;=&nbsp;
        <span class="frac"><sup>25</sup><span>&frasl;</span><sub>1000</sub></span>
        &nbsp;= 0,025 <br>
        Atau cara kedua dengan menggunakan perkalian bersusun <br>
        0,1 x 0,25 = 0,025 <br>
        <img src="images/kades_2.png" alt="" style="width: 80px;"> <br><br>

        0,1 &rarr; 1 angka dibelakang koma <br>
        0,25	&rarr;	2 angka dibelakang koma 	<br>
        0,025	&rarr;	3 angka dibelakang koma <br>


        </td>
      <td style="vertical-align: top; text-align:right;"><img src="images/kades_1.png" alt="" style="width: 100px;"></td>
    </tr>
  </table>
</p>
 

<br><br><hr>
<h4 class="mb-4">Ayo Mencoba!</h4>
<p>
  Ibu akan memasak opor ayam sebanyak 5porsi. Setiap porsi opor ayam memerlukan 0,55 liter santan. 
  Berapa liter santtan yang diperlukan oleh ibu <br>
  Penyelesaian: <br>
  Cara pertama menggunakan bentuk pecahan <br><br>
  0,55 x 5 = 
  <span class="frac"><sup>55</sup><span>&frasl;</span><sub>
    <input type="number" name="" id="a" style="width: 45px;" value="100" onkeyup="sum()" onclick="sum()">
  </sub></span>
  &nbsp;X&nbsp;
  <span class="frac"><sup>
    <input type="number" name="" id="b" style="width: 35px;" value="5" onkeyup="sum()" onclick="sum()">
  </sup><span>&frasl;</span><sub>
    <input type="number" name="" id="c" style="width: 35px;" value="1" onkeyup="sum()" onclick="sum()">
  </sub></span>
  &nbsp;=&nbsp;
  <input type="number" name="" id="d" style="width: 50px;" value="2.75" onkeyup="sum()" onclick="sum()"> 
  <span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
  <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
  <input type="hidden" id="jawaban_benar" value="0">
  <br>
</p>
  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: left; float: left">
      <a href="{{Route('siswa.materi',['q' => 'perkaliancampuran'])}}" class="call_to-btn btn_white-border">
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
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next ? $next->materi_code : 'pembagianbiasa'}}">

        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>
      
      <a hidden id="lanjut" href="{{Route('siswa.materi',['q' => 'pembagianbiasa'])}}" class="call_to-btn btn_white-border">
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

      if (a == 100 && b == 5 && c == 1 && d == "2.75" ) {
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