<?php

namespace App\Http\Controllers;

use App\Models\BookTrade;
use App\Models\BookSale;
use Illuminate\Http\Request;

class BookTradeController extends Controller
{
    public function index()
    {
        $bookTrades = BookTrade::all();  // Data for BookTrade
        $bookSales = BookSale::all();    // Data for BookSale


        return view('trader', compact('bookTrades', 'bookSales')); 
    }

    
}
