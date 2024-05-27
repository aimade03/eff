@extends('app')
@section('content')
    <h1>Liste Materials</h1>
    <a href="/materials/create" class="btn btn-dark">Ajouter une nouveau Materials</a>
    <table>
        <tr>
            <th>code</th>
            <th>marque</th>
            <th>categorie</th>
            <th>dateDebutUtilisation</th>
            <th>Supprimer</th>
        </tr>
        @foreach($materiels as $materiel)
            <tr>
                <td>{{ $materiel->id }}</td>
                <td>{{ $materiel->marque }}</td>
                <td>{{ $materiel->categorie }}</td>
                <td>{{ $materiel->dateDebutUtilisation }}</td>
                <td>
                    <form action="/materiels/{{ $materiel->id }}" method="post">
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark">Supprimer</button>
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection