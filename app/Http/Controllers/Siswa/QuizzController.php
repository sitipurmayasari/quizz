<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Quiz;
use App\QuizInvite;
use App\Option;
use App\Question;
use App\OpenMateri;
use App\UserQuestionAnswer;
use Illuminate\Http\Request;
use App\Http\Services\SaveQuizAnswer;

class QuizzController extends Controller
{

    public function __construct(
        Quiz $quiz,
        QuizInvite $quizInvite
    ){
        $this->quiz = $quiz;
        $this->quizInvite = $quizInvite;
    }

    public function index($slug)
    {
        $quiz = $this->quiz->with('questions.options')->where('slug', $slug)->firstOrFail();
        $questions = Question::orderBy('id','desc')
                                ->where('quiz_id', $quiz->id)
                                ->where('is_active',1)
                                ->get();

        $countQuiz = $questions->count();

        $answerIsRight = UserQuestionAnswer::leftJoin('questions', function($join) {
                                        $join->on('user_question_answer.question_id', '=', 'questions.id');
                                    })
                                    ->where('email',auth()->user()->email)
                                    ->where('questions.quiz_id',$quiz->id)
                                    ->where('is_right',1)
                                    ->get()
                                    ->count();

        $isAnswer = UserQuestionAnswer::leftJoin('questions', function($join) {
                                        $join->on('user_question_answer.question_id', '=', 'questions.id');
                                    })
                                    ->where('email',auth()->user()->email)
                                    ->where('questions.quiz_id',$quiz->id)
                                    ->get()
                                    ->count();
        $totalNilai = 100;
        $jumlahQuiz = $countQuiz > 0 ? $countQuiz : 100;
        $nilaiPerSoal = $totalNilai / $jumlahQuiz ;
        $nilaiYour = $answerIsRight * $nilaiPerSoal;
        $isRepeat = $nilaiYour >70 ? false : true;
        return view('frontend.siswa.quiz', [
            'quiz' => $quiz,
            'questions'=>$questions,
            'nilai' => $nilaiYour,
            'is_answer' => $isAnswer>0 ? true : false,
            'is_repeat' => $isRepeat
        ]);
    }

    public function accept($slug, $token)
    {
        
        $quiz = $this->quiz->with('questions.options')->where('slug', $slug)->firstOrFail();
        
        return view('frontend.quiz.index', ['quiz' => $quiz, 
                                            'token' => $token]);
    }

    public function answer($slug, Request $request)
    {
        $email =auth()->user()->email;
        $quiz = $this->quiz->with('questions.options')->where('slug', $slug)->firstOrFail();

        OpenMateri::updateOrCreate([
            'user_id' => auth()->user()->id,
            'materi_code' => $request->materi_code,
        ],[
            'materi_code' => $request->materi_code,
            'status' => 1
        ]);

        $isAnswerSaved = (new SaveQuizAnswer)->answer($email,$quiz->id, $request);
        if ($isAnswerSaved)
            return redirect()->route('siswa.quiz',[$slug])->with('success', 'Test Completed.');
        else
            return redirect()->route('home')->with('error', 'Something went wrong.');
    }
    
}
