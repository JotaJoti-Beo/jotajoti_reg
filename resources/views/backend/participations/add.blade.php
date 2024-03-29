@extends('layouts.backend')

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

		<div class="card CreateParticipant mb-3">
			<div class="card-header" id="headingOne">
				<h5 class="mb-0">
					<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						Teilnehmer erstellen
					</button>
				</h5>
			</div>
			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent=".CreateParticipant">
				<div class="card-body">
					{!! Form::open(array('route' => 'store-participations', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}
					{!! csrf_field() !!}

					<div class="form-group has-feedback row {{ $errors->has('scout_name') ? ' has-error ' : '' }}">
						{!! Form::label('scout_name', 'Pfadiname', array('class' => 'col-md-3 control-label')); !!}
						<div class="col-md-9">
							<div class="input-group">
								{!! Form::text('scout_name', NULL, array('id' => 'scout_name', 'class' => 'form-control', 'placeholder' => 'Pfadiname')) !!}
								<div class="input-group-append">
									<label class="input-group-text" for="scout_name">
										<i class="fa fa-user" aria-hidden="true"></i>
									</label>
								</div>
							</div>
							@if ($errors->has('scout_name'))
								<span class="help-block">
                                        <strong>{{ $errors->first('scout_name') }}</strong>
                                    </span>
							@endif
						</div>
					</div>

					<div class="form-group has-feedback row {{ $errors->has('first_name') ? ' has-error ' : '' }}">
						{!! Form::label('first_name', 'Vorname', array('class' => 'col-md-3 control-label')); !!}
						<div class="col-md-9">
							<div class="input-group">
								{!! Form::text('first_name', NULL, array('id' => 'first_name', 'class' => 'form-control', 'placeholder' => 'Vorname')) !!}
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
								{!! Form::text('last_name', NULL, array('id' => 'last_name', 'class' => 'form-control', 'placeholder' => 'Nachname')) !!}
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

					<div class="form-group has-feedback row {{ $errors->has('group') ? ' has-error ' : '' }}">
						{!! Form::label('group', 'Abteilung', array('class' => 'col-md-3 control-label')); !!}
						<div class="col-md-9">
							<div class="input-group">
								<select class="custom-select form-control" name="group" id="group">
									<option value="">Abteilung wählen</option>
									@if ($groups)
										@foreach($groups as $group)
											<option value="{{ $group->id }}">{{ $group->group_name }}</option>
										@endforeach
									@endif
								</select>
								<div class="input-group-append">
									<label class="input-group-text" for="group">
										<i class="fa fa-group" aria-hidden="true"></i>
									</label>
								</div>
							</div>
							@if ($errors->has('role'))
								<span class="help-block">
                                        <strong>{{ $errors->first('group') }}</strong>
                                    </span>
							@endif
						</div>
					</div>

					<div class="form-group has-feedback row {{ $errors->has('exer') ? ' has-error ' : '' }}">
						{!! Form::label('group', 'Exer', array('class' => 'col-md-3 control-label')); !!}
						<div class="col-md-9">
							<div class="input-group">
								<select class="custom-select form-control" name="exer" id="exer">
									<option value="">Exer wählen</option>
									@if ($exer)
										@foreach($exer as $ex)
											<option value="{{ $ex->id }}">{{ $ex->exer_name }}</option>
										@endforeach
									@endif
								</select>
								<div class="input-group-append">
									<label class="input-group-text" for="group">
										<i class="fa fa-group" aria-hidden="true"></i>
									</label>
								</div>
							</div>
							@if ($errors->has('exer'))
								<span class="help-block">
                                            <strong>{{ $errors->first('exer') }}</strong>
                                        </span>
							@endif
						</div>
					</div>

					{!! Form::button('Teilnehmer erstellen', array('class' => 'btn btn-success margin-bottom-1 mb-1 float-right','type' => 'submit' )) !!}
					{!! Form::close() !!}
				</div>
				<br />
			</div>
		</div>

		<div class="card ImportParticipant">
			<div class="card-header" id="headingTwo">
				<h5 class="mb-0">
					<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Teilnehmer importieren
					</button>
				</h5>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent=".ImportParticipant">
				<div class="card-body table-responsive">
					<p>
						Um Teilnehmer zu importieren, muss eine CSV-Datei vorbereitet werden. Diese muss mit semikolon (;) separtierte Werte haben.

					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
							<th>
								Pfadiname
							</th>
							<th>
								Vorname
							</th>
							<th>
								Nachname
							</th>
							<th>
								Abteilung
							</th>
							<th>
								Exer
							</th>
							</thead>
							<tbody>
							<tr>
								<td>
									Vento
								</td>
								<td>
									Caspar
								</td>
								<td>
									Brenneisen
								</td>
								<td>
									Ritter Berchtold, Dracheburg, Virus, Nünenen, Wendelsee
								</td>
								<td>
									exer_one, exer_two
								</td>
							</tr>
							</tbody>
						</table>
					</p>
					<hr />
					{!! Form::open(array('route' => 'import-participations', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation', 'enctype' => "multipart/form-data")) !!}
					{!! csrf_field() !!}
					<input type="file" accept="text/csv" id="participations_list" name="participations_list" >
					{!! Form::button('Teilnehmer importieren', array('class' => 'btn btn-success margin-bottom-1 mb-1 float-right','type' => 'submit' )) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection
