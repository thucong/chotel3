<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    protected $primaryKey = "id";
    public function getItem($id){
    	return DB::table("comment")->select(DB::raw("noidung as showCmt"))->where('comment.rid',$id)->get();
    }
    public function addComment($data){
        return DB::table('comment')->insert($data);
    }
    public function getItems($id){
    	return DB::table("comment")->join('rating','rating.rid','=','comment.rid')->where('comment.rid',$id)->orderBy('id','desc')->paginate(3);
    }
    //public function getComment($id){
    //	return DB::table("comment")->select()->join('rooms','rooms.rid','=','comment.rid')->join('room_type','rooms.type_id','=','room_type.type_id')->join('utilities','rooms.uid','=','utilities.uid')->where('comment.rid',$id)->get();
    //}
}
