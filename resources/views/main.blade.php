@extends('layouts.admin')
@section('page_content')
<div class="row" >
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header"><h3 class="text-center">User Form</h3></div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="">Full Name</label>
                        <input type="text" name="full_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">User Name</label>
                        <input type="text" name="full_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Password</label>
                        <input type="text" name="full_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Employee ID</label>
                        <input type="text" name="full_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Email Address</label>
                        <input type="text" name="full_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Wing Name</label>
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Select your Option </option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Create User</button>
                    </div>
                </form>
                <a href="">Login</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="mb-3" align="center">
            <a class="btn btn-info" href="{{ route('dashboard') }}">Back to Dashboard</a>
        </div>
    </div>
</div>
@endsection
