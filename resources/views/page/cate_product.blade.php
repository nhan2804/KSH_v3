@extends('welcome')
@section('title','')
@section('content')
<br>
<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<form action="{{URL::to('product/search')}}" class="product__form--search">
				<input placeholder="Nhập để tìm sản phẩm" class="" type="text" name="query">
				<button type="submit"><i style="color: #ccc" class="fas fa-search"></i></button>
			</form>
			<br>
			<h3 class="product__heading--cate">Danh mục sản phẩm</h3>
			<ul class="product__list--cate">
				<li class="product__item--cate"><a class="product__link--cate" href="#">All</a></li>
				@foreach($cate->where('parent_id',$cate_first->parent_id) as $k=>$v)
				<li class="product__item--cate"><a class="product__link--cate" href="#">{{$v->name_cate}}</a><i class="fas fa-angle-right arrow_menu"></i>
				@foreach($cate->where('parent_id',$v->id_cate) as $k1=>$v1)
				<ul class="cate_menu_sub">
				    <li><a href="{{URL::to('product/danh-muc/'.$v1->slug_cate)}}">{{$v1->name_cate}}</a></li>
				</ul>
				</li>
				@endforeach
				@endforeach
				
			</ul>
		</div>
		<div class="col-lg-9">
			<h3>SẢN PHẨM</h3>
			<div class="row">
				@foreach($data as $k=>$v)
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
					<div class="wrap__product">
						<img class="img-fluid" style="width: 100%" src="{{asset($v->url_img)}}" alt="">
						<h4 class="product__title">{{$v->name_pro}}</h4>
						<p class="product__desc">{!!$v->desc_pro!!} </p>
						<a href="{{ URL::to('product/'.$v->slug_pro) }}" class="btn__primary btn--buy">Xem chi tiết</a>
					</div>
				</div>
				@endforeach
			</div>
			{!!$data->links()!!}
		</div>
	</div>
</div>
	
@endsection