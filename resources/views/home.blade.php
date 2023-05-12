@extends('layout.app')

@section('title', 'Home page')

@section('content')

    <h4 class="title text-center">Favorite movies from our users:
        <i class="fa-solid fa-circle-down"></i>
    </h4>


    {{-- va bene usare il foreach ma il forelse considera naturalmente il caso in cui non ci sia niente da ciclare con il campo empty --}}
    @forelse ($movies as $movie)
        <div class="col-3 ">
            <div class="card ms_card">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Original title: {{ $movie->original_title }}</h6>
                    <div>Nationality: {{ $movie->nationality }} </div>
                    <span class="year"> Year {{ $movie->date }}</span>
                    <h6><i class="fa-solid fa-star"></i>Vote:
                        {{ $movie->vote }}
                    </h6>
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-danger">
            Nessun risultato
        </div>
    @endforelse

    {{-- @foreach ($movies as $movie)
        <div class="col-3 ">
            <div class="card ms_card">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Original title: {{ $movie->original_title }}</h6>
                    <div>Nationality: {{ $movie->nationality }} </div>
                    <span class="year"> Year {{ $movie->date }}</span>
                    <h6><i class="fa-solid fa-star"></i>Vote:
                        {{ $movie->vote }}
                    </h6>
                </div>
            </div>
        </div>
    @endforeach --}}

@endsection
