@extends('layouts.admin')
@section('content')
<div class="container">
  <form method="POST" action="{{ route('admin.voyages.store') }}">
    @csrf
    @method("PUT")
    <div class="col-sm-6">
      <h1>Ajouter un voyage</h1>
    </div>
    <div class="column">
      <div class="form-group">
        <div class="col-md">
          <input type="text" name="title" value="{{ old('label') }}" class="form-control" placeholder="titre" required >
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <input type="text" name="image" value="{{ old('label') }}" class="form-control" placeholder="url de l'image" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <input type="number" name="price" value="{{ old('label') }}" class="form-control" placeholder="Prix en €" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <input type="text" name="destination" value="{{ old('label') }}" placeholder="Destination" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <textarea name="description" value="{{ old('label') }}" placeholder="Description" class="form-control" required></textarea>
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