@extends('admin.layouts.base')
@section('contents')
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Elenco Appartamenti</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Stanze</th>
                        <th>Letti</th>
                        <th>Bagni</th>
                        <th>Metri Quadrati</th>
                        <th>Indirizzo</th>
                        <th>Visibile</th>
                        <th>Disponibile</th>
                        <th>Sponsorizzato</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($apartments as $apartment)
                            <tr>
                                <td>{{ $apartment->name }}</td>
                                <td>{{ $apartment->rooms }}</td>
                                <td>{{ $apartment->beds }}</td>
                                <td>{{ $apartment->bathrooms }}</td>
                                <td>{{ $apartment->mq }}</td>
                                <td>{{ $apartment->address }}</td>
                                <td scope="row" class="px-2 py-4 max-w-lg">
                                    <form action="{{ route('admin.apartments.toggleApartmentVisibility', $apartment->id) }}"
                                        method="post">
                                        @csrf
                                        <input type="checkbox" name="visible" value="1"
                                            {{ $apartment->is_visible ? 'checked' : '' }} onChange="this.form.submit()">
                                        <label for="visible">Appartamento disponibile</label>
                                    </form>
                                </td>
                                <td>{{ $apartment->is_available ? 'Sì' : 'No' }}</td>
                                <td>{{ $apartment->is_sponsored ? 'Sì' : 'No' }}</td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
