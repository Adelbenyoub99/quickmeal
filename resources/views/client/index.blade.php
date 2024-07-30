<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Meal</title>

    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\header.css">
    <link rel="stylesheet" href="css\index.css">
    <link rel="stylesheet" href="css\footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
    <section class="hero">
        <div>
            <h1>Mangez n'importe où !</h1>
            <br>
            <h4>Vous aurez votre commande le plus vite possible</h4>
            <br>
            <button class="commander">
                <a href="#catalogue">Commander</a>
            </button>   
        </div>
    </section>
    <section class="catalogue" id="catalogue">
        <h1>Nos types de restaurants</h1>
        <div class="catalogue__restaurants">
            <div class="type__restaurant">
                <img src="assets/hamburger.svg" alt="" srcset="">
                <h1 class="titre">Fast-food</h1>
                <a href="">Voir les restaurants</a>
            </div>
            <div class="type__restaurant">
                <img src="assets/cafe.svg" alt="" srcset="">
                <h1 class="titre">Cafés & glaces</h1>
                <a href="">Voir les restaurants</a>
            </div>
            <div class="type__restaurant">
                <img src="assets/patisserie.svg" alt="" srcset="">
                <h1 class="titre">Pâtisseries</h1>
                <a href="">Voir les restaurants</a>
            </div>
        </div>
    </section>
    <section class="recommendation">
        <h1>Les plus recommandés</h1>
        <div class="catalogue__recommande">
            <div class="recommande">
                <div class="photo">
                    <img src="assets/quick_yes.jpg" alt="" srcset="">
                </div>
                <div class="info">
                    <h1>Fast-food</h1>
                    <h3>Quick Yes</h3>
                    <a href="">Consulter menu</a>
                </div>
            </div>
            <div class="recommande">
                <div class="photo">
                    <img src="assets/boulaglace.jpg" alt="" srcset="">
                </div>
                <div class="info">
                    <h1>Cafétéria & glaces</h1>
                    <h3>Da Ali bou la Glace</h3>
                    <a href="">Consulter menu</a>
                </div>
            </div>
            <div class="recommande">
                <div class="photo">
                    <img src="assets/darleila.jpg" alt="" srcset="">
                </div>
                <div class="info">
                    <h1>Pâtisserie</h1>
                    <h3>Dar Leila</h3>
                    <a href="">Consulter menu</a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="navFooter">
            <h1>Liens Raccourcis</h1>
            <ul>
                <li><a href="" class="item__menu">Accueil</a></li>
                <li><a href="{{URL::to('/restaurant')}}" class="item__menu">Restaurants</a></li>
                <li><a href="{{URL::to('/contact')}}" class="item__menu">Contact</a></li>
                <li><a href="{{URL::to('/aPropos')}}" class="item__menu">A propos</a></li>
                <li><a href="{{URL::to('/logResto')}}" class="liens" style=" background-color: var(--vert);" >Nos rejoidre </a></li>
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