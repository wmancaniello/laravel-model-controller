@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($movieInfo as $movie)
                <div class="col-4 mb-4">
                    {{-- CARD FILM --}}
                    @include('partials.card')
                </div>
            @endforeach
        </div>
    </div>
@endsection










