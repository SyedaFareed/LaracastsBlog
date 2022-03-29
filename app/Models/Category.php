<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];    //mitigating mass assignment vulnerabilities
    // // protected $fillable = ['title', 'excerpt', 'body'];

    public function posts(){
        //hasone, hasmany, belongsto, belongstomany
        return $this->hasMany(Post::class); // Getting all posts with a specific category
    }
}
