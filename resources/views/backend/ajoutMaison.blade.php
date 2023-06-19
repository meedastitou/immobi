@extends('layout.backend.master')
@section('main')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Maison /</span> Ajouter Maison</h4>
            <div class="row">
                <div class="col-xl-7 col-md-12 col-sm-12">
                    <!-- HTML5 Inputs -->
                    <div class="card mb-4">
                        <h5 class="card-header">Ajouter Maison</h5>
                        <div class="card-body">
                            <form action="{{ route('storeMaison.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="titre" class="col-md-3 col-form-label">Titre</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" value="" required name="titre" placeholder="Entre Titre"
                                            id="titre" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="Description" class="col-md-3 col-form-label">Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" type="text" required name="description" value="" placeholder="Entre Description" id="Description"></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="nbChambre" class="col-md-3 col-form-label">Nombre des Chambres</label>
                                    <div class="col-md-9">
                                        <input class="form-control" required name="nb_chambre" type="number" min="1" value="1"
                                            id="nbChambre" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nb_douche" class="col-md-3 col-form-label">Nombre Douches</label>
                                    <div class="col-md-9">
                                        <input class="form-control" required name="nb_douche" type="number" min="1" value="1"
                                            id="nb_douche" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="status"  class="col-md-3 col-form-label">Status</label>
                                    <div class="col-md-9">
                                        <select required name="status" id="status" class="form-control">
                                            <option id="" value="DESPONIBLE">DESPONIBLE</option>
                                            <option id="" value="MAINTENANCE">MAINTENANCE</option>
                                            <option id="" value="INDESPONIBLE">INDESPONIBLE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nbChambre"  class="col-md-3 col-form-label">Categorie</label>
                                    <div class="col-md-9">
                                        <select required name="categories[]" id="categorie" class="form-control" multiple>
                                            <option id="option_vender" value="1">VENDER</option>
                                            <option id="option_louer_moin" value="2">LOUER (moin)</option>
                                            <option id="option_louer_jour" value="3">LOUER (jour)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="vender" class="col-md-3 col-form-label">prix Vender</label>
                                    <div class="col-md-9">
                                        <input class="form-control" required name="prix_vende" type="number" value="0" id="vender" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="louer_moin" class="col-md-3 col-form-label">prix LOUER (moin)</label>
                                    <div class="col-md-9">
                                        <input class="form-control" required name="prix_louer_moin" type="number" value="0" id="louer_moin" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="louer_jour" class="col-md-3 col-form-label">prix LOUER (jour)</label>
                                    <div class="col-md-9">
                                        <input class="form-control" required name="prix_louer_jour" type="number" value="0" id="louer_jour" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="surface_maison" class="col-md-3 col-form-label">Surface Maison</label>
                                    <div class="col-md-9">
                                        <input class="form-control" required name="surface_maison" type="number" value="0" id="surface_maison" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="surface_terre" class="col-md-3 col-form-label">Surface Terre</label>
                                    <div class="col-md-9">
                                        <input class="form-control" required name="surface_terre" type="number" value="0" id="surface_terre" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="owner" class="col-md-3 col-form-label">Owner</label>
                                    <div class="col-md-9">
                                        <input class="form-control" required name="owner" list="datalistOptions" id="owner"
                                            placeholder="Type to search..." />
                                        <datalist id="datalistOptions">
                                            @foreach ($vendeurs as $vendeur)
                                            <option value="{{ $vendeur->id }}">{{ $vendeur->nom }} {{ $vendeur->prenom }}</option>
                                            @endforeach
                                        </datalist>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="capt" class="form-label">choisi caption images</label>
                                    <input class="form-control" required name="capt" type="file" accept="image/*" id="capt" />
                                </div>
                                <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">choisi images</label>
                                    <input class="form-control" required name="images[]" type="file" accept="image/*" id="formFileMultiple"
                                        multiple />
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Save</button>
                                    <button type="reset" class="btn btn-outline-secondary">
                                        <a href="{{ url()->previous() }}">Cancel</a>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="holder col-xl-5">
                    <div class="image-fluid">
                        <div class="box_image text-center d-flex justify-content-center align-items-center"
                            style="min-height: 400px;" id="box_image">
                            <!-- <img id="imgPreview" style="max-width: 100%;" src="#" alt="pic" /> -->
                        </div>
                        <div id="box_list_images" class="d-flex justify-content-center mt-2">

                        </div>
                    </div>
                </div>
            </div>
            <!-- Ajouter Maison -->
        </div>
        <!-- / Content -->
       
    @endsection
