<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponses extends Model
{
    protected $table = 'reponses_users';
    protected $guarded = [];

    public function questions()
    {
        return $this->hasOne(Reponses::class);
    }
}
