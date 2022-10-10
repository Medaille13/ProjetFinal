<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <div>
            <label for="email">Quel est votre adresse mail ?</label>
            <p>{{$retour->email}}</p>
        </div>
        <div>
            <label for="age">Quel est votre âge</label>
            <p>{{$retour->question2}}</p>
        </div>
        <div>
            <label for="sexe">Quel est votre sexe ?</label>
            <p>{{$retour->question3}}</p>
        </div>
        <div>
            <label for="personne">Quel est le nombre de personne dans votre foyer (adulte & enfants)</label>
            <p>{{$retour->question4}}</p>
        </div>
        <div>
            <label for="profession">Quel est votre profession</label>
            <p>{{$retour->question5}}</p>
        </div>
        <div>
            <label for="casque vr">Quel marque de casque VR utilisez vous ?</label>
            <p>{{$retour->question6}}</p>
        </div>
        <div>
            <label for="magasin">Sur quel magasin d’application achetez vous des contenus VR ?</label>
            <p>{{$retour->question7}}</p>
        </div>
        <div>
            <label for="futur">Quel casque envisagez-vous d’acheter dans un futur proche ?</label>
            <p>{{$retour->question8}}</p>
        </div>
        <div>
            <label for="VR">Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?</label>
            <p>{{$retour->question9}}</p>
        </div>
        <div>
            <label for="utilisationprincipale">Vous utilisez principalement Bigscreen pour :</label>
            <p>{{$retour->question10}}</p>
        </div>
        <div>
            <label for="foyer">Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?</label>
            <p>{{$retour->question11}}</p>
        </div>
        <div>
            <label for="confort">Combien donnez vous de point pour pour le confort d’utilisation de l’interface Bigscreen ?</label>
            <p>{{$retour->question12}}</p>
        </div>
        <div>
            <label for="point">Combien donnez vous de point pour la connection réseau de Bigscreen ?</label>
            <p>{{$retour->question13}}</p>
        </div>
        <div>
            <label for="graph">Combien donnez vous de point pour pour la qualité des graphismes 3D dans Bigscreen ?</label>
            <p>{{$retour->question14}}</p>
        </div>
        <div>
            <label for="audio">Combien donnez vous de point pour pour la qualité audio dans Bigscreen ?</label>
            <p>{{$retour->question15}}</p>
            </select>
            <div>
                <label for="notifications">Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?</label>
                <p>{{$retour->question16}}</p>
            </div>
            <div>
                <label for="ami">Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?</label>
                <p>{{$retour->question17}}</p>
            </div>
            <div>
                <label for="enregistrer">Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?</label>
                <p>{{$retour->question18}}</p>
            </div>
            <div>
                <label for="exlusifs">Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?</label>
                <p>{{$retour->question19}}</p>
            </div>
            <div>
                <label for="fonctionnalité">Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?</label>
                <p>{{$retour->question20}}</p>
            </div>
            <button>Télécharger au format PDF</button>  
            <script>
            var button=document.querySelector('button');
            button.addEventListener('click',function(é){
                button.style.display='none';
                window.print();
            })    
            </script>      
</body>
</html>