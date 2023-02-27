<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserQuestionAnswer;
use Illuminate\Support\Facades\DB;
use App\Question;
use App\Quiz;
use App\User;
use App\OpenMateri;

class NilaiController extends Controller
{
    public function index(Request $request)
    {
        $data = UserQuestionAnswer::orderBy('user_question_answer.email')
                    ->select('user_question_answer.email','users.name','users.asal','quiz.type','questions.quiz_id')
                    ->join('users', 'users.email', '=', 'user_question_answer.email')
                    ->join('questions', 'questions.id', '=', 'user_question_answer.question_id')
                    ->join('quiz', 'quiz.id', '=', 'questions.quiz_id')
                    ->whereNull('users.deleted_at')
                    ->when($request->keyword, function ($query) use ($request) {
                        $query->where('user_question_answer.email', 'LIKE', '%'.$request->keyword.'%')
                             ->orWhere('users.asal', 'LIKE', '%'.$request->keyword.'%');
                    })
                    ->groupBy('user_question_answer.email','users.name','users.asal','quiz.type','questions.quiz_id')
                    ->paginate(10);

     
        return view('backend.nilai.index',compact('data'));
    }
    public function detail(Request $request)
    {
        $email = $request->siswa;
        $email = str_replace('%40','@',$email);
        $quiz = Quiz::find($request->type);
        $user = User::where('email',$email)->first();

        $question = Question::select('id')->where('quiz_id',$request->type)->where('is_active',1)->get()->toArray();
        $questionAnswers = UserQuestionAnswer::with('questions.options')
                                ->where('email',$email)
                                ->whereIn('question_id',$question)
                                ->paginate(15);
        return view('backend.nilai.detail',compact('questionAnswers','quiz','user'));   
    }

    public function progress(Request $request)
    {
        $data = OpenMateri::orderBy('user_id')
                        ->select('user_id')
                        ->groupBy('user_id')
                        ->paginate(10);
        return view('backend.nilai.progress',compact('data'));
    }
}
