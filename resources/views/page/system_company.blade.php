@extends('welcome')
@section('title','Mang đến cho bạn niềm tin')
@section('content')
<div class="g-intro-main container">
    <div class="row">
      <div class="g-intro-header col-sm-12">
        KSH - KHẲNG ĐỊNH SỰ KHÁC BIỆT
      </div>
    </div>
    <div class="row">
      <div class="g-intro-header col-sm-12" style="font-size: 20px;">
        Triển khai dịch vụ phát triển hệ thống phân phối cho các Công ty
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <a href="#" class="s-intro-item">
          <img src="https://www.xuanhoa.vn/wp-content/uploads/2018/08/xuanhoa.jpg" class="s-intro-img">
          <div class="s-intro-label">Công ty Cổ Phần Xuân Hòa Việt Nam</div>
        </a>
      </div>
      <div class="col-sm-4">
        <a href="#" class="s-intro-item">
          <img src="https://scontent.fsgn2-6.fna.fbcdn.net/v/t31.0-8/22555736_1780470075586996_2290560609737206529_o.jpg?_nc_cat=110&_nc_sid=730e14&_nc_ohc=bE_K217fYUQAX-K1DfY&_nc_ht=scontent.fsgn2-6.fna&oh=b5d0af09eaa01ad394de7443494fcd1f&oe=5F6F2785" class="s-intro-img">
          <div class="s-intro-label">Công ty Cổ phần ESC Việt Nam</div>
        </a>
      </div>
      <div class="col-sm-4">
        <a href="#" class="s-intro-item">
          <img src="https://tapdoanthanhnien.org.vn/media/images/DEN-DUONG-150-100.jpg" class="s-intro-img">
          <div class="s-intro-label">Tập đoàn Thanh niên Việt Nam</div>
        </a>
      </div>
      <div class="col-sm-4">
        <a href="#" class="s-intro-item">
          <img src="data:image/jpeg;base64,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" class="s-intro-img">
          <div class="s-intro-label">Công ty TNHH KT DV TM Hozentech</div>
        </a>
      </div>
      <div class="col-sm-4">
        <a href="#" class="s-intro-item">
          <img src="https://lioa.com.vn/sites/default/files/styles/265x190/public/media-youtube/b_Eq-vGhupo.jpg?itok=CDYNaMzR" class="s-intro-img">
          <div class="s-intro-label">Công ty TNHH Ổn áp LiOa</div>
        </a>
      </div>
      <div class="col-sm-4">
        <a href="#" class="s-intro-item">
          <img src="{{ asset('images/Dienquang.png')}}" class="s-intro-img">
          <div class="s-intro-label">Công Ty CP Bóng Đèn Điện Quang</div>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="g-intro-header col-sm-12" style="font-size: 20px; margin-top: 40px;">
        Đối tác dự án
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-sm-6">
        <a href="#" class="s-intro-item">
          <img src="https://www.quanhta360.com/wp-content/uploads/2017/01/trung-tam-nha-khoa-dong-tay-hoi-ngo-da-nang-1.jpg" class="s-intro-img-2">
          <div class="s-intro-label">Tổ chức Đông Tây Hội Ngộ</div>
        </a>
      </div>
      <div class="col-sm-6">
        <a href="#" class="s-intro-item">
          <img src="https://www.ischool.vn/news/images/06-2015/828-1433323630.jpg" class="s-intro-img-2">
          <div class="s-intro-label">Dự án I-school</div>
        </a>
      </div>
      <div class="col-sm-6">
        <a href="#" class="s-intro-item">
          <img src="https://img.giaoduc.net.vn/w700/Uploaded/2020/xpiutqmc/2013_06_05/vincem-phau-thuat-giaoduc.net.vn1.png" class="s-intro-img-2">
          <div class="s-intro-label">Công ty VAAIMEX Hoa Kỳ tại Việt Nam</div>
        </a>
      </div>
      <div class="col-sm-6">
        <a href="#" class="s-intro-item">
          <img src="https://www.vietinbank.vn/sites/mediafile/CDL064684" class="s-intro-img-2">
          <div class="s-intro-label">Ngân hàng Công Thương TP HCM</div>
        </a>
      </div>
      
    </div>
  </div>
@endsection
