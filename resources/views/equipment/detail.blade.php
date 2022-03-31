@extends('adminlte::page')

@section('title', 'Buyers')

@section('content_header')
    <h1>Manufacturers</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $equipment->name }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Price</dt>
            <dd class="col-sm-9">{{ $equipment->price }}</dd>

            <dt class="col-sm-3">RAM</dt>
            <dd class="col-sm-9">{{ $equipment->speed }}</dd>

            <dt class="col-sm-3">Manufacturer</dt>
            <dd class="col-sm-9">{{ $equipment->manufac_id }}</dd>

            <dt class="col-sm-3">Category</dt>
            <dd class="col-sm-9">{{ $equipment->category }}</dd>
        </dl>
    </div>
@stop