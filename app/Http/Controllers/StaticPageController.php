<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function about ()
    {
        $number = rand(1, 10);

        if ($number == 10) {;
            return view('about', [
                'code' => 'SURPRISE',
                'message' => 'Avec ce code promotionnel vous pouvez bénéficier d\'une réduction de -50% sur tout le site, offre valable aujourd’hui seulement !'
                ]);
        } else {
            return view('about');
        }
    }
}
