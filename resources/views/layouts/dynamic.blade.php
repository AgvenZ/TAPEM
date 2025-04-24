@extends('layouts.main')

@section('title', $page->title)

@section('content')
    <div class="dynamic-content">
        {!! $page->source_code !!}
    </div>
@endsection