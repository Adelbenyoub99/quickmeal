<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Storage;



    

class RestaurantController extends Controller
{   
    
    //fonction pour retourner la page newrestaurant
    public function create()
    {
        return view('restaurateur.newrestaurant');
    }

    //fonction pour ajouter un restaurant a la bdd
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom_restaurant' => 'required|max:255',
            'id_restaurateur' => 'required|integer',
            'restaurant_image' => 'nullable|image|max:2048',
            'note' => 'required|numeric|min:0|max:5',
        ]);

        $restaurant = new Restaurant;
        $restaurant->nom_restaurant = $validatedData['nom_restaurant'];
        $restaurant->id_restaurateur = $validatedData['id_restaurateur'];
        $restaurant->note = $validatedData['note'];

        if ($request->hasFile('restaurant_image')) {
            $image = $request->file('restaurant_image');
            $filename = time() . '_' . Str::slug($validatedData['nom_restaurant']) . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/restaurant_images', $filename);
            $restaurant->restaurant_image = $filename;
        }

        $restaurant->save();

        return view('restaurateur.newrestaurant')->with('status', 'Le Restaurant \'' . $restaurant->nom_restaurant . '\' a été ajouté avec succès !');
        return redirect('/restaurants/liste')->with('status', 'Le Restaurant \'' . $restaurant->nom_restaurant . '\' a été ajouté avec succès !');
        
    }

    //fonction pour recuperer la variable restaurant pour l'affichage 
    public function listeRestaurant()
    {
        $restaurants = Restaurant::all();
        return view('restaurateur.listerestaurant', ['restaurants' => $restaurants]);
    }

    //fonction pour supprimer un restaurant
    public function suprimerRestaurant($id)
    {
        $restaurant = Restaurant::find($id);
        if ($restaurant->restaurant_image != 'noimage.jpg') {
            Storage::delete('/public/restaurant_image/'.$restaurant->restaurant_image);
        } 
        $restaurant->delete();
        return redirect('/restaurants/liste')->with('status','Le restaurant \''.$restaurant->nom_restaurant.'\' a été suprimer avec succès !');
    }

    //fonction pour recuperer les infos d'un restaurant
    public function edit($id)
    {
        $restaurant = Restaurant::find($id);
        return view('restaurateur.editrestaurant')->with('restaurant', $restaurant);
    }

    //fonction pour modifier un restaurant
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom_restaurant' => 'required|max:255',
            'restaurant_image' => 'nullable|image|max:2048',
            'note' => 'required|numeric|min:0|max:5',
        ]);

        $restaurant = Restaurant::find($id);
        $restaurant->nom_restaurant = $validatedData['nom_restaurant'];
        $restaurant->note = $validatedData['note'];

        if ($request->hasFile('restaurant_image')) {
            $image = $request->file('restaurant_image');
            $filename = time() . '_' . Str::slug($validatedData['nom_restaurant']) . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/restaurant_images', $filename);
            $restaurant->restaurant_image = $filename;
        }

        $restaurant->save();

        return redirect('/restaurants/liste')->with('status', 'Le restaurant \'' . $restaurant->nom_restaurant . '\' a été modifié avec succès !');
    }


}