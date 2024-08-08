@extends('client.layouts.master')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">
            Các tin trong loại
        </h1>
        @foreach($listtin as $t)
            <div class="row mb-4">
                <div class="col-md-4">
                    <!-- Hiển thị ảnh từ URL -->
                    <img src="{{'storage/' .$t->image }}" class="img-fluid rounded">
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">
                                <a href="{{ url('/tin', [$t->id]) }}" class="text-decoration-none text-dark">
                                    {{ $t->title }}
                                </a>
                            </h2>
                            <p class="card-text">
                                {{ Str::limit($t->content, 150) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
