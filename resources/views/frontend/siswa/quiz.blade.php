@inject('query', 'App\Http\Services\SaveQuizAnswer')
@extends('layouts.siswa')
@section('css')
    <link rel="stylesheet" href="{{asset('front/css/quiz.css')}}">
@endsection
@section('content')
     <!-- quiz -->
<form method="POST" action="{{ route('siswa.quiz.accept', [$quiz->slug]) }}" class="">
    {{ csrf_field() }}
     <div class="border">
        <div class="question bg-white p-3 border-bottom">
            <div class="d-flex flex-row justify-content-between align-items-center mcq">
                <h4>{{$quiz->name}}</h4><span>{{$questions->count()}} Pertanyaan</span></div>
                @if ($is_answer)
                    <h5>Quiz Ini sudah anda jawab dengan nilai <strong>{{$nilai}}</strong></h5>
                    @if ($is_repeat)
                         <h5>Harap Ulangi Jawaban Anda</h5>

                    @else 
                    <button class="btn btn-primary border-success align-items-center btn-success" type="button">
                       MATERI SELANJUTNYA<i class="fa fa-angle-right ml-2"></i>
                    </button>
                    @endif
                @endif
        </div>
        @foreach ($questions as $soal)
            <div class="question bg-white p-3 border-bottom">
                <div class="d-flex flex-row align-items-center question-title">
                    <h5 class="mt-1 ml-2">{!!$soal->question!!}</h5>
                </div>
                @php
                    $ans = $query->getJawaban(auth()->user()->email,$soal->id)
                   
                @endphp
                @foreach ($soal->options as $key => $option)
                 {{-- <div class="ans ml-2">
                    <label class="radio">
                         <input type="radio" name="{{$soal->id}}" value="{{ $option->id }}"> <span>{!! $option->option !!}</span>
                    </label>    
                </div> --}}
                    @if ($ans)
                        @if ($ans->option_id==$option->id)
                            <input type="radio" checked required value="{{ $option->id }}" name="{{$soal->id}}">
                            <label for=""> {!! $option->option!!} </label><br/>
                        @else 
                            <input type="radio" required value="{{ $option->id }}" name="{{$soal->id}}">
                            <label for=""> {!! $option->option!!} </label><br/>
                        @endif
                    @else 
                        <input type="radio" required value="{{ $option->id }}" name="{{$soal->id}}">
                        <label for=""> {!! $option->option!!} </label><br/>
                    @endif
                    
                @endforeach
                
            </div>
            <br>
            <hr>
        @endforeach
        <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">
            <input type="hidden" id="materi_code" name="materi_code" value="{{$quiz->slug}}">
            @if ($is_repeat)
                <button class="btn btn-primary border-success align-items-center btn-success" type="submit">
                    KIRIM JAWABAN<i class="fa fa-angle-right ml-2"></i>
                </button>
            @endif
         
        </div>
    </div>
</form>
      <!-- quiz -->
@endsection