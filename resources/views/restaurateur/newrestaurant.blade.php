<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un restaurant</title>
    <link rel="stylesheet" href="{{asset("backend/css/newrestaurant.css")}}">
    <link rel="stylesheet" href="{{asset("backend/css/navbar.css")}}">
</head>
<body>

  @include('includes.navbar')

  <h1>Ajouter un restaurant</h1>
    



  <form action="{{ action('App\Http\Controllers\RestaurantController@store') }}" method="POST" enctype="multipart/form-data">   
    {{ csrf_field() }}

      @if(Session::has('success'))
        <div class="alert alert-success">
          {{ Session::get('success') }}
        </div>
      @endif


    <div>
        <label for="nom_restaurant">Nom du restaurant :</label>
        <input type="text" name="nom_restaurant" id="nom_restaurant" required>
    </div>
    <div>
        <label for="id_restaurateur"></label>
        <input type="number" name="id_restaurateur" id="id_restaurateur" value="1" hidden>
    </div>
    <div>
        <label for="restaurant_image">Image du restaurant :</label>
        <input type="file" name="restaurant_image" id="restaurant_image" >
    </div>
   <div>
    <label for="note"></label>
    <input type="number" id="note" name="note" min="0" max="5" value="0" hidden>
    </div>
    <button type="submit">Ajouter</button>
  </form>

  @if (Session::has('status'))
  <div class="alert alert-success">
    {{ Session::get('status') }}
  </div>
@endif

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
    </ul>
  </div>
@endif
</body>
</html>
