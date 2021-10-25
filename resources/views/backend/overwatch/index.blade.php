@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-6 col-sm-12 p-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Anzahl Anmeldungen</h4>
                    </div>
                    <div class="card-body">
                        <h5>Aktuell sind ... von ... Plätzen belegt!</h5>
                        <p class="card-text"><small class="text-muted">Zuletzt aktualisiert um: </small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 p-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Anzahl Anmeldungen</h4>
                    </div>
                    <div class="card-body">
                        <h5>Aktuell sind ... von ... Plätzen belegt!</h5>
                        <p class="card-text"><small class="text-muted">Zuletzt aktualisiert um: </small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
