<?php

namespace App\Models;

use App\Http\Controllers\BookTradeController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

    protected $table = 'traders';  // Make sure it's pointing to the correct table

    protected $fillable = [
        'tradername', 
        'bookTitle', 
        'bookImage', 
        'author', 
        'bookDescription', 
        'bookGenre', 
        'bookCondition', 
        'preferItemsToTrade',
        'owner_id',  // Add owner_id
        'status',     // Add status
    ];

    // Relationship to User: The owner of the book
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function tradeRequests()
    {
        return $this->hasMany(BookTradeController::class, 'trade_id');
    }
}
