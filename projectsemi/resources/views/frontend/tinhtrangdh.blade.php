@extends('fronend.master')
@section('title','Tinh trang DH')
<link rel="stylesheet" href="css/email.css">
@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div id="main" class="col-md-9">
            <div id="wrap-inner">
						<div id="khach-hang">
							<h3>Thông tin khách hàng</h3>
							<p>
								<span class="info">Khách hàng: </span>
								Vietpro
							</p>
							<p>
								<span class="info">Email: </span>
								vietpro@gmail.com
							</p>
							<p>
								<span class="info">Điện thoại: </span>
								01234567988
							</p>
							<p>
								<span class="info">Địa chỉ: </span>
								Hà Nội
							</p>
						</div>						
						<div id="hoa-don">
							<h3>Hóa đơn mua hàng</h3>							
							<table class="table-bordered table-responsive">
								<tr class="bold">
									<td width="30%">Tên sản phẩm</td>
									<td width="25%">Giá</td>
									<td width="20%">Số lượng</td>
									<td width="15%">Thành tiền</td>
								</tr>
								<tr>
									<td>iPhone 5s 16GB gold</td>
									<td class="price">4.000.000 VNĐ</td>
									<td>1</td>
									<td class="price">4.000.000 VNĐ</td>
								</tr>
								<tr>
									<td>iPhone 6Plus 64GB grey</td>
									<td class="price">8.500.000 VNĐ</td>
									<td>2</td>
									<td class="price">17.000.000VNĐ</td>
								</tr>
								<tr>
									<td colspan="3">Tổng tiền:</td>
									<td class="total-price">21.000.000VNĐ</td>
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

	</div>	<!--/.main-->
		  
		
	@endsection
</body>

</html>
