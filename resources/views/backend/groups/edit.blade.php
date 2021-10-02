@extends('layouts.app')

@section('content')
	<div class="col-12">
		@if(session()->has('message'))
			<div class="alert alert-success">
				{{ session()->get('message') }}
			</div>
		@endif

		<div class="card">
			<div class="card-header">
				<h5 class="float-left">Gruppe bearbeiten</h5>

                <a href="{{ route('groups') }}" class="float-right">Zurück zu Gruppen</a>
            </div>
            <div class="card-body">
                {!! Form::open(array('route' => ['update-groups',$group->id], 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}
                {!! csrf_field() !!}

                <div class="form-group has-feedback row {{ $errors->has('name') ? ' has-error ' : '' }}">
                    {!! Form::label('name', 'Gruppenname', array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            {!! Form::text('name', old('name', $group->name ?? null), array('id' => 'name', 'class' => 'form-control', 'placeholder' => 'Gruppenname')) !!}
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

                <div class="form-group has-feedback row {{ $errors->has('quota') ? ' has-error ' : '' }}">
                    {!! Form::label('quota', 'Quota', array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            {!! Form::number('quota', old('quota', $group->quota ?? null), array('id' => 'quota', 'class' => 'form-control', 'placeholder' => 'Quota')) !!}
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

                {!! Form::button('Gruppe aktualisieren', array('class' => 'btn btn-success margin-bottom-1 mb-1 float-right','type' => 'submit' )) !!}
                {!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
