<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookTrade extends Model
{
    use HasFactory;

    protected $fillable = [
        'traderName',
        'account_id', 
        'bookTitle', 
        'bookImage', 
        'author', 
        'bookDescription', 
        'bookGenre', 
        'bookCondition', 
        'preferItemsToTrade',
    ];

 
}
