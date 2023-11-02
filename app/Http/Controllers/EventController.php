<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getNextEvents(Request $request)
    {
        // Busca os próximos eventos
        $nextEvents = Event::where('start_date', '>', now())
            ->orderBy('start_date')
            ->take(10) // Altere conforme necessário
            ->get();

        return response()->json(['nextEvents' => $nextEvents], 200);
    }
}
