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
            {!! Form::open(array('route' => 'groups', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}
            <div class="input-group" id="adv-search">
                {!! Form::text('search', NULL, array('id' => 'search', 'class' => 'form-control', 'placeholder' => 'Suche', 'autofocus')) !!}
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary form-control">
                        <span class="fa fa-search"></span>
                    </button>
                </div>
            </div>
            {!! Form::close() !!}
            <div class="input-group" id="adv-search">
                <button onclick="location.href='{{ route('add-groups') }}'" type="button" class="btn btn-primary form-control mt-2">Neue Gruppe</button>
            </div>
        </div>
    </div>

    <br />

    <div class="card col-md-10 offset-md-1">
        <div class="card-header">
            <h5 class="float-start">Alle Gruppen</h5>

            <a href="{{  route('overwatch') }}" class="float-end">Zurück zu Overwatch</a>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-hover">
                <thead>
                    <th>
                        Abteilung
                    </th>
                    <th>
                        Quota
                    </th>
                    <th>
                        Optionen
                    </th>
                </thead>
                <tbody>
                    @foreach($groups as $group)
                        <tr>
                            <td>
                                {{ $group->name }}
                            </td>
                            <td>
                                {{ $group->quota }}
                            </td>
                            <td>
                                <button onclick="location.href='{{ route('edit-groups',$group->id) }}'" class="btn btn-danger ml-2"><span class="fa fa-edit"></span></button>
                                <button onclick="location.href='{{ route('destroy-groups',$group->id) }}'" class="btn btn-danger ml-2"><span class="fa fa-remove"></span></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
