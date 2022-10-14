<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'question';
    protected $guarded = [];

    
    public function reponses()
    {
        return $this->belongsTo(Answers::class);
    }
    
}
