@extends('templates.chotel.master')

@section('main-content')
<div id="contents">
		<div id="contact" class="area">
			<div class="section">
            	<h1 >Liên hệ với chúng tôi</h1>
            	<h2>Laluna Hội An Riverside </h2>
            	<p>12 Nguyễn Du, P. Cẩm Phô, Hội An, Quảng Nam, Việt Nam <br>
            	Fax: (+84) 235 3666 676 <br>
            	Email: info@lalunahoian.com</p>
	            <form>
	                <p><input type="text" class="wpcf7-text" placeholder="Họ tên *" /></p>
	                <p><input type="text" class="wpcf7-email" placeholder="Email *" /></p>
	                <p><input type="text" class="wpcf7-text" placeholder="Chủ đề *" /></p>
	                <p><textarea class="wpcf7-textarea" placeholder="Nội dung *"></textarea></p>
	                <p><input type="Submit" class="wpcf7-submit" value="Gửi liên hệ" /></p>
	            </form>

        	</div>
		
			<div class="section">
				<h2 class="heading2">Tại sao đến với chúng tôi?</h2>
				<ul class="list">
					
					<li>
						<img src="{{$publicUrl}}/images/contact1.jpg" alt="Img" height="100" width="100" />
						<div>
							<h3>Nơi nghỉ dưỡng sang trọng hoàn hảo</h3>
							<p>
								Được trang bị hiện đại với tiện nghi sang trọng và tinh tế trong một không gian hài hòa với hướng nhìn ra sông Hoài, Laluna Hội An Riverside là nơi nghỉ dưỡng mang đến nhiều lựa chọn phù hợp với từng nhu cầu nghỉ dưỡng và ngân sách của bạn.
							</p>
						</div>
					</li>
					<li>
						<img src="{{$publicUrl}}/images/contact2.jpg" alt="Img" height="100" width="100" />
						<div>
							<h3>Thưởng thức ẩm thực bên sông</h3>
							<p>
								Tại nhà hàng River View, quý khách được thưởng thức bữa sáng tự chọn hàng ngày cũng như bữa trưa và tối với lựa chọn từ thực đơn đa dạng của các món ăn đặc sắc. Hãy bắt đầu ngày mới theo cách của quý khách với bữa sáng tự chọn tuyệt vời bao gồm bánh mì, Phở, trái cây, trà, cà phê,... Quý khách sẽ dung bữa trưa trong không gian ấm cúng của Nhà hàng River View. Chiều tối quý khách sẽ trải nghiệm thực đơn chọn món sáng tạo trong lúc nhâm nhi ly rượu vang và ngắm nhìn những ánh đèn lấp lánh trên sông Hoài cho bữa tối lãng mạn.
							</p>
						</div>
					</li>
					<li>
						<img src="{{$publicUrl}}/images/contact3.jpg" alt="Img" height="100" width="100" />
						<div>
							<h3>Khoảnh khắc tuyệt vời tại quầy bar bên hồ bơi</h3>
							<p>
								Ngay cạnh hồ bơi của khách sạn, Pool Bar phục vụ đồ uống và thức ăn nhẹ ngay bên hồ bơi. Không cần phải rời khỏi ghế tắm nắng, quý khách vẫn thoải mái thư giãn với những ly cocktail đầy ý vị được phục vụ tận nơi. Pool Bar cung cấp nhiều loại cocktail độc đáo; đồ uống hảo hạng và lựa chọn phong phú các món ăn nhẹ đáp ứng mọi sở thích của quý khách. Quý khách có thể thư giãn tại Pool Bar bất cứ lúc nào trong ngày cho đến nửa đêm.
							</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
@endsection
<script>
	$(document).ready(function(){
		$("#contact-chotel").addClass('selected');
	});
</script>