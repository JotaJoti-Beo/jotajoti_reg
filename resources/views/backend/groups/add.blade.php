@extends('layouts.backend')

@section('content')
    <div class="col-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif
    </div>

    <div class="card col-md-10 offset-md-1">
        <div class="card-header">
            <h5 class="float-start">Neue Gruppe</h5>

            <a href="{{ route('groups') }}" class="float-end">Zurück zu Gruppen</a>
        </div>
        <div class="card-body">
            {!! Form::open(array('route' => 'store-groups', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}
            @csrf

            <div class="row has-feedback {{ $errors->has('name') ? ' has-error ' : '' }}">
                {!! Form::label('name', 'Gruppenname', array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        {!! Form::text('name', NULL, array('id' => 'name', 'class' => 'form-control', 'placeholder' => 'Gruppenname', 'required')) !!}
                        <label class="input-group-text" for="name">
                            <i class="fa fa-group" aria-hidden="true"></i>
                        </label>
                    </div>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row has-feedback {{ $errors->has('quota') ? ' has-error ' : '' }}">
                {!! Form::label('quota', 'Quota', array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        {!! Form::number('quota', NULL, array('id' => 'quota', 'class' => 'form-control', 'placeholder' => 'Quota')) !!}
                        <label class="input-group-text" for="quota">
                            <i class="fa fa-group" aria-hidden="true"></i>
                        </label>
                    </div>
                    @if ($errors->has('quota'))
                        <span class="help-block">
                            <strong>{{ $errors->first('quota') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            {!! Form::button('Gruppe erstellen', array('class' => 'btn btn-success mt-1 col-12','type' => 'submit' )) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
