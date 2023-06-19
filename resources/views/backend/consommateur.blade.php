@extends('layout.backend.master')
@section('main')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
            <div class="col-lg-10 grid-margin stretch-card">
                <!-- table -->
                <div class="card">
                    <div class="card-header"><a href="{{ route('ajouterConsommateur.ajouter') }}"
                            class="btn btn-primary text-white">Ajouter Consommateur</a></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>email</th>
                                        <th>tel</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consommateurs as $consommateur)
                                        <tr>
                                            <td>{{ $consommateur->nom }}</td>
                                            <td>{{ $consommateur->email }}</td>
                                            <td>{{ $consommateur->tel }} </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ route('modifierConsommateur.modifier', $consommateur->id) }}"><i
                                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('supprimerConsommateur.supprimer', $consommateur->id) }}"><i
                                                                class="bx bx-trash me-1"></i> Delete</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('detailsConsommateur.details', $consommateur->id) }}"><i
                                                                class="fa-solid fa-circle-info me-1"></i> Details</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $consommateurs->links() }}
                        </div>
                    </div>

                </div>
            </div>
            <!-- table -->
        </div>

    </div>
    <!-- / Content -->
@endsection
