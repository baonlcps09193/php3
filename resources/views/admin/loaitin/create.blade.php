@extends('layouts.quantri')

@section('title', 'THÊM LOẠI TIN')

@section('main')
<form method="post" action="{{ route('loaitin.store') }}">
@csrf
<div class="col-9 mg-l-30">
    <div class="d-flex flex-column">
        <div class="form-group mg-b-20">
            <label>Loại tin: <span class="tx-danger">*</span></label>
            <input name="Ten" placeholder="Nhập tên loại tin" class="form-control" required>
        </div>
        <div class="form-group mg-b-20">
            <label>Thứ tự:</label>
            <input type="number" name="ThuTu" placeholder="Nhập thứ tự" class="form-control">
        </div>
    </div>
    <div class="d-flex form-group mg-b-20">
        <label class="rdiobox">
            <input name="AnHien" type="radio" value="1">
            <span>Hiện</span>
        </label> &nbsp;
        <label class="rdiobox">
            <input name="AnHien" type="radio" value="0" >
            <span>Ẩn</span>
        </label>
    </div>
    <div class="d-flex form-group mg-b-20">
        <label class="rdiobox">
            <input name="lang" type="radio" value="vi" >
            <span>Tiếng Việt</span>
        </label> &nbsp;
        <label class="rdiobox">
            <input name="lang" type="radio" value="en" >
            <span>English</span>
        </label>
    </div>
    <button type="submit" class="btn btn-default">LƯU DATABASE</button>
</div>
</form>

@endsection