@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 bg-dark rounded-3">
        <div class="container py-5">
            <h1 class="display-5 fw-bold text-light">
                Welcome to the Portfolio with authentication test page!
            </h1>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <p>welcome.blade</p>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 row-cols-1 g-3 my-3">
                @foreach ($projects as $project)
                <div class="col">
                    <div class="card h-100">
                    <div class="card-header" style="height: 4rem">
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
                        <p><i class="fa-brands fa-github"></i> {{ $project->github }}</p>
                        <p><i class="fa-solid fa-link"></i> {{ $project->link }}</p>
                    </div>
                </div>
                </div>
                
                @endforeach
            </div>
        </div>
    </div>
@endsection
