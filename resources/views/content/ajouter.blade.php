@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Client /</span> Formulaire
</h4>

<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Formulaire du client</h5>


        @if (session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">{{session('success')}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
    
    @endif

    <ul>
        @foreach ($errors->all() as $error)
                <il class="alert alert-warning alert-dismissible" role="alert">{{$error}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button></il>
        @endforeach
    </ul>

            

        <small class="text-muted float-end">  <a href="/liste"><button type="button" class="btn btn-warning">Liste des clients</button></a>
</small>
      </div>
      <div class="card-body">
        <form action="/ajouterClient" method="POST">
           @csrf
          <div class="mb-3">
            <label class="form-label" for="Nom">Nom</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
              <input type="text" class="form-control" id="Nom" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="nom"/>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="Project">Project</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
              <input type="text" id="Project" class="form-control" placeholder="ACME Inc." aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" name="project"/>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="numero">Telephone No</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
              <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" name="numero"/>
            </div>
          </div>

          
          
          
          
          <button type="submit" class="btn btn-warning">Ajouter</button>

          

        </form>
      </div>
    </div>
  </div>
</div>

@endsection
