<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset("backend/css/newrestaurant.css")}}">
    <title>Remplir Menu</title>
</head>
<body>
    <h1>Ajouter un plat</h1>
    <form method="POST" action="{{ route('remplirMenu') }}" enctype="multipart/form-data">
        @csrf
        <label for="nom_plat">Nom du plat :</label>
        <input type="text" id="nom_plat" name="nom_plat" required>

        <label for="ingridients">Ingrédients :</label>
        <input type="text" id="ingridients" name="ingridients" required>

        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="prix" step="0.01" min="0" required>

        <label for="image_plat">Image du plat :</label>
        <input type="file" id="image_plat" name="image_plat" accept="image/*" required>

        <button type="submit">Ajouter le plat</button>
    </form>
</body>
</html>
