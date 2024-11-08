@extends('layouts.app')

@section('content')
    <div class="item-details">
        <h1>{{ $item->title }}</h1>
        <p><strong>Category:</strong> {{ $item->category }}</p>
        <p><strong>Author:</strong> {{ $item->author }}</p>
        <p><strong>Publication Date:</strong> {{ $item->publication_date }}</p>
        <p><strong>Details:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia, quam at consequat vestibulum, ipsum quam mollis lectus.</p>
        <a href="{{ route('catalogue.index') }}">Back to Catalogue</a>
    </div>
@endsection
