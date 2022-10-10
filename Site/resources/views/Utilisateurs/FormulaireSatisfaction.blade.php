<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session('success'))
    <p>toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce à votre investissement, nous vous préparons une application toujours plus facile à utiliser, seul ou en famille.
Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez cette adresse: <a href={{ route("fin") }}>ICI</a> </p>
    @endif
    @if($errors->any())
    <p>l'âge doit être de type numérique uniquement</p>
    @endif
    <form action={{ route("questioninsertion") }} method="POST">
        {{ csrf_field() }}
        <div>
            <label for="email">Quel est votre adresse mail ?</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="age">Quel est votre âge</label>
            <input type="text" id="age" name="age" required>
        </div>
        <div>
            <label for="sexe">Quel est votre sexe ?</label>
            <input type="radio" name="sexe" value="homme" checked>homme
            <input type="radio" name="sexe" value="femme">femme
            <input type="radio" name="sexe" value="ne pas repondre">Ne pas répondre
        </div>
        <div>
            <label for="personne">Quel est le nombre de personne dans votre foyer (adulte & enfants)</label>
            <select name="personne" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div>
            <label for="profession">Quel est votre profession</label>
            <input type="text" id="profession" name="profession" required>
        </div>
        <div>
            <label for="casque vr">Quel marque de casque VR utilisez vous ?</label>
            <input type="radio" name="marque" value="Occulus" checked>Occulus Rift/s
            <input type="radio" name="marque" value="HTC">HTC Vive
            <input type="radio" name="marque" value="Windows">Windows Mixed Reality
            <input type="radio" name="marque" value="PSVR">PSVR
        </div>
        <div>
            <label for="magasin">Sur quel magasin d’application achetez vous des contenus VR ?</label>
            <input type="radio" name="store" value="SteamVR" checked>SteamVR
            <input type="radio" name="store" value="Occulus">Occulus store
            <input type="radio" name="store" value="Viveport">Viveport
            <input type="radio" name="store" value="Playstation VR">Playstation VR
            <input type="radio" name="store" value="Google Play">Google Play
            <input type="radio" name="store" value="Windows store">Windows store
        </div>
        <div>
            <label for="futur">Quel casque envisagez-vous d’acheter dans un futur proche ?</label>
            <input type="radio" name="casque" value="SteamVR" checked>Occulus Quest
            <input type="radio" name="casque" value="Occulus">Occulus Go
            <input type="radio" name="casque" value="Viveport">HTC Vive Pro
            <input type="radio" name="casque" value="Autre">Autre
            <input type="radio" name="casque" value="Aucun">Aucun
        </div>
        <div>
            <label for="VR">Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?</label>
            <select name="VR" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div>
            <label for="utilisationprincipale">Vous utilisez principalement Bigscreen pour :</label>
            <input type="radio" name="utilisation" value="tvdirect" checked>regarder des émissions TV en direct
            <input type="radio" name="utilisation" value="films">regarder des films
            <input type="radio" name="utilisation" value="solo">jouer en solo
            <input type="radio" name="utilisation" value="team">jouer en team
        </div>
        <div>
            <label for="foyer">Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?</label>
            <select name="qualité" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        <div>
            <label for="confort">Combien donnez vous de point pour pour le confort d’utilisation de l’interface Bigscreen ?</label>
            <select name="confort" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        <div>
            <label for="point">Combien donnez vous de point pour la connection réseau de Bigscreen ?</label>
            <select name="point" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        <div>
            <label for="graph">Combien donnez vous de point pour pour la qualité des graphismes 3D dans Bigscreen ?</label>
            <select name="graph" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        <div>
            <label for="audio">Combien donnez vous de point pour pour la qualité audio dans Bigscreen ?</label>
            <select name="audio" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <div>
                <label for="notifications">Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?</label>
                <input type="radio" name="notif" value="oui" checked>oui
                <input type="radio" name="notif" value="non">non
            </div>
            <div>
                <label for="ami">Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?</label>
                <input type="radio" name="ami" value="oui2" checked>oui
                <input type="radio" name="ami" value="non2">non
            </div>
            <div>
                <label for="enregistrer">Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?</label>
                <input type="radio" name="enregister" value="oui3" checked>oui
                <input type="radio" name="enregister" value="non3">non
            </div>
            <div>
                <label for="exlusifs">Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?</label>
                <input type="radio" name="exlusifs" value="oui4" checked>oui
                <input type="radio" name="exlusifs" value="non4">non
            </div>
            <div>
                <label for="fonctionnalité">Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?</label>
                <input type="text" id="fonctionnalité" name="fonctionnalité" required>
            </div>
            <input type="submit" id='submit' value='Envoyer'>
        </div>
    </form>   
</body>
</html>