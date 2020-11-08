@extends('templates.chotel.master1')

@section('main-content')

			<div class="main">
				<ul class="list">

                @foreach($items as $item)
	                 @php
	                    $rid = $item->rid;
	                    $uid = $item->uid;
	                    $typeId = $item->type_id;
	                    $rname = $item->rname;
	                    $tname = $item->tname;
	                    $util = $item->uname;
	                    $description = Str::limit($item->description,200);
	                    $slug = Str::slug($rname);
	                    $urlDetail = route('chotel.room.detail', ['slug' => $slug, 'id' => $rid,'typeId'=>$typeId]);
	                @endphp
					<li>
						<a href="{{$urlDetail}}"><img src="/chotel3/storage/app/files/{{$item->picture}}" alt="Img" height="130" width="130" /></a> 
						<div>
							<a href="{{$urlDetail}}"><h3>{{$rname}}</h3></a>
							<p>
								{{$description}}
							</p>
							<span class="views"</span> <span class="time">{{$item->created_at}}</span>
						</div>
					</li>
				@endforeach
					
					
				</ul>
				<div class="pagination">
					<ul>
						{{$items->links()}}
					</ul>
				</div>
			</div>
		
@endsection
<script >
	$(document).ready(function(){
		$("#room-chotel").addClass('selected');
	});
</script>