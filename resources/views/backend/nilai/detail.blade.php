@extends('backend.layouts.default')

@section('page_title', 'Nilai Detail')

@section('style')

@stop

@section('content')
    
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <h2>Siswa : {{$user ? $user->name." ".$user->asal : ''}}</h2>

            <div class="x_title">
                <h2>Quiz {{$quiz->type}} ({{$quiz->name}})</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @foreach ($questionAnswers as $questions)
                    <div class="row input_row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Pertanyaan </label>
                                <div class="col-md-10 col-sm-10 col-xs-10">
                                    {!! $questions->questions->question !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row input_row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Jawaban Siswa </label>
                                <div class="col-md-10 col-sm-10 col-xs-10">
                                    <?php //echo '<pre>'; var_dump($questions->questions->options) ?>
                                        @foreach($questions->questions->options as $opt)
                                            @php
                                                // echo '<pre>';
                                                // var_dump($opt->option);   
                                            @endphp
                                            {{-- {{ $opt->option }} --}}
                                            @if ($questions->option_id == $opt->id)
                                                {!! $opt->option !!}
                                            @endif
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row input_row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Jawaban Benar </label>
                                <div class="col-md-10 col-sm-10 col-xs-10">
                                    @foreach($questions->questions->options as $opt)
                                        @php
                                            // echo '<pre>';
                                            // var_dump($opt->is_right_option);   
                                        @endphp
                                        @if ($opt->is_right_option == 1)
                                            {!! $opt->option !!}
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row input_row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Status Jawaban </label>
                                <div class="col-md-10 col-sm-10 col-xs-10">
                                    @if($questions->is_right == 1)
                                        <button class="btn btn-sm btn-success">Benar</button>
                                    @else
                                        <button class="btn btn-sm btn-danger">Salah</button>
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

@section('script')

@stop