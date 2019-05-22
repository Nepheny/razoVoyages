@extends('layouts.admin')
@section('content')

@if($errors->any())
  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          <h2 class="mb-4">Erreur</h2>
          @foreach ($errors->all() as $error)
            <span class="subheading">{{ $error }}</span>
          @endforeach
        </div>
      </div>
    </div>
  </section>
@endif

<div class="container forms">
  <form method="POST" action="{{ route('admin.voyages.store') }}">
    @csrf
    <div class="col-sm-6">
      <h1>Ajouter un voyage</h1>
    </div>
    <div class="column">
      <div class="form-group">
        <div class="col-md">
          <input type="text" name="title" value="{{ old('label') }}" class="form-control" placeholder="titre" >
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <input type="text" name="image" value="{{ old('label') }}" class="form-control" placeholder="url de l'image">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <input type="number" step="any" name="price" value="{{ old('label') }}" class="form-control" placeholder="Prix en €">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <input type="text" name="destination" value="{{ old('label') }}" placeholder="Destination" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md">
          <textarea name="description" value="{{ old('label') }}" placeholder="Description" class="form-control"></textarea>
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