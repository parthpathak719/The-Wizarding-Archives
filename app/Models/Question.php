<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=['question_text'];
    public function option(){
        return $this->hasMany(Option::class);
    }
}
