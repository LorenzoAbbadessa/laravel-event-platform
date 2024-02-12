@extends('layouts.admin')

@section('content')
@foreach($events as $evento)
<section class="d-inline-flex p-3">
<div class="card" style="width: 25rem;">
    <img src="{{$evento->image}}" class="card-img-top" alt="img">
    <div class="card-body">
      <h5 class="card-title">{{$evento->name}}</h5>
      <p class="card-text">{{$evento->description}}</p>
      <strong><span class="card-text">{{$evento->date}}</span></strong>
      <a href="#" class="btn btn-primary">Vedi Dettagli</a>
      <a href="#" class="btn btn-warning">Modifica Evento</a>
      <form action="{{ route('admin.events.destroy', $evento->id) }}" method="POST"
        class="d-inline-block">
        @csrf
        @method('DELETE')
        <input type="submit" value="Cancella" class="btn btn-danger">
    </form>
    </div>
  </div>
</section>
  @endforeach
  @endsection