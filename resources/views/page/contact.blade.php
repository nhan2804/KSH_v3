@extends('welcome')
@section('title','Mang đến cho bạn niềm tin')
@section('content')
<div class="main container">
    <section class="mb-4">
        <h2 class="h1-responsive font-weight-bold text-center my-4">Liên hệ với chúng tôi</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Bạn có câu hỏi nào không? Xin đừng ngần ngại liên hệ trực tiếp với chúng tôi. Chúng tôi sẽ quay lại với bạn trong vòng vài giờ để giúp bạn.</p>

        <div class="row">
            <div class="col-md-6 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name" class="">Tên của bạn</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email" class="">Gmail</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="subject" class="">Tiêu đề</label>
                                <input type="text" id="subject" name="subject" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <label for="message">Miêu tả</label>
                                <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea"></textarea>
                            </div>

                        </div>
                    </div>
                </form>

                <div class="text-center text-md-left mt-2">
                    <a class="btn btn-primary">Liên hệ</a>
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 text-center">
                <img class="img-fluid" src="images/contact.png" alt="">
            </div>
            <!--Grid column-->

        </div>

    </section>
<!--Section: Contact v.2-->
    <br>
</div>
@endsection
