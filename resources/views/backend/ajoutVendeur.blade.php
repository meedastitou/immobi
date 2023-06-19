@extends('layout.backend.master')
@section('main')
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Vendeur /</span> Ajouter Vendeur</h4>
      <div class="row">  
        <div class="col-xl-7 col-md-12 col-sm-12">
          <!-- HTML5 Inputs -->
          <div class="card mb-4">
            <h5 class="card-header">Ajouter Vendeur</h5>
            <div class="card-body">
                <form action="{{ route('storeVendeur.store') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                      <label for="nom" class="col-md-3 col-form-label">Nom</label>
                      <div class="col-md-9">
                        <input class="form-control" name="nom" type="text" value="" placeholder="Entre Nom Vendeur" id="nom" />
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="prenom" class="col-md-3 col-form-label">Prenom</label>
                      <div class="col-md-9">
                        <input class="form-control" name="prenom" type="text" value="" placeholder="Entre Prenom Vendeur" id="prenom" />
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="cne" class="col-md-3 col-form-label">CNE</label>
                      <div class="col-md-9">
                        <input class="form-control" name="cne" type="text" value="" placeholder="Entre cne Vendeur" id="cne" />
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="tel" class="col-md-3 col-form-label">Numero de telephone</label>
                      <div class="col-md-9">
                        <input class="form-control" name="tel" type="tel" placeholder="Entre Numero de telephone" value="" id="tel" />
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="email" class="col-md-3 form-label">Email address</label>
                      <div class="col-md-9">
                        <input type="email" name="email" class="form-control" id="emai" placeholder="name@example.com"/>
                      </div>
                    </div>   
                    <div class="mt-2">
                      <button type="submit" class="btn btn-primary me-2">Save</button>
                      <button type="reset" class="btn btn-outline-secondary">
                        <a href="{{ url()->previous() }}">Cancel</a>
                    </button>                    </div>  
                  </form>
            </div>
          </div>
        </div>
        
      </div>
      <!-- Ajouter Maison -->
    </div>
    <!-- / Content -->

@endsection