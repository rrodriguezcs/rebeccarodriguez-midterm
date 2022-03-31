@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $manufacturer->manufacturer }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $manufacturer->manfac_email }}</dd>

            <dt class="col-sm-3">Phone</dt>
            <dd class="col-sm-9">{{ $manufacturer->manfac_phone }}</dd>
        </dl>
    </div>
@stop