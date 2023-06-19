@extends('layout.backend.master')
@section('main')
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Louer /</span> Ajouter Louer</h4>
      <div class="row">  
        <div class="col-xl-7 col-md-12 col-sm-12">
          <!-- HTML5 Inputs -->
          <div class="card mb-4">
            <h5 class="card-header">Ajouter Louer</h5>
            <div class="card-body">
                <form action="{{ route('storeLouer.store') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                      <label for="maison" class="col-md-3 col-form-label">Maison</label>
                      <div class="col-md-9">
                        <select class="form-control" name="maison" id="maison">
                            <option value="" disabled>Choisi La Maison</option>
                            @foreach ($maisons as $maison)
                                <option value="{{ $maison->id }}">{{ $maison->id }} {{ $maison->titre }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="consommateur" class="col-md-3 col-form-label">Consommateur</label>
                      <div class="col-md-9">
                        <select class="form-control" name="consommateur" id="consommateur">
                            <option value="" disabled>Choisi le Consommateur</option>
                            @foreach ($consommateurs as $consommateur)
                                <option value="{{$consommateur->id}}">{{$consommateur->id}} {{ $consommateur->nom }} {{ $consommateur->prenom }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="date_louer" class="col-md-3 col-form-label">date Louer</label>
                      <div class="col-md-9">
                        <input type="date" class="form-control" name="date_louer"  id="date_louer" />
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="date_fin" class="col-md-3 col-form-label">date fin</label>
                      <div class="col-md-9">
                        <input class="form-control" name="date_fin" type="date" id="date_fin" />
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