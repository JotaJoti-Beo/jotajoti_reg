@extends('layouts.app')

@section('content')
	<div class="container">
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
				<h5 class="float-left">Ort erstellen</h5>

                <a href="{{  route('places') }}" class="float-right">Zurück zu Orte</a>
            </div>
			<div class="card-body">
                {!! Form::open(array('route' => 'store-places', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}
                {!! csrf_field() !!}

                <div class="form-group has-feedback row {{ $errors->has('place_name') ? ' has-error ' : '' }}">
                    {!! Form::label('place_name', 'Bezeichnung', array('class' => 'col-md-3 control-label')); !!}
						<div class="col-md-9">
							<div class="input-group">
								{!! Form::text('place_name', NULL, array('id' => 'place_name', 'class' => 'form-control', 'placeholder' => 'Bezeichnung')) !!}
								<div class="input-group-append">
									<label class="input-group-text" for="place_name">
										<i class="fa fa-home" aria-hidden="true"></i>
									</label>
								</div>
							</div>
							@if ($errors->has('place_name'))
								<span class="help-block">
                                    <strong>{{ $errors->first('place_name') }}</strong>
                                </span>
							@endif
						</div>
					</div>

					<div class="form-group has-feedback row {{ $errors->has('place_address') ? ' has-error ' : '' }}">
						{!! Form::label('place_address', 'Adresse', array('class' => 'col-md-3 control-label')); !!}
						<div class="col-md-9">
							<div class="input-group">
								{!! Form::text('place_address', NULL, array('id' => 'place_address', 'class' => 'form-control', 'placeholder' => 'Adresse')) !!}
								<div class="input-group-append">
									<label class="input-group-text" for="place_address">
										<i class="fa fa-home" aria-hidden="true"></i>
									</label>
								</div>
							</div>
							@if ($errors->has('place_address'))
								<span class="help-block">
                                    <strong>{{ $errors->first('place_address') }}</strong>
                                </span>
							@endif
						</div>
					</div>

					<div class="form-group has-feedback row {{ $errors->has('place_city') ? ' has-error ' : '' }}">
						{!! Form::label('place_city', 'Ort', array('class' => 'col-md-3 control-label')); !!}
						<div class="col-md-9">
							<div class="input-group">
								{!! Form::text('place_city', NULL, array('id' => 'place_city', 'class' => 'form-control', 'placeholder' => 'Ort')) !!}
								<div class="input-group-append">
									<label class="input-group-text" for="place_city">
										<i class="fa fa-home" aria-hidden="true"></i>
									</label>
								</div>
							</div>
							@if ($errors->has('place_city'))
								<span class="help-block">
                                    <strong>{{ $errors->first('place_city') }}</strong>
                                </span>
							@endif
						</div>
					</div>

                    <div class="form-group has-feedback row {{ $errors->has('place_plz') ? ' has-error ' : '' }}">
                        {!! Form::label('place_plz', 'PLZ', array('class' => 'col-md-3 control-label')); !!}
                        <div class="col-md-9">
                            <div class="input-group">
                                {!! Form::number('place_plz', NULL, array('id' => 'place_plz', 'class' => 'form-control', 'placeholder' => 'PLZ')) !!}
                                <div class="input-group-append">
                                    <label class="input-group-text" for="place_plz">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('place_plz'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('place_plz') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback row {{ $errors->has('place_max_tn') ? ' has-error ' : '' }}">
                        {!! Form::label('place_max_tn', 'Maximum TN', array('class' => 'col-md-3 control-label')); !!}
                        <div class="col-md-9">
                            <div class="input-group">
                                {!! Form::number('place_max_tn', NULL, array('id' => 'place_max_tn', 'class' => 'form-control', 'placeholder' => 'Maximum TN')) !!}
                                <div class="input-group-append">
                                    <label class="input-group-text" for="place_max_tn">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('place_max_tn'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('place_max_tn') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

					{!! Form::button('Ort erstellen', array('class' => 'btn btn-success margin-bottom-1 mb-1 float-right','type' => 'submit' )) !!}
					{!! Form::close() !!}
				</div>
				<br />
			</div>
		</div>
	</div>
@endsection
