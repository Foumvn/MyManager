@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Client /</span> Liste
</h4>

<!-- Hoverable Table rows -->
<div class="card">
  <h5 class="card-header">Personnels</h5>
  <div class="table-responsive text-nowrap">

  @if (session('success'))
        <div class="alert alert-success">{{session('success')}}<div>
  @endif

    <table class="table table-hover">
      <thead>
        <tr>
          <th>Client</th>
          <th>Project</th>
          <th>Status</th>
          <th>Numero</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        
       
        
        <tr>
          <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong></strong></td>
          <td></td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Fred fulher">
                <img src="{{asset('assets/img/avatars/1.jpg')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Frederic Wilkerson">
                <img src="{{asset('assets/img/avatars/2.jpg')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Fredy foumane">
                <img src="{{asset('assets/img/avatars/3.jpg')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-warning me-1"></span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href=" "><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
  
      </tbody>
    </table>
  </div>
  <a href="/ajouter"><button type="button" class="btn btn-warning">Formulaire</button></a>

</div>

<div>  
</div>
@endsection
