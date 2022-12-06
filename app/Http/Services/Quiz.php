<?php

namespace App\Http\Services;

use App\Option;
use Illuminate\Support\Facades\DB;
use App\Quiz as Kuis;

class Quiz 
{
    public function getMenuQuiz($type)
    {
        return Kuis::orderBy('id','asc')->where('type',$type)->where('STATUS','AKTIF')->get();
    }
    public function saveOptions($request, $question, $type)
    {

        //update options to db
        $options = $request->options;
        $answers = $request->answer;
        $data = [];

        if ($type == 'choice') {

            foreach($options as $key=>$option) {

                $is_right = $key == $answers ? 1 : 0;

                $data[] = [
                    'question_id' => $question->id,
                    'option' => $option,
                    'is_right_option' => $is_right
                ];
            }
        } elseif ($type == 'checkbox') {
            
            foreach ($options as $key => $option) {
                foreach($answers as $answer) {
                    if ($key == $answer) {
                        $is_right = 1; break;
                    } else {
                        $is_right = 0;
                    }
                }

                $data[] = [
                    'question_id' => $question->id,
                    'option' => $option,
                    'is_right_option' => $is_right
                ];
            }

        } else if ($type == 'answer') {
            return true;
        }
        
        $isSaved = Option::insert($data);
        
        return $isSaved;
    }
    public function updateOptions($request, $question)
    {
        $answers = $request->answer;
        $options = Option::where('question_id',$question->id)->get();
      
        foreach($options as $key=>$row) {
            $is_right = $key == $answers ? 1 : 0;
            $op = Option::find($row->id);
            $op->timestamps = false;
            $op->option = request('options-'.$row->id);
            $op->is_right_option = $is_right;
            $op->save();
          
        }
        
        // $isSaved = Option::insert($data);
        
        return true;
    }
}