<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz</title>
    <!-- Bootstrap -->
    <link href="{{ asset('node_modules/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('node_modules/gentelella/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('node_modules/gentelella/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('node_modules/gentelella/build/css/custom.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <script src="{{ asset('node_modules/gentelella/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('node_modules/gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('node_modules/gentelella/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('node_modules/gentelella/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('node_modules/gentelella/build/js/custom.min.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>
    <SCRIPT SRC='https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML'></SCRIPT>
    <SCRIPT>MathJax.Hub.Config({ tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}})</SCRIPT>
    
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <h2><strong>Questions</strong></h2>
            <hr>
            
<form method="POST" action="{{ route('quiz.accept', [$quiz->slug, $token]) }}" class="">

    @foreach ($quiz->questions as $key => $question)
        
        <div class="row input_row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Questions {{ $key+1 }}</label>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                        {!! $question->question !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row input_row">
            <div class="col-md-12">
                <div class='form-group'>
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">
                        @if ($question->type == 'answer')
                            Answer
                        @else
                            Option
                        @endif
                    </label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        @if ($question->type == 'choice')
                            <div class="radio">
                                <label>
                                    @foreach ($question->options as $opt_key => $option)
                                        <input type="radio" value="{{ $option->id }}" name="{{$question->id}}">
                                        <label for=""> {!! $option->option!!} </label><br/>
                                    @endforeach
                                </label>
                            </div>
                        @elseif ($question->type == 'checkbox')
                            <div class="checkbox">
                                <label>
                                    @foreach ($question->options as $opt_key => $option)
                                        <input type="checkbox" value="{{ $option->id }}" name="{{ $question->id }}[{{$opt_key}}]"> {{ $option->option }}  &nbsp; &nbsp;
                                    @endforeach
                                </label>
                            </div>
                        @elseif ($question->type == 'answer')
                            <textarea aria-rowspan="3" aria-colspan="12" name="{{$question->id}}"></textarea>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
    
    <div class="row input_row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-success">Submit</button> &nbsp;
                    <a href="{{ route('home') }}" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </div>
    </div>
    </form>
        </div>
    </div>

</body>
</html>
