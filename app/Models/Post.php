<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];    //mitigating mass assignment vulnerabilities
    // protected $fillable = ['title', 'excerpt', 'body'];

    public function scopeFilter($query){    //Post::newQuery()->filter()
        if(request('search')){
            $query
            ->where ('title', 'like', '%'.request('search').'%')
            ->orWhere ('body', 'like', '%'.request('search').'%');
        }
    }
    
    public function category(){
        //hasone, hasmany, belongsto, belongstomany
        return $this->belongsTo(Category::class);
    }

    public function author(){   // renaming with author to support readability
        //hasone, hasmany, belongsto, belongstomany
        return $this->belongsTo(User::class, 'user_id');    // explicitly identifying user_id as the foreign key
    }                                                       // so that laravel does not assume author_id

}
