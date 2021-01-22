@extends('layout.raw')
@section('content')

<main class="textc">
    <h1>{{ $notebook->name }} detail</h1>
    <hr>
    <p>{{$notebook->features}}</p>


</main>
    
@endsection