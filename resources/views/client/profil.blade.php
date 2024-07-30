<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\header.css">
    <link rel="stylesheet" href="css\footer.css">
    <link rel="stylesheet" href="css\profil.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            Quick<span> Meal</span>
        </div>
        <div class="recherche">
            <input type="search" name="" id="" placeholder="Plats ..." class="barre__recherche">
            <img src="assets/rechercher.svg" alt="" srcset="">
        </div>

        <nav>
            <ul>
                <li><a href="{{URL::to('/home')}}" class="item__menu">Accueil</a></li>
                <li><a href="{{URL::to('/restaurant')}}" class="item__menu">Restaurants</a></li>
                <li><a href="{{URL::to('/menu')}}" class="item__menu">Menus</a></li>
                <li><a href="{{URL::to('/contact')}}" class="item__menu">Contact</a></li>
                <li><a href="{{URL::to('/aPropos')}}" class="item__menu">A propos</a></li>
                <li><a href="{{URL::to('/login')}}" class="item__menu" id="identifier">S'identifier</a></li>
   
            </ul>
        </nav>
        {{--        <a href="" class="panier">
                    <img src="assets/panier.svg" alt="">
        </a>--}}
    </header>

    <section>

            <div class="orders">
                <h2>Commandes</h2>
                <div class="search">
                    <input type="text" placeholder="Rechercher une commande">
                    <button>Rechercher</button>
                </div>
                <table>
                    <tr>
                        <th>Numéro de commande</th>
                        <th>Restaurant</th>
                        <th>Client</th>
                        <th>Date</th>
                        <th>Prix</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Restaurant 1</td>
                        <td>John Doe</td>
                        <td>2023-04-10</td>
                        <td>$25.00</td>
                        <td>En attente</td>
                        
                        <td>
                            <button>Modifier</button>
                            <button>Supprimer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Restaurant 2</td>
                        <td>Jane Smith</td>
                        <td>2023-04-11</td>
                        <td>$35.00</td>
                        <td>Expédiée</td>
                        <td>
                            <button>Modifier</button>
                            <button>Supprimer</button>
                        </td>
                    </tr>
                </table>
            </div>

    </section>

    <footer>
        <div class="navFooter">
            <h1>Liens Raccourcis</h1>
            <ul>
                <li><a href="" class="liens">Accueil</a></li>
                <li><a href="" class="liens">Restaurants</a></li>
                <li><a href="" class="liens">Menus</a></li>
                <li><a href="" class="liens">Contact</a></li>
                <li><a href="" class="liens">A propos</a></li>
                <li><a href="logResto" class="liens" style=" background-color: var(--vert);" >Nos rejoidre </a></li>
            </ul>
        </div>
        <div class="contact">
            <h1>Contact</h1>
            <ul>
                <div class="reseaux">
                    <a href="mailto:contact@quickmeal.dz">
                        <img src="assets/mail.svg" alt="" class="social">
                    </a>
                    <a href="www.facebook.com">
                        <img src="assets/facebook.svg" alt="" class="social">
                    </a>
                    <a href="www.instagram.com">
                        <img src="assets/instagram.svg" alt="" class="social">
                    </a>
                </div>
            </ul>
        </div>
    </footer>
    
</body>
</html>