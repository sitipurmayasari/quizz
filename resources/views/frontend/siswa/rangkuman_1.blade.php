@extends('layouts.siswa')
@section('content')
  <h2 class="mb-4">Rangkuman Penambahan dan Pengurangan Pecahan</h2>
  <ul>
    <li>
      <b>Penjumlahan</b> <br>
      Penjumlahan pecahan dapat dilakukan jika penyebutnya sama, bilangan yang dijumlahkan hanya bilangan pada pembilangnya saja. <br>
      <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span>
      &nbsp;+&nbsp;
      <span class="frac"><sup>c</sup><span>&frasl;</span><sub>d</sub></span>
      &nbsp;=&nbsp;
      <span class="frac"><sup>ad + bc</sup><span>&frasl;</span><sub>bd</sub></span>
    </li>
    <li>
      <b>Penjumlahan Campuran</b> <br>
      Pecahan campuran gabungan antara bilangan bulat dengan bilangan pecahan. Contohnya : <br> 
      a&nbsp;<span class="frac"><sup>b</sup><span>&frasl;</span><sub>c</sub></span>
    </li>
    <li>
      <b>Penjumlahan decimal</b> <br>
      Bilangan decimal pada penjumlahan dapat diubah menjadi pecahan biasa, 
      kemudian dilakukan operasi penjumlahan biasa. 
      Atau bisa juga menggunakan cara bersusun dengan memposisikan komanya sama rata.
      
    </li>
    <li>
      <b>Pengurangan</b> <br>
      Pengurangan pecahan dapat dilakukan jika penyebutnya sama, 
      apabila penyebutnya berbeda maka harus dilakukan dengan mencari kpknya terlebih dahulu, 
      bilangan yang dikurangkan hanya bilangan pada pembilangnya saja <br>
      <span class="frac"><sup>a</sup><span>&frasl;</span><sub>b</sub></span>
      &nbsp;-&nbsp;
      <span class="frac"><sup>c</sup><span>&frasl;</span><sub>d</sub></span>
      &nbsp;=&nbsp;
      <span class="frac"><sup>ad - bc</sup><span>&frasl;</span><sub>bd</sub></span>
    </li>
    <li>
      <b>Pengurangan campuran</b> <br>
      Pecahan campuran dimana ada bilangan bulat dan bilangan biasa, 
      harus dirubah dulu bilangan tersebut  menjadi pecahan biasa. Contohnya : <br>
      a&nbsp;<span class="frac"><sup>b</sup><span>&frasl;</span><sub>c</sub></span>
    </li>
    <li>
      <b>Pengurangan decimal</b> <br>
      Pecahan decimal diubah dalam bentuk pecahan biasa, 
      atau langsung menggunakan cara bersusun disamakan posisi komanya.
    </li>
  </ul>
  <br><br><br>
  <div>
    <div class="hero_btn-continer" style="text-align: left; float: left">
      <a href="{{Route('siswa.materi',['q' => 'pengurangandesimal'])}}" class="call_to-btn btn_white-border">
      <img src="images/left-arrow.png" alt="">
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
          Selanjutnya b<img src="{{asset('front/images/right-arrow.png')}}" alt="">
        </button>
      </form>

      <a hidden id="lanjut" href="{{Route('siswa.quiz','bab-1')}}" class="call_to-btn btn_white-border">
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
