<form method="POST" action="{{ route('quiz.edit', $quiz->slug) }}" class="">

    <div class="row input_row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Pertanyaan <span class="required">*</span></label>
                <div class="col-md-10 col-sm-12 col-xs-12">
                    <textarea name="question" id="question" ></textarea>
                    
                </div>
            </div>
        </div>
    </div>

    <hr>
    
    <hr>

    <div class="row input_row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Pilihan A </label>
                <div class="col-md-10 col-sm-6 col-xs-12">
                    <input type="text" id="options-1" name="options[]" placeholder="Pilihan A">
                </div>
            </div>
        </div>
    </div>

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
    </div>
    <hr>
    <div class="row input_row">
        <div class="col-md-12">
            <div class='form-group'>
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Jawaban Benar <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="radio">
                        <label>
                            <input type="radio" value="0" name="answer" id="option1"> <label for="option1">Pilihan A</label> &nbsp; &nbsp;
                            <input type="radio" value="1" name="answer" id="option2"> <label for="option2">Pilihan B</label> &nbsp; &nbsp;
                            <input type="radio" value="2" name="answer" id="option3"> <label for="option3">Pilihan C</label> &nbsp; &nbsp;
                            <input type="radio" value="3" name="answer" id="option4"> <label for="option4">Pilihan D</label> &nbsp; &nbsp;
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
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ route('user.index') }}" class="btn btn-default">Batal</a>
                </div>
            </div>
        </div>
    </div>
</form>