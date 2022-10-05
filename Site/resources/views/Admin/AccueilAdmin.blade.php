<html>
  <head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/StyleAdmin.css') }}" >
  </head>
  <body><div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href={{route("AccueilAdm")}}>
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Accueil
                        </span>
                    </a>
                  
                </li>
                
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Questions
                        </span>
                    </a>
                    
                </li>

                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Réponses
                        </span>
                    </a>
                    
                </li>                

            <ul class="logout">
                <li>
                   <a href={{route("LogoutAdm")}}>
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Déconnexion
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
        
  </body>
    </html>