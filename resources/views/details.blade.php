@extends('app')
@section('content')
    <h1>Liste matrieles</h1>
    <table class="table table-striped">
        <tr>
            <th>code</th>
            <th>marque</th>
            <th>categorie</th>
            <th>date debut</th>
            <th>date fin</th>
            <th>supprimer</th>
        </tr>
        @foreach($materiels as $materiel)
            <tr>
                <td>{{ $materiel->id }}</td>
                <td>{{ $materiel->marque }}</td>
                <td>{{ $materiel->categorie }}</td>
                <td>{{ $materiel->pivot->dateDebutAffectation }}</td>
                <td>{{ $materiel->pivot->dateFinAffectation }}</td>
                <td>
                    <form action="/affectation/{{$materiel->pivot->employe_id}}/{{$materiel->id}}" method='post'> 
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="supprimer">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection