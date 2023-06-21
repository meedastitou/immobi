@extends('layout.backend.master')
@section('main')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Terrain /</span></h4>
            <div class="col-lg-10 grid-margin stretch-card">
                <!-- table -->
                <div class="card">
                    <div class="card-header"><a href="{{ route('ajouterTerrain.ajouter') }}"
                            class="btn btn-primary text-white">Ajouter Terrain</a></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>propriétaire</th>
                                        <th>Categorie</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($terrains as $terrain)
                                        <tr>
                                            <td>{{ $terrain->titre }}</td>
                                            <td>
                                               @isset($vendeurs[$terrain->owner])
                                                <a class="text-decoration-none text-dark" href="{{ route('detailsVendeur.details', $terrain->owner) }}">{{ $vendeurs[$terrain->owner] }}
                                                </a>
                                                   
                                               @endempty
                                            </td>
                                            <td><label
                                                class="">{{ $terrain->categorie }}</label>
                                            </td>
                                            <td><label
                                                    class="badge badge-success rounded-pill">{{ $terrain->status }}</label>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ route('modifierTerrain.modifier', $terrain->id) }}"><i
                                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('supprimerTerrain.supprimer', $terrain->id) }}"><i
                                                                class="bx bx-trash me-1"></i> Delete</a>
                                                        <a class="dropdown-item" href="{{ route('detailsTerrain.details', $terrain->id) }}"><i
                                                                class="fa-solid fa-circle-info me-1"></i> Details</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                            </table>
                            {{$terrains->links()}}
                        </div>
                    </div>
                    </div>
                </div>
                <!-- table -->
            </div>

        </div>
        <!-- / Content -->
        
    @endsection
