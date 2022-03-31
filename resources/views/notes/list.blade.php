@extends('adminlte::page')

@section('title', 'Notes')

@section('content_header')
    <h1>Notes</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered sortable">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>ID</th><th>Notes</th><th>Software</th><th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($notes AS $note)
        <tr>
          <td>{{ $note->id }}</td>
          <td>{{ $note->notes }}</td>
          <td>{{ $note->software }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('note.show',['note'=>$note->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('note.create') }} " class="btn btn-primary" >Create</a>



@stop



@section('js')
<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
@stop