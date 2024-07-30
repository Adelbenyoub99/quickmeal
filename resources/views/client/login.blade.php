<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Page de connexion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">

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

    <section>
      <!--  <div class="contenaire" >
        <h1>Connexion</h1>
        <form class="identification">
            <div class="groupe">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>
            </div>
            <div class="groupe">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
            </div>
            <button href="#" type="submit" class="bouton">Se connecter</button>
        </form>
        </div> -->
    <div class="login-container" >


      <h2>Connexion</h2>
            @if (Session::has('status'))
            <div class="alert alert-success">
                    {{Session::get('status')}}
            </div>
            @endif
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors -> all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
      <form action="{{URL::to('/connection')}}" method="POST" class="register-form" id="login-form">

       {{ csrf_field() }}
        <div class="form-group">
          <label for="username">Nom d'utilisateur:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Mot de passe:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button href="home"  type="submit">Se connecter</button>
      </form>
	    <p>Vous n'avez pas de compte ? <a href="inscription">Inscrivez-vous</a></p>
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
                <li><a href="login" class="liens" >S'identifier</a></li>
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