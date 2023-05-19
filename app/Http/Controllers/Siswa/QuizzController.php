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

        $open = OpenMateri::where('user_id',auth()->user()->id)
                            ->where('status','1')
                            ->orderby('id','desc')
                            ->first();

        $takequiz = OpenMateri::where('user_id',auth()->user()->id)
                            ->where('materi_code', $slug)
                            ->first();

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
        $isRepeat = $nilaiYour >=70 ? false : true;
        

        if ($slug == "bab-1") {
            $o = OpenMateri::where('user_id',auth()->user()->id)
                            ->where('materi_code','pengurangandesimal')
                            ->first();
            $n = $o->status;
                            
        }elseif ($slug == "bab-2") {
            $o = OpenMateri::where('user_id',auth()->user()->id)
                            ->where('materi_code','pembagiandesimal')
                            ->first();
            $n = $o->status;
        }elseif ($slug == "evaluasi-akhir") {
            $o = OpenMateri::where('user_id',auth()->user()->id)
            ->where('materi_code','bab-2')
            ->first();

            $questions2 = Question::orderBy('id','desc')
                                ->where('quiz_id', 2)
                                ->where('is_active',1)
                                ->get();

            $countQuiz2 = $questions2->count();

            $answerIsRight2 = UserQuestionAnswer::leftJoin('questions', function($join) {
                            $join->on('user_question_answer.question_id', '=', 'questions.id');
                        })
                        ->where('email',auth()->user()->email)
                        ->where('questions.quiz_id',2)
                        ->where('is_right',1)
                        ->get()
                        ->count();

            $isAnswer2= UserQuestionAnswer::leftJoin('questions', function($join) {
                            $join->on('user_question_answer.question_id', '=', 'questions.id');
                        })
                        ->where('email',auth()->user()->email)
                        ->where('questions.quiz_id',2)
                        ->get()
                        ->count();
            $totalNilai2 = 100;
            $jumlahQuiz2 = $countQuiz2 > 0 ? $countQuiz2 : 100;
            $nilaiPerSoal2 = $totalNilai2 / $jumlahQuiz2 ;
            $nilaiYour2 = $answerIsRight2 * $nilaiPerSoal2;
            $isRepeat2 = $nilaiYour2 >=70 ? false : true;


            if ($o->status == 1 & $isRepeat2==0) {
                $n = 1;
            } else {
                $n = 0;
            }

        }


        return view('frontend.siswa.quiz', [
            'quiz' => $quiz,
            'open' => $open,
            'takequiz' => $takequiz,
            'questions'=>$questions,
            'nilai' => $nilaiYour,
            'is_answer' => $isAnswer>0 ? true : false,
            'is_repeat' => $isRepeat,
            'n' => $n
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
