<?php

namespace Database\Seeders;

use App\Models\Reponses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReponsesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $reponse = new Reponses();
        $reponse->id = "";
        $reponse->number = "";
        $reponse->reponse = "";
        $reponse->type = "B";
        $reponse->save();

        $reponse = new Reponses();
        $reponse->id = "";
        $reponse->number = "";
        $reponse->reponse = "";
        $reponse->type = "B";
        $reponse->save();

        $reponse = new Reponses();
        $reponse->id = "";
        $reponse->number = "";
        $reponse->reponse = "";
        $reponse->type = "A";
        $reponse->save();

        $reponse = new Reponses();
        $reponse->id = "";
        $reponse->number = "";
        $reponse->reponse = "";
        $reponse->type = "C";
        $reponse->save();

        $reponse = new Reponses();
        $reponse->id = "";
        $reponse->number = "";
        $reponse->reponse = "";
        $reponse->type = "B";
        $reponse->save();

        $reponse = new Reponses();
        $reponse->id = "";
        $reponse->number = "";
        $reponse->reponse = "";
        $reponse->type = "A";
        $reponse->save();

        
    }
}
