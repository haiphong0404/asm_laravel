@extends('client.layouts.master')

@section('title')
    Dashboard Admin
@endsection

@section('content')
    <div class="container mt-5">
        <div class="position-fixed top-0 end-0 m-3 bg-light border rounded p-3 shadow-sm">
            <h6 class="mb-3">Hi, {{ Auth::user()->name }}</h6>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Logout</button>
            </form>
        </div>


        <div class="row mt-5">
            <div class="col-md-12">
                <h3>Bảng Tin</h3>
                <a href="{{ route('tins.create') }}" class="btn btn-primary mb-3">Create</a>
                <a href="{{ route('ltins.index') }}" class="btn btn-primary mb-3">Loai tin</a>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Ảnh</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Lượt xem</th>
                        <th>Tin trong loại</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($tin as $t)
                        <tr>
                            <td>{{ $t->id }}</td>
                            <td><img src="{{'storage/' .$t->image }}" alt="Image" class="img-fluid"
                                     style="max-width: 100px; height: auto;"></td>
                            <td>{{ $t->title }}</td>
                            <td>{{ Str::limit($t->content, 100) }}</td>
                            <td>{{ $t->views }}</td>
                            <td>{{ $t->category->name }}</td>
                            <td>
                                <a href="{{ route('tins.edit', $t) }}" class="btn btn-warning mt-3">Edit</a>

                                <form action="{{ route('tins.destroy', $t) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" onclick="return confirm('Are you sure!')"
                                            class="btn btn-danger mt-3">Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
