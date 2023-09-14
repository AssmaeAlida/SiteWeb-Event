<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class OrganizerController extends Controller
{
  public function showRegistrationForm()
  {
      // Vérifier si l'utilisateur est déjà un organisateur
      if (Auth::user()->is_organizer) {
          return redirect()->route('organizer.dashboard');
      }

      return view('auth.complete-registration');
  }

    public function completeRegistration(Request $request)
    {
          // Valider les données du formulaire de complétion d'inscription
        $request->validate([
            'phone_number' => ['required', 'string', 'unique:users', 'regex:/^06\d{8}$/'],
            'agree_terms' => ['accepted'], // Assurez-vous que la case est cochée (valeur '1')
       ], [
        'phone_number.regex' => 'Le numéro de téléphone doit commencer par "06" et contenir ensuite 8 chiffres.',
        'agree_terms.accepted' => 'Vous devez accepter les termes pour vous inscrire en tant qu\'organisateur.',
       ]);

        $user = auth()->user();
        $user->phone_number = $request->phone_number;
        $user->is_organizer = true; 
        $user->save();
      // Rediriger vers le tableau de bord de l'organisateur après l'inscription
      return redirect()->route('organizer.dashboard')->with('success', 'Inscription en tant qu\'organisateur terminée !');

    }
       public function dashboard()
    {
        
    return view('organizer.dashboard');
    }
}
