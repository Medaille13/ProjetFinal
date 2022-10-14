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
    <div>
    <h2 align="center">Liste des réponses</h2><br>
    <br><br>
    <div align="center"><a href={{route("AccueilAdm")}}>Revenir à la page d'accueil</a></div><br><br>
    
    <table>
        <th>
            <td>Question numéro</td>
            <td>Corps de la question</td>
            <td>Type de question</td>
        </th>
        <!--(le arobase à faire avant le forelse)forelse($produits as $produit) -->
        <tr>   
            <td>a</td>
            <td>a</td>
            <td>a</td>
    </table> 
</div>       
    </body>
    </html>