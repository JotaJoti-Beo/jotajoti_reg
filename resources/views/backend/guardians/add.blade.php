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
            <h5 class="float-start">Neue Erziehungsberechtigte</h5>

            <a href="{{ route('guardians') }}" class="float-end">Zurück zu Erziehungsberechtigte</a>
        </div>
        <div class="card-body">
            {!! Form::open(array('route' => 'store-guardians', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}
            @csrf

            <div class="row has-feedback {{ $errors->has('first_name') ? ' has-error ' : '' }}">
                {!! Form::label('first_name', 'Vorname', array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        {!! Form::text('first_name', NULL, array('id' => 'first_name', 'class' => 'form-control', 'placeholder' => 'Vorname', 'required')) !!}
                        <label class="input-group-text" for="first_name">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </label>
                    </div>
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row has-feedback {{ $errors->has('last_name') ? ' has-error ' : '' }}">
                {!! Form::label('last_name', 'Nachname', array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        {!! Form::text('last_name', NULL, array('id' => 'last_name', 'class' => 'form-control', 'placeholder' => 'Nachname', 'required')) !!}
                        <label class="input-group-text" for="last_name">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </label>
                    </div>
                    @if ($errors->has('last_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row has-feedback {{ $errors->has('phone') ? ' has-error ' : '' }}">
                {!! Form::label('phone', 'Telefonnummer', array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        {!! Form::text('phone', NULL, array('id' => 'phone', 'class' => 'form-control', 'placeholder' => 'Telefonnummer', 'required')) !!}
                        <label class="input-group-text" for="phone">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </label>
                    </div>
                    @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row has-feedback {{ $errors->has('mail') ? ' has-error ' : '' }}">
                {!! Form::label('mail', 'E-Mail', array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        {!! Form::text('mail', NULL, array('id' => 'mail', 'class' => 'form-control', 'placeholder' => 'E-Mail', 'required')) !!}
                        <label class="input-group-text" for="mail">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </label>
                    </div>
                    @if ($errors->has('mail'))
                        <span class="help-block">
                            <strong>{{ $errors->first('mail') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row has-feedback {{ $errors->has('reference') ? ' has-error ' : '' }}">
                {!! Form::label('reference', 'Referenznummer', array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        {!! Form::text('reference', NULL, array('id' => 'reference', 'class' => 'form-control', 'placeholder' => 'Referenznummer')) !!}
                        <label class="input-group-text" for="reference">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </label>
                    </div>
                    @if ($errors->has('reference'))
                        <span class="help-block">
                            <strong>{{ $errors->first('reference') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            {!! Form::button('Teilnehmer erstellen', array('class' => 'btn btn-success mt-1 col-12','type' => 'submit' )) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
