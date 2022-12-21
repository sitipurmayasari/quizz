<?php

namespace App\Http\Controllers\Backend;

use App\Quiz;
use App\Option;
use App\Question;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Services\Quiz as SaveQuizOption;


class QuizController extends Controller
{
    public function __construct(
        Quiz $quiz,
        Option $option,
        Question $question
    ){
        $this->quiz = $quiz;
        $this->option = $option;
        $this->question = $question;
    }
  
    public function index()
    {
        $quizs = $this->quiz->all();

        return view('backend.quiz.index', ['quizs' => $quizs]);
    }

    public function create()
    {
        $quizs = $this->quiz->all();

        return view('backend.quiz.create', ['quizs' => $quizs]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $slug = $this->makeSlug($request->name);
        $quiz = new $this->quiz;

        $quiz->name = $request->name;
        $quiz->slug = $slug;
        $quiz->type = $request->type;
        $quiz->save();
        
        return redirect()->action([QuizController::Class, 'index']);
    }   

  
    public function view($slug, Request $request)
    {
        $type = $request->type;
        $quiz = $this->quiz->where('slug', $slug)->firstOrFail();
        $questions = $this->question->with('options')
                                ->where('quiz_id', $quiz->id)
                                ->where('is_active',1)
                                ->get();

        return view('backend.quiz.view', [
                                        'quiz' => $quiz,
                                        'questions' => $questions,
                                        'type' => $type
                                    ]);
    }

  
    public function edit($slug, Request $request)
    {
        // dd($slug);
        $type = $request->type;
        $quiz = $this->quiz->where('slug', $slug)->firstOrFail();
        
        $questions = $this->question->with('options')
                                ->where('quiz_id', $quiz->id)
                                ->where('is_active',1)
                                ->get();

        // return redirect('quiz.view',$quiz);

        return view('backend.quiz.edit', [
                                        'quiz' => $quiz,
                                        'questions' => $questions,
                                        'type' => $type
                                    ]);
    }

    public function edit_soal($slug,$id, Request $request)
    {
        // dd($slug);
        $type = $request->type;
        $quiz = $this->quiz->where('slug', $slug)->firstOrFail();
        
        $questions = Question::where('id', $id)->first();
        $option = Option::orderBy('id','asc')->where('question_id', $id)->get();
        $is_right_option = Option::orderBy('id','asc')
                                ->where('is_right_option',1)
                                ->where('question_id', $id)
                                ->first();
        return view('backend.quiz.soal_edit', [
                                        'quiz' => $quiz,
                                        'questions' => $questions,
                                        'option' => $option,
                                        'is_right_option' => $is_right_option,
                                        'type' => 'choice'
                                    ]);
    }

    public function hapus_soal($id)
    {
        Question::find($id)->update([
            'is_active' => 0
        ]);

        return redirect()->action([QuizController::Class, 'index']);
    }
    public function update_soal($id,Request $request)
    {
        $question = Question::find($id);
        $question->update([
            'question' => $request->question,
        ]);

        $saveOption = (new SaveQuizOption)->updateOptions($request, $question);


        return redirect()->action([QuizController::Class, 'index']);
    }

  
    public function update($slug, Request $request)
    {
        // DB::transaction(function() use ($slug, $request) {
            
            $this->validate($request, [
                    'question' => 'required',
                    'options.*' => 'required'
                ]);
            
            $type = $request->type;
            
            $quiz = $this->quiz->where('slug', $slug)->firstOrFail();

            //update question to db
            $question = new Question;
            $question->quiz_id  = $quiz->id;
            $question->question = $request->question;
            $question->type = $request->type;
            $question->is_active = 1;
            $question->save();

            $saveOption = (new SaveQuizOption)->saveOptions($request, $question, $type);
            
        // });
        
        return redirect()->route('quiz.edit', $slug);
    }

    
    public function upload(Request $request){
        $name=$request->file('file')->getClientOriginalExtension();
        $fileName = date('ymdhis').'.'.$name;
        $request->file('file')->move('images', $fileName);
        return response()->json(['location'=>"/images/$fileName"]); 

    }
  
    public function destroy(Request $request)
    {
        
        DB::transaction(function() use ($request){
            $quiz = $this->quiz->with('questions.options')->where('id', $request->id);
            $quiz->delete();
        });

        return redirect()->route('quiz.index')->with('success', 'Record deleted successfully.');
    }

    /** make slug from title */
    public function makeSlug($name)
    {

        $slug = Str::slug($name);

        $count = Quiz::where('slug', 'LIKE', '%'. $slug . '%')->count();

        $addCount = $count + 1;

        return $count ? "{$slug}-{$addCount}" : $slug;
    }
}
