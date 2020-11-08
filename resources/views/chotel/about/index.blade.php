@extends('templates.chotel.master')

@section('main-content')
<div id="contents">
		<div id="about" class="area">
			<div class="section">
				<div class="box">
					<div>
						<div>
							<h3>Thư giãn bên hồ bơi của Laluna Hội An Riverside Hotel</h3>
							<p>
								Nằm ngay tại trung tâm khách sạn, hồ bơi ngoài trời của chúng tôi mang đến cho quý khách cảm giác thư thái trong làn nước tinh khiết. Cho dù quý khách lựa chọn ngồi ở quầy Bar Hồ bơi, bơi lội hay đơn giản chỉ nằm tắm nắng, không gian xung quanh hồ bơi cũng mang đến cho bạn cảm giác thật sự thư giãn. Quày Bả hồ bơi phục vụ các món ăn nhẹ ngon miệng và phong phú.
							</p>
							<h3>Giữ chế độ tập luyện trong kỳ nghỉ tại Hội An</h3>
							<p>
								Duy trì hoạt động luyện tập hàng ngày khi quý khách ở xa nhà ngay tại trung tâm thể hình hoạt động 24 giờ hằng ngày của chúng tôi. Nằm cạnh Spa, khu tập thể hình của khách sạn Laluna Hội An Riverside là nơi lý tưởng để bạn bổ sung năng lượng và tận hưởng quá trình luyện tập với hàng loạt các trang thiết bị hiện tại. Đến trung tâm thể hình của chúng tôi để giữ phong độ cơ bắp của quý khách.
							</p>
							<h3>Khoảnh khắc tuyệt vời tại quầy bar bên hồ bơi</h3>
							<p>
								Ngay cạnh hồ bơi của khách sạn, Pool Bar phục vụ đồ uống và thức ăn nhẹ ngay bên hồ bơi. Không cần phải rời khỏi ghế tắm nắng, quý khách vẫn thoải mái thư giãn với những ly cocktail đầy ý vị được phục vụ tận nơi. Pool Bar cung cấp nhiều loại cocktail độc đáo; đồ uống hảo hạng và lựa chọn phong phú các món ăn nhẹ đáp ứng mọi sở thích của quý khách. Quý khách có thể thư giãn tại Pool Bar bất cứ lúc nào trong ngày cho đến nửa đêm.
							</p>
							
						</div>
					</div>
				</div>
			</div>
			<div class="section">
				<div class="box">
					<div>
						<div>
							<img src="{{$publicUrl}}/images/hoboi.jpeg" alt="Img" height="200" width="400" />
						</div>
					</div>
				</div>
				<div class="box">
					<div>
						<div>
							<img src="{{$publicUrl}}/images/thehinh.jpg" alt="Img" height="200" width="400" />
						</div>
					</div>
				</div>
				<div class="box">
					<div>
						<div>
							<img src="{{$publicUrl}}/images/quayba.jpg" alt="Img" height="200" width="400" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
<script>
	$(document).ready(function(){
		$("#about-chotel").addClass('selected');
	});
</script>