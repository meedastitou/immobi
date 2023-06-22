@extends('layout.backend.master')
@section('main')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Details Terrain -->
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Terrain /</span> Details Terrain</h4>
            <div class="row">
                <div class="col-xl-7 col-md-12 col-sm-12">
                    <!-- HTML5 Inputs -->
                    <div class="card mb-4">
                        <h5 class="card-header">Details Terrain</h5>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="titre" class="col-md-3 col-form-label">Titre</label>
                                <div class="col-md-9">
                                    <input class="form-control" disabled type="text" value="{{ $terrain->titre }}"
                                        placeholder="Entre Titre" id="titre" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Description" class="col-md-3 col-form-label">Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" disabled type="text" value="" id="Description">{{ $terrain->description }}</textarea>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="categorie" class="col-md-3 col-form-label">Categorie</label>
                                <div class="col-md-9">
                                    <select required id="categorie" disabled class="form-control">
                                        <option id="" value="agricole"
                                            @if ($terrain->status == 'agricole') @selected(true) @endif>Agricol</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="vender" class="col-md-3 col-form-label">prix Vender</label>
                                <div class="col-md-9">
                                    <input class="form-control" disabled type="number"
                                        value="{{ $terrain->prix_vende }}" id="vender" />
                                </div>
                            </div>
                            <hr>
                            <div class="mb-5 row">
                                <label for="surface_terre" class="col-md-3 col-form-label">Surface Terre</label>
                                <div class="col-md-9">
                                    <input class="form-control" required name="" disabled type="number"
                                        value="{{ $terrain->surface_terre }}" id="surface_terre" />
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="owner" class="col-md-3 col-form-label">Owner</label>
                                <div class="col-md-9">
                                    <input class="form-control" disabled value="{{ $owner->nom }} {{ $owner->prenom }}"
                                        id="owner" placeholder="Type to search..." />

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
                        <div class="box_image text-center d-flex justify-content-center align-items-center"
                            style="min-height: 400px;" id="box_image">
                            <img id="DetailsimgPreview" style="max-width: 100%;"
                                src="{{ asset('storage/' . $terrain_images[0]->lien) }}" alt="pic" />
                        </div>
                        <div id="box_list_images" class="d-flex justify-content-center mt-2">
                            @foreach ($terrain_images as $image)
                                <img src="{{ asset('storage/' . $image->lien) }}" onclick='detailsshowImage(event)'
                                    style='width:40px; margin: 0 3px; cursor: pointer;' alt="">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Details Terrain -->
        </div>
        <!-- / Content -->
    @endsection
