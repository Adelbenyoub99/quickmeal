<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/inscription.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">

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
  
         <div class="container">
            <h1>Inscription Restaurateur</h1>
            <form action="#">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="nom">Numéro TEL :</label>
            <input type="text" id="nom" name="tel" required>

            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <label for="password">Confirmer mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="S'inscrire">
            </form>
            <p>Vous avez déjà un compte ? <a href="login">Connectez-vous</a></p>
         </div>
    </section>
    <footer>
        <div class="navFooter">
            <h1>Liens Raccourcis</h1>
            <ul>
                <li><a href="home" class="liens">Accueil</a></li>
                <li><a href="" class="liens">Restaurants</a></li>
                <li><a href="" class="liens">Menus</a></li>
                <li><a href="" class="liens">Contact</a></li>
                <li><a href="" class="liens">A propos</a></li>
                <li><a href="" class="liens" >S'identifier</a></li>
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