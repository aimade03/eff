@extends('app')
@section('content')
    <h1>Liste Employes</h1>
    <a href="/employes/create" class="btn btn-dark">Ajouter une nouveau Empolyes</a>
    <table class="table table-striped">
        <tr>
            <th>code</th>
            <th>nom</th>
            <th>prenom</th>
            <th>departement</th>
            <th>nombre de materiel</th>
            <th>RECHERCHER LES MATERIEL</th>
            <th>Ajouter Affectation</th>
        </tr>
        @foreach($employes as $employe)
            <tr>
                <td>{{ $employe->id }}</td>
                <td>{{ $employe->nomEmp }}</td>
                <td>{{ $employe->prenomEmp }}</td>
                <td>{{ $employe->departement->nomDep }}</td>
                <td>{{ count($employe->materiels) }}</td>
                <td>
                    <a href="/employes/{{$employe->id}}" class="btn btn-dark"> voir details  </a>
                </td>
                <td><a href="/affectation/create/{{$employe->id}}"  class="btn btn-dark">Ajouter</a></td>
            </tr>
        @endforeach
    </table>
@endsection