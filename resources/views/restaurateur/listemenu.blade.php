<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des menus</title>
    <link rel="stylesheet" href="{{asset("backend/css/navbar.css")}}">
    <link rel="stylesheet" href="{{asset("backend/css/listemenu.css")}}">
</head>
<body>
    <nav>
        @include('includes.navbar')
    </nav>

    <h1>Liste des menus</h1>

    @foreach($groupedMenus as $idRestaurant => $menus)
        <h2>Menus du restaurant {{$idRestaurant}}</h2>

        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Nombre plat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                    <tr>
                        <td>{{$menu->nom_menu}}</td>
                        <td>{{$menu->nbr_plats}}</td>
                        <td>    
                            <form action="{{ route('remplirMenu') }}" method="GET">
                                <button type="submit" style="background-color: #4CAF50;">Remplir</button>
                            </form>
    
                            <a href=""><button type="submit" style="background-color: #4CAF50;;">Modifier</button></a>
                            <a href=""><button type="submit" style="background-color: #f44336;;">Supprimer</button></a>                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach

</body>
</html>
