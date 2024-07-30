<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des restaurants</title>
    <link rel="stylesheet" href="{{asset("backend/css/listerestaurant.css")}}">
    <link rel="stylesheet" href="{{asset("backend/css/navbar.css")}}">
</head>
<body>
    <nav>

    @include('includes.navbar')

    <h1>Liste des restaurants</h1>
    
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Nom</th>
                <th>Note</th>
                <th>Actions</th>
                <th>Ajouter menu</th>
            </tr>
        </thead>
        <tbody>
            @foreach($restaurants as $restaurant)
                <tr>
                

                    <td><img src="{{ asset('storage/restaurant_images/'.$restaurant->restaurant_image) }}" alt="image du restaurant"></td>
                    <td>{{$restaurant->nom_restaurant}}</td>
                    <td>{{$restaurant->note}}</td>
                    <td>
                        <a href="{{ route('restaurant.edit', $restaurant->id) }}" style="color: green;">Modifier</a>
                        <form action="" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            
                            <button type="submit"><a href="{{ route('restaurants.supprimer', $restaurant->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce restaurant ?')">Supprimer</a></button>
                        </form>
                    </td>
                    <td>
                <a href="{{ route('restaurateur.newmenu', ['restaurant_id' => $restaurant->id]) }}" style="background-color: #4CAF50;">Ajouter un menu</a>

                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>
