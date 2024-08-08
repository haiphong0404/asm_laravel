@extends('client.layouts.master')

@section('title')
    Tim kiem
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Bảng tin</h3>
            <table class="table">
                <thead>
                <tr>
                    <th>Ảnh</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Lượt xem</th>
                    <th>Tin trong loại</th>

                </tr>
                </thead>
                <tbody>
                @forelse ($tins as $t)
                    <tr>

                        <td>
                            @if($t->image)
                                <img src="{{ asset('storage/' . $t->image) }}" alt="{{ $t->title }}"
                                     class="img-thumbnail" style="max-width: 100px;">
                            @endif
                        </td>
                        <td>{{ $t->title }}</td>
                        <td>{{ $t->content }}</td>
                        <td>{{ $t->views }}</td>
                        <td>{{ $t->category->name }}</td>
{{--                        <td>--}}
{{--                            <!-- Link Xóa -->--}}
{{--                            <form action="{{ route('tins.destroy', $t->id) }}" method="POST" style="display: inline;">--}}
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
{{--                                <button type="submit" class="btn btn-danger btn-sm">Xóa</button>--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Không tìm thấy kết quả nào.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

