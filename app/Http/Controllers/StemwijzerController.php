<?php

namespace App\Http\Controllers;

use App\Models\Vraag;
use App\Models\Partij;
use App\Models\Standpunt;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class StemwijzerController extends Controller
{
    public function index(Request $request): View
    {
        $vraagId = $request->input('vraag_id', 1);
        $vraag = Vraag::with('thema')->find($vraagId);
        $partijen = Partij::all();

        return view('stemwijzer.index', compact('vraag', 'partijen', 'vraagId'));
    }

    public function store(Request $request): DirectResponse
    {
        $userStandpunten = [];

        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'vraag_') !== false) {
                $vraagId = explode('_', $key)[1];
                $userStandpunten[$vraagId] = $value;
            }
        }

        session()->put('userStandpunten', $userStandpunten);

        $nextVraagId = $request->input('vraag_id') + 1;
        $nextVraag = Vraag::find($nextVraagId);

        if ($nextVraag) {
            return redirect()->route('stemwijzer.index', ['vraag_id' => $nextVraagId]);
        } else {
            return redirect()->route('stemwijzer.match');
        }
    }

    public function match(): View
    {
        $userStandpunten = session()->get('userStandpunten', []);

        if (empty($userStandpunten)) {
            return redirect()->route('stemwijzer.index')->with('error', 'Er zijn geen antwoorden bewaard in de sessie.');
        }

        $partijenScores = [];

        foreach (Partij::all() as $partij) {
            $score = 0;

            foreach ($userStandpunten as $vraagId => $userAntwoord) {
                $standpunt = Standpunt::where('partij_id', $partij->id)
                    ->where('vraag_id', $vraagId)
                    ->first();

                if ($standpunt && $standpunt->positie === $userAntwoord) {
                    $score++;
                }
            }

            $partijenScores[$partij->id] = $score;
        }

        $bestMatchPartijId = array_search(max($partijenScores), $partijenScores);

        if ($bestMatchPartijId !== false) {
            $bestMatchPartij = Partij::find($bestMatchPartijId);
        } else {
            $bestMatchPartij = null;
        }

        session()->forget('userStandpunten');

        return view('stemwijzer.result', compact('bestMatchPartij', 'partijenScores'));
    }
}
