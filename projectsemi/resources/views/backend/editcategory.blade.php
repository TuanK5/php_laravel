
@extends('backend.layout')
@section('title','Sua danh muc')
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
						Sửa danh mục
					</div>
					<div class="panel-body">
						@include('errors.note')
						<form action="" method="post">
							<div class="form-group">
								<label>Tên danh mục:</label>
								<input type="text" name="name" class="form-control" value="{{$cate->cate_name}}" placeholder="Tên danh mục...">
							</div>
							<div class="form-group">
								<input type="submit" class="form-control btn btn-primary" name="submit" value="Sua DM">
							</div>
							<div class="form-group">
								<a href="{{asset('admin/category')}}"class="form-control btn btn-danger">Huy Bo</a>
							</div>
							{{csrf_field()}}
						</form>
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
