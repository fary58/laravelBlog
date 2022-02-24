<?php

namespace App\Models;

use http\QueryString;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ['category','author'];



    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function ($query,$search){

            $query
                ->where('body', 'like', '%' . $search. '%')
                ->orwhere('title', 'like', '%' . $search. '%');

            /*
             Same work as above one
             if($filters['search'] ?? false) {
                $query
                    ->where('body', 'like', '%' . request('search'). '%')
                        ->orwhere('title', 'like', '%' . request('search'). '%');
            */

        });





        $query->when($filters['category'] ?? false, function ($query,$category) {

            $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);

            });
        });
//
//            $query->whereExists(function ($query) use ($category) {
//                $query->from('categories')
//                    ->whereColumn('categories.id', 'posts.category_id')
//                    ->where('categories.slug',$category);
//            });

            $query->when($filters['author'] ?? false, function ($query,$author) {

                $query->whereHas('author',function ($query) use ($author) {
                    $query->where('name',$author);

                });






    });


}



    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
}



