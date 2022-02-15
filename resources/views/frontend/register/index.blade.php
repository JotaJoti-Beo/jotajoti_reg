@extends('layouts.frontend')

@section('content')
    <div class="jumbotron">
        <h1>Jota Joti Beo - Anmeldung {{ "2022" }}</h1>
        <br />

        <form method="post" action="/" accept-charset="UTF-8" role="form" class="needs-validation">

        </form>
        {!! Form::open(['route' => 'home', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation']) !!}

            <div class="form-group has-feedback row {{ $errors->has('name') ? ' has-error ' : '' }}">
            {!! Form::label('name', 'Gruppenname', array('class' => 'col-md-3 control-label')); !!}
            <div class="col-md-9">
                <div class="input-group">
                    {!! Form::text('name', NULL, array('id' => 'name', 'class' => 'form-control', 'placeholder' => 'Gruppenname')) !!}
                    <div class="input-group-append">
                        <label class="input-group-text" for="name">
                            <i class="fa fa-group" aria-hidden="true"></i>
                        </label>
                    </div>
                </div>
                @if ($errors->has('name'))
                    <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                @endif
            </div>
        </div>

        <div class="form-group has-feedback row {{ $errors->has('name') ? ' has-error ' : '' }}">
            {!! Form::label('name', 'Gruppenname', array('class' => 'col-md-3 control-label')); !!}
            <div class="col-md-9">
                <div class="input-group">
                    {!! Form::text('name', NULL, array('id' => 'name', 'class' => 'form-control', 'placeholder' => 'Gruppenname')) !!}
                    <div class="input-group-append">
                        <label class="input-group-text" for="name">
                            <i class="fa fa-group" aria-hidden="true"></i>
                        </label>
                    </div>
                </div>
                @if ($errors->has('name'))
                    <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                @endif
            </div>
        </div>

        <div class="form-group has-feedback row {{ $errors->has('name') ? ' has-error ' : '' }}">
            {!! Form::label('name', 'Gruppenname', array('class' => 'col-md-3 control-label')); !!}
            <div class="col-md-9">
                <div class="input-group">
                    {!! Form::text('name', NULL, array('id' => 'name', 'class' => 'form-control', 'placeholder' => 'Gruppenname')) !!}
                    <div class="input-group-append">
                        <label class="input-group-text" for="name">
                            <i class="fa fa-group" aria-hidden="true"></i>
                        </label>
                    </div>
                </div>
                @if ($errors->has('name'))
                    <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                @endif
            </div>
        </div>

        <div class="form-group has-feedback row {{ $errors->has('name') ? ' has-error ' : '' }}">
            {!! Form::label('name', 'Gruppenname', array('class' => 'col-md-3 control-label')); !!}
            <div class="col-md-9">
                <div class="input-group">
                    {!! Form::text('name', NULL, array('id' => 'name', 'class' => 'form-control', 'placeholder' => 'Gruppenname')) !!}
                    <div class="input-group-append">
                        <label class="input-group-text" for="name">
                            <i class="fa fa-group" aria-hidden="true"></i>
                        </label>
                    </div>
                </div>
                @if ($errors->has('name'))
                    <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                @endif
            </div>
        </div>

        <br />

            {!! Form::button('Anmeldung senden', array('class' => 'btn btn-success col-12','type' => 'submit' )) !!}
        {!! Form::close() !!}
    </div>
@endsection
