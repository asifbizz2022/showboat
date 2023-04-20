@extends('layout.app')
@section('content')
<div class='my-1'>
    <h5>User List</h5>
</div>
<div class="card">
    <div class="card-body py-3">
        <table class="table table-condensed table-bordered border">
            <thead class="bg-primary text-white">

                <th>Profile Image</th>
                <th>Profile name</th>
                <th>Profile Email</th>
                <th>Adhar Number</th>
                <th>Pan Number</th>
                <th>Address</th>

            </thead>
            <tbody>
                 @foreach($users as $row)
                 <tr>
                    <td>
                        <img src="{{ $row->image}}" width="100" >
                    </td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->adhar}}</td>
                    <td>{{$row->pan}}</td>
                    <td>{{$row->address}}</td>
                 </tr>
                 @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function(){
        $('.table').DataTable();
    });
</script>
@endsection

