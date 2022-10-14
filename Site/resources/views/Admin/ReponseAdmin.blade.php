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
                    <a href={{route("QuestionAdm")}}>
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Questions
                        </span>
                    </a>
                    
                </li>

                <li class="has-subnav">
                    <a href={{route("ReponseAdm")}}>
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
        
        <h2 align="center">Liste des réponses</h2><br>
        <br><br>
        <div align="center"><a href={{route("AccueilAdm")}}>Revenir à la page d'accueil</a></div><br><br>
    
            <table>
                <th>
                    <td>Question numéro</td>
                    <td>Prix</td>
                    <td>Photo</td>
                    <td>Taille</td>
                    <td>Reference</td>
                    <td>Description</td>
                    <td>Categorie</td>
                    <td>Etat</td>
                    <td>Public</td>
                </th>
               
            </table>



  </body>
    </html>