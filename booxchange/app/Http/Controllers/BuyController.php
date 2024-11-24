<?php

namespace App\Http\Controllers;
use App\Models\BookBuy;
use App\Models\BookBuyController;
use App\Models\BookSale;

use Illuminate\Http\Request;

class BuyController extends Controller
{
    

    public function index()
    {
        $bookSales = BookSale::all();    // Data for BookSale

        // Pass the bookSales data to the view
        return view('buyer', compact('bookSales')); 
    }


}
