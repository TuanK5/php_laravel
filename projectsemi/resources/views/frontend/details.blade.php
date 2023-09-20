@extends('frontend.master')
@section('title','Chi tiet san pham')
@section('content') 
<link rel="stylesheet" href="css/details.css">
				<div id="main" class="col-md-9">
					<!-- main -->
					<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
					<div id="banner-t" class="text-center">
						<div class="row">
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="#"><img src="img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
							</div>
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="#"><img src="img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
							</div>
						</div>					
					</div>

					<div id="wrap-inner">
						<div id="product-info">
							<div class="clearfix"></div>
							<h3>{{$items->product_name}}</h3>
							<div class="row">
								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
									<img src="{{asset('storage/image/'.$items->product_img)}}">
								</div>
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									<p>Giá: <span class="price">{{number_format($items->product_price,0,',','.')}}</span></p>
									<p>Bảo hành: {{$items->product_warranty}}</p> 
									<p>Phụ kiện: {{$items->product_accessories}}</p>
									<p>Tình trạng: {{$items->product_condition}}</p>
									<p>Khuyến mại: {{$items->product_promotion}}</p>
									<p>Còn hàng: @if($items->product_status==1) Còn hàng @else Hết hàng @endif</p>
									<p class="add-cart text-center"><a href="{{asset('cart/add/'.$items->product_id)}}">Đặt hàng online</a></p>
								</div>
							</div>							
						</div>
						<div id="product-detail">
							<h3>Chi tiết sản phẩm</h3>
							<p class="text-justify">{!!$items->product_description!!}</p>
						</div>
						<div id="comment">
							<h3>Bình luận</h3>
							<div class="col-md-9 comment">
								<form method="post">
									<div class="form-group">
										<label for="email">Email:</label>
										<input required type="email" class="form-control" id="email" name="email">
									</div>
									<div class="form-group">
										<label for="name">Tên:</label>
										<input required type="text" class="form-control" id="name" name="name">
									</div>
									<div class="form-group">
										<label for="cm">Bình luận:</label>
										<textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
									</div>
									<div class="form-group text-right">
										<button type="submit" class="btn btn-default">Gửi</button>
									</div>
									{{csrf_field()}}
								</form>
							</div>
						</div>
						<div id="comment-list">
							@foreach ($comments as $cmt)
							<ul>
								<li class="com-title">
									{{$cmt->com_name}}
									<br>
									<span>{{date('d/m/Y H:i',strtotime($cmt->created_at))}}</span>	
								</li>
								<li class="com-details">
									{{$cmt->com_content}}
								</li>
							</ul>
							@endforeach
						</div>
					</div>					
					<!-- end main -->
				</div>
			</div>
		</div>
	</section>
	<!-- endmain -->

	@endsection
</body>
</html>