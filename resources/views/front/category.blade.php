@extends('layouts.front')

@section('title') {{ $category->name }} @endsection

@section('content')
    <div class="main-page">
        <category-projects :projects="{{ json_encode($projects) }}" :category="{{ $category }}"></category-projects>
    </div>
@endsection
