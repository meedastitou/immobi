@extends('layout.backend.master')
@section('main')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
          <!-- Details Maison -->
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Maison /</span> Details Maison</h4>
          <div class="row">  
            <div class="col-xl-7 col-md-12 col-sm-12">
              <!-- HTML5 Inputs -->
              <div class="card mb-4">
                <h5 class="card-header">Details Maison</h5>
                <div class="card-body">
                  <div class="mb-3 row">
                    <label for="titre" class="col-md-3 col-form-label">Titre</label>
                    <div class="col-md-9">
                      <input class="form-control" disabled type="text" value="{{ $maison->titre }}" placeholder="Entre Titre" id="titre" />
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="Description" class="col-md-3 col-form-label">Description</label>
                    <div class="col-md-9">
                      <textarea class="form-control" disabled type="text" value="" id="Description">{{ $maison->description }}</textarea>
                    </div>
                  </div>
              
                  <div class="mb-3 row">
                    <label for="nbChambre" class="col-md-3 col-form-label">Nombre des Chambres</label>
                    <div class="col-md-9">
                      <input class="form-control" disabled type="number" min="1" value="{{ $maison->nb_chambre }}" id="nbChambre" />
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="nbChambre" class="col-md-3 col-form-label">Categorie</label>
                    <div class="col-md-9">
                      <select name="" disabled id="categorie" class="form-control" multiple>
                        <option id="option_louer_jour" @if ($maison->prix_louer_jour)
                            @selected(true)
                        @endif value="1">LOUER (jour)</option>

                        <option id="option_louer_moin" @if ($maison->prix_louer_moin)
                            @selected(true)
                        @endif value="2">LOUER (moin)</option>

                        <option id="option_vender" @if ($maison->prix_vende)
                          @selected(true)
                        @endif >VENDER</option>
                      </select>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="louer_jour" class="col-md-3 col-form-label">prix LOUER (jour)</label>
                    <div class="col-md-9">
                      <input class="form-control" type="number"  value="{{ $maison->titre }}" id="louer_jour" />
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="louer_moin" class="col-md-3 col-form-label">prix LOUER (moin)</label>
                    <div class="col-md-9">
                      <input class="form-control" type="number"  value="123" id="louer_moin" />
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="vender" class="col-md-3 col-form-label">prix Vender</label>
                    <div class="col-md-9">
                      <input class="form-control" type="number"  value="{{$maison->prix_vende}}" id="vender" />
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="owner" class="col-md-3 col-form-label">Owner</label>
                    <div class="col-md-9">
                      <input class="form-control" disabled value="{{ $owner->nom}} {{ $owner->prenom }}" id="owner" placeholder="Type to search..."/>
                      
                    </div>
                  </div>                    
                  <!-- <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                    <input class="form-control" type="file" accept="image/*" id="formFileMultiple" multiple />
                  </div> -->
                </div>
              </div>
            </div>
            
            <div class="holder col-xl-5">
              <div class="image-fluid">
                <div class="box_image text-center d-flex justify-content-center align-items-center" style="min-height: 400px;" id="box_image">
                  <img id="DetailsimgPreview" style="max-width: 100%;" src="{{ asset('storage/' . $maison_images[0]->lien) }}" alt="pic" />
                </div>
                <div id="box_list_images" class="d-flex justify-content-center mt-2">
                  @foreach ($maison_images as $image)
                  <img src="{{ asset('storage/' . $image->lien) }}" onclick='detailsshowImage(event)' style='width:40px; margin: 0 3px; cursor: pointer;' alt="">
                @endforeach
                </div>
              </div>
            </div>
          </div>
          <!-- Details Maison -->
        </div>
        <!-- / Content -->
@endsection