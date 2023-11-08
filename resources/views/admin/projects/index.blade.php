@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <h1>ADMIN/PROJECTS/INDEX.BLADE</h1>
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Project List for') }} {{ Auth::user()->name }}
        </h2>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
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
                            <td class="text-center align-middle">{{ $project->thumb }}</td>
                            <td class="align-middle">{{ $project->title }}</td>
                            <td class="align-middle">{{ $project->description }}</td>
                            <td class="align-middle">{{ $project->tech }}</td>
                            <td class="align-middle">
                                {{-- I PROGETTI SONO COLLEGATI TRAMITE LO SLUG --}}
                                <a href="{{ route('admin.projects.show', $project->slug) }}">Details</a>
                                <a href="{{ route('admin.projects.edit', $project->slug) }}">Edit</a>
                                <a href="#">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <td class="align-middle">No Projects to show</td>
                    @endforelse

                </tbody>
            </table>
        </div>

    </div>
@endsection
