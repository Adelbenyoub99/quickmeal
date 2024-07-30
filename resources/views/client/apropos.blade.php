<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Quick Meal</title>

        <!-- Link CSS -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/apropos.css" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">

    </head>

    <body>

        <header>
            <div class="logo">
                Quick <span>Meal</span>
            </div>
            <div class="recherche">
                <input type="search" name="" id="" placeholder="Plats ..." class="barre__recherche">
                <img src="rechercher.svg" alt="" srcset="">
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
                    {{--            <a href="" class="panier">
                <img src="panier.svg" alt="">
            </a>--}}

        </header>

        <section class="image_texte">
        <!-- Contenu -->
                <div class="image">
                <img src="assets/apropos.jpg" alt="Description de l'image">
                </div>

                <div class="text">
                <h1>A propos de Quick Meal</h1>
                <p>Quick <span>Meal</span> est un site de commande de repas en ligne permettant de se faire livrer chez soi. Nous regroupons une sélection de restaurants spécialisés dans le snack, le café et la pâtisserie.</p>
                <p>Notre objectif est de faciliter votre vie quotidienne en vous proposant une sélection de plats de qualité à portée de clic. Nous travaillons avec des partenaires engagés dans une démarche de qualité et de traçabilité.</p>
                <p>Grâce à notre interface simple et intuitive, vous pouvez commander vos plats préférés en quelques clics. Nous sommes à votre disposition pour toute question ou remarque.</p>
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
