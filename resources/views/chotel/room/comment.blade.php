@extends('templates.chotel.master1')

@section('main-content')

			<div class="main">
				

			    @foreach($getComment as $room)
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
							<p>Loại phòng: <a href="" title="">{{$tname}}</a> Tiện ích: {{$util}} &ensp;<span class="views">000 Lượt xem</span> </p>
							
							<p>
								{{$description}}
							</p>
							
						</div>
					
				@endforeach
				
				
			 
           
            <div class="row style_comment">
              <div class="col-md-3">
                
                <img src="{{$publicUrl}}/images/avatar.jpg" width="15%" class="img img-responsive img-thumbnail" />
              </div>
              <div class="col-md-10">
                <p style="color: green">{{$room->username}}</p>
                <p>{{$room->created_at}}</p>
                <p>{{$room->noidung}}</p>
                
              </div>
            </div>
            
          
            
            <div class="comment Form">
            <h3>Bình luận</h3>
            <form id="commentform" class="comment-form" novalidate="" action="{{route('chotel.room.comment')}}">
            	<input type="hidden" name="rid" class="rid" value="{{$room->rid}}">

				<p class="comment-form-email col-md-6">
					<input id="name" name="name" type="name" value="" size="30" placeholder="Name*" class = "yourname">
				</p>
				
				<p class="comment-form-comment">
					<textarea  id="comment" name="comment" placeholder="Nội dung" class = "commentcont" cols="50" rows="5"></textarea>
				</p>
				
				<p class="form-submit">
					<input type="submit" name="submit" id="submit" class="submit" value="Bình luận"> 
					<input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID">
				</p>
				<div id="notify_comment"></div>

			</form>
			<script type="text/javascript">
				$(document).ready(function(){
					load_comment();
					function load_comment(){
						var rid = $('.rid').val();
						var _token = $('input[name="_token"]').val();
						$.ajax({
							url:"{{url('/load-comment')}}",
							method:"POST"
							data:{rid:rid,_token:_token},
							success:function(data){
								
								$('#comment_show').html(data);
							}
						});
					}
					$('#submit').click(function(){
						var rid = $('.rid').val();
						var name = $('.name').val();
						var comment = $('.comment').val();
						var _token = $('input[name="_token"]').val();
						$.ajax({
							url:"{{url('/send-comment')}}",
							method:"GET"
							data:{rid:rid,name:name,comment:comment,_token:_token},
							success:function(data){
								
								$('#notify_comment').html('<p class="">Thêm bình luận thành công</p>');
								load_comment();
							}
						});
					});
				});

			</script>
        </div>
<!--<script>
        $(function(){
           $.ajaxSetup({
                headers:
                {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
           

            {{--  comment --}}
            $('#comment-form').submit(function(ev){
                var route = $('#comment-form').attr('data-route');
                var rid = $('.rid').val();
                var username = $('#name').val();
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
                    }
                });
            ev.preventDefault();
            });

            {{--  end comment --}}

        });
    </script>-->
        </div>
			</div>

@endsection