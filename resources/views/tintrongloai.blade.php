<?php use App\Http\Controllers\TinController; ?>
@extends('layout')

@section('noidungchinh')
    <style>
        .breadcrumb {
            list-style-type: none; padding-left: 0; display: flex; flex-direction: row; background: none;
        }
        .breadcrumb li {
            border-radius: 5px;
            background: #3989ff;
            padding: 2px 10px;
            margin: 5px 10px;
            color: white;
        }
        .breadcrumb span { padding: 5px 0; }
        .breadcrumb li::before {
            content: '' !important;
        }
    </style>
    <ul class="breadcrumb">
        <li style="margin-left: 0">Trang chủ</li>
        <span> > </span>
        <li>{{ $TenTL }}</li>
        <span> > </span>
        <li>{{ $TenLT }}</li> 
    </ul>
    @foreach($listtin as $news)
        <div class="fs_news_right">
            <div class="single_fs_news_img"> <img onerror="this.src='defaultImg/defaultimg.jpg'" alt="Single News" src="{{ $news->urlHinh }}"> </div>
            <div class="single_fs_news_right_text">
                <h4><a href="{{action([TinController::class, 'chitiettin'] ,['id'=>$news->idTin])}}">{{ $news->TieuDe }}</a></h4>
                <p><i class="fa fa-clock-o"></i> {{ date('d/m/Y', strtotime($news->Ngay)) }}</p>
                <p>{{ $news->TomTat }}</p>
            </div>
        </div>
    @endforeach
    {{ $listtin->links() }}
@endsection