@extends('layouts.quantri')

@section('title', 'THÊM TIN')

@section('main')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br>
@endif
<form method="post" action="{{ route('tintuc.store') }}">
@csrf
<div class="col-9 mg-l-30">
    <div class="d-flex flex-column">
        <div class="form-group mg-b-20">
            <label>Tiêu đề: <span class="tx-danger">*</span></label>
            <input name="TieuDe" placeholder="Nhập tiêu đề" class="form-control" required>
        </div>
        <div class="form-group mg-b-20">
            <label>Tóm tắt:</label>
            <input name="TomTat" placeholder="Nhập tóm tắt" class="form-control">
        </div>
        <div class="form-group mg-b-20">
            <label>Nội dung:</label>
            <input name="Content" placeholder="Nhập nội dung" class="form-control">
        </div>
        {{-- image --}}
        
        {{--  --}}
    </div>
    <div class="d-flex form-group mg-b-20">
        <label class="rdiobox">
            <input name="AnHien" type="radio" value="1">
            <span>Hiện</span>
        </label> &nbsp;
        <label class="rdiobox">
            <input name="AnHien" type="radio" value="0">
            <span>Ẩn</span>
        </label>
    </div>
    <div class="d-flex form-group mg-b-20">
        <label class="rdiobox">
            <input name="lang" type="radio" value="vi">
            <span>Tiếng Việt</span>
        </label> &nbsp;
        <label class="rdiobox">
            <input name="lang" type="radio" value="en">
            <span>English</span>
        </label>
    </div>
    <button type="submit" class="btn btn-default">LƯU DATABASE</button>
</div>
</form>

@endsection