@extends('admin')
@section('title','Bài viết');
@section('content')
<section class="content ">
        @if(count($errors) >0)
            <ul>
                @foreach($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        <!-- enctype="multipart/form-data" class="dropzone dz-clickable" -->
        <form action="{{ url('admin/product') }}" method="POST">
            {{ csrf_field() }}
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm mới hàng</h3>
                    </div>
                    <div class="box-body ">
                        <div class="form-group col-md-12">
                            <label>Tên mặt hàng</label>
                            <input required type="text" name="name_pro" class="form-control" value="">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Giá mặt hàng</label>
                            <input required type="number" name="price_pro" class="form-control" value="">
                        </div>
                         <div class="form-group col-md-12">
                            <label>Kích thước</label>
                            <input required type="text" name="size_pro" class="form-control" value="">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Màu mặt hàng</label>
                            <input placeholder="có thể có" type="text" name="color" class="form-control" value="">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Miêu tả</label>
                            <textarea required  name="desc_pro" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Chi tiết</label>
                            <textarea required id="" name="detail_pro" class="form-control edit_post">
                            </textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Mô tả thêm (có thể có)</label>
                            <textarea required id="" name="detailpusl_pro" class="form-control edit_post">
                            </textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Chọn loại</label>
                            <select class="form-control" name="cate_1" id="cate_id_1">
                                @foreach($data as $k=>$v)
                                <option value="{{$v->id_cate}}">{{$v->name_cate}}</option>  
                                @endforeach 
                            </select>

                        </div>
                        <div class="form-group col-md-12">
                            <label>Chọn danh mục</label>
                            <select class="form-control" id="cate_child" name="cate_2">
                                
                            </select>
                        </div>
                         <div class="form-group col-md-12">
                            <label>Chọn nhóm</label>
                            <select class="form-control" id="cate_child2" name="cate_3">
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Có thể bỏ qua nó</h3>
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin SEO hàng</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group col-md-12">
                            SEO Title <input type="text" name="seo_title" class="form-control"  value="">
                            Meta Keywords <input type="text" name="seo_key" class="form-control"  value="">
                            Meta Description <input type="text" name="seo_desc" class="form-control"  value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-success pull-right">
                    <i class="fa fa-save"></i>
                    <span>Save and back</span>
                </button>
            </div>
        </form>
        <br>
        <br>
        <br>

        <form enctype="multipart/form-data">
            <div class="col-md-12">
            <div class="dropzone" id="my-dropzone" name="myDropzone">

            </div>
        </div>
        </form>
        
    </section>

    <script type="text/javascript">
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
        $('#cate_id_1').on('change', function(event) {
        $parent_id= $(this).val();
        $.ajax({
            url: 'cate-parent',
            type: 'POST',
            data: {
                parent_id: $parent_id,
            },
            success:function (data) {
                $('#cate_child').html(data);
            },
            error:function () {
               alert("errro");
            }
        })
    });
        $('#cate_child').on('change', function(event) {
        $parent_id= $(this).val();
        $.ajax({
            url: 'cate-parent',
            type: 'POST',
            data: {
                parent_id: $parent_id,
            },
            success:function (data) {
                $('#cate_child2').html(data);
            },
            error:function () {
               alert("errro");
            }
        })
    });
    </script>
    <script type="text/javascript">
       Dropzone.options.myDropzone= {
           url: '{{ url('admin/product/uploadImg') }}',
           headers: {
               'X-CSRF-TOKEN': '{!! csrf_token() !!}'
           },
           autoProcessQueue: true,
           uploadMultiple: true,
           parallelUploads: 5,
           maxFiles: 10,
           maxFilesize: 5,
           acceptedFiles: ".jpeg,.jpg,.png,.gif",
           dictFileTooBig: 'Image is bigger than 5MB',
           addRemoveLinks: true,
           removedfile: function(file) {
           var name = file.name;    
           name =name.replace(/\s+/g, '-').toLowerCase();    /*only spaces*/
            $.ajax({
                type: 'POST',
                url: '{{ url('admincp/deleteImg') }}',
                headers: {
                     'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                 },
                data: "id="+name,
                dataType: 'html',
                success: function(data) {
                    $("#msg").html(data);
                }
            });
          var _ref;
          if (file.previewElement) {
            if ((_ref = file.previewElement) != null) {
              _ref.parentNode.removeChild(file.previewElement);
            }
          }
          return this._updateMaxFilesReachedClass();
        },
        previewsContainer: null,
        hiddenInputContainer: "body",
       }
    </script>
    <style>
        .dropzone {
            border: 2px dashed #0087F7;
            border-radius: 5px;
            background: white;
        }
    </style>
    <script>
    CKEDITOR.replaceClass = 'edit_post';
</script> 
@endsection