<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Available_vaccine;
use App\Models\Order;

class SubmissionController extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'vaccine' => 'required',
            'quantity' => 'required',
            'address' => 'required|min:5',
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
        
        $address = $request->input('address');
        $quantity = $request->input('quantity');
        $totalAmount = $quantity * $price;
        $totalAmount = number_format($totalAmount, 2, '.', '');

        

        return view('process')
            ->with('vaccine', $vaccine)
            ->with('quantity', $quantity)
            ->with('address', $address)
            ->with('amount', $totalAmount);
    }

}
