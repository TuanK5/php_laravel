@extends('backend.layout')
@section('title','Danh muc san pham')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh mục sản phẩm</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-xs-12 col-md-5 col-lg-5">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Thêm danh mục
					</div>
					<div class="panel-body">
						@include('errors.note')
						<form action="" method="post">
							<div class="form-group">
								<label>Tên danh mục:</label>
								<input required type="text" name="name" class="form-control" placeholder="Tên danh mục...">
							</div>
							<div class="form-group">
								<input type="submit" name="submit" value="Them Moi">
							</div>
							{{csrf_field()}}
						</form>
					</div>
				</div>
		</div>
		<div class="col-xs-12 col-md-7 col-lg-7">
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách danh mục</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<table class="table table-bordered">
							  <thead>
								<tr class="bg-primary">
								  <th>Tên danh mục</th>
								  <th style="width:30%">Tùy chọn</th>
								</tr>
							  </thead>
							  <tbody>
							@foreach ($catelist as $cate)
							<tr>
								<td>{{$cate->cate_name}}</td>
								<td>
									<a href="{{ url('/admin/category/edit', ['id' => $cate->cate_id]) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
									<a href="{{ url('/admin/category/delete', ['id' => $cate->cate_id]) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
								  </td>
							</tr>
							@endforeach
							</tbody>
						</table>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script>
	$('#calendar').datepicker({
	});
	!function ($) {
		$(document).on("click","ul.nav li.parent > a > span.icon", function(){          
			$(this).find('em:first').toggleClass("glyphicon-minus");      
		}); 
		$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
	}(window.jQuery);

	$(window).on('resize', function () {
	  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
	})
	$(window).on('resize', function () {
	  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
	})
</script>	
		
	@endsection
</body>

</html>
