@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <h1>ADMIN/PROJECTS/EDIT.BLADE</h1>
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Project Edit Page for') }} {{ Auth::user()->name }}.
        </h2>
        <h3 class="fs-5 text-secondary">
            {{ __('Editing Project') }} ID: {{ $project->id }}
        </h3>

        <div class="row justify-content-center my-3">
            <div class="col">
                <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    @method('PUT')

                    <div class="mb-3">

                        <label for="title" class="form-label"><strong>Titolo</strong></label>

                        <input type="text" class="form-control" name="title" id="title"
                            aria-describedby="helpTitle" value="{{ $project->title }}">
                    </div>

                    <button type="submit" class="btn btn-success my-3">SAVE</button>
                    <a class="btn btn-primary" href="{{route('admin.projects.index')}}">CANCEL</a>

                </form>
            </div>
        </div>

    </div>
@endsection
