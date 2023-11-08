@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <h1>ADMIN/PROJECTS/SHOW.BLADE</h1>
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Project Details for') }} {{ Auth::user()->name }}.
        </h2>
        <h3 class="fs-5 text-secondary">
            {{ __('Showing Project') }} ID: {{ $project->id }}
        </h3>

        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                {{ session('status') }}
            </div>
        @endif

        <div class="row justify-content-center my-3">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>{{ $project->title }}</h5>
                    </div>

                    @if (str_contains($project->thumb, 'http'))
                        <img class="img-fluid" style="height: 400px" src="{{ $project->thumb }}"
                            alt="{{ $project->title }}">
                    @else
                        <img class="img-fluid" style="height: 400px" src="{{ asset('storage/' . $project->thumb) }}">
                    @endif

                    <div class="card-body">
                        <p><strong>Description: </strong>{{ $project->description }}</p>
                        <p><strong>Technologies used: </strong>{{ $project->tech }}</p>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
