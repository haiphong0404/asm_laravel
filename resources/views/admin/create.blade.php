@extends('admin.master')

@section('title')
    Thêm mới tin tức
@endsection

@section('content')
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif
    <form action="{{ route('tins.store') }} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">Nội dung </label>
            <textarea class="form-control" id="content" name="content" required></textarea>
        </div>
        <div class="form-group">
            <label for="views">Luợt xem </label>
            <input type="number" class="form-control" id="views" name="views" required></input>
        </div>
        <div class="form-group">
            <label for="category_id">Danh mục</label>
            <select class="form-control" id="category_id" name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="file" class="form-control-file" id="image" name="image" required>
        </div>
        <div class="form-group d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </div>

        {{--        <a href="{{ route('tin.index') }}" class="btn btn-secondary ml-3">--}}

    </form>
@endsection
