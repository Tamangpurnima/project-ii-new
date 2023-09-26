@extends('layouts.app')
@section('content')

<div class="container">
    <h2>College Details</h2>

    <div class="row">
        <div class="col-md-6">
            <h3>{{ $college->name }}</h3>
            <p><strong>Email:</strong> {{ $college->email }}</p>
            <p><strong>Phone:</strong> {{ $college->phone }}</p>
            <p><strong>Contact:</strong> {{ $college->contact }}</p>
            <p><strong>Description:</strong> {{ $college->description }}</p>

            <h4>Logo:</h4>
            @if($college->logo)
                <img src="{{ asset('storage/' . $college->logo) }}" alt="{{ $college->name }} Logo" style="max-width: 200px;">
            @else
                <p>No logo uploaded</p>
            @endif
        </div>
    </div>

    <h4>Gallery Images:</h4>
    <div class="row">
        @forelse($college->images as $image)
            <div class="col-md-3">
                <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $college->name }} Image" class="img-thumbnail">
            </div>
        @empty
            <p>No gallery images available</p>
        @endforelse
    </div>
</div>

@endsection
