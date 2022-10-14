<?php

namespace Database\Seeders;

use App\Models\AnswersChoice;
use App\Models\Reponses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReponsesSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $typeA = DB::table('type')->where('libelle', '=', 'A')->get(['id']);
        $typeB = DB::table('type')->where('libelle', '=', 'B')->get(['id']);
        $typeC = DB::table('type')->where('libelle', '=', 'C')->get(['id']);
        
        {
            $answers1 = [
                ["answer" => "Homme"],
                ["answer" => "Femme"],
                ["answer" => "Préfere ne pas répondre"],
            ];    
            AnswersChoice::insert($answers1);
            
            $answers2 = [
                ["answer" => "1"],
                ["answer" => "2"],
                ["answer" => "3"],
                ["answer" => "4"],
                ["answer" => "5"],
            ];    
            Answer::insert($answers2);
            
            $answers3 = [
                ["answer" => "Occulus Rift/s"],
                ["answer" => "HTC Vive"],
                ["answer" => "Windows Mixed Reality"],
                ["answer" => "PSVR)"],
            ];
            Answer::insert($answers3);
            
            $answers4 = [
                ["answer" => "Occulus Rift/s"],
                ["answer" => "HTC Vive"],
                ["answer" => "Windows Mixed Reality"],
                ["answer" => "PSVR)"],
            ];    
            Answer::insert($answers4);
            
            $answers5 = [
                ["answer" => "SteamVR"],
                ["answer" => "Occulus store"],
                ["answer" => "Viveport"],
                ["answer" => "Playstation VR)"],
                ["answer" => "Google Play)"],
                ["answer" => "Windows store)"],
            ];    
            Answer::insert($answers5);
            
            $answers6 = [
                ["answer" => "Occulus Quest"],
                ["answer" => "Occulus Go"],
                ["answer" => "HTC Vive Pro"],
                ["answer" => "Autre)"],
                ["answer" => "Aucun"],
            ];       
            Answer::insert($answers6);
            
            $answers7 = [
                ["answer" => "Regarder des émissions TV en direct"],
                ["answer" => "Regarder des films"],
                ["answer" => "Jouer en solo"],
                ["answer" => "Jouer en team)"],
                ["answer" => "Aucun"],
            ];       
            Answer::insert($answers7);
            
            
            $answers8 = [
                ["answer" => "Oui"],
                ["answer" => "Non"],
            ];    
            Answer::insert($answers8);
            
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = ""; // saisie par l'utilisateur
            $reponse->idtype = $typeB;
            $reponse->save();
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = ""; // saisie par l'utilisateur
            $reponse->idtype = $typeB;
            $reponse->save();
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = $answers1;
            $reponse->type = $typeA;
            $reponse->save();      
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = $answers2;
            $reponse->type = $typeC;
            $reponse->save();
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = ""; // saisie par l'utilisateur
            $reponse->idtype = $typeB;
            $reponse->save();
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = $answers4;
            $reponse->type = $typeA;
            $reponse->save();
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = $answers5;
            $reponse->type = $typeA;
            $reponse->save();
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = $answers6;
            $reponse->type = $typeA;
            $reponse->save();
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = $answers2;
            $reponse->type = $typeC;
            $reponse->save();
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = $answers7;
            $reponse->type = $typeA;
            $reponse->save();
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = $answers2;
            $reponse->type = $typeC;
            $reponse->save();
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = $answers2;
            $reponse->type = $typeC;
            $reponse->save();
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = $answers2;
            $reponse->type = $typeC;
            $reponse->save();

            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = $answers2;
            $reponse->type = $typeC;
            $reponse->save();
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = $answers2;
            $reponse->type = $typeC;
            $reponse->save();
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = $answers8;
            $reponse->type = $typeA;
            $reponse->save();
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = $answers8;
            $reponse->type = $typeA;
            $reponse->save();
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = $answers8;
            $reponse->type = $typeA;
            $reponse->save();
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = $answers8;
            $reponse->type = $typeA;
            $reponse->save();
            
            $reponse = new Reponses();
            $reponse->id = "";        
            $reponse->reponse = ""; // saisie par l'utilisateur
            $reponse->idtype = $typeB;
            $reponse->save();
        }
    }
};
