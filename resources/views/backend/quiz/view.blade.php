@extends('backend.layouts.default')

@section('page_title', 'Manage Quizs')

@section('content')

    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Nama Quiz:<strong> {{ $quiz->name }}</strong></h2>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <h2><strong>Soal</strong></h2>
                    <hr>
                    @foreach ($questions as $question)
                        
                        <div class="row input_row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Pertanyaan </label>
                                    <div class="col-md-8 col-sm-10 col-xs-10">
                                        {!!$question->question !!}
                                    </div>
                                    <div class="col-md-2">
                                        <a style="width: 150px" href="{{ route('quiz.soal.edit', [$quiz->slug,$question->id]) }}" class="btn btn-success">Edit</a>    
                                        <a style="width: 150px" href="{{ route('quiz.soal.delete', [$question->id]) }}" class="btn btn-danger">Hapus</a>    

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row input_row">
                            <div class="col-md-12">
                                <div class='form-group'>
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">@if ($question->type == 'answer') Answer @else Pilihan @endif</label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        @if ($question->type == 'choice')
                                            <div class="radio">
                                                <label>
                                                    @foreach ($question->options as $key => $option)
                                                        <input type="radio" disabled value="{{ $key }}"
                                                         @if($option->is_right_option == 1) checked="checked" @endif name="answer-{{$option->id}}">
                                                        <label for=""> {!! $option->option !!} </label><br/>
                                                    @endforeach
                                                </label>
                                            </div>
                                        @elseif ($question->type == 'checkbox')
                                            <div class="checkbox">
                                                <label>
                                                    @foreach ($question->options as $key => $option)
                                                        <input type="checkbox" value="{{ $key }}" @if($option->is_right_option == 1) checked="checked" @endif name="answer"> {{ $option->option }}  &nbsp; &nbsp;
                                                    @endforeach
                                                </label>
                                            </div>
                                        @elseif ($question->type == 'answer')
                                            <label>@if (isset($question->option[0]))
                                                {{ $question->options[0]->option }}
                                            @endif</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
            
@stop

