<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Sondage.css') }}" >
    <title>Document</title>
    
</head>
<body>
<div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            <form id="regForm">
                <h1 id="register">Sondage Bigscreen</h1>
                <div class="all-steps" id="all-steps"> 
                  <span class="step"><i class="fa fa-user"></i></span> 
                  <span class="step"><i class="fa fa-map-marker"></i></span>
                  <span class="step"><i class="fa fa-shopping-bag"></i></span>
                  <span class="step"><i class="fa fa-car"></i></span>
                  <span class="step"><i class="fa fa-spotify"></i></span>
                  <span class="step"><i class="fa fa-mobile-phone"></i></span>
                </div>

                <div class="tab">
                  <h6>What's your name?</h6>
                    <p>
                      <input placeholder="Name..." oninput="this.className = ''" name="fname"></p>
                    
                </div>
                <div class="tab">
                  <h6>What's your city?</h6>
                    <p><input placeholder="City" oninput="this.className = ''" name="dd"></p>
                    
                </div>
                <div class="tab">
                    <h6>What's your Favourite Shopping site?</h6>
                    <p><input placeholder="Favourite Shopping site" oninput="this.className = ''" name="email"></p>
                 
                </div>
                <div class="tab">
                    <h6>What's your Favourite car?</h6>
                    <p><input placeholder="Favourite car" oninput="this.className = ''" name="uname"></p>
                </div>

                <div class="tab">
                    <h6>What's your Favourite Song?</h6>
                    <p><input placeholder="Favourite Song" oninput="this.className = ''" name="uname"></p>
                </div>


                <div class="tab">
                    <h6>What's your Favourite Mobile brand?</h6>
                    <p><input placeholder="Favourite Mobile Brand" oninput="this.className = ''" name="uname"></p>
                </div>
                <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                    <h3>Merci pour votre retour</h3> <span>Toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce à votre investissement, nous vous préparons une application toujours plus facile à utiliser, seul ou en famille.
                        Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez cette adresse:</span>
                </div>
                <div style="overflow:auto;" id="nextprevious">
                    <div style="float:right;">
                      <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> 
                      <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button> </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/sondage.js') }}"></script>
</body>
</html>