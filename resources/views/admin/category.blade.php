@extends('admin.master')

@section('title')
    Danh sách danh mục
@endsection

@section('content')
    <h1>Danh sách danh mục</h1>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary mb-3">Tin tuc</a>
    <a href="{{ route('ltins.create') }}" class="btn btn-primary mb-3">Thêm danh mục mới</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>

                <td>
                    <a href="{{ route('ltins.edit', $category->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <form action="{{ route('ltins.destroy', $category->id) }}" method="post" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
