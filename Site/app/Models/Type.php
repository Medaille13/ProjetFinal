<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Question\Question;

class Type extends Model
{
    use HasFactory;
    protected $table = 'nom';
    protected $fillable = ['A','B','C'];

    public function phone()
    {
        return $this->hasOne(Question::class);
    }
}
