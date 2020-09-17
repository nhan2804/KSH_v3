@extends('welcome')
<<<<<<< HEAD
@section('title',"Tin tức")
=======
@section('title','Tin tức')
>>>>>>> 559390597abf039b05102d92307a854bde2b9119
@section('content')
<div class="main container">
	<div class="breadcrumb mt-1">
        <a href="{{URL::to('/')}}"><i class="fas fa-home"></i> Trang chủ </a> <span style="color: var(--primary)" class="ml-2 mr-2">/</span> <a href="{{URL::to('/news')}}"> Tin tức</a>
    </div>
    <div class="row">
    	{{-- @foreach($news as $k=>$v)
    	<div class="col-lg-4 mb-3">
            <div class="post">
                <div class="img__post">
                    <img class="img-fluid" src="{{asset($v->thumbnail_blog)}}" alt="">
                </div>
                <div class="info__post">
                    <div class="time__post">
                        <i class="far fa-clock"> 28/04/2001</i>
                        <i class="far fa-eye"></i>
                        2009 Lượt xem
                    </div>
                    <a href="news/{{$v->slug}}" class="news-title">
                      {{ $v->title_news }}
                    </a>
                    <div class="desc__post">
                        {!! $v->content_news !!}
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-lg-4 col-md-12 col-12">
            <div class="row">
            <h3 class="col-sm-12 news-big-label">TIN MỚI NHẤT</h3>
            @foreach($news as $k=>$v)
            <div class=" col-sm-12">
                <div class="news-left">
                <div class="row">
                <h6 class="news-left-title col-12"><a href="{{URL::to('news/'.$v->slug)}}" class="">{{$v->title_news}}</a></h6>
                    <div class="col-sm-4 news-left-img">
                        <a href="{{URL::to('news/'.$v->slug)}}">
                            <img src="{{asset($v->thumbnail_blog)}}" alt="">
                        </a>
                    </div>
                <h6 class="news-left-title news-left-title--mobile col-12"><a href="{{URL::to('news/'.$v->slug)}}" class="">{{$v->title_news}}</a></h6>
                    <div class="col-sm-8">
                        <div class="news__curr--desc">
                            <p>{{$v->desc_news}}</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12">
            <div class="row ">
            <h3 class="col-12 hide-on-mobile">CHỦ ĐỀ</h3>
            @foreach($pros as $k=>$v)
            <h3 class="col-12 col-lg-12" style="padding-left: 4px; color: var(--primary); font-weight:bold;">{{$v['name_cate']}}</h3>
            @foreach($v['products'] as $k1=>$v1)
            <a href="{{URL::to('news/'.$v1->slug)}}" class="col-sm-6 news-achievement">
                <div class="row">
                    <div class="col-sm-7 gutter-6">
                        <img src="{{asset($v1->thumbnail_blog)}}" alt="" class="news-achievement-img">
                    </div>
                    <div class="col-sm-5 gutter-6">
                        <div class="news-news__curr--info">
                            <div class="news-achievement-title">{{$v1->title_news}}</div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
            @endforeach
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
</div>
@endsection