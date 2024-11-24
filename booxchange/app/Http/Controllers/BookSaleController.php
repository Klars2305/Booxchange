<?php

namespace App\Http\Controllers;

use App\Models\BookSale;
use Illuminate\Http\Request;
use App\Http\Controllers\User;
use DB;

class BookSaleController extends Controller
{
    // Store the new book sale
    public function store(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'sellerName' => 'required|string|max:255',
            'bookTitle' => 'required|string|max:255',
            'bookImage' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'author' => 'required|string|max:255',
            'bookDescription' => 'required|string',
            'bookGenre' => 'required|string|max:255',
            'bookCondition' => 'required|string|max:255',
            'price' => 'required|numeric',
            'preferItemsToTrade' => 'nullable|string|max:255',
        ]);

        // Handle file upload
        if ($request->hasFile('bookImage')) {
            $file = $request->file('bookImage');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('images',$filename, 'public');
            $validatedData['bookImage'] = $filename; // Save filename to DB
        }

        // Create the new BookSale record in the database
        BookSale::create($validatedData);

        // Return back with a success message (optional)
        return back()->with('success', 'Book sale submitted successfully!');
    }

    // Get all records and pass them to the view
    public function record()
    {
        $records = BookSale::all();
        return view('seller', compact('records'));
    }

    // Delete the book sale record


    // Display all records (index)
    public function index()
    {
        $records = BookSale::all(); // Fetch data
        return view('seller', compact('records')); // Pass to view
        return view('transaction', compact('book_sales'));
    }

    // Update the record in the database
    public function update_records(Request $request, $id)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'sellerName' => 'required|string|max:255',
            'bookTitle' => 'required|string|max:255',
            'bookImage' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'author' => 'required|string|max:255',
            'bookDescription' => 'required|string',
            'bookGenre' => 'required|string|max:255',
            'bookCondition' => 'required|string|max:255',
            'price' => 'required|numeric',
            'preferItemsToTrade' => 'nullable|string|max:255',
        ]);

        // Find the record by ID and update it
        $data = BookSale::find($id);
        if ($data) {
            $data->sellername = $request->input('sellerName');
            $data->bookTitle = $request->input('bookTitle');
            $data->author = $request->input('author');
            $data->bookDescription = $request->input('bookDescription');
            $data->bookGenre = $request->input('bookGenre');
            $data->bookCondition = $request->input('bookCondition');
            $data->price = $request->input('price');
            $data->preferItemsToTrade = $request->input('preferItemsToTrade');

            // Handle file upload if a new image is provided
            $data = BookSale::find($id);
            if ($data) {
                // Check if a new image was uploaded
                if ($request->hasFile('bookImage')) {
                    $file = $request->file('bookImage');
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->storeAs('images', $filename, 'public');
                    $validatedData['bookImage'] = $filename; // Update image path in database
                }
            $data->save();

            return redirect()->route('records')->with('success', 'Book sale updated successfully!');
        }

        return back()->with('error', 'Record not found!');
    }
}

public function search(Request $request)
{
    $searchTerm = trim($request->input('search'));

    // Prevent search if the term is empty or contains invalid characters
    if (empty($searchTerm)) {
        return redirect()->back()->with('error', 'Please enter a search term.');
    }

    // Start with the base query
    $query = BookSale::query();

    // If there's a search term, apply the filter
    if (!empty($searchTerm)) {
        $query->where('bookTitle', 'like', "%$searchTerm%");
    }

    // Execute the query
    $records = $query->get();

    // Return the view with the filtered records
    return view('seller', compact('records'));
}


public function destroy($id)
{
    $bookSale = BookSale::findOrFail($id);
    $bookSale->delete();

    return redirect()->back()->with('success', 'BookSale soft-deleted successfully!');
}



}
