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
            <h5 class="float-start">Ort bearbeiten</h5>

            <a href="{{  route('places') }}" class="float-end">Zurück zu Orte</a>
        </div>
        <div class="card-body">
            {!! Form::open(array('route' => ['update-places', $place->id], 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}
            @csrf

            <div class="row has-feedback {{ $errors->has('name') ? ' has-error ' : '' }}">
                {!! Form::label('name', 'Bezeichnung', array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        {!! Form::text('name', old('name', $place->name ?? null), array('id' => 'name', 'class' => 'form-control', 'placeholder' => 'Bezeichnung')) !!}
                        <label class="input-group-text" for="name">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </label>
                    </div>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row has-feedback {{ $errors->has('address') ? ' has-error ' : '' }}">
                {!! Form::label('address', 'Adresse', array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        {!! Form::text('address', old('address', $place->address ?? null), array('id' => 'address', 'class' => 'form-control', 'placeholder' => 'Adresse')) !!}
                        <label class="input-group-text" for="address">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </label>
                    </div>
                    @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row has-feedback {{ $errors->has('city') ? ' has-error ' : '' }}">
                {!! Form::label('city', 'Ort', array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        {!! Form::text('city', old('city', $place->city ?? null), array('id' => 'city', 'class' => 'form-control', 'placeholder' => 'Ort')) !!}
                        <label class="input-group-text" for="city">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </label>
                    </div>
                    @if ($errors->has('city'))
                        <span class="help-block">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row has-feedback {{ $errors->has('plz') ? ' has-error ' : '' }}">
                {!! Form::label('plz', 'PLZ', array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        {!! Form::text('plz', old('plz', $place->plz ?? null), array('id' => 'plz', 'class' => 'form-control', 'placeholder' => 'PLZ')) !!}
                        <label class="input-group-text" for="plz">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </label>
                    </div>
                    @if ($errors->has('plz'))
                        <span class="help-block">
                            <strong>{{ $errors->first('plz') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row has-feedback {{ $errors->has('quota') ? ' has-error ' : '' }}">
                {!! Form::label('quota', 'Maximum TN', array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        {!! Form::text('quota', old('quota', $place->quota ?? null), array('id' => 'quota', 'class' => 'form-control', 'placeholder' => 'Maximum TN')) !!}
                        <label class="input-group-text" for="quota">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </label>
                    </div>
                    @if ($errors->has('quota'))
                        <span class="help-block">
                            <strong>{{ $errors->first('quota') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            {!! Form::button('Teilnehmer aktualisieren', array('class' => 'btn btn-success mt-1 col-12','type' => 'submit' )) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
