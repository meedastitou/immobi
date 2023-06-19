@extends('layout.backend.master')
@section('main')
    

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Louer /</span> Modifier Louer</h4>
            <div class="row">  
              <div class="col-xl-7 col-md-12 col-sm-12">
                <!-- HTML5 Inputs -->
                <div class="card mb-4">
                  <h5 class="card-header">Modifier Louer</h5>
                  <div class="card-body">
                    <form action="{{ route('updateLouer.update') }}" method="post">
                      @csrf
                      <input class="form-control" type="hidden"  name="id" value="{{$louer->id}}" style="display: none;"/>
                      <div class="mb-3 row">
                        <label for="maison" class="col-md-3 col-form-label">maison</label>
                        <div class="col-md-9">
                          <select name="maison" id="maison" class="form-control">
                            @foreach ($maisons as $maison)
                                <option value="{{$maison->id}}" @if ($maison->id == $louer->id_maison)
                                    @selected(true)
                                @endif>{{$maison->id}}. {{ $maison->titre}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="consommateur" class="col-md-3 col-form-label">Consommateur</label>
                        <div class="col-md-9">
                          <select name="consommateur" id="consommateur" class="form-control">
                            @foreach ($consommateurs as $consommateur)
                                <option value="{{$consommateur->id}}" @if ($consommateur->id == $louer->id_consommateur)
                                    @selected(true)
                                @endif>{{$consommateur->id}}. {{ $consommateur->nom}} {{ $consommateur->prenom}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div> 
                      <div class="mb-3 row">
                        <label for="date_louer" class="col-md-3 col-form-label">date louer</label>
                        <div class="col-md-9">
                          <input type="date" name="date_louer" id="date_louer" class="form-control" value="{{$louer->date_louer}}">
                        </div>
                      </div> 
                      <div class="mb-3 row">
                        <label for="date_fin" class="col-md-3 col-form-label">date fin</label>
                        <div class="col-md-9">
                          <input type="date" name="date_fin" id="date_fin" class="form-control" value="{{$louer->date_fin}}">
                        </div>
                      </div> 
                      <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Save changes</button>
                        <button type="reset" class="btn btn-outline-secondary">
                            <a href="{{ url()->previous() }}">Cancel</a>
                        </button>                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modifier Consommateur -->
          </div>
          <!-- / Content -->

        @endsection