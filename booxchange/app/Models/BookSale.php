<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookSale extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'sellerName', 
        'bookTitle', 
        'bookImage', 
        'author', 
        'bookDescription', 
        'bookGenre', 
        'bookCondition', 
        'price',
        'preferItemsToTrade',
    ];

    protected $dates = ['deleted_at'];
}
