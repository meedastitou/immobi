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
              <form action="{{ route('updateMaison.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="number" name="id"  required readonly value="{{$maison->id}}" class="d-none">
                <div class="mb-3 row">
                  <label for="titre" class="col-md-3 col-form-label">Titre</label>
                  <div class="col-md-9">
                    <input class="form-control" type="text" value="{{ $maison->titre }}" placeholder="Entre Titre" name="titre" id="titre" />
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="Description" class="col-md-3 col-form-label">Description</label>
                  <div class="col-md-9">
                    <textarea class="form-control" type="text" name="description" rows="8" placeholder="Entre Description" id="Description">{{ $maison->description }}</textarea>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="status"  class="col-md-3 col-form-label">Status</label>
                  <div class="col-md-9">
                      <select required name="status" id="status" class="form-control">
                          <option id="" value="DESPONIBLE" @if ($maison->status == 'DESPONIBLE')
                              @selected(true)
                          @endif>DESPONIBLE</option>
                          <option id="" value="MAINTENANCE" @if ($maison->status == 'MAINTENANCE')
                              @selected(true)
                          @endif>MAINTENANCE</option>
                          <option id="" value="INDESPONIBLE"@if ($maison->status == 'INDESPONIBLE')
                            @selected(true)
                        @endif>INDESPONIBLE</option>
                      </select>
                  </div>
              </div>
                
                <div class="mb-3 row">
                  <label for="nbChambre" class="col-md-3 col-form-label">Nombre des Chambres</label>
                  <div class="col-md-9">
                    <input class="form-control" type="number" min="1" value="{{ $maison->nb_chambre }}" name="nb_chambre" id="nbChambre" />
                  </div>
                </div>
                <div class="mb-5 row">
                  <label for="nbDouche" class="col-md-3 col-form-label">Nombre des Douches</label>
                  <div class="col-md-9">
                    <input class="form-control" type="number" min="1" value="{{ $maison->nb_douche }}" name="nb_douche" id="nbDouche" />
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="vender" class="col-md-3 col-form-label">prix Vender</label>
                  <div class="col-md-9">
                    <input class="form-control" type="number"  name="prix_vende" value="{{ $maison->prix_vende }}" id="vender" />
                  </div>
                </div>
                <div class="mb-3 row">
                    <label for="louer_moin" class="col-md-3 col-form-label">prix LOUER (moin)</label>
                    <div class="col-md-9">
                        <input class="form-control" type="number" name="prix_louer_moin" value="{{ $maison->prix_louer_moin }}" id="louer_moin" />
                    </div>
                </div>
                <div class="mb-5 row">
                  <label for="louer_jour" class="col-md-3 col-form-label">prix LOUER (jour)</label>
                  <div class="col-md-9">
                    <input class="form-control" type="number" name="prix_louer_jour" value="{{ $maison->prix_louer_jour }}" id="louer_jour" />
                  </div>
                </div>
                <hr>
                <div class="mb-3 row">
                  <label for="surface_maison" class="col-md-3 col-form-label">Surface Maison</label>
                  <div class="col-md-9">
                      <input class="form-control" required name="surface_maison" type="number" value="{{$maison->surface_maison}}" id="surface_maison" />
                  </div>
                </div>
                <div class="mb-5 row">
                    <label for="surface_terre" class="col-md-3 col-form-label">Surface Terre</label>
                    <div class="col-md-9">
                        <input class="form-control" required name="surface_terre" type="number" value="{{$maison->surface_terre}}" id="surface_terre" />
                    </div>
                </div>
                <hr>
                <div class="mb-3 row">
                  <label for="owner" class="col-md-3 col-form-label">Owner</label>
                  <div class="col-md-9">
                    <input class="form-control" list="datalistOptions" value="{{$maison->owner}}" id="owner" name="owner" placeholder="Type to search..."/>
                    <datalist id="datalistOptions">
                      @foreach ($vendeurs as $vendeur)
                      <option value="{{ $vendeur->id }}">{{ $vendeur->nom }} {{ $vendeur->prenom }}</option>
                      @endforeach
                    </datalist>
                  </div>
                </div>                    
                <div class="mb-3">
                    <label for="capt" class="form-label">choisi caption images</label>
                    <input class="form-control"  name="capt" type="file" accept="image/*" id="capt" />
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">choisi images</label>
                    <input class="form-control"  name="images[]" type="file" accept="image/*" id="formFileMultiple"
                        multiple />
                </div>
                <div class="mt-2">
                  <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                  <button type="reset" class="btn btn-outline-secondary">
                    <a href="{{ route("maison.index") }}">Cancel</a>
                </button>                </div>  
              </form>
            </div>
          </div>
        </div>
        
        <div class="holder col-xl-5">
          <div class="image-fluid">
            <div class="box_image text-center d-flex justify-content-center align-items-center mb-5" style="min-height: 400px;" id="box_capt">
              <img id="image_capt" style="max-width: 100%;"src="{{ asset('storage/' . $maison->capt) }}" alt="pic" />
            </div>
            <div class="box_image text-center d-flex justify-content-center align-items-center" style="min-height: 400px;" id="box_image">
              <img id="DetailsimgPreview" style="max-width: 100%;"src="{{ asset('storage/' . $maison_images[0]->lien) }}" alt="pic" />
            </div>
            
            <div id="box_list_images" class="d-flex justify-content-center mt-2">
                @foreach ($maison_images as $image)
                  <div class="d-flex flex-column text-center me-2">
                    <form action="/deleteimage/{{ $image->id }}" method="post">
                      <button class="btn text-danger">X</button>
                      @csrf
                      @method('delete')
                    </form>
                    <img src="{{ asset('storage/' . $image->lien) }}" onclick='detailsshowImage(event)' class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                  </div>
                @endforeach
                
            </div>
          </div>
        </div>
      </div>
      <!-- Ajouter Maison -->
    </div>
    <!-- / Content -->
   
@endsection