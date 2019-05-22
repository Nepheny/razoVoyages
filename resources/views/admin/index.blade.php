@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="table-wrapper">
      <div class="table-title">
          <div class="row admin-row">
              <div class="col-sm-6"><h2>Détails des <b>Voyages</b></h2></div>
              <div class="col-sm-6">
                  <div class="col-sm-4 admin-btn-add">
                <a href="{{ route('admin.voyages.create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span class="add-btn-padding">Ajouter un voyage</span></a>
              </div>
                    <div class="search-box">
                        <i class="material-icons">&#xE8B6;</i>
                        <input type="text" class="form-control" placeholder="Search&hellip;">
                    </div>
                
              </div>
          </div>
      </div>
      <table class="table table-striped table-hover table-bordered">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Titre</th>
                  <th>Image</th>
                  <th>Prix</th>
                  <th>Destination</th>
                  <th>Description</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
                @foreach ($voyages as $voyage)
                <tr>
                  <td>{{ $voyage->id }}</td>
                  <td>{{ $voyage->title }}</td>
                  <td>{{ $voyage->image }}</td>
                  <td>{{ $voyage->price }}</td>
                  <td>{{ $voyage->destination }}</td>
                  <td>{{ $voyage->description }}</td>
                  <td>
                    <a href="{{ route('admin.voyages.show', ['id' => $voyage->id]) }}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                    <a href="{{ route('admin.voyages.edit', ['id' => $voyage->id]) }}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                    <form method="POST" action="{{ route('admin.voyages.destroy', ['id' => $voyage->id]) }}" class="delete" title="Delete" data-toggle="tooltip">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="material-icons delete-input" value="&#xE872;">
                    </form>
                  </td>
                </tr>  
              @endforeach   
          </tbody>
      </table>
  </div>
</div>     
@endsection