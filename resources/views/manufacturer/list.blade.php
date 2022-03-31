@extends('adminlte::page')

@section('title', 'manufacturers')

@section('content_header')
    <h1>Manufacturer Info</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered sortable">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Name</th><th>Email</th><th>Phone</th> <th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($manufacturer AS $manufacturer)
        <tr>
          <td>{{ $manufacturer->id }}</td>
          <td>{{ $manufacturer->manufacturer }}</td>
          <td>{{ $manufacturer->manufac_email }}</td>
          <td>{{ $manufacturer->manufac_phone }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('manufacturer.show',['manufacturer'=>$manufacturer->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('manufacturer.create') }} " class="btn btn-primary" >Create</a>



@stop



@section('js')
<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
@stop