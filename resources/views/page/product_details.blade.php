@extends('welcome')
@section('title',$pro->name_pro)
@section('content')
<br>
<div class="container">
	<div class="product-details-header">
        <b>
            <a href="{{ URL::to('/product') }}">Sản phẩm</a>  
            <i class="fas fa-angle-double-right"></i>
            <a href="{{URL::to('product/danh-muc/')}}">Error</a>
            <i class="fas fa-angle-double-right"></i>
            <a style="color: var(--primary);">{{$pro->name_pro}}</a> 
        </b>
    </div>
    <div class="container">
        <div class="product-details-body">
            <div class="row">
                <div class="col-sm-7 d-product-body-img">
                    <div class="d-product-img-show-wrap">
                        <img class="img_pro--main" src="{{ $pro->url_img }}" alt="">
                    </div>
                    <div class="d-product-img-more-wrap row">
                        @foreach($imgs as $k=>$v)
                        <div class="d-product-img-more__item col-sm-2">
                            <img class="d-product-img-more" src="{{asset($v->url_img)}}" alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-5 d-product-body-details">
                    <div class="d-product-details-item"><b>Tên sản phẩm:</b> {{$pro->name_pro}}</div>
                    <div class="d-product-details-item"><b>Mô tả: </br></b> {!! $pro->detail_pro !!} </div>
                    
                    <div class="d-product-details-item">
                        <button class="d-product-contact-btn">
                            <a href="">Mua ngay</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-product-more">
            <div class="row d-product-more-header">
                SẢN PHẨM GỢI Ý
            </div>
            <div class="row">
                @foreach($ref_pro as $k=>$v)
                <div class="col-lg-4">
                    <a class="d-product-more-img-wrap" href="{{URL::to('product/'.$v->slug_pro)}}">
                        <img src="{{asset($v->url_img)}}" alt="" class="d-product-more-img">
                        <div class="d-product-more-details">
                            <div class="d-product-more-infor">
                                {{$v->name_pro}}
                            </div>
                            <div class="d-product-more-infor">
                                Kích thước: D2000 - R1600 - C1110<br>
                            </div>
                            <div class="d-product-more-infor">
                                Tình trạng: Còn hàng
                            </div>
                            
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection