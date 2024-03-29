<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compte;

class ConnectionController extends Controller
{
    /**
     * Display conection form
     *
     * @return \Illuminate\View\View
     */
    public function displayConnectionForm()
    {
        return view('form_connection');
    }

    /**
     * Check connection informations and connect if valid
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function checkConnection(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        $login = $request->input('login');
        $password = $request->input('password');

        $user = Compte::where('login', $login)->where('pwd', $password)->first();
        if ($user) {
            session(['user_id' => $user->id]);
            session(['name' => $user->login]);
            session(['type' => $user->idTypeUser]);

            return redirect()->route('welcome')->with('success', 'Connexion réussie!');
        } else {
            return redirect()->route('connection.formulaire')->with('error', 'Identifiants incorrects. Réessayez.');
        }
    }

    /**
     * Display inscription form
     *
     * @return \Illuminate\View\View
     */
    public function signIn()
    {
        return view('inscription');
    }

    /**
     * Create a new account
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function signInValidate(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'login' => 'required|string|max:20|unique:comptes',
            'pwd' => 'required|string|max:255',
            'address' => 'required|string|max:32',
            'cp' => 'required|string|max:5',
            'city' => 'required|string|max:32',
            'mail' => 'required|string|email|max:50|unique:comptes',
        ]);

        // Création d'un nouveau compte
        $compte = new Compte();
        $compte->name = $request->input('name');
        $compte->login = $request->input('login');
        $compte->pwd = $request->input('pwd');
        $compte->address = $request->input('address');
        $compte->cp = $request->input('cp');
        $compte->city = $request->input('city');
        $compte->mail = $request->input('mail');
        $compte->idTypeUser = 2; // Default customer

        $compte->save();

        session(['name' => $compte->name]);
        session(['type' => 2]);
        session(['user_id' => $compte->id]);

        return redirect()->route('welcome')->with('success', 'Compte créé avec succès!');
    }

    public function deconnection()
    {
        session()->flush();
        return redirect()->route('welcome')->with('success', 'Déconnexion réussie!');
    }
}
