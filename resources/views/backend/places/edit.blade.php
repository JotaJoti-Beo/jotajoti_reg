@extends('layouts.app')

@section('content')
	<div class="container">
		@if(session()->has('message'))
			<div class="alert alert-success">
				{{ session()->get('message') }}
			</div>
		@endif

		<div class="card">
			<div class="card-header">
				<h5 class="float-left">Ort bearbeiten</h5>

                <a href="{{  route('places') }}" class="float-right">Zurück zu Orte</a>
            </div>
            <div class="card-body">
                {!! Form::open(array('route' => ['update-places', $place->id], 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}
                {!! csrf_field() !!}

                <div class="form-group has-feedback row {{ $errors->has('name') ? ' has-error ' : '' }}">
                    {!! Form::label('name', 'Bezeichnung', array('class' => 'col-md-3 control-label')); !!}
                    <div class="col-md-9">
                        <div class="input-group">
                            {!! Form::text('name', old('name', $place->name ?? null), array('id' => 'name', 'class' => 'form-control', 'placeholder' => 'Bezeichnung')) !!}
                            <div class="input-group-append">
                                <label class="input-group-text" for="name">
                                    <i class="fa fa-home" aria-hidden="true"></i>
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

					<div class="form-group has-feedback row {{ $errors->has('address') ? ' has-error ' : '' }}">
						{!! Form::label('address', 'Adresse', array('class' => 'col-md-3 control-label')); !!}
						<div class="col-md-9">
							<div class="input-group">
								{!! Form::text('address', old('address', $place->address ?? null), array('id' => 'address', 'class' => 'form-control', 'placeholder' => 'Adresse')) !!}
								<div class="input-group-append">
									<label class="input-group-text" for="address">
										<i class="fa fa-home" aria-hidden="true"></i>
									</label>
								</div>
							</div>
							@if ($errors->has('address'))
								<span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
							@endif
						</div>
					</div>

					<div class="form-group has-feedback row {{ $errors->has('city') ? ' has-error ' : '' }}">
						{!! Form::label('city', 'Ort', array('class' => 'col-md-3 control-label')); !!}
						<div class="col-md-9">
							<div class="input-group">
								{!! Form::text('city', old('city', $place->city ?? null), array('id' => 'city', 'class' => 'form-control', 'placeholder' => 'Ort')) !!}
								<div class="input-group-append">
									<label class="input-group-text" for="city">
										<i class="fa fa-home" aria-hidden="true"></i>
									</label>
								</div>
							</div>
							@if ($errors->has('city'))
								<span class="help-block">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
							@endif
						</div>
					</div>

                    <div class="form-group has-feedback row {{ $errors->has('plz') ? ' has-error ' : '' }}">
                        {!! Form::label('plz', 'PLZ', array('class' => 'col-md-3 control-label')); !!}
                        <div class="col-md-9">
                            <div class="input-group">
                                {!! Form::text('plz', old('plz', $place->plz ?? null), array('id' => 'plz', 'class' => 'form-control', 'placeholder' => 'PLZ')) !!}
                                <div class="input-group-append">
                                    <label class="input-group-text" for="plz">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('plz'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('plz') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback row {{ $errors->has('quota') ? ' has-error ' : '' }}">
                        {!! Form::label('quota', 'Maximum TN', array('class' => 'col-md-3 control-label')); !!}
                        <div class="col-md-9">
                            <div class="input-group">
                                {!! Form::text('quota', old('quota', $place->quota ?? null), array('id' => 'quota', 'class' => 'form-control', 'placeholder' => 'Maximum TN')) !!}
                                <div class="input-group-append">
                                    <label class="input-group-text" for="quota">
                                        <i class="fa fa-home" aria-hidden="true"></i>
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

					{!! Form::button('Teilnehmer aktualisieren', array('class' => 'btn btn-success margin-bottom-1 mb-1 float-right','type' => 'submit' )) !!}
					{!! Form::close() !!}
				</div>
			</div>
	</div>
@endsection
