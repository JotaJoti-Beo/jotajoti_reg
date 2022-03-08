@extends('layouts.backend')

@section('content')
    <div class="col-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    </div>

    <div class="card col-md-10 offset-md-1">
        <div class="card-header">
            <h5>Anmeldungen</h5>
        </div>
        <div class="card-body">
            <p>Aktuell sind ... von ... Plätzen belegt!</p>
            <p class="card-text"><small class="text-muted">Zuletzt aktualisiert um: </small></p>
        </div>
    </div>
@endsection
