<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ajouter un menu</title>
  <link rel="stylesheet" href="{{asset("backend/css/newmenu.css")}}">
  <link rel="stylesheet" href="{{asset("backend/css/navbar.css")}}">
</head>
<body>

@include('includes.navbar')

  <h1>Ajouter un menu</h1>

  <form action="{{ route('menus.store', $id_restaurant) }}" method="post">
      @csrf

      <input type="hidden" name="id_restaurants" value="{{ $id_restaurant }}">

      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" required>

      <label for="prix">nombre de plats :</label>
      <input type="number" id="nbrplat" name="nbrplat" min="0" required>

      <input type="submit" value="Ajouter le menu">
  </form>

</body>
</html>
