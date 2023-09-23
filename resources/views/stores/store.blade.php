@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <body>
                            <h2>店舗一覧</h2>

                            @foreach ($stores as $store)
                                {{ $store->id }} <br>
                                {{ $store->name }} <br>
                                <a href="{{ route('stores_detail', $store->id) }}">Link</a>
                            @endforeach
                        </body>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
