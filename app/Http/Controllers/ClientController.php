<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\Client;
use App\Models\Restaurant;


class ClientController extends Controller
{   
    //fonction pour afficher la page Connexion
    public function login() {
        return view('client.login');
    }

    //fonction pour afficher la page inscription
    public function inscription() {
        return view('client.inscription');
    }
    
    //fonction pour afficher la page d'acceuil 
    public function index() {
        return view('client.index');
    }

    //fonction pour afficher la page Conection restaurateur
    public function logResto() {
        return view('client.logResto');
    }

    //fonction pour afficher la page des restaurants
    public function restaurant() {
        $restaurants = Restaurant::all();
        return view('client.restaurant')->with('restaurants',$restaurants);
    }

    //fonction pour afficher la page aPropos
    public function aPropos() {
        return view('client.apropos');
    }

    //fonction pour afficher la page Menu
    public function menu() {
        return view('client.menu');
    }   
    
    //fonction pour afficher la page du profil du client
    public function profil() {
        return view('client.profil');
    }  

    //fonction pour cree un compte client et l'ajouter a la bdd
    public function creer_compte(Request $request){
        $this->validate($request, [
            'nom' => 'required|min:3|max:20',
            'prenom' => 'required|min:3|max:20',
            'adresse' => 'required|min:3|max:50',
            'ntel' => 'required|min:10|max:10',
            'email' => 'email|required',
            'password' => 'required|min:6',
            ]);

        $client = new Client();
        $client->nom_client = $request-> input('nom');
        $client->prenom_client = $request-> input('prenom');
        $client->email_client = $request-> input('email');
        $client->adresse_client = $request-> input('adresse');
        $client->nTel_client = $request-> input('ntel');
        $client->mot_de_passe = bcrypt($request-> input('password'));

        $client->save();

        return back()->with('status', 'your account has been created successfully !');


    }

    //fonction qui verifie les information du client lors de sa connexion
    public function connection(Request $request)
    {
        $this->validate($request, [
            'username' => 'email|required',
            'password' => 'required'
            ]);

        $client = Client::where('email_client',$request->input('username'))->first();
        if ($client) {
            if (hash::check($request->input('password'),$client->mot_de_passe)) {
                Session::put('client',$client);
                return redirect('/profil');
            } else {
                return back()->with('status','mauvais mot de passe ou email');
            }
            
        } else {
            return back()->with('status','vous n\'avez pas de compte');
        }
        
    }
    /* public function disconnection(){
        Session::forget('client');
        Session::forget('cart');
        return redirect('/');
    } */
}
