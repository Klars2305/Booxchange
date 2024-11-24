<?php

// TradeRequest Model (App\Models\TradeRequest)
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'trade_id',
        'user_id',
        'status', // You may have a 'pending', 'accepted', 'rejected' status for trade requests
    ];

    // Relationship to Trade: A TradeRequest belongs to a Trade
    public function trade()
    {
        return $this->belongsTo(Trade::class, 'trade_id');
    }

    // Relationship to User: A TradeRequest belongs to a User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}