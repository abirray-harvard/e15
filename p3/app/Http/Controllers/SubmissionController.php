<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'vaccine' => 'required',
            'quantity' => 'required',
            'name' => 'required|regex:/^[a-z\s]*$/i',
            'number' => 'required|digits:10',
        ]);

        $vaccine = $request->input('vaccine');
        $price = 0;
        
        switch($vaccine) {
            case 'pfizer':
                $vaccine = 'Pfizer-BioNTech';
                $price = 19.50;
                break;
            case 'johnson':
                $vaccine = 'Johnson & Johnson';
                $price = 10;
                break;
            case 'moderna':
                $vaccine = 'Moderna';
                $price = 25;
                break;
        }
        
        $quantity = $request->input('quantity');
        $totalAmount = $quantity * $price;
        $totalAmount = number_format($totalAmount, 2, '.', '');
        return view('process')
            ->with('vaccine', $vaccine)
            ->with('quantity', $quantity)
            ->with('name', $request->input('name'))
            ->with('number', $request->input('number'))
            ->with('amount', $totalAmount);
    }

}
