@extends('layouts.quantri')

@section('title', 'CHỈNH SỬA LOẠI TIN')

@section('main')
<form method="post" action="{{ route('loaitin.update', $row->idLT) }}">
@csrf
@method('patch')
<div class="col-9 mg-l-30">
    <div class="d-flex flex-column">
        <div class="form-group mg-b-20">
            <label>Tên thể loại: <span class="tx-danger">*</span></label>
            <input name="Ten" placeholder="Nhập tên thể loại" class="form-control" value="{{ $row->Ten }}" required>
            </div>
            <div class="form-group mg-b-20">
            <label>Thứ tự:</label>
            <input type="number" name="ThuTu" placeholder="Nhập thứ tự" class="form-control" value="{{ $row->ThuTu }}">
        </div>
    </div>
    <div class="d-flex justify-content-around">
        <div class="d-flex form-group mg-b-20">
            <label class="rdiobox">
                <input name="AnHien" type="radio" value="0" @if ($row->AnHien == 0) checked @endif>
                <span>Ẩn</span>
            </label> &nbsp;
            <label class="rdiobox">
                <input name="AnHien" type="radio" value="1" @if ($row->AnHien == 1) checked @endif>
                <span>Hiện</span>
            </label>
        </div>
        <div class="d-flex form-group mg-b-20">
            <label class="rdiobox">
                <input name="lang" type="radio" value="vi" @if ($row->lang == 'vi') checked @endif>
                <span>Tiếng Việt</span>
            </label> &nbsp;
            <label class="rdiobox">
                <input name="lang" type="radio" value="en" @if ($row->lang == 'en') checked @endif>
                <span>English</span>
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-default">LƯU DATABASE</button>
</div>
</form>

@endsection