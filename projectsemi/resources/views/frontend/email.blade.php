
	<link rel="stylesheet" href="css/email.css">

				<div id="main" class="col-md-9">
					<div id="wrap-inner">
						<div id="khach-hang">
							<h3>Thông tin khách hàng</h3>
							<p>
								<span class="info">Khách hàng: </span>
								{{ $info['name'] }}
							</p>
							<p>
								<span class="info">Email: </span>
								{{ $info['email'] }}
							</p>
							<p>
								<span class="info">Điện thoại: </span>
								{{ $info['phone'] }}
							</p>
							<p>
								<span class="info">Địa chỉ: </span>
								{{ $info['add'] }}
							</p>
						</div>						
						<div id="hoa-don">
							<h3>Hóa đơn mua hàng</h3>							
							<table class="table-bordered table-responsive">
								@foreach ($cart as $item)
									<tr class="bold">
										<td width="30%">{{ $item->name }}</td>
										<td width="25%">{{number_format($item->price,0,',','.')}}</td>
										<td width="20%">{{ $item->qty }}</td>
										<td width="15%">{{number_format($item->price*$item->qty,0,',','.')}}</td>
									</tr>
								@endforeach
								<tr>
									<td colspan="3">Tổng tiền:</td>
									<td class="total-price">{{number_format($total,0,',','.')}}</td>
								</tr>
							</table>
						</div>
						<div id="xac-nhan">
							<br>
							<p align="justify">
								<b>Quý khách đã đặt hàng thành công!</b><br />
								• Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.<br />
								• Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng.<br />
								<b><br />Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</b>
							</p>
						</div>
					</div>					
					<!-- end main -->
				</div>
