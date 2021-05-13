<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Available_vaccine;

class IndexController extends Controller
{
    public function getVaccines() {
        $available_vaccine = new Available_vaccine();
        $results = Available_vaccine::all();
        //dump($results->toArray());

        //foreach (Available_vaccine::all() as $vaccine) {
          //  echo "<p>" . $vaccine->vaccine . "</p>";
        //}
        return view('index')
            ->with('results', $results);
    }
    
    
}
