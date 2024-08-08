@extends('admin.master')

@section('title')
    Thêm mới danh mục
@endsection

@section('content')
    <h1>Thêm mới danh mục</h1>

    <form action="{{ route('ltins.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Tên danh mục</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </div>
    </form>
@endsection
