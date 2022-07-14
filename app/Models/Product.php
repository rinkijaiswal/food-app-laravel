<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','category','image','price'];

    public function createFood($data){
        return Product::create($data);
    }
    public function getAll(){
        return Product::get();
    }
}
