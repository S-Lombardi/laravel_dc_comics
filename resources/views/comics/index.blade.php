@extends ('layouts.app')

{{-- PAGINA DI ATTERRAGGIO --}}
@section('content')
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-12 col-md-6 col-lg-4">

                {{-- Copertina fumetto + titolo --}}
                <div class="card mt-5">
                    <img class="img-fluid card-img-top" src="{{$comic->thumb}}" alt="{{$comic->thumb2}}">
                    <h4> {{$comic->title}}</h4>
                    {{-- Pulsante dettagli/Show--}}
                    <button class="btn btn-warning">
                        <a class="text-decoration-none text-dark" href="{{route('comics.show', $comic->id)}}"> Scopri di più!</a>
                    </button>
                </div>

            </div>
            @endforeach

            {{-- Pulsante Form/ Create --}}
        </div>
        <button class="mb-5 btn btn-lg btn-primary">
            <a class="text-light text-decoration-none" href="{{route('comics.create')}}">
                Passa alla form
            </a>
        </button>
    </div>

@endsection