@extends('layouts.admin')
@section('content')
<div class="container">
  <form method="POST" action="{{ route('admin.voyages.update', ['voyage' => $voyage]) }}">
    @csrf
    @method("PATCH")
    <div class="col-sm-6">
      <h1>Ajouter un voyage</h1>
    </div>
    <div class="column">
      <div class="form-group">
        <div class="col-md">
          <input type="text" name="title" value="{{ $voyage->title }}" class="form-control" placeholder="titre" required >
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <input type="text" name="image" value="{{ $voyage->image }}" class="form-control" placeholder="url de l'image" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <input type="number" name="price" value="{{ $voyage->price }}" class="form-control" placeholder="Prix en €" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <input type="text" name="destination" value="{{ $voyage->destination }}" placeholder="Destination" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <textarea name="description" placeholder="Description" class="form-control" required>{{ $voyage->description }}</textarea>
        </div>
      </div> 
      <div class="form-group">
        <div class="col-md-6 col-md-offset">
          <input type="submit" value="Ajouter" class="btn btn-default btn-primary" />
        </div>
      </div>
    </div>
  </form>
</div>
@endsection