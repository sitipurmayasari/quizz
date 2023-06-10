@extends('layouts.front')

@section('content')
<div class="container">
    <div class="hero-container container" style="padding: 0;">
        <div class="hero_detail-box">
          <div class="contact-form col-md-8">
            <form method="POST" action="{{ route('login.siswa') }}"> {{-- mengetahui cek login dimana => buka web.php  --}}
                @csrf
                <div>
                <input type="text" name="nisn"  class="@error('nisn') is-invalid @enderror"
                 placeholder="NISN" value="{{ old('nisn') }}" required>
                {{-- <input type="email" name="email" class="@error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required> --}}
                    @error('nisn    ')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" class=" @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                <button type="submit" class="btn_on-hover">
                  Masuk
                </button>
              </div>
            </form>
            <br>
            <div class="hero_btn-continer">
              Belum Ada Akun?
              <a href="{{Route('register')}}" class="call_to-btn btn_white-border">
                <span>
                  Daftar
                </span>
                <img src="images/right-arrow.png" alt="">
              </a>
            </div>
          </div>
          
        </div>
        <div class="hero_img-container">
          <div>
            <img src="{{asset('front/images/5.png')}}" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
