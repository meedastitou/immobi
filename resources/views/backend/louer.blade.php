@extends('layout.backend.master')
@section('main')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Louer /</span></h4>
            <div class="col-lg-10 grid-margin stretch-card">
                <!-- table -->
                <div class="card">
                    <div class="card-header"><a href="{{ route('ajouterLouer.ajouter') }}"
                            class="btn btn-primary text-white">Ajouter</a></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>maison</th>
                                        <th>Consommateur</th>
                                        <th>date louer</th>
                                        <th>date fin</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($louers as $louer)
                                        <tr>
                                            <td>{{ $louer->id }}</td>
                                            <td>{{ $louer->id_maison }} {{ $louer->titre }}</td>

                                            <td>
                                                {{ Str::limit($louer->nom_consommateur. ' ' . $louer->prenom_consommateur ,25) }}
                                            </td>
                                            <td>
                                                {{ $louer->date_louer }}
                                            </td>
                                            <td>
                                                {{ $louer->date_fin }}
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ route('modifierLouer.modifier', $louer->id) }}"><i
                                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('supprimerLouer.supprimer', $louer->id) }}"><i
                                                                class="bx bx-trash me-1"></i> Delete</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('detailsLouer.details', $louer->id) }}"><i
                                                                class="fa-solid fa-circle-info me-1"></i> Details</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach 

                            </table>
                        </div>
                    </div>
                    {{ $louers->links() }}
                </div>
                <!-- table -->
            </div>

        </div>
        <!-- / Content -->
    @endsection
