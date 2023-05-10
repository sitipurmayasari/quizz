<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Belajar Pecahan Itu Seru</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.css')}}" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="{{ asset('front/css/css-circular-prog-bar.css')}}">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="{{ asset('front/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('front/css/responsive.css')}}" rel="stylesheet" />




  <link rel="stylesheet" href="{{ asset('front/css/css-circular-prog-bar.css')}}">


</head>

<body>
  <div class="top_container">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{Route('home')}}">
            <img src="{{ asset('front/images/logo.png')}}" alt="">
            <span>
              Home
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">

                <li class="nav-item ">
                  <a class="nav-link" href="{{Route('curicullum')}}"> Kurikulum </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="{{Route('about')}}"> Tentang Pengembang</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{Route('login')}}">Login Siswa</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{Route('logadmin')}}">Login Guru</a>
                </li>
              </ul>
            </div>
        </nav>
      </div>
    </header>
    <section class="hero_section ">
        @yield('content')
    </section>
  </div>
  <!-- end header section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2022 By 
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="{{ asset('front/js/jquery-3.4.1.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('front/js/bootstrap.js')}}"></script>

</body>

</html>