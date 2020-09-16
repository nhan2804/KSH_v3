@extends('welcome')
@section('title',$query .' tìm kiếm Sản Phẩm')
@section('content')
<br>
<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<form action="{{URL::to('product/search')}}" class="product__form--search">
				<input class="" type="text" name="query">
				<button type="submit"><i style="color: #ccc" class="fas fa-search"></i></button>
			</form>
			<br>
			<h3 class="product__heading--cate">Danh mục sản phẩm</h3>
			<ul class="product__list--cate">
				<li class="product__item--cate"><a class="product__link--cate" href="#">All</a></li>
				@foreach($cate as $k=>$v)
				<li class="product__item--cate"><a class="product__link--cate" href="#">{{$v->name_cate}}</a></li>
				@endforeach
			</ul>
			<h3 class="product__heading--cate">Tin gần đây</h3>
			@foreach($news as $k=>$v)

			<a href="{{URL::to('news/'.$v->slug)}}" class="row mb-2">
				<div class="col-lg-4 gutter-6">
					<img style="width: 100%;height: 70px" src="{{asset($v->thumbnail_blog)}}" alt="">
				</div>
				<div class="col-lg-8 gutter-6">
					<div class="news__curr--info">
						<h3>{{$v->title_news}}</h3>
						<p>Aprill 05,2020</p>
					</div>
				</div>
			</a>
			@endforeach
		</div>
		<div class="col-lg-9">
			<div class="row">
				<h3 class="col-12">Tìm kiếm kết quả cho <i>{{$query}}</i></h3>
				@foreach($data as $k=>$v)
				<div class="col-lg-6 mb-4">
					<div class="wrap__product">
						<img class="img-fluid" src="{{asset($v->url_img)}}" alt="">
						<div>
							<i class="far fa-clock">May 04, 2020  |  </i>
							<i class="fas fa-eye"></i>201
						</div>
						<h4 class="product__title">{{$v->name_pro}}</h4>
						<p class="product__desc">{!!$v->desc_pro!!}</p>
						<a href="{{ URL::to('product/'.$v->slug_pro) }}" class="btn__primary btn--buy">Xem chi tiết</a>
					</div>	
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection