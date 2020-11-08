@extends('templates.chotel.master')

@section('main-content')
	<div id="contents">
		<div id="adbox">
			<div class="area">
				
			</div>
		</div>
		<div class="area">
			<div class="main">
				<h2>Laluna Hội An Riverside</h2>
				<p>
					Mang trong mình vẻ đẹp huyền bí và những nét văn hóa độc đáo của di sản phố cổ, Laluna Hội An Riverside là điểm đến lý tưởng để du khách có một kỳ nghỉ thư giãn, thoải mái cùng với dịch vụ đẳng cấp và những lựa chọn ăn uống tuyệt vời ngay tại trung tâm phố cổ Hội An. Đặt phòng tại Laluna Hội An Riverside để tận hưởng sự sang trọng và thoải mái tối đa. Dù bạn ở đây với mục đích gì, chúng tôi sẽ mang đến cho bạn một kỳ nghỉ thật sự đáng nhớ..
				</p>
				<div id="features">
					<h2>Welcome</h2>
					<ul>
						@foreach ($items as $item)
		                    @php
		                    $rid = $item->rid;
		                    $uid = $item->uid;
		                    $typeId = $item->type_id;
		                    $rname = $item->rname;
		                    $description = Str::limit($item->description,100);
		                    $slug = Str::slug($rname);
		                    $urlDetail = route('chotel.room.detail', [$slug, $rid,$typeId]);
		                    @endphp
						<li>
							<a href="{{$urlDetail}}"><img src="/chotel3/storage/app/files/{{$item->picture}}" alt="Img" height="100" width="100" /></a>
							<a href="{{$urlDetail}}"><h3>{{$rname}}</h3></a>
							<p>
								{{$description}}
							</p>
						</li>
						@endforeach
						
					</ul>
				</div>

			</div>
			
			<div class="blog">
				<h2>Welcome</h2>
				<div class="frame">
					<img src="{{$publicUrl}}/images/datphong.jpg" alt="Img" height="216" width="268" />
				</div>
				
				<p>
					Tại khách sạn Laluna Hội An Riverside, đội ngũ nhân viên thân thiện và chuyên nghiệp của chúng tôi luôn sẵn sàng phục vụ quý khách với “lòng hiếu khách và yêu mến chân thành”.
					Đặt phòng tại khách sạn Laluna Hội An Riverside, chúng tôi sẽ đưa quý khách đến với những hành trình khám phá thú vị và một kỳ nghỉ đáng nhớ. Quý khách chắc chắn sẽ hài lòng với dịch vụ hoàn hảo, và được phục vụ với sự yêu mến và hiếu khách từ tấm lòng của mỗi nhân viên khách sạn.
				</p>
			</div>
			<div class="pagination">
					<ul>
						{{$items->links()}}
					</ul>
				</div>
		</div>
	</div>
@endsection
<script >
	$(document).ready(function(){
		$("#home-chotel").addClass('selected');
	});
</script>