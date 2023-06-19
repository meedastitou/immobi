@extends('layout.backend.master')
@section('main')
    
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Maison /</span> Modifier Maison</h4>
      <div class="row">  
        <div class="col-xl-7 col-md-12 col-sm-12">
          <!-- HTML5 Inputs -->
          <div class="card mb-4">
            <h5 class="card-header">Modifier Maison</h5>
            <div class="card-body">
              <form action="">

                <div class="mb-3 row">
                  <label for="titre" class="col-md-3 col-form-label">Titre</label>
                  <div class="col-md-9">
                    <input class="form-control" type="text" value="{{ $maison->titre }}" placeholder="Entre Titre" id="titre" />
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="Description" class="col-md-3 col-form-label">Description</label>
                  <div class="col-md-9">
                    <textarea class="form-control" type="text" value="{{ $maison->description }}" placeholder="Entre Description" id="Description"></textarea>
                  </div>
                </div>
            
                <div class="mb-3 row">
                  <label for="nbChambre" class="col-md-3 col-form-label">Nombre des Chambres</label>
                  <div class="col-md-9">
                    <input class="form-control" type="number" min="1" value="{{ $maison->nb_chambre }}" id="nbChambre" />
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="nbChambre" class="col-md-3 col-form-label">Categorie</label>
                  <div class="col-md-9">
                    <select name="" id="categorie" class="form-control" multiple>
                      <option id="option_louer_jour" value="1">LOUER (jour)</option>
                      <option id="option_louer_moin" value="2">LOUER (moin)</option>
                      <option id="option_vender" value="3">VENDER</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="vender" class="col-md-3 col-form-label">prix Vender</label>
                  <div class="col-md-9">
                    <input class="form-control" type="number"   value="{{ $maison->prix_vende }}" id="vender" />
                  </div>
                </div>
                <div class="mb-3 row">
                    <label for="louer_moin" class="col-md-3 col-form-label">prix LOUER (moin)</label>
                    <div class="col-md-9">
                        <input class="form-control" type="number"  value="{{ $maison->prix_louer_moin }}" id="louer_moin" />
                    </div>
                </div>
                <div class="mb-3 row">
                  <label for="louer_jour" class="col-md-3 col-form-label">prix LOUER (jour)</label>
                  <div class="col-md-9">
                    <input class="form-control" type="number"  value="{{ $maison->prix_louer_jour }}" id="louer_jour" />
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="owner" class="col-md-3 col-form-label">Owner</label>
                  <div class="col-md-9">
                    <input class="form-control" list="datalistOptions" id="owner" placeholder="Type to search..."/>
                    <datalist id="datalistOptions">
                      <option value="San Francisco"></option>
                      <option value="New York"></option>
                      <option value="Seattle"></option>
                      <option value="Los Angeles"></option>
                      <option value="Chicago"></option>
                    </datalist>
                  </div>
                </div>                    
                {{-- <div class="mb-3">
                  <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                  <input class="form-control" type="file" accept="image/*" id="formFileMultiple" multiple />
                </div> --}}
                <div class="mt-2">
                  <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                  <button type="reset" class="btn btn-outline-secondary">
                    <a href="{{ url()->previous() }}">Cancel</a>
                </button>                </div>  
              </form>
            </div>
          </div>
        </div>
        
        <div class="holder col-xl-5">
          <div class="image-fluid">
            <div class="box_image text-center d-flex justify-content-center align-items-center" style="min-height: 400px;" id="box_image">
              <img id="DetailsimgPreview" style="max-width: 100%;"src="{{ asset('storage/' . $maison_images[0]->lien) }}" alt="pic" />
            </div>
            
            <div id="box_list_images" class="d-flex justify-content-center mt-2">
                @foreach ($maison_images as $image)
                  <img src="{{ asset('storage/' . $image->lien) }}" onclick='detailsshowImage(event)' style='width:40px; margin: 0 3px; cursor: pointer;' alt="">
                @endforeach
                {{-- <img src="{{ asset('storage/' . $maison_images[0]->lien) }}" style='width:40px; margin: 0 3px; cursor: pointer;' alt="">
                <img src="../assets/img/avatars/1.png" onclick='detailsshowImage(event)' style='width:40px; margin: 0 3px; cursor: pointer;' alt="">
                <img src="../assets/img/avatars/5.png" onclick='detailsshowImage(event)' style='width:40px; margin: 0 3px; cursor: pointer;' alt="">
                <img src="../assets/img/avatars/6.png" onclick='detailsshowImage(event)' style='width:40px; margin: 0 3px; cursor: pointer;' alt="">
                <img src="../assets/img/avatars/7.png" onclick='detailsshowImage(event)' style='width:40px; margin: 0 3px; cursor: pointer;' alt=""> --}}
            </div>
          </div>
        </div>
      </div>
      <!-- Ajouter Maison -->
    </div>
    <!-- / Content -->
      
@endsection