{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
<div class="container my-5">
    <h1>I miei film</h1>

    <table class="table">
        <thead>
            <tr>
                <th class="col">ID</th>
                <th class="col">Titolo</th>
                <th class="col">Data di uscita</th>
                <th class="col">Voto</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($movies as $movie )
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->date }}</td>
                    <td>{{ $movie->vote }}</td>
                </tr>
            @endforeach


        </tbody>
    </table>


</div>

@endsection


@section('titlePage')
    home
@endsection
