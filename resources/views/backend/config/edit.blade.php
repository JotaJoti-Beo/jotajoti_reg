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
            <h5 class="float-start">Konfiguration bearbeiten</h5>

            <a href="{{  route('config.index') }}" class="float-end">Zurück zu Konfiguration</a>
        </div>
        <div class="card-body">
            {!! Form::open(array('route' => ['config.update', 1], 'method' => 'PUT', 'role' => 'form', 'class' => 'needs-validation')) !!}
            @csrf

            <div class="row has-feedback {{ $errors->has('reg_start') ? ' has-error ' : '' }}">
                {!! Form::label('reg_start', 'Freigabe Anmeldung', array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        {!! Form::datetimeLocal('reg_start', old('reg_start', \Carbon\Carbon::parse($config->reg_start)->format('Y-m-d\TH:i') ?? null), array('id' => 'reg_start', 'class' => 'form-control', 'placeholder' => 'Freigabe Anmeldung')) !!}
                        <label class="input-group-text" for="reg_start">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </label>
                    </div>
                    @if ($errors->has('reg_start'))
                        <span class="help-block">
                            <strong>{{ $errors->first('reg_start') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row has-feedback {{ $errors->has('jojo_start') ? ' has-error ' : '' }}">
                {!! Form::label('jojo_start', 'JotaJoti Start', array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        {!! Form::datetimeLocal('jojo_start', old('jojo_start', \Carbon\Carbon::parse($config->jojo_start)->format('Y-m-d\TH:i') ?? null), array('id' => 'jojo_start', 'class' => 'form-control', 'placeholder' => 'JotaJoti Start', 'required')) !!}
                        <label class="input-group-text" for="jojo_start">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </label>
                    </div>
                    @if ($errors->has('jojo_start'))
                        <span class="help-block">
                            <strong>{{ $errors->first('jojo_start') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row has-feedback  {{ $errors->has('jojo_start_pio') ? ' has-error ' : '' }}">
                {!! Form::label('jojo_start_pio', 'JotaJoti Start Pios', array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        {!! Form::datetimeLocal('jojo_start_pio', old('jojo_start_pio', \Carbon\Carbon::parse($config->jojo_start_pio)->format('Y-m-d\TH:i') ?? null), array('id' => 'jojo_start_pio', 'class' => 'form-control', 'placeholder' => 'JotaJoti Start Pios', 'required')) !!}
                        <label class="input-group-text" for="jojo_start_pio">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </label>
                    </div>
                    @if ($errors->has('jojo_start_pio'))
                        <span class="help-block">
                            <strong>{{ $errors->first('jojo_start_pio') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row has-feedback {{ $errors->has('jojo_end') ? ' has-error ' : '' }}">
                {!! Form::label('jojo_end', 'JotaJoti Ende', array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        {!! Form::datetimeLocal('jojo_end', old('jojo_end', \Carbon\Carbon::parse($config->jojo_end)->format('Y-m-d\TH:i') ?? null), array('id' => 'jojo_end', 'class' => 'form-control', 'placeholder' => 'JotaJoti Ende', 'required')) !!}
                        <label class="input-group-text" for="jojo_end">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </label>
                    </div>
                    @if ($errors->has('jojo_end'))
                        <span class="help-block">
                            <strong>{{ $errors->first('jojo_end') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row has-feedback {{ $errors->has('quota') ? ' has-error ' : '' }}">
                {!! Form::label('quota', 'Maximum TN', array('class' => 'col-md-3 control-label')); !!}
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        {!! Form::number('quota', old('quota', $config->quota ?? null), array('id' => 'quota', 'class' => 'form-control', 'placeholder' => 'Maximum TN', 'required')) !!}
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

            {!! Form::button('Konfiguration aktualisieren', array('class' => 'btn btn-success mt-1 col-12','type' => 'submit' )) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
