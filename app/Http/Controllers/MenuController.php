<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Restaurant;

class MenuController extends Controller
{


    //fonction qui retourne la vu pour ajouter menu avec le id restaurant comme paramettre
    public function addMenu($id_restaurant)
    {
        $restaurant = Restaurant::findOrFail($id_restaurant);
        return view('restaurateur.newmenu', compact('id_restaurant'));
    }

    //fonction pour stocker les informations dans la bdd
    public function store(Request $request)
    {
        // Validation des champs de formulaire
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'nbrplat' => 'required|numeric|min:0'
        ]);

        // Création d'une nouvelle instance de Menu
        $menu = new Menu();
        $menu->nom_menu = $request->input('nom');
        $menu->nbr_plats = $request->input('nbrplat');
        $menu->id_restaurants = $request->input('id_restaurants');
        
        // Enregistrement du menu dans la base de données
        $menu->save();

        // Redirection vers la liste des restaurants
        return redirect()->route('restaurateur.listerestaurant')->with('success', 'Menu ajouté avec succès !');
    }

    //fonction qui retourne la liste des menus
    public function listeMenu()
    {
        // Récupérer tous les menus triés par l'id de restaurant
        $menus = Menu::orderBy('id_restaurants')->get();

        // Grouper les menus par leur restaurant
        $groupedMenus = $menus->groupBy('id_restaurants');

        return view('restaurateur.listemenu', compact('groupedMenus'));
    }

    public function remplirMenu(){
        return view(restaurateur.remplirmenu);
    }
    


}