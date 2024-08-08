@extends('admin.master')

@section('title')
    Chỉnh sửa danh mục
@endsection

@section('content')
    <h1>Chỉnh sửa danh mục</h1>

    <form action="{{ route('ltins.update', $category->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tên danh mục</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" required>
        </div>

        <div class="form-group d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Cap nhat</button>
        </div>
    </form>
@endsection
