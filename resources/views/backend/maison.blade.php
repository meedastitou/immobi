@extends('layout.backend.master')
@section('main')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Maison /</span></h4>
            <div class="col-lg-10 grid-margin stretch-card">
                <!-- table -->
                <div class="card">
                    <div class="card-header"><a href="{{ route('ajouterMaison.ajouter') }}"
                            class="btn btn-primary text-white">Ajouter Maison</a></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>propriétaire</th>
                                        {{-- <th>Categorie</th> --}}
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($maisons as $maison)
                                        <tr>
                                            <td>{{ $maison->titre }}</td>
                                            <td>
                                                <a class="text-decoration-none text-dark" href="{{ route('detailsVendeur.details', $maison->owner) }}">{{ $vendeurs[$maison->owner] }}
                                                </a>
                                            </td>
                                            
                                            <td><label
                                                    class="badge badge-success rounded-pill">{{ $maison->status }}</label>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ route('modifierMaison.modifier', $maison->id) }}"><i
                                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('supprimerMaison.supprimer', $maison->id) }}"><i
                                                                class="bx bx-trash me-1"></i> Delete</a>
                                                        <a class="dropdown-item" href="{{ route('detailsMaison.details', $maison->id) }}"><i
                                                                class="fa-solid fa-circle-info me-1"></i> Details</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                            </table>
                            {{$maisons->links()}}
                        </div>
                    </div>
                    {{-- <div class="d-flex justify-content-center">
                        <!-- Basic Pagination -->
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item first">
                                    <a class="page-link" href="javascript:void(0);"><i
                                            class="tf-icon bx bx-chevrons-left"></i></a>
                                </li>
                                <li class="page-item prev">
                                    <a class="page-link" href="javascript:void(0);"><i
                                            class="tf-icon bx bx-chevron-left"></i></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">2</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="javascript:void(0);">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">5</a>
                                </li>
                                <li class="page-item next">
                                    <a class="page-link" href="javascript:void(0);"><i
                                            class="tf-icon bx bx-chevron-right"></i></a>
                                </li>
                                <li class="page-item last">
                                    <a class="page-link" href="javascript:void(0);"><i
                                            class="tf-icon bx bx-chevrons-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <!--/ Basic Pagination -->
                    </div> --}}
                </div>
                <!-- table -->
            </div>

        </div>
        <!-- / Content -->
        
    @endsection
