<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; 


class EventController extends Controller
{
    public function index()
    {
        // Simulez une liste d'événements (nous utilisons des tableaux ici, mais en réalité, ce serait récupéré de la base de données)
        $events = [
            ['id' => 1, 'title' => 'Événement 1'],
            ['id' => 2, 'title' => 'Événement 2'],
            // Ajoutez d'autres événements ici
        ];

        return view('event_list', compact('events'));
    }

    public function show($eventId)
    {
        // Récupérez les informations de l'événement en fonction de l'ID
        // Ici, nous utilisons un tableau statique pour simuler les données

        $eventDetails = [
            'title' => 'Titre de l\'événement ' . $eventId,
            'description' => 'Description de l\'événement ' . $eventId,
        ];

        return view('event_details', compact('eventDetails'));
    }
}
