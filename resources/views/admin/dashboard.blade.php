@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <h1>ADMIN/DASHBOARD.BLADE</h1>
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        {{ __('You are logged in') }}, {{ Auth::user()->name }}!
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center my-3">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Users') }}</div>

                    <div class="card-body">
                        <p>There are a total of {{ $total_users }} registered users on the platform</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <p>CREATE CARDS</p>
            Total Projects {{ $total_projects }}
            Total Users {{ $total_users }}
        </div>

    </div>
@endsection
