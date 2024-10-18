<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['subject_id', 'score', 'email'];

    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}
