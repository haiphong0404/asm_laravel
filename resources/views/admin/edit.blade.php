@extends('admin.master')

@section('title')
    Chỉnh sửa tin tức
@endsection

@section('content')
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif

    <form action="{{ route('tins.update', $tin->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $tin->title) }}"
                   required>
        </div>

        <div class="form-group">
            <label for="content">Nội dung</label>
            <textarea class="form-control" id="content" name="content"
                      required>{{ old('content', $tin->content) }}</textarea>
        </div>

        <div class="form-group">
            <label for="views">Lượt xem</label>
            <input type="number" class="form-control" id="views" name="views" value="{{ old('views', $tin->views) }}"
                   required>
        </div>

        <div class="form-group">
            <label for="category_id">Danh mục</label>
            <select class="form-control" id="category_id" name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $tin->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="current_image">Hình ảnh hiện tại</label>
            @if($tin->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $tin->image) }}" alt="Current Image" class="img-fluid"
                         style="max-width: 200px;">
                </div>
            @else
                <p>Không có hình ảnh hiện tại.</p>
            @endif
        </div>

        <div class="form-group">
            <label for="image">Hình ảnh</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-primary btn-block mt-4">Cập nhật</button>
    </form>
@endsection
