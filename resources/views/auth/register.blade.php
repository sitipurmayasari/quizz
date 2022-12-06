@extends('layouts.front-about')
@section('content')
<div class="container">

    <h2 class="main-heading">
      Pendafataran Akun

    </h2>
    <p class="text-center">
      buatlah akun agar kamu untuk dapat mengakses pelajaran ya!

    </p>
    <div class="">
      <div class="contact_section-container">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="contact-form">
              <form method="POST" action="{{ route('register') }}">
                  @csrf
                <div>
                  <input type="text" placeholder="Nama" name="name">
                </div>
                <div>
                  <input type="email" placeholder="Email" name="email">
                </div>
                <div>
                  <input type="text" placeholder="Password" name="password">
                </div>
                <div>
                  <input type="text" placeholder="Asal Sekolah" name="sekolah">
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn_on-hover">
                    DAFTAR
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection