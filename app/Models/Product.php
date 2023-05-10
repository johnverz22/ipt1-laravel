<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','unit','unitPrice', 'category', 'image_url','description'];

    public function getCategory(){
        if($this->category == 'meat') return 'Fresh Meat';
        elseif($this->category=='vegetable') return 'Fresh Vegetable';
        elseif($this->category=='fish') return 'Fresh Fish';
        else return ucfirst($this->category);
    }

    public function scopeFilter($query, array $filters){
        //null coalesce operator in laravel
        //same as isset($filter['search'])
        if($filters['search'] ?? false){
            $query->where('name', 'like', '%'.$filters['search'].'%')
                    ->orWhere('category', 'like', '%'.$filters['search'].'%')
                      ->orWhere('description',  'like', '%'.$filters['search'].'%');
        }

        //select id, name, category ... from products where name like '%search%' or
        //category like '%search%' or description like '%search%'
    }

}
