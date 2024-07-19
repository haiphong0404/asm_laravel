@extends('client.layouts.master')

@section('tieudetrang')
    {{$tin->tieuDe}}
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h2 class="card-title text-center">
                            {{$tin->tieuDe}}
                        </h2>
                    </div>
                    <div class="card-body">
                        <h3 class="card-subtitle mb-2 text-muted text-center">
                            {{$tin->tomTat}}
                        </h3>
                        <div class="noiDung mt-4">
                            {!! $tin->noiDung !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
