<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //protected $table = 'prodotti_da_vendere';
    protected $fillable = ['name', 'quantity', 'location', 'image'];
}
