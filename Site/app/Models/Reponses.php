<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponses extends Model
{
    protected $table = 'reponses_users';
    protected $fillable = ['numero_question','titre_question','type'];
}
