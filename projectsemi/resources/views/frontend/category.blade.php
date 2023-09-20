@extends('frontend.master')
@section('title','Danh muc san pham')
@section('content')
<link rel="stylesheet" href="css/category.css">
	<!-- main -->
				<div id="main" class="col-md-9">
					<!-- main -->
					<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
					<div id="slider">
						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="img/home/slide-1.png" alt="Los Angeles" >
								</div>
								<div class="carousel-item">
									<img src="img/home/slide-2.png" alt="Chicago">
								</div>
								<div class="carousel-item">
									<img src="img/home/slide-3.png" alt="New York" >
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
					</div>
					{{-- endslideshow --}}
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
					{{-- endcotenbaner --}}
					<div id="wrap-inner">
						<div class="products">
							<h3>{{ $cateName->cate_name }}</h3>
							<div class="product-list row">
								@foreach ($items as $item)
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img class="img-thumbnail" height="200px" src="{{asset('storage/image/'.$item->product_img)}}" ></a>
									<p><a href="#">{{$item->product_name}}</a></p>
									<p class="price">{{number_format($item->product_price,0,',','.')}}</p>	  
									<div class="marsk">
										<a href="{{asset('detail/'.$item->product_id.'/'.$item->product_slug.'.html')}}">Xem chi tiết</a>
									</div>                                    
								</div>
								@endforeach 
							</div>                	                	
						</div>
						
						<div id="pagination">
							{{$items->links()}}
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