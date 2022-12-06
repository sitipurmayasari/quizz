<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quiz';
    protected $fillable = ["type","name","slug","status"];

    public function questions() {
        return $this->hasMany(Question::Class);
    }

}
