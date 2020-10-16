@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
@if (Auth::user()->role_id == 1)
<a href="{{ route('admin.dashboard')}}">Dashboard</a>
@elseif (Auth::user()->role_id == 2)
<a href="{{ route('author.dashboard')}}">Dashboard</a>
@else
<p>No Dashboard for App Users</p>
@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
