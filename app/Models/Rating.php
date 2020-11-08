<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Rating extends Model
{
    use HasFactory;
    protected $table = 'rating';
    protected $primaryKey = "id_rating";
    public function getItem($id){
    	return DB::table('rating')->select(DB::raw("avg(rating) as average"))->where('rating.rid',$id)->get();
    }

    public function addRating($data){
    	return DB::table('rating')->insert($data);
    } 
}
