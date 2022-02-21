<?php

namespace App\Models;

use http\QueryString;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ['category','author'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function ($query,$search){

            $query
                ->where('body', 'like', '%' . $search. '%')
                ->orwhere('title', 'like', '%' . $search. '%');

        });

//        if($filters['search'] ?? false) {   Sam work as above one
//            $query
//                ->where('body', 'like', '%' . request('search'). '%')
//                ->orwhere('title', 'like', '%' . request('search'). '%');
//        }
    }
}



