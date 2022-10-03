<?php

namespace Database\Seeders;
use App\Models\Questions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Questions
        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Quel est votre adresse email ?";
        $question->type = "B";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Quel est votre âge ?";
        $question->type = "B";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro /20";
        $question->titre = "Quel est votre sexe ?";
        $question->type = "A";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Combien y a-t-il de personne dans votre foyer (adultes et enfants) ?";
        $question->type = "C";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Quel est votre profession ?";
        $question->type = "B";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Quel marque de casque VR utilisez vous ?";
        $question->type = "A";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Sur quel magasin d’application achetez vous des contenus VR ?";
        $question->type = "A";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Quel casque envisagez-vous d’acheter dans un futur proche ?";
        $question->type = "A";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?";
        $question->type = "C";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Vous utilisez principalement Bigscreen pour :";
        $question->type = "A";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?";
        $question->type = "C";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?";
        $question->type = "C";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Combien donnez vous de point pour la connection réseau de Bigscreen ?";
        $question->type = "A";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?";
        $question->type = "C";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Combien donnez vous de point pour la qualité audio dans Bigscreen ?";
        $question->type = "C";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?";
        $question->type = "A";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?";
        $question->type = "A";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?";
        $question->type = "C";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?";
        $question->type = "C";
        $question->save();

        $question = new Questions();
        $question->id = "";
        $question->nom = "Question numéro";
        $question->titre = "Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?";
        $question->type = "B";
        $question->save();
    }
}
