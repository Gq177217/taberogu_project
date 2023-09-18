@extends('layouts.app')

@section('content')
<h1>Toppage</h1>
<form action="{{ route('stores')}}">
    <input name="keyword" type="text"/>
    <select name="category" id="">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->major_category_name }}</option>

        @endforeach
    </select>
</form>
@endsection
