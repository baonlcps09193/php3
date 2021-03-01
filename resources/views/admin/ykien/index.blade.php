@extends('layouts.quantri')

@section('title', 'Danh Sách Ý kiến')

@section('main')
    {{-- display error --}}
    @if (session('fail'))
    <div class="alert alert-danger">
        {{ session('fail') }}
    </div>
    @endif
    {{-- display success --}}
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @include('admin.ykien.loopykien')
@endsection