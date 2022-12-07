<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpenMateri extends Model
{
    //
    protected $table = "open_materi";
    protected $fillable = ["user_id","materi_code","status"];

    public function user() {
        return $this->belongsTo(User::Class, 'user_id');
    }
}
