@inject('query', 'App\Http\Services\Quiz')
<!doctype html>
<html lang="en">
  <head>
  	<title>Belajar Pecahan Itu Seru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style2.css')}}">

      <style>
      span.frac {
        display: inline-block;
        text-align: center;
        vertical-align: middle;
      }
      span.frac > sup, span.frac > sub {
        display: block;
        font: inherit;
        padding: 0 0.3em;
      }
      span.frac > sup {border-bottom: 0.03em solid;}
      span.frac > span {display: none;}
    </style>
    @yield('css')
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="{{Request::segment(1)=="materi" || Request::segment(2)=="quiz" ? '' : 'active'}}">
				<div class="p-4 pt-5">
		  		<ul class="list-unstyled components mb-5">
            <li class="{{Request::segment(1)=="materi" && request()->get('q')=='pengertian' ? 'active' : ''}}">
              <a href="{{Route('siswa.materi',['q' => 'pengertian'])}}">Pengertian Pecahan</a>
            </li>
            <li>
	            <a href="#materi1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Penjumlahan & Pengurangan</a>
	            <ul class="collapse list-unstyled" id="materi1">
                <li  class="{{Request::segment(1)=="materi" && request()->get('q')=='penjumlahanbiasa' ? 'active' : ''}}">
                    <a href="{{Route('siswa.materi',['q' => 'penjumlahanbiasa'])}}">A. Operasi Hitung Penjumlahan Pecahan Biasa</a>
                </li>
                <li  class="{{Request::segment(1)=="materi" && request()->get('q')=='penjumlahancampuran' ? 'active' : ''}}">
                    <a href="{{Route('siswa.materi',['q' => 'penjumlahancampuran'])}}">B. Operasi Hitung Penjumlahan Pecahan Campuran</a>
                </li>
                <li  class="{{Request::segment(1)=="materi" && request()->get('q')=='penjumlahandesimal' ? 'active' : ''}}">
                    <a href="{{Route('siswa.materi',['q' => 'penjumlahandesimal'])}}">C. Operasi Hitung Penjumlahan Pecahan Desimal</a>
                </li>
                <li  class="{{Request::segment(1)=="materi" && request()->get('q')=='penguranganbiasa' ? 'active' : ''}}">
                  <a href="{{Route('siswa.materi',['q' => 'penguranganbiasa'])}}">D. Operasi Hitung Pengurangan Pecahan Biasa</a>
                </li>
                <li  class="{{Request::segment(1)=="materi" && request()->get('q')=='pengurangancampuran' ? 'active' : ''}}">
                  <a href="{{Route('siswa.materi',['q' => 'pengurancampuran'])}}">E. Operasi Hitung Pengurangan Pecahan Campuran</a>
                </li>
                <li  class="{{Request::segment(1)=="materi" && request()->get('q')=='pengurangandesimal' ? 'active' : ''}}">
                  <a href="{{Route('siswa.materi',['q' => 'pengurandesimal'])}}">F. Operasi Hitung Pengurangan Pecahan Desimal</a>
                </li>
	            </ul>
	          </li>
	          <li  class="{{Request::segment(1)=="materi" && request()->get('q')=='rangkuman_1' ? 'active' : ''}}">
	              <a href="{{Route('siswa.materi',['q' => 'rangkuman_1'])}}">Rangkuman 1</a>
	          </li>
            <li>
             @foreach ($query->getMenuQuiz('BAB I') as $key=>$item)
               <a href="{{Route('siswa.quiz',[$item->slug])}}">Kuis 1.{{$key+1}}</a>
             @endforeach
            </li>
            <li>
              <a href="#materi2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Perkalian & Pembagian</a>
              <ul class="collapse list-unstyled" id="materi2">
                  <li  class="{{Request::segment(1)=="materi" && request()->get('q')=='perkalianbiasa' ? 'active' : ''}}">
                      <a href="{{Route('siswa.materi',['q' => 'perkalianbiasa'])}}">A. Operasi Hitung Perkalian Pecahan Biasa</a>
                  </li>
                  <li  class="{{Request::segment(1)=="materi" && request()->get('q')=='perkaliancampuran' ? 'active' : ''}}">
                      <a href="{{Route('siswa.materi',['q' => 'perkaliancampuran'])}}">B. Operasi Hitung Perkalian Pecahan Campuran</a>
                  </li>
                  <li  class="{{Request::segment(1)=="materi" && request()->get('q')=='perkaliandesimal' ? 'active' : ''}}">
                      <a href="{{Route('siswa.materi',['q' => 'perkaliandesimal'])}}">C. Operasi Hitung Perkalian Pecahan Desimal</a>
                  </li>
                  <li  class="{{Request::segment(1)=="materi" && request()->get('q')=='pembagianbiasa' ? 'active' : ''}}">
                    <a href="{{Route('siswa.materi',['q' => 'pembagianbiasa'])}}">D. Operasi Hitung Pembagian Pecahan Biasa</a>
                  </li>
                  <li  class="{{Request::segment(1)=="materi" && request()->get('q')=='pembagiancampuran' ? 'active' : ''}}">
                    <a href="{{Route('siswa.materi',['q' => 'pembagiancampuran'])}}">E. Operasi Hitung Pembagian Pecahan Campuran</a>
                  </li>
                  <li  class="{{Request::segment(1)=="materi" && request()->get('q')=='pembagiandesimal' ? 'active' : ''}}">
                    <a href="{{Route('siswa.materi',['q' => 'pembagiandesimal'])}}">F. Operasi Hitung Pembagian Pecahan Desimal</a>
                  </li>
              </ul>
            </li>
            <li class="{{Request::segment(1)=="materi" && request()->get('q')=='rangkuman_2' ? 'active' : ''}}">
                  <a href="{{Route('siswa.materi',['q' => 'rangkuman_2'])}}">Rangkuman 2</a>
            </li>
            <li>
                @foreach ($query->getMenuQuiz('BAB II') as $key=>$item)
                <a href="{{Route('siswa.quiz',[$item->slug])}}">Kuis 2. {{$key+1}}</a>
              @endforeach
            </li>
	          <li>
              @foreach ($query->getMenuQuiz('EVALUASI') as $key=>$item)
                <a href="{{Route('siswa.quiz',[$item->slug])}}">Evaluasi {{$key+1}}</a>
              @endforeach
	          </li>
	        </ul>

	        <div class="footer">
            <p>
              Copyright &copy; 2022 By Alawiyah
            </p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{Route('siswa.home')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="curicullum.html"> Kurikulum </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> Tentang Pengembang</a>
                </li>
                <li class="nav-item">
                  
                  <a class="nav-link" href="{{Route('logout2')}}">LogOut <i class="fa fa-sign-out"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
         @yield('content')

        <!-- teacher section -->
      </div>
      <!-- endcontent -->
		</div>

    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/popper.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>
    <SCRIPT SRC='https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML'></SCRIPT>
    {{-- <SCRIPT>MathJax.Hub.Config({ tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}})</SCRIPT> --}}
    @yield('script')
    
  </body>
</html>