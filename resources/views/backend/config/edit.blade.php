@extends('layouts.app')

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

        <div class="card">
            <div class="card-header">
                <h5 class="float-left">Konfiguration bearbeiten</h5>

                <a href="{{  route('config.index') }}" class="float-right">Zurück zu Konfiguration</a>
            </div>
            <div class="card-body">
                {!! Form::open(array('route' => ['config.update', 1], 'method' => 'PUT', 'role' => 'form', 'class' => 'needs-validation')) !!}
                {!! csrf_field() !!}

                <div class="form-group has-feedback row {{ $errors->has('reg_start') ? ' has-error ' : '' }}">
                    {!! Form::label('reg_start', 'Freigabe Anmeldung', array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            {!! Form::datetimeLocal('reg_start', old('reg_start', \Carbon\Carbon::parse($config->reg_start)->format('Y-m-d\TH:i') ?? null), array('id' => 'reg_start', 'class' => 'form-control', 'placeholder' => 'Freigabe Anmeldung')) !!}
                            <div class="input-group-append">
                                <label class="input-group-text" for="reg_start">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('reg_start'))
                            <span class="help-block">
                                <strong>{{ $errors->first('reg_start') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback row {{ $errors->has('jojo_start') ? ' has-error ' : '' }}">
                    {!! Form::label('jojo_start', 'JotaJoti Start', array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            {!! Form::datetimeLocal('jojo_start', old('jojo_start', \Carbon\Carbon::parse($config->jojo_start)->format('Y-m-d\TH:i') ?? null), array('id' => 'jojo_start', 'class' => 'form-control', 'placeholder' => 'JotaJoti Start', 'required')) !!}
                            <div class="input-group-append">
                                <label class="input-group-text" for="jojo_start">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('jojo_start'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jojo_start') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback row {{ $errors->has('jojo_start_pio') ? ' has-error ' : '' }}">
                    {!! Form::label('jojo_start_pio', 'JotaJoti Start Pios', array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            {!! Form::datetimeLocal('jojo_start_pio', old('jojo_start_pio', \Carbon\Carbon::parse($config->jojo_start_pio)->format('Y-m-d\TH:i') ?? null), array('id' => 'jojo_start_pio', 'class' => 'form-control', 'placeholder' => 'JotaJoti Start Pios', 'required')) !!}
                            <div class="input-group-append">
                                <label class="input-group-text" for="jojo_start_pio">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('jojo_start_pio'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jojo_start_pio') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback row {{ $errors->has('jojo_end') ? ' has-error ' : '' }}">
                    {!! Form::label('jojo_end', 'JotaJoti Ende', array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            {!! Form::datetimeLocal('jojo_end', old('jojo_end', \Carbon\Carbon::parse($config->jojo_end)->format('Y-m-d\TH:i') ?? null), array('id' => 'jojo_end', 'class' => 'form-control', 'placeholder' => 'JotaJoti Ende', 'required')) !!}
                            <div class="input-group-append">
                                <label class="input-group-text" for="jojo_end">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('jojo_end'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jojo_end') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback row {{ $errors->has('quota') ? ' has-error ' : '' }}">
                    {!! Form::label('quota', 'Maximum TN', array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                                {!! Form::number('quota', old('quota', $config->quota ?? null), array('id' => 'quota', 'class' => 'form-control', 'placeholder' => 'Maximum TN', 'required')) !!}
                            <div class="input-group-append">
                                <label class="input-group-text" for="quota">
                                    <i class="fa fa-group" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('quota'))
                            <span class="help-block">
                                <strong>{{ $errors->first('quota') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                {!! Form::button('Konfiguration aktualisieren', array('class' => 'btn btn-success margin-bottom-1 mb-1 float-right','type' => 'submit' )) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
