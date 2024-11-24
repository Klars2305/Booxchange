<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookBuyController extends Model
{
    use HasFactory;

    protected $fillable = [
        'CustomerName',
        'account_id', 
        'bookTitle', 
        'bookImage', 
        'author', 
        'bookDescription', 
        'bookGenre', 
        'bookCondition', 
        'BookPrice',
        'deliveryloc',
        'transaction_time',
        'total',
    ];

}
