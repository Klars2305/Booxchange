<?php

namespace App\Http\Controllers;
use App\Models\BookSale;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $book_sales = BookSale::all(); // Fetch all data from BookSale model
        return view('transaction', ['BookSales' => $book_sales]); // Pass data to the transaction view
    }


    // TransactionController.php
public function update(Request $request, $id)
{
    // Validate incoming data
    $request->validate([
        'bookTitle' => 'required',
        'bookDescription' => 'required',
        'bookGenre' => 'required',
        'bookCondition' => 'required',
        'price' => 'required|numeric',
    ]);

    // Find the specific transaction (book sale) by ID
    $bookSale = BookSale::find($id);

    // If the book sale exists, update it
    if ($bookSale) {
        $bookSale->bookTitle = $request->bookTitle;
        $bookSale->bookDescription = $request->bookDescription;
        $bookSale->bookGenre = $request->bookGenre;
        $bookSale->bookCondition = $request->bookCondition;
        $bookSale->price = $request->price;
        $bookSale->save();  // Save the updated book sale
    }

    // Redirect to the transaction page with success message
    return redirect()->route('transaction')->with('success', 'Transaction updated successfully!');
}


public function destroy($id)
{
    // Find the record and soft delete it
    $transaction = BookSale::findOrFail($id);
    $transaction->delete();

    return redirect()->back()->with('success', 'Transaction deleted successfully.');
}

}
