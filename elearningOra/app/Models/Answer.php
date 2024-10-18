<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['answer_text', 'question_id', 'is_correct'];

    public function question(){
        return $this->belongsTo(Question::class);
    }
}
