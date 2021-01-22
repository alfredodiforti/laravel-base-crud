@extends('layout.raw')
@section('content')

<main class="textc">
    <h1>I nostri notebook</h1>
    <hr>
    @foreach ($notebook as $modello)
    <h6>{{ $modello->id }}</h6>
    <h3>{{ $modello->name }}</h3>
    <a href="{{route('Notebooks.show', $modello->id)}}"><button>show</button></a>
        
    @endforeach

</main>
    
@endsection