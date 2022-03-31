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
          <th style="width: 10px">#</th><th style="width: 40px">Manufacturer</th><th style="width: 40px">Category</th>
          <th class="sorttable_nosort">Name</th>

          <th style="width: 40px">Notes</th>
          <th style="width: 40px" class="sorttable_nosort">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($equipinfo AS $equipment)
        <tr>
          <td>{{ $equipment->id }}</td>
          <td>{{ $equipment->manuinfo->name }}</td>
          <td>{{ ucwords($equipment->category) }}</td>
          <td>{{ $equipment->name }}</td>

          <td><a class="btn btn-default btn-sm" href="{{ route('equipment.show',['equipment'=>$equipment->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('equipinfo.create') }} " class="btn btn-primary" >Create</a>
@stop


@section('js')
<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
@stop