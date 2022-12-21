@extends('backend.layouts.default')

@section('page_title', 'Manage Quizs')

@section('content')

    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Nama Quiz:<strong> {{ $quiz->name }}</strong></h2>
                    <div class="row input_row">
                       
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    
                    @include('backend.partials.error')
                    
                    <form method="POST" action="{{ route('quiz.soal.update', $questions->id) }}" class="">

                        <div class="row input_row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Pertanyaan <span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-12 col-xs-12">
                                        <textarea name="question" id="question" >{!! $questions->question !!}</textarea>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <hr>
                        
                        <hr>
                        @php
                            $no = 1;
                            $is_correct = 0;
                        @endphp
                        @foreach ($option as $key => $item)
                            @if ($item->is_right_option==1)
                                @php
                                    $is_correct = $key;
                                @endphp
                            @endif
                            <div class="row input_row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Pilihan {{$no}} </label>
                                        <div class="col-md-10 col-sm-6 col-xs-12">
                                            <textarea name="options-{{$item->id}}" id="options-{{$no}}" >{!! $item->option !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $no++;
                            @endphp
                        @endforeach
                        
{{--                     
                        <div class="row input_row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Pilihan B </label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <input type="text" id="options-2" name="options[]" placeholder="Pilihan B ">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row input_row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Pilihan C </label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <input type="text" id="options-3" name="options[]" placeholder="Pilihan C ">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row input_row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Pilihan D </label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <textarea id="options-4" name="options[]"></textarea>
                                        
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <hr>
                        <div class="row input_row">
                            <div class="col-md-12">
                                <div class='form-group'>
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Jawaban Benar <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" value="0" name="answer" id="option1" {{$is_correct==0?'checked' :''}}> <label for="option1">Pilihan 1</label> &nbsp; &nbsp;
                                                <input type="radio" value="1" name="answer" id="option2" {{$is_correct==1?'checked' :''}}> <label for="option2">Pilihan 2</label> &nbsp; &nbsp;
                                                <input type="radio" value="2" name="answer" id="option3" {{$is_correct==2?'checked' :''}}> <label for="option3">Pilihan 3</label> &nbsp; &nbsp;
                                                <input type="radio" value="3" name="answer" id="option4" {{$is_correct==3?'checked' :''}}> <label for="option4">Pilihan 4</label> &nbsp; &nbsp;
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <hr>
                        <div class="row input_row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="type" value="{{ $type }}">
                                        <button type="submit" class="btn btn-success">Update</button>
                                        <a href="{{ route('user.index') }}" class="btn btn-default">Batal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                   
                    
                </div>
            </div>
        </div>
    </div>
            
@stop

@section('script')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
        selector: '#question',
        height : "250",
        external_plugins: { 
            tiny_mce_wiris: 'https://www.wiris.net/demo/plugins/tiny_mce/plugin.js' 
        },
        draggable_modal: true,
        plugins: ['image', 'media'],
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry',
        automatic_uploads: true,
        images_upload_url: '/upload',
        file_picker_types: 'image',
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
            };
            input.click();
        },
        wirisimagebgcolor: '#FFFFFF',
        wirisimagesymbolcolor: '#000000',
        wiristransparency: 'true',
        wirisimagefontsize: '16',
        wirisimagenumbercolor: '#000000',
        wirisimageidentcolor: '#000000',
      });
    tinymce.init({
        selector: '#options-1',
        height : "130",
        external_plugins: { 
            tiny_mce_wiris: 'https://www.wiris.net/demo/plugins/tiny_mce/plugin.js' 
        },
        plugins: ['image', 'media'],
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry',
        automatic_uploads: true,
        images_upload_url: '/upload',
        file_picker_types: 'image',
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
            };
            input.click();
        },
        wirisimagebgcolor: '#FFFFFF',
        wirisimagesymbolcolor: '#000000',
        wiristransparency: 'true',
        wirisimagefontsize: '16',
        wirisimagenumbercolor: '#000000',
        wirisimageidentcolor: '#000000',
    });
    tinymce.init({
        selector: '#options-2',
        height : "130",
        external_plugins: { 
            tiny_mce_wiris: 'https://www.wiris.net/demo/plugins/tiny_mce/plugin.js' 
        },
        plugins: ['image', 'media'],
        toolbar: 'tiny_mce_wiris_formulaEditor',
        automatic_uploads: true,
        images_upload_url: '/upload',
        file_picker_types: 'image',
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
            };
            input.click();
        },
        wirisimagebgcolor: '#FFFFFF',
        wirisimagesymbolcolor: '#000000',
        wiristransparency: 'true',
        wirisimagefontsize: '16',
        wirisimagenumbercolor: '#000000',
        wirisimageidentcolor: '#000000',
    });
    tinymce.init({
        selector: '#options-3',
        height : "130",
        external_plugins: { 
            tiny_mce_wiris: 'https://www.wiris.net/demo/plugins/tiny_mce/plugin.js' 
        },
        plugins: ['image', 'media'],
        toolbar: 'tiny_mce_wiris_formulaEditor',
        automatic_uploads: true,
        images_upload_url: '/upload',
        file_picker_types: 'image',
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
            };
            input.click();
        },
        wirisimagebgcolor: '#FFFFFF',
        wirisimagesymbolcolor: '#000000',
        wiristransparency: 'true',
        wirisimagefontsize: '16',
        wirisimagenumbercolor: '#000000',
        wirisimageidentcolor: '#000000',
    });
    tinymce.init({
        selector: '#options-4',
        height : "130",
        external_plugins: { 
            tiny_mce_wiris: 'https://www.wiris.net/demo/plugins/tiny_mce/plugin.js' 
        },
        plugins: ['image', 'media'],
        toolbar: 'tiny_mce_wiris_formulaEditor',
        automatic_uploads: true,
        images_upload_url: '/upload',
        file_picker_types: 'image',
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
            };
            input.click();
        },
        wirisimagebgcolor: '#FFFFFF',
        wirisimagesymbolcolor: '#000000',
        wiristransparency: 'true',
        wirisimagefontsize: '16',
        wirisimagenumbercolor: '#000000',
        wirisimageidentcolor: '#000000',
    });
 </script>
@endsection