<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire BigScreen</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/StyleAccueil.css') }}" >
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
</head>
<body>
    <div class="lignes">
        <div class="l1"></div>
        <div class="l2"></div>
    </div>

    <div class="container-first">
        <h1><span>Bonjour </span><span>et </span><span>bien </span><span>venue</span></h1>
        <div class="container-btns">
            <button class="btn-first b1">Commencer</button>
        </div>
    </div>

    <img src="img/bigscreen.jpg" class="logo">


    <ul class="medias">
        <li class="bulle"><img src="img/a.png" class="logo-medias"></li>
        <li class="bulle"><img src="ressources/insta.svg" class="logo-medias"></li>
        <li class="bulle"><img src="ressources/yt.svg" class="logo-medias"></li>
        <li class="bulle"><img src="ressources/fb.svg" class="logo-medias"></li>
    </ul>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/accueil.js') }}"></script>
</body>
</html>