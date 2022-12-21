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
                        <div class="col-md-12">
                            <div class="form-group">
                                {{-- <label class="control-label col-md-2 col-sm-2 col-xs-12"> Add Question </label> --}}
                                <div class="col-md-6 col-sm-6 col-xs-12 float-right">
                                    <p>
                                        {{-- <a href="{{ route('quiz.edit', [$quiz->slug, 'type' => 'choice']) }}" class="btn btn-success">Multiple Choice</a>     --}}
                                        {{-- <a href="{{ route('quiz.edit', [$quiz->slug, 'type' => 'checkbox']) }}" class="btn btn-success">Checkbox</a>    
                                        <a href="{{ route('quiz.edit', [$quiz->slug, 'type' => 'answer']) }}" class="btn btn-success">Answer</a> --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    
                    @include('backend.partials.error')
                    
                    @if($type == 'choice')       
                        @include('backend.partials.choice')
                    @elseif ($type == 'checkbox')
                        @include('backend.partials.checkbox')
                    @elseif ($type == 'answer')
                        @include('backend.partials.answer')
                    @endif
                    
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
        wirisimagebgcolor: '#FFFFFF',
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