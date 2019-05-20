@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="table-wrapper">
      <div class="table-title">
          <div class="row admin-row">
              <div class="col-sm-6"><h2>Détails des <b>Voyages</b></h2></div>
              <div class="col-sm-6">
                  <div class="col-sm-4 admin-btn-add">
                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span class="add-btn-padding">Ajouter un voyage</span></a>
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
                  <th>Name <i class="fa fa-sort"></i></th>
                  <th>Address</th>
                  <th>City <i class="fa fa-sort"></i></th>
                  <th>Pin Code</th>
                  <th>Country <i class="fa fa-sort"></i></th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>1</td>
                  <td>Thomas Hardy</td>
                  <td>89 Chiaroscuro Rd.</td>
                  <td>Portland</td>
                  <td>97219</td>
                  <td>USA</td>
                  <td>
                    <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                    <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                    <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                  </td>
              </tr>     
          </tbody>
      </table>
      <div class="clearfix">
          <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
          <ul class="pagination">
              <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
              <li class="page-item"><a href="#" class="page-link">1</a></li>
              <li class="page-item"><a href="#" class="page-link">2</a></li>
              <li class="page-item active"><a href="#" class="page-link">3</a></li>
              <li class="page-item"><a href="#" class="page-link">4</a></li>
              <li class="page-item"><a href="#" class="page-link">5</a></li>
              <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
          </ul>
      </div>
  </div>
</div>     
@endsection