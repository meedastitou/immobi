@extends('layout.backend.master')
@section('main')

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
          <!-- Details Maison -->
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Vendeur /</span> Details Vendeur</h4>
          <div class="row">  
            <div class="col-xl-12 col-md-12 col-sm-12">
              <!-- HTML5 Inputs -->
              <div class="card mb-4">
                <h5 class="card-header">Details Vendeur</h5>
                <div class="card-body">
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label for="nom" class="form-label">Nom</label>
                      <input
                        class="form-control"
                        type="text"
                        id="firstName"
                        name="nom"
                        value="{{$vendeur->nom}}"
                      />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="prenom" class="form-label">Prenom</label>
                      <input class="form-control" type="text" name="prenom" id="lastName" value="{{$vendeur->prenom}}" />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="email" class="form-label">E-mail</label>
                      <input
                        class="form-control"
                        type="text"
                        id="email"
                        name="email"
                        value="{{$vendeur->email}}"
                      />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="cne" class="form-label">Cne</label>
                      <input
                        class="form-control"
                        type="text"
                        id="cne"
                        name="cne"
                        value="{{$vendeur->cne}}"
                      />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="tel">Phone Number</label>
                        <input
                          type="text"
                          id="phoneNumber"
                          name="tel"
                          class="form-control"
                          value="{{$vendeur->tel}}"
                        />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Details Maison -->
         
        


        </div>
        <!-- / Content -->


@endsection