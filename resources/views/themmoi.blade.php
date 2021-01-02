@extends('layout.index')
@section('content')
<div class="empty"></div>
<div class="container content">
    <div class="row">
      <div class="col-12">
       <h2>Thêm mới sinh viên</h2>
       @if(count($errors)>0)
       <div class="alert alert-danger">
          @foreach($errors->all() as $err)
            {{$err}}
            <br>
            @endforeach
       </div>
       @endif
          <form method="post" action="themmoi">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label for="validationDefault05">Nhân viên</label>
                 <select class="form-control" id="sel1" name="nhanvien">
                  <option hidden>Chọn nhân viên</option>
                  @foreach($nhanvien as $nv)
                    <option value="{{$nv->id}}">{{$nv->hovaten}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault02">Người nhận</label>
                <input type="text" class="form-control" id="validationDefault02" name="nguoinhan" placeholder="Nhập họ và tên" required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefaultUsername">Điện thoại</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="phone" id="validationDefaultUsername" placeholder="Nhập sdt" required>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">Địa chỉ</label>
                <input type="text" class="form-control" id="validationDefault03" name="diachi" placeholder="Tên tỉnh" required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault04">Ngày giao hàng</label>
                <input type="date" name="ngaygiao" class="form-control" id="validationDefault04" required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault05">Ghi chú</label>
                 <textarea class="form-control" rows="5" id="comment" name="ghichu"></textarea>
              </div>
            </div>
            <button class="btn btn-primary float-right" type="submit">Thêm mới</button>
          </form>
    </div>  
  </div>
</div>
<div class="empty1"></div>
<!-- end content -->
@endsection