@extends('layout.index')
@section('content')
<div class="container-fluid my_search pt-5">
	 <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form method="get" action="timkiem">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="text" class="form-control" name="key" placeholder="Nhập từ khóa!!">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-success">Tìm kiếm</button>
              </div>
            </div>
          </form>
        </div>
</div>
<!-- end search -->
<div class="container content">
		<div class="row">
			<div class="col-12">
			 <h2>Danh sách vận đơn</h2>
       @if(session('thongbao'))
       <div class="alert alert-success">
          {{session('thongbao')}}
       </div>
       @endif
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead class="text-center">
        <tr>
          <th>ID</th>
          <th>Tên nhân viên</th>
          <th>Trang thái</th>
          <th>Người nhận</th>
          <th>Số điện thoại</th>
          <th>Địa chỉ</th>
          <th>Ngày giao hàng</th>
          <th>Ghi chú</th>
          <th>Hành động</th>
        </tr>
      </thead>
      <tbody class="text-center">
        @foreach($vandon as $vd)
        <tr>
          <td>{{$vd->id}}</td>
          @if(!is_null($vd->hovaten))
          <td>{{$vd->hovaten}}</td>
          @else
            <td>{{$vd->nhanvien->hovaten}}</td>
            @endif
          @if($vd->trangthai==1)
          <td>Hoàn thành</td>
          @else
          <td>Chưa hoàn thành</td>
          @endif
          <td>{{$vd->nguonhan}}</td>
          <td>{{$vd->dienthoai}}</td>
          <td>{{$vd->diachi}}</td>
          <td>{{$vd->ngaygiaohang}}</td>
          <td>{{$vd->ghichu}}</td>
          <td>
          	<a class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
          	<a class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

		</div>	
	</div>
</div>
<!-- end content -->
@endsection