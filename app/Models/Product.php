<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'proname',
        'desc',
        'price',
        'image',
        'cat_id',


];
public function categories(){
    return $this->belongsTo(Category::class , 'cat_id' , 'id');
}
public function posts(){
    return $this->hasMany(Post::class , 'pro_id', 'id');
}
}
