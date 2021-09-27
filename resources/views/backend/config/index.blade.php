@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="card mb-3">
            <div class="card-header">
                <div class="input-group" id="adv-search">
                    <button onclick="location.href='{{ route('edit-config') }}'" type="button" class="btn btn-primary form-control mt-2">Neue Gruppe</button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="float-left">Alle Gruppen</h5>

                <a href="{{  route('overwatch') }}" class="float-right">Zurück zu Overwatch</a>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead>
                    <th>
                        Abteilung
                    </th>
                    <th>
                        Optionen
                    </th>
                    </thead>
                    <tbody>
                    @foreach($admin as $conf)
                        <tr>
                            <td>

                            </td>
                            <td>
                                <button onclick="location.href='{{ route('',$group->id) }}'" class="btn btn-danger ml-2"><span class="fa fa-edit"></span></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection