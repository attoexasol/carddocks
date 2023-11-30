@extends('layouts.admin')
@section('page_content')

<h1 class="text-center">Meta Data</h1>
    <div class="container">

        <div class="alert alert-primary" role="alert">
           <a href="{{ route('branch.index') }}">Branch</a>
          </div>
          <div class="alert alert-secondary" role="alert">
            Designation
          </div>
          <div class="alert alert-success" role="alert">
            Roles
          </div>
          <div class="alert alert-danger" role="alert">
            Forms
          </div>
          <div class="alert alert-warning" role="alert">
            Wings
          </div>


    </div>


@endsection
