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
            {!! Form::open(array('route' => 'guardians', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}
            <div class="input-group" id="adv-search">
                {!! Form::text('search', NULL, array('id' => 'search', 'class' => 'form-control', 'placeholder' => 'Suche')) !!}
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary form-control">
                        <span class="fa fa-search"></span>
                    </button>
                </div>
            </div>
            {!! Form::close() !!}
            <div class="input-group" id="adv-search">
                <button onclick="location.href='{{ route('add-guardians') }}'" type="button" class="btn btn-primary form-control mt-2">Neue Erziehungsberechtigte</button>
            </div>
        </div>
    </div>

    <br />

    <div class="card col-md-10 offset-md-1">
        <div class="card-header">
            <h5 class="float-start">Erziehungsberechtigte</h5>

            <a href="{{ route('overwatch') }}" class="float-end">Zurück zu Overwatch</a>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-hover">
                <thead>
                    <th>
                        Name
                    </th>
                    <th>
                        Mailadresse
                    </th>
                    <th>
                        Telefonnummer
                    </th>
                    <th>
                        UUID
                    </th>
                    <th>
                        Optionen
                    </th>
                </thead>
                <tbody>
                    @foreach($guardians as $guardian)
                        <tr>
                            <td>
                                {{ $guardian->first_name }} {{ $guardian->last_name }}
                            </td>
                            <td>
                                {{ $guardian->mail }}
                            </td>
                            <td>
                                {{ $guardian->phone }}
                            </td>
                            <td>
                                {{ $guardian->reference }}
                            </td>
                            <td>
                                <button onclick="location.href='{{ route('edit-guardians',$guardian->id) }}'" class="btn btn-danger ml-2"><span class="fa fa-edit"></span></button>
                                <button onclick="location.href='{{ route('destroy-participations',$guardian->id) }}'" class="btn btn-danger ml-2"><span class="fa fa-remove"></span></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
