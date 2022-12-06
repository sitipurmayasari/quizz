@extends('backend.layouts.default')

@section('page_title', 'Daftar Quiz')

@section('style')
<style>
.invite_btn { width: 100%; }
</style>
@stop

@section('content')


<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Daftar Quiz</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @include('backend.partials.error')

                <form method="post" action="{{ route('quiz.index') }}" class="form-inline">
                    
                    <form method="post" action="" class="form-inline">
                        <div class="form-group">
                            <label class="col-form-label name_label">Nama Quiz*</label>
                            <input type="text" required name="name" class="form-control name_input" placeholder=" Nama Quiz">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label name_label">Untuk Bahasan*</label>
                            <select name="type" class="form-control name_input" required>
                                <option value=""></option>
                                <option value="BAB I">BAB I</option>
                                <option value="BAB II">BAB II</option>
                                <option value="EVALUASI">EVALUASI</option>

                            </select>
                        </div>
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-success btn_create">Buat Quiz</button>
                    </form>
                    
                </form>
                <div class="ln_solid"></div>
                @if(empty($quizs->count()))
                    <p>No Quiz found.</p>
                @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Bahasan</th>
                            <th>Jumlah Soal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($quizs as $key => $quiz)
                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td><a href={{ route('quiz.edit', [$quiz->slug, 'type' => 'choice']) }}>{{ $quiz->name }}</a></td>
                                <td> {{$quiz->type}}</td>
                                <td>{{$quiz->questions->count()}} Soal</td>
                                <td>{{$quiz->status}}</td>
                                <td>
                                    <a  href="{{ route('quiz.view', $quiz->slug) }}" class="btn btn-sm btn-info">Lihat Quiz</a> 
                                    <a href="{{ route('quiz.edit', [$quiz->slug, 'type' => 'choice']) }}"
                                         class="btn btn-sm btn-success">Tambah Soal</a>  

                                    <form action="{{ route('quiz.destroy') }}" method="POST"
                                        onsubmit="return confirm('Delete this record?');">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $quiz->id }}" />
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit" name="Delete" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>

@stop

@section('script')
<script>

setShareLinks();

function socialWindow(url) {
  var left = (screen.width - 570) / 2;
  var top = (screen.height - 570) / 2;
  var params = "menubar=no,toolbar=no,status=no,width=570,height=570,top=" + top + ",left=" + left;
  // Setting 'params' to an empty string will launch
  // content in a new tab or window rather than a pop-up.
  // params = "";
  window.open(url,"NewWindow",params);
}

function setShareLinks() {
  var pageUrl = encodeURIComponent(document.URL);
  var tweet = encodeURIComponent($("meta[property='og:description']").attr("content"));

  $(".social-share.twitter").on("click", function() {
    url = "https://twitter.com/intent/tweet?url=" + pageUrl + "&text=" + tweet;
    socialWindow(url);
  });
}  
</script>
@stop