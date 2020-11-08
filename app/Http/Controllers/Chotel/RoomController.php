<?php

namespace App\Http\Controllers\Chotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\Comment;
use App\Models\Rating;

class RoomController extends Controller
{
     public function __construct(Room $mroom,Comment $mcomment,Rating $mrating)
    {
        $this->mroom = $mroom;
        $this->mcomment = $mcomment;
        $this->mrating=$mrating;
    }
  
    public function index()
    {
        $items = $this->mroom->getItems();
       // $lists = $this->mtype->getType();
        $room_type = RoomType::all();
        //$lists =$this->mroom->list();
        return view('chotel.room.index',['items'=>$items ],compact('room_type'));

    }

    public function list($slug, $id)
    {
        $room_type = RoomType::all();
        $types = $this->mroom->getType($id);
       
        return view('chotel.room.list', ['types'=>$types ],compact('slug', 'id','room_type'));
    }
    public function detail($slug, $id, $typeId)
    {
        $item = $this->mroom->getItem($id);
        $sameType =$this->mroom->getRoomType($id,$typeId);
        $cmt = $this->mroom->getComment($id);
        $itemComment = $this->mcomment->getItem($id);
        $itemComment1 = $this->mcomment->getItems($id);
        $itemRating = $this->mrating->getItem($id);
        //$sames = $this->mroom->sameType();
       // $rating = $this->mrating->rating($id);
       // $rating = round($rating);
         $aver = 0;
        foreach ($itemRating as $key => $item1) {
            $aver += $item1->average;
        }
        $contentCmt = '';
        foreach ($itemComment as $key => $itemCmt){
            $contentCmt = $itemCmt->showCmt;
        }
        return view('chotel.room.detail',compact('item','sameType','cmt','aver','contentCmt','itemComment','itemComment1'));
    }
     public function getComment(Request $request)
    {
        $rid = $request->get('arid');
        $username = $request->get('ausername');
        $noidung = $request->get('anoidung');

        $data = ['username'=>$username,'noidung'=>$noidung,'rid'=>$rid];

        $result = $this->mcomment->addComment($data);
        $itemComment = $this->mcomment->getItem($rid);

        $contentCmt = $noidung;
        

        if($itemComment){
            return $contentCmt;
        }else{
            return "Fail";
        }
    }
    public function getRating(Request $request)
    {
        $rid = $request->get('arid');
        $rating = $request->get('arate');
        $data = ['rid'=>$rid,'rating'=>$rating];
        $result = $this->mrating->addRating($data);
        $itemRating = $this->mrating->getItem($rid);
        
        $aver = 0;
        foreach ($itemRating as $item1) {
            $aver = $item1->average;
        }
    }
    //public function insert_rating(Request $request){
       // $data = $request->all();
        //$rating = new Rating();
       // $rating->rid = $data['rid'];
       // $rating->rating = $data['index'];
       // $rating->save();
       // echo "done";
   // }
    public function send_comment(Request $request){
      $rid = $request->rid;
      $name = $request->name;
      $comment = $request->comment;
      $comment = new Comment();
      $data = ['username'=>$name,'noidung'=>$comment,'rid'=>$rid];
      $result = $this->mcomment->addComment($data);
      $itemComment = $this->mcomment->getItems($rid);
      $getComment = $this->mcomment->getComment($rid);
      return view('chotel.room.comment',compact('getComment'));
      //$comment->noidung = $comment;
      //$comment->username = $name;
      //$comment->rid=$rid;
      //$comment->save();
    }
    public function load_comment(Request $request){
      $rid = $request->rid;
      $comment = Comment::where('rid',$rid)->get();
      foreach ($comment as $key => $comm) {
        $output = '<div class="row style_comment">
              <div class="col-md-3">
                
                <img src="{{$publicUrl}}/images/avatar.jpg" width="15%" class="img img-responsive img-thumbnail" />
              </div>
              <div class="col-md-10">
                <p style="color: green">'.$comm->username.'</p>
                <p>'.$comm->created_at.'</p>
                <p>'.$comm->noidung.'</p>
                
              </div>
              </div>';

      }
      echo $output;
    }
   
}
