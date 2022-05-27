@extends('layouts.app')

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
            <h5 class="float-start">Neue Erziehungsberechtigte</h5>

            <a href="{{ route('guardians') }}" class="float-end">Zurück zu Erziehungsberechtigte</a>
        </div>
        <div class="card-body table-responsive">
            {!! Form::open(array('route' => ['update-participations',$participations->id], 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}
                @csrf

                <div class="form-group has-feedback row {{ $errors->has('first_name') ? ' has-error ' : '' }}">
                    {!! Form::label('first_name', 'Vorname', array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            {!! Form::text('first_name', old('first_name',$participations->first_name ?? null), array('id' => 'first_name', 'class' => 'form-control', 'placeholder' => 'Vorname')) !!}
                            <div class="input-group-append">
                                <label class="input-group-text" for="first_name">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('first_name'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback row {{ $errors->has('last_name') ? ' has-error ' : '' }}">
                    {!! Form::label('last_name', 'Nachname', array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            {!! Form::text('last_name', old('last_name',$participations->last_name ?? null), array('id' => 'last_name', 'class' => 'form-control', 'placeholder' => 'Nachname')) !!}
                            <div class="input-group-append">
                                <label class="input-group-text" for="last_name">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </label>
                            </div>
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

            {!! Form::button('Teilnehmer aktualisieren', array('class' => 'btn btn-success margin-bottom-1 mb-1 float-right','type' => 'submit' )) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
