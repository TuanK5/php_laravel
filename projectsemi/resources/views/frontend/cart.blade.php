@extends('frontend.master')
@section('title','Gio Hang')
@section('content') 
	<link rel="stylesheet" href="css/cart.css">
	<script>
		function updateCart(qty,rowId){
			$.get(
				'{{asset('cart/update')}}',
				{qty:qty,rowId:rowId},
				function(){
					location.reload();
				}
			);
		}
	</script>
<body>    
	<div id="main" class="col-md-9">
					<div id="wrap-inner">
						<div id="list-cart">
							<h3>Giỏ hàng</h3>
							@if(Cart::count()>=1)
							<form method="post">
								<div class="form-group">
									<label for="name">Họ và tên:</label>
									<input required type="text" class="form-control" id="name" name="name">
								</div>
								<div class="form-group">
									<label for="phone">Số điện thoại:</label>
									<input required type="num" class="form-control" id="phone" name="phone">
								</div>
								<table class="table table-bordered .table-responsive text-center">
									<tr class="active">
										<td width="11.111%">Ảnh mô tả</td>
										<td width="22.222%">Tên sản phẩm</td>
										<td width="22.222%">Số lượng</td>
										<td width="16.6665%">Đơn giá</td>
										<td width="16.6665%">Thành tiền</td>
										<td width="11.112%">Xóa</td>
										<td width="11.112%">BUY</td>
									</tr>

									@foreach ($items as $item)
									<tr>
										<td><img class="img-responsive" height="100px" src="{{asset('storage/image/'.$item->options->img)}}"></td>
										<td>{{ $item->name }}</td>
										<td>
											<div class="form-group">
												<input class="form-control" type="number" name="qty" value="{{$item->qty}}" onchange="updateCart(this.value, '{{ $item->rowId }}')">
											</div>
										</td>
										<td><span class="price">{{number_format($item->price,0,',','.')}}</span></td>
										<td><span class="price">{{number_format($item->price*$item->qty,0,',','.')}}</span></td>
										<td><a href="{{ asset('cart/delete/'.$item->rowId) }}">Xóa</a></td>
										<td><button type="submit" class="btn btn-buy">Buy</button></td>
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
								{{ csrf_field() }}
							</form>             	                	
						</div>

						<div id="xac-nhan">
							<h3>Xác nhận mua hàng</h3>
							<form method="post">

								<div class="form-group">
									<label for="email">Email address:</label>
									<input required type="email" class="form-control" id="email" name="email">
								</div>
								<div class="form-group">
									<label for="name">Họ và tên:</label>
									<input required type="text" class="form-control" id="name" name="name">
								</div>
								<div class="form-group">
									<label for="phone">Số điện thoại:</label>
									<input required type="number" class="form-control" id="phone" name="phone">
								</div>
								<div class="form-group">
									<label for="address">Địa chỉ:</label>
									<input required type="text" class="form-control" id="address" name="address">
								</div>
								<div class="form-group text-right">
									<button type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
									{{-- <button type="submit" class="btn btn-default">Thực hiện đơn hàng</button> --}}
								</div>
								{{ csrf_field() }}
							</form>
						</div>
						@else
						    <h2>Giỏ hàng rỗng!</h2>
						@endif
					</div>
				</div>
	</section>
	<!-- endmain -->
@endsection
</body>
</html>