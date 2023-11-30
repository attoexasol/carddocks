@extends('layouts.admin')
@section('page_content')

<h1 class="text-center">Create New Branches</h1>
<span>
    <a class= "btn btn-md btn-info mb-3" href ="{{ route('branch.index') }}"> Branch List</a>
</span>

<div class="form form-control">
    <form action="{{ route('branch.store') }}" method="POST" class="form-control" class="form-control">
        @csrf
        <label for="branch_code" class="text-dark"> <b>Branch Code: </b></label>
        <input class= "form-control" type="text" name="branch_code" required><br>

        <label for="branch_name" class="text-dark"> <b>Branch Name:</b></label>
        <input class= "form-control" type="text" name="branch_name" required><br>

        <label for="area" class="text-dark"> <b>Area: </b></label>
        <input class= "form-control" type="text" name="area" required><br>

        <label for="contact_no" class="text-dark"><b>Contact No:</b></label>
        <input class= "form-control" type="text" name="contact_no" required><br>

        <label for="address" class="text-dark"><b>Address:</b></label>
        <textarea class= "form-control" name="address"></textarea><br>

        <label for="routing_no" class="text-dark"><b>Routing No:</b></label>
        <input class= "form-control" type="text" name="routing_no"><br>

        <label for="chq_leaf_last_sl" class="text-dark"><b>Cheque Leaf Last Serial </b></label>
        <input class= "form-control" type="text" name="chq_leaf_last_sl"><br>

        <button class= "form-control" type="submit" class="form-control btn btn-light">Insert Data</button>
    </form>
</div>




@endsection
