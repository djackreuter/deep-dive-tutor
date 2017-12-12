@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col">
        <a class="btn btn-primary" href="/users/{{ Auth::user()->id }}/edit" role="button">Edit Profile</a>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <a class="btn btn-success" href="/users" role="button">View Tutors</a>
      </div>
    </div>
</div>
@endsection
