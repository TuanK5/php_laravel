@extends('frontend.master')
@section('title','Hoan Thanh')
@section('content') 
	<link rel="stylesheet" href="css/complete.css">
				<div id="main" class="col-md-9">
					<div id="list-cart">
						<h3>Giỏ hàng</h3>
						<form >
							<table class="table table-bordered .table-responsive text-center">
								<tr class="active">
									<td width="11.111%">Ảnh mô tả</td>
									<td width="22.222%">Tên sản phẩm</td>
									<td width="22.222%">Số lượng</td>
									<td width="16.6665%">Đơn giá</td>
									<td width="16.6665%">Thành tiền</td>
									<td width="11.112%">Xóa</td>
								</tr>

								@foreach ($items as $item)
								<tr>
									<td><img class="img-responsive" height="100px" src="{{asset('storage/image/'.$item->options->img)}}"></td>
									<td>{{ $item->name }}</td>
									<td>
										<div class="form-group">
											<p>{{$item->qty}}</p>
										</div>
									</td>
									<td><span class="price">{{number_format($item->price,0,',','.')}}</span></td>
									<td><span class="price">{{number_format($item->price*$item->qty,0,',','.')}}</span></td>
									<td><a href="{{ asset('cart/delete/'.$item->rowId) }}">Xóa</a></td>
								</tr>
								@endforeach
							</table>
							<div class="row" id="total-price">
								<div class="col-md-6 col-sm-12 col-xs-12">										
										Tổng thanh toán: <span class="total-price">{{number_format($total,0,',','.')}}</span>
																												
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<a href="{{ asset('/') }}" class="my-btn btn">Mua tiếp</a>
									<a href="{{ asset('orderstatus') }}" class="my-btn btn">Tình trạng DH </a>
									<a href="{{ asset('cart/delete/all') }}" class="my-btn btn">Xóa giỏ hàng</a>
								</div>
							</div>
						</form>             	                	
					</div>
					<div id="wrap-inner">
						<div id="complete">
							<p class="info">Quý khách đã đặt hàng thành công!</p>
							<p>• Hóa đơn mua hàng của Quý khách đã được chuyển đến Địa chỉ Email có trong phần Thông tin Khách hàng của chúng Tôi</p>
							<p>• Sản phẩm của Quý khách sẽ được chuyển đến Địa có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.</p>
							<p>• Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng</p>
							<p>• Trụ sở chính: B8A Võ Văn Dũng - Hoàng Cầu Đống Đa - Hà Nội</p>
							<p>Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</p>
						</div>
						<p class="text-right return"><a href="{{asset('/')}}">Quay lại trang chủ</a></p>
					</div>					
					<!-- end main -->
				</div>
</body>
</html>
@endsection