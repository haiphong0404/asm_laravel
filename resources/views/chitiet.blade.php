@extends('client.layouts.master')

@section('tieudetrang')
    {{$tin->title}}
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mb-4">
                    <!-- Header của thẻ card -->
                    <div class="card-header text-center">
                        <h2 class="card-title">
                            {{$tin->title}}
                        </h2>
                    </div>

                    <!-- Thân của thẻ card -->
                    <div class="card-body">
                        <!-- Hiển thị ảnh -->
                        @if($tin->image)
                            <img src="{{ asset('storage/' . $tin->image) }}" alt="{{ $tin->title }}" class="img-fluid mb-3 rounded">
                        @endif

                        <!-- Nội dung bài viết -->
                        <div class="mb-3">
                            <div class="noiDung">
                                {!! $tin->content !!}
                            </div>
                        </div>
                    </div>

                    <!-- Footer của thẻ card -->
                    <div class="card-footer text-muted text-center">
                        {{--<p>Ngày đăng: {{ $tin->created_at->format('d-m-Y') }}</p>--}}
                        <p>Số lượt xem: {{ $tin->views }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
