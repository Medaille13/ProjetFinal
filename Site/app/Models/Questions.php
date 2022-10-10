<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'questions_users';
    protected $guarded = [];
    
    public function reponses()
    {
        return $this->belongsTo(Reponses::class);
    }
}
