@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="mt-3 text-center">Crea un Evento</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row">
            <form method="GET" action="{{ route('admin.events.create') }} " method="GET">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome dell'Evento</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione dell'Evento</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                        name="description" value="{{ old('description') }}">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Inserisci una foto dell'evento</label>
                    <input type="text" class="form-control @error('image') is-invalid @enderror" id="image"
                        name="image" value="{{ old('image') }}">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="dataCreation" class="form-label">Inserisci la data dell'evento</label>
                    <input type="date" class="form-control @error('dataCreation') is-invalid @enderror" id="dataCreation"
                        name="dataCreation" value="{{ old('dataCreation') }}">
                    @error('dataCreation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Crea</button>
            </form>
        </div>
    </div>
@endsection