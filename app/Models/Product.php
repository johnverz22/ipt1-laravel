<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','unit','unitPrice', 'category'];

    public function getCategory(){
        if($this->category == 'meat') return 'Fresh Meat';
        elseif($this->category=='vegetable') return 'Fresh Vegetable';
        elseif($this->category=='fish') return 'Fresh Fish';
        else return ucfirst($this->category);
    }
}
