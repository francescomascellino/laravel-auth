@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <h1>ADMIN/PROJECTS/INDEX.BLADE</h1>
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Project List for') }} {{ Auth::user()->name }}
        </h2>

        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session('status') }}
            </div>
        @endif

        <p>👇 METTERE POSITION FIXED ANGOLO IN BASSO A DX</p>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary my-3"><i class="fa-solid fa-file-circle-plus"></i> New Project</a>

        <div class="table-responsive">
            <table class="table table-light table-striped">
                <thead>
                    <tr class="align-middle text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Preview</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Technologies used</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr class="">
                            <td class="align-middle" scope="row">{{ $project->id }}</td>

                            @if (str_contains($project->thumb, 'http'))
                                <td class="text-center align-middle"><img class="img-fluid" style="height: 100px"
                                        src="{{ $project->thumb }}" alt="{{ $project->title }}"></td>
                            @else
                                <td class="text-center align-middle"><img class="img-fluid" style="height: 100px"
                                        src="{{ asset('storage/' . $project->thumb) }}"></td>
                            @endif


                            <td class="align-middle">{{ $project->title }}</td>
                            <td class="align-middle">{{ $project->description }}</td>
                            <td class="align-middle">{{ $project->tech }}</td>
                            <td class="align-middle text-center">
                                {{-- I PROGETTI SONO COLLEGATI TRAMITE LO SLUG --}}
                                <a href="{{ route('admin.projects.show', $project->slug) }}" class="btn btn-primary m-1"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-warning m-1"><i class="fa-solid fa-pen"></i></a>
                                {{-- <a href="#">Delete</a> --}}

                                <!-- DELETE Modal trigger button -->
                                <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal"
                                    data-bs-target="#deleteproject{{ $project->id }}">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>

                                <!-- DELETE Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="deleteproject{{ $project->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitle{{ $project->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitle{{ $project->id }}">
                                                    {{ $project->title }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start ">
                                                <p>This operation will move the project "<strong>{{$project->title}}</strong>" in the Recycle Bin.</p>
                                                <p>Are you sure?</p>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>

                                                <form action="{{ route('admin.projects.destroy', $project) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger m-2" type="submit">Delete</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Optional: Place to the bottom of scripts -->
                                <script>
                                    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                                </script>

                            </td>
                        </tr>
                    @empty
                        <td class="align-middle text-center" colspan="6">No Projects to show</td>
                    @endforelse

                </tbody>
            </table>

            

        </div>

        <div class="my-3">
                {{ $projects->links('pagination::bootstrap-5') }}
        </div>

    </div>
@endsection
