@extends('app')

@section('content')
<div class="container">
    <h1 class="mb-4">Create Employe {{ $employe->nomEmp }}</h1>
    <form action="/affectation/{{ $employe->id }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="materiel_id">Select Materiel:</label>
            <select name="materiel_id" id="materiel_id" class="form-control">
                @foreach ($materiels as $materiel)
                    <option value="{{ $materiel->id }}">{{ $materiel->marque }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="dateD">Date Debut Affectation:</label>
            <input type="date" name="dateD" id="dateD" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="dateF">Date Fin Affectation:</label>
            <input type="date" name="dateF" id="dateF" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Affectation</button>
    </form>
</div>
@endsection
