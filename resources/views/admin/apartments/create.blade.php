@extends('admin.layouts.base')

@section('contents')
    <div class="container mt-4">
        <h1>Aggiungi Nuovo Appartamento</h1>
        <form action="{{ route('admin.apartments.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome Appartamento</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="rooms" class="form-label">Numero di Stanze</label>
                <input type="number" class="form-control" id="rooms" name="rooms" required>
            </div>

            <div class="mb-3">
                <label for="beds" class="form-label">Numero di Letti</label>
                <input type="number" class="form-control" id="beds" name="beds" required>
            </div>

            <div class="mb-3">
                <label for="bathrooms" class="form-label">Numero di Bagni</label>
                <input type="number" class="form-control" id="bathrooms" name="bathrooms" required>
            </div>

            <div class="mb-3">
                <label for="mq" class="form-label">Metri Quadrati</label>
                <input type="number" class="form-control" id="mq" name="mq" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Indirizzo</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Foto dell'Appartamento</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_visible" name="is_visible">
                <label class="form-check-label" for="is_visible">Visibile</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_available" name="is_available">
                <label class="form-check-label" for="is_available">Disponibile</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_sponsored" name="is_sponsored">
                <label class="form-check-label" for="is_sponsored">Sponsorizzato</label>
            </div>

            <button type="submit" class="btn btn-primary">Crea Appartamento</button>
        </form>
    </div>
@endsection