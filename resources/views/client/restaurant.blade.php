<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Meal</title>

    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\header.css">
    <link rel="stylesheet" href="css\restaurant.css">
    <link rel="stylesheet" href="css\footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

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

 <div class="recommendation">
            
    @foreach ($restaurants as $restaurant)
        <div class="recommande">
            <div class="photo">
                <img src="{{ asset('storage/restaurant_images/'.$restaurant->restaurant_image) }}" alt="{{ $restaurant->nom_restaurant }}" />
            </div>
            <div class="info">
                <h1>{{ $restaurant->nom_restaurant }}</h1>
                <h3>{{ $restaurant->nom_restaurateur }}</h3>
                <a href="">Consulter menu</a>
            </div>
        </div>
    @endforeach
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