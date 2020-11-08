@extends('templates.chotel.master1')

@section('main-content')

			<div class="main">
				<ul class="list">

                @foreach($types as $room)
		            @php
		                $rid = $room->rid;
		                $uid = $room->uid;
		                $rname = $room->rname;
		                $tname = $room->tname;
		                $util = $room->uname;
		                $typeId = $room->type_id;
		                $description = Str::limit($room->description,200);
		                $slug = Str::slug($rname);
		                $urlDetail = route('chotel.room.detail', ['slug' => $slug, 'id' => $rid,'typeId'=>$typeId]);
		            @endphp
					<li>
						<a href="{{$urlDetail}}"><img src="/chotel3/storage/app/files/{{$room->picture}}" alt="Img" height="130" width="130" /></a> 
						<div>
							<a href="{{$urlDetail}}"><h3>{{$rname}}</h3></a>
							<p>
								{{$description}}
							</p>
							<span class="views"></span> <span class="time">{{$room->created_at}}</span>
						</div>
					</li>
				@endforeach
					
					
				</ul>
				<div class="pagination">
					<ul>
						{{$types->links()}}
					</ul>
				</div>
			</div>
		
@endsection