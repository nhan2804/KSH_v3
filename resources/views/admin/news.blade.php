@extends('admin')
@section('title','Bài viết');
@section('content')
<div>
	<div class="row">
		<div class="col-lg-12">
			<form method="POST" action="{{URL::to("/admin/news/insert-cate")}}">
				{{csrf_field()}}
				<div class="form-group">
					<label>Tên danh mục</label>
					<input required class="form-control" type="text" name="name_cate">
					<br>
					<button class="btn btn-success" type="submit" name=""><i class="fas fa-plus"></i> Thêm</button>
				</div>
			</form>
		</div>
		<a href="{{URL::to('admin/news/add')}}" class="btn btn-warning">Tạo bài viết mới</a>
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table ">
					<tr>
						<td><input type="checkbox" name=""></td>
						<td>Tên bài viết</td>
						<td>Lượt xem</td>
						<td>Chức năng</td>
					</tr>
					@foreach($data as $k=>$v)
					<tr>
						<td data-id="{{$v->id_news}}"><input type="checkbox" name=""></td>
						<td >{{$v->title_news}}</td>
						<td>{{$v->view_blog}}</td>
						<td>
							<a href="#">Sửa </a>
							<a href="#">Xóa </a>
							<a href="#">Xem </a>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection