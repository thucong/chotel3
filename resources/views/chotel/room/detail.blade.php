@extends('templates.chotel.master1')

@section('main-content')

			<div class="main">
				

			    @foreach($item as $room)
				    @php
				        $rid = $room->rid;
				        $uid = $room->uid;
				        $rname = $room->rname;
				        $tname = $room->tname;
				        $util = $room->uname;
				        $typeId = $room->type_id;
				        $description = $room->description;
				        $slug = Str::slug($rname);
				        $urlDetail = route('chotel.room.detail', ['slug' => $slug, 'id' => $rid,'typeId'=>$typeId]);
				    @endphp
					
						<img src="/chotel3/storage/app/files/{{$room->picture}}" alt="Img" height="300" width="550" />
						<div>
							<h2>{{$rname}}</h2>
							<p>Loại phòng: <a href="" title="">{{$tname}}</a> Tiện ích: {{$util}} &ensp;<span class="views"></span> </p>
							
							<p>
								{{$description}}
							</p>
							
						</div>
					
				@endforeach
				
				<div class="raroom">
			        <h3>Phòng liên quan</h3>
			        <ul>
			            @foreach($sameType as $type)
			             @php
			                $rid = $type->rid;
			                $uid = $type->uid;
			                $typeId = $type->type_id;
			                $rname = $type->rname;
			                $tname = $type->tname;
			                $util = $type->uname;
			                $description = Str::limit($type->description,160);
			                $urlPic = '/chotel1/storage/app/public/files/'.$type->picture;
			                $slug = Str::slug($rname);
			                $urlDetail = route('chotel.room.detail', ['slug' => $slug, 'id' => $rid,'typeId'=>$typeId]);
			            @endphp

			                <li>
			                <a href="{{ $urlDetail }}" title="">{{$rname}}</a>
			                </li>
			            @endforeach
			        </ul>
			        @if(Auth::check())
		            @php
		                $username = Auth::user()->username;
		            @endphp
		            <h2>Đánh giá:</h2>
	                <div class="stars">

	                    <form data-route="{{ route('chotel.detail.rating') }}" method="get" id="form-star">
	                        @csrf
	                        <div class="rate">
	                            @php
	                                $rating1 = $aver;
	                                $rating = round($rating1);
	                            @endphp
	                            @php
	                                $check = '';
	                                for ($i=1; $i <=5 ; $i++) { 
	                                    if ($rating == $i) {
	                                        $check = 'checked';
	                                }else{
	                                    $check = '';
	                                }
	                            @endphp
	                            <input {{ $check }} type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}" />
	                            <label for="star{{ $i }}" title="text">{{ $i }} sao</label>
	                            @php
	                                }
	                            @endphp

	                        </div>
	                        <input type="hidden" name="roomid" class="form-control" placeholder="" value="{{$room->rid}}" id="rid" />
	                        
	                    </form>
	                    <div><p id="check-rate"></p></div>

	                    
	                   

	                </div>
			        <h2>Bình luận</h2>
			            <form  id="comment-form" data-route="{{ route('chotel.detail.comment') }}" >
			               @csrf  
			                <p>
			                    <input type="hidden" id="username" value="{{ $username }}" />
			                </p>
			                <p>
			                    <input type="hidden" id="show_comment_rid" class="show_comment_rid" placeholder="" value="{{$room->rid}}" />
			                </p>
			                <p>
			                    <textarea style="resize: none;height: 100px;" id="comment-content" placeholder="Nội dung bình luận *" ></textarea>
			                </p>
			                <p>
			                    <input type="submit" class="wpcf7-submit send-comment" value="Gửi bình luận" />
			                </p>
			            </form>
				    <div>
		                 <ul>
		                    
		                   @php
		                    foreach($itemComment1 as $itemCmt){
		                   @endphp
		                    <li>
		                        <p>Name: {{$itemCmt->username}}</p>
		                        <p>Date: {{$itemCmt->created_at}}</p>
		                        <p>Nội dung: {{$itemCmt->noidung}}</p>
		                        <p>Đáng giá: {{$itemCmt->rating}} sao</p>
		                    </li>
		                   @php
		                    }
		                   @endphp
		                </ul>
		            </div>
		            <div><p id="check-cmt"></p></div>
		            @endif
			 		{{$itemComment1->links()}}
					<script>
					        $(function(){
					           $.ajaxSetup({
					                headers:
					                {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
					            });
					           var rid = $('#rid').val();
					            $(':radio').change(function(e) {
					                var route = $('#form-star').attr('data-route');
					                var rate = $(this).val();
					                $.ajax({
					                    type:'GET',
					                    url:route,
					                    
					                    data:{
					                      arid:rid,
					                      arate:rate
					                    },
					                    
					                    success:function (data) {

					                        $('#check-rate').html('Bạn đã đánh giá thành công!');
					                    }
					                });
					            e.preventDefault();
					            });

					           
					            $('#comment-form').submit(function(ev){
					                var route = $('#comment-form').attr('data-route');
					                var rid = $('#show_comment_rid').val();
					                var username = $('#username').val();
					                var noidung = $('#comment-content').val();
					                $.ajax({
					                    type:'GET',
					                    url:route,
					                    
					                    //send data
					                    data:{
					                      arid:rid,
					                      ausername:username,
					                      anoidung:noidung
					                    },
					                    //nhận data từ controller 
					                    success:function (data) {
					                        $('#showNewCmt').append(data);
					                        $('#check-cmt').html('Bạn đã Bình luận thành công thành công!');
					                        location.reload();
					                    }
					                });
					            ev.preventDefault();
					            });

					           

					        });
					    </script>
        </div>
			</div>

@endsection