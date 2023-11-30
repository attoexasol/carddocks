@extends('layouts.admin')
@section('page_content')

<h1 class="text-center">Trash List</h1>

<span>
    <a class= "btn btn-md btn-info mb-3 text-dark" href ="{{ route('branch.index') }}"> Back</a>
</span>

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong> Well Done !</strong> {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<table class="table table-bordered p-3 table-secondary">
    <thead>
        <th>Serial No</th>
        <th>Branch Code</th>
        <th>Branch Name</th>
        <th>Area</th>
        <th>Contact No</th>
        <th>Address</th>
        <th>Routing No</th>
        <th>Cheque Leaf Last Serial</th>
        <th>Action</th>

    </thead>
    @foreach ($data as $branch)
                <tbody>
                <th>{{ $loop->iteration}}</th>
                <th>{{ $branch->Branch_Code}}</th>
                <th>{{ $branch->Branch_Name}}</th>
                <th>{{ $branch->Area}}</th>
                <th>{{ $branch->Contact_No}}</th>
                <th>{{ $branch->Address}}</th>
                <th>{{ $branch->ROUTING_NO}}</th>
                <th>{{ $branch->CHQ_LEAF_LAST_SL}}</th>
                <th>

                    {{--  <a class="btn btn-sm btn-primary" href = "{{route('branch.restore', $branch->id)}}"
                        >Restore </a>  --}}

                        <a class="btn btn-sm btn-primary" href="{{ route('branch.restore', $branch->id) }}">Restore</a>


                    <form id="delete-form" action="{{ route('branch.forcedelete', $branch->id)}}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="confirmDelete()" class="btn btn-sm btn-danger">Delete Permanently</button>
                    </form>

                    <script>
                        function confirmDelete() {
                            if (confirm('Do you really want to delete?')) {
                                document.getElementById('delete-form').submit();
                            }
                        }
                    </script>
                </th>

            </tbody>
    @endforeach


 </table>

</div>
@endsection
