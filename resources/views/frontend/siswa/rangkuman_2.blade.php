@extends('layouts.siswa')
@section('content')
  <h2 class="mb-4">Rangkuman Perkalian dan Pembagian Pecahan</h2>
  <ul>
    <li>
      <b>Perkalian</b> <br>
      Pembilang dikali dengan pembilang dan penyebut dikali dengan penyebut <br>
      <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span>
      &nbsp;x&nbsp;
      <span class="frac"><sup>c</sup><span>&frasl;</span><sub>d</sub></span>
      &nbsp;=&nbsp;
      <span class="frac"><sup>(a x c)</sup><span>&frasl;</span><sub>(b x d)</sub></span>
    </li>
    <li>
      <b>Perkalian Campuran</b> <br>
      Perkalian campuran pecahan terdiri dari bilangan bulat dan bilangan pecahan, ubah terlebih dahulu menjadi bentuk pecahan biasa. <br> 
      <img src="images/kalicam_1.png" alt="" style="width: 100px;">
    </li>
    <li>
      <b>Perkalian decimal</b> <br>
      Bilangan decimal dapat diubah menjadi pecahan, kemudian dikalikan.
    </li>
    <li>
      <b>Pembagian</b> <br>
      Pembagi diubah dalam bentuk perkalian , yaitu dikali dengan kebalikannya<br>
      <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span>
      &nbsp;:&nbsp;
      <span class="frac"><sup>c</sup><span>&frasl;</span><sub>d</sub></span>
      &nbsp;=&nbsp;
      <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span>
      &nbsp;x&nbsp;
      <span class="frac"><sup>d</sup><span>&frasl;</span><sub>c</sub></span>
      &nbsp;=&nbsp;
      <span class="frac"><sup>( a x d )</sup><span>&frasl;</span><sub>( b x c )</sub></span>
    </li>
    <li>
      <b>Pembagian campuran</b> <br>
      pecahan yang terdiri dari bilangan bulat dan bilangan pecahan, 
      mengalikan angka penyebut dengan bilangan bulat kemudian menambahkan nilai hasilnya dengan angka pembilang.
    </li>
    <li>
      <b>Pembagian desimal</b> <br>
      Pecahan decimal diubah dalam bentuk pecahan biasa, kemudian lakukan operasi pembagian biasa.
    </li>
  </ul>
  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: left; float: left">
      <a href="{{Route('siswa.materi',['q' => 'pembagiandesimal'])}}" class="call_to-btn btn_white-border">
      <img src="images/left-arrow.png" alt="">
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
        <input type="hidden" id="nextmateri" name="nextmateri" value="{{$next ? $next->materi_code : 'bab-2'}}">

        <button type="submit" id="simpan" hidden class="call_to-btn btn_white-border">
          Selanjutnya<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>

      <a  hidden id="lanjut" href="{{Route('siswa.quiz','bab-2')}}" class="call_to-btn btn_white-border">
      <span>
        Selanjutnya
      </span>
      <img src="images/right-arrow.png" alt="">
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
        $("#simpan").attr("hidden",true);
      }else{
        $("#simpan").removeAttr("hidden");
        $("#lanjut").attr("hidden",true);
      }
    } );
</script>
@endsection