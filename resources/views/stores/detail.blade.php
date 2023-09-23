@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">



                    <tr>
                        <th>{{ $store->id }}</th>
                        <th>{{ $store->name }}</th>

                    </tr>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
