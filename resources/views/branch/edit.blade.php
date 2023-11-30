@extends('layouts.admin')
@section('page_content')

<h1 class="text-center">Edit Branch</h1>
<span>
    <a class= "btn btn-md btn-info mb-3" href ="{{ route('branch.index') }}"> Branch List</a>
</span>

<div class="form form-control">
    <form action="{{route('branch.update', $branch->id) }}" method="POST" class="form-control">
        @csrf

        <label for="branch_code" class="text-dark"><b>Branch Code:</b></label>

        <input class= "form-control" type="text" name="branch_code" value="{{ $branch->Branch_Code }}" required ><br>

        <label for="branch_name" class="text-dark"><b>Branch Name:</b></label>
        <input class= "form-control" type="text" name="branch_name" value="{{ $branch->Branch_Name }}" required><br>

        <label for="area" class="text-dark"><b>Area:</b></label>
        <input class= "form-control" type="text" name="area" value="{{ $branch->Area }}" required><br>

        <label for="contact_no" class="text-dark"> <b>Contact No: </b></label>
        <input class= "form-control" type="text" name="contact_no" value="{{ $branch->Contact_No }}" required><br>

        <label for="address" class="text-dark"> <b>Address:</b></label>
        <textarea class= "form-control" name="address" value="{{ $branch->Address }}" required> </textarea><br>

        <label for="routing_no" class="text-dark"> <b>Routing No: </b></label>
        <input class= "form-control" type="text" name="routing_no" value="{{ $branch->ROUTING_NO }}"><br>

        <label for="chq_leaf_last_sl" class="text-dark"> <b>Cheque Leaf Last Serial: </b></label>
        <input class= "form-control" type="text" name="chq_leaf_last_sl" value="{{ $branch->CHQ_LEAF_LAST_SL }}"><br>

        <button class= "form-control btn btn-light" type="submit" >Update Data</button>
    </form>
</div>




@endsection
