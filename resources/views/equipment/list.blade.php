@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered sortable">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Name</th><th>Price</th><th>Amount of RAM</th> <th>Manfucaturer</th> <th>Category</th><th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($equipment AS $equipment)
        <tr>
          <td>{{ $equipment->id }}</td>
          <td>{{ $equipment->name }}</td>
          <td>{{ $equipment->price }}</td>
          <td>{{ $equipment->ram }}</td>
          <td>{{ $equipment->manufac_id }}</td>
          <td>{{ $equipment->category }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('equipment.show',['equipment'=>$equipment->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('equipment.create') }} " class="btn btn-primary" >Create</a>

@stop

@section('js')
<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>