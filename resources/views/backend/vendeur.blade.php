@extends('layout.backend.master')
@section('main')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Vendeur /</span></h4>
            <div class="col-lg-10 grid-margin stretch-card">
                <!-- table -->
                <div class="card">
                    <div class="card-header"><a href="{{ route('ajouterVendeur.ajouter') }}" class="btn btn-primary text-white">Ajouter Vendeur</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>email</th>
                                        <th>tel</th>
                                        <th>cne</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vendeurs as $vendeur)
                                        <tr>
                                            <td>{{ $vendeur->nom }}</td>
                                            <td>{{ $vendeur->email }}</td>
                                            <td>{{ $vendeur->tel }} </td>
                                            <td>{{ $vendeur->cne }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ route('modifierVendeur.modifier', $vendeur->id) }}"><i
                                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('supprimerVendeur.supprimer', $vendeur->id) }}"><i
                                                                class="bx bx-trash me-1"></i> Delete</a>
                                                        <a class="dropdown-item" href="{{ route('detailsVendeur.details', $vendeur->id) }}"><i
                                                                class="fa-solid fa-circle-info me-1"></i> Details</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            {{$vendeurs->links()}}
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
        <!-- / Content -->
    @endsection
