<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TraderController extends Controller
{
    /**
     * Display a listing of the available trades.
     */
  // Accept a trade
  public function accept($id)
  {
      $trade = Trade::find($id);

      if (!$trade) {
          return back()->with('error', 'Trade not found.');
      }

      $trade->status = 'accepted'; // Update the status of the trade
      $trade->save();

      return back()->with('success', 'Trade accepted successfully.');
  }

  // Reject a trade
  public function reject($id)
  {
      $trade = Trade::find($id);

      if (!$trade) {
          return back()->with('error', 'Trade not found.');
      }

      $trade->status = 'rejected'; // Update the status of the trade
      $trade->save();

      return back()->with('success', 'Trade rejected successfully.');
  }

  // Mark trade as complete
  public function complete($id)
  {
      $trade = Trade::find($id);

      if (!$trade) {
          return back()->with('error', 'Trade not found.');
      }

      $trade->status = 'completed'; // Update the status of the trade
      $trade->save();

      return back()->with('success', 'Trade completed successfully.');
  }

  // View all trades with their statuses
  public function index()
  {
      $trades = Trade::all(); // Get all trades
      return view('trades.index', compact('trades'));
  }

  // Show a specific trade's details
  public function show($id)
  {
      $trade = Trade::find($id);

      if (!$trade) {
          return back()->with('error', 'Trade not found.');
      }

      return view('trades.show', compact('trade'));
  }
}
