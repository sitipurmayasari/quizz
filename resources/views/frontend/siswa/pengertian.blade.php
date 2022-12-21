@extends('layouts.siswa')
@section('content')
<h2 class="mb-4">Pengertian Pecahan</h2>
<p>
  Pecahan adalah satu kesatuan yang memecah menjadi beberapa bagian-bagian yang lebih kecil. Pada bentuk bilangan pecahan biasanya dituliskan dalam a/b, Bilangan yang berada diatas garis (a) pemisah disebut dengan pembilang, sedangkan bilangan dibagian bawah garis pemisah disebut sebagai penyebut(b). Pembilang adalah bilangan yang dibagi, sedangkan penyebut adalah bilangan yang menjadi pembagi.
</p>
<p>Menentukan Pecahan dengan gambar :</p>
<div style="text-align: center;"><img src="{{asset('front/images/pengertian.png')}}" alt=""></div>
<br><br><hr>
<br>
<p>Jadi, Kesimpulan dari pengertian di atas adalah :</p>
<input type="radio"  value="a" name="pengertian" id="pengertian_a"> a. Bilangan yang ada di atas adalah penyebut dan yang di bawah adalah pembilang <br>
<input type="radio"  value="b" name="pengertian" id="pengertian_b"> b. Bilangan ditas dan dibawah dipisahkan oleh garis <br>
<input type="radio"  value="c" name="pengertian" id="pengertian_c"> c. Bilangan yang ada di atas adalah pembilang dan yang di bawah adalah penyebut <br>
<input type="radio"  value="d" name="pengertian" id="pengertian_d"> d. Bilangan yang dibagi adalah penyebut, sedangkan pembilang adalah bilangan yang menjadi pembagi. <br>
<br>
<span id="s1_benar" hidden class="badge badge-pill badge-success">Benar</span>
  <span id="s1_salah" hidden class="badge badge-pill badge-danger">Salah</span>
  <input type="hidden" id="jawaban_benar" value="0">
<br><br><br>
<div class="hero_btn-continer" style="text-align: right;">
  <a href="{{Route('siswa.materi',['q' => 'penjumlahanbiasa'])}}" class="call_to-btn btn_white-border"> 
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
  $(document).ready(function(){
    var status = $("#status").val();
    if (status == 1) {
      $("#lanjut").removeAttr("hidden");
      lanjut()
    }

    $("#pengertian_c").click(function(){
      $("#s1_benar").removeAttr("hidden");
      $("#s1_salah").attr("hidden",true);
      $("#jawaban_benar").val(1);
    });
    $("#pengertian_a").click(function(){
      $("#s1_salah").removeAttr("hidden");
      $("#s1_benar").attr("hidden",true);
      $("#jawaban_benar").val(0);
    });
    $("#pengertian_b").click(function(){
      $("#s1_salah").removeAttr("hidden");
      $("#s1_benar").attr("hidden",true);
      $("#jawaban_benar").val(0);
    });
    $("#pengertian_d").click(function(){
      $("#s1_salah").removeAttr("hidden");
      $("#s1_benar").attr("hidden",true);
      $("#jawaban_benar").val(0);
    });
    
  });
</script>
@endsection