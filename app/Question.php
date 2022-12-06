<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = ["is_active","quiz_id","question","type"];

    public function options() {
        return $this->hasMany(Option::Class);
    }

    

}
