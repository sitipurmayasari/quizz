@extends('layouts.front')

@section('content')
<div class="container">
    <div class="hero-container container" style="padding: 0;">
        <div class="hero_detail-box">
          <div class="contact-form col-md-8">
            <form method="POST" action="{{ route('login.guru') }}">
                @csrf
                <div>
                <input type="email" name="email" class="@error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required>
                    @error('email')
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
            
          </div>
          
        </div>
        <div class="hero_img-container">
          <div>
            <img src="{{asset('front/images/5.png')}}" alt="" class="img-fluid">
          </div>
        </div>
      </div>
</div>
@endsection
