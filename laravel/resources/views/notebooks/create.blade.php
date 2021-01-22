@extends('layout.raw')
@section('content')

<main class="textc">
    <h1>crea il tuo notebook</h1>
    @if ($errors->any())
     <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
     </div>
    @endif
    <form action="{{route('Notebooks.store')}}" method="POST">
        @csrf
        @method('POST')
        <label for="name">Notebook name</label>
        <input type="text" name="name">
        <label for="features">descrizione del tuo notebook</label>
        <textarea name="features" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="create">

    </form>


</main>
    
@endsection