@extends('layouts.frontend')

@section('content')
    <div class="col-md-10 offset-md-1 mb-5 text-center">
        <h1>Anmeldung JotaJoti Beo 2022</h1>
    </div>

    <div class="col-md-10 offset-md-1">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    </div>

    <div class="card col-md-10 offset-md-1">
        <div class="card-header">
            <h5 class="float-start">Erziehungsberechtigte / Notfallkontakt bearbeiten</h5>

            <a href="{{ route('front-show-guardian', $guardian->reference) }}" class="float-end">Zurück zur Übersicht</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('front-update-guardian', $guardian->reference) }}" accept-charset="UTF-8" role="form" class="needs-validation">
                @csrf

                <div class="row has-feedback {{ $errors->has('first_name') ? ' has-error ' : '' }}">
                    <label for="first_name" class="col-md-3 form-label">Vorname Erziehungsberechtigte</label>
                    <div class="col-md-9">
                        <div class="input-group mb-3">
                            <input id="first_name" class="form-control" value="{{ old('first_name', $guardian->first_name) }}" placeholder="Vorname Erziehungsberechtigte" name="first_name" type="text" required />

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
                    <label for="last_name" class="col-md-3 form-label">Nachname Erziehungsberechtigte</label>
                    <div class="col-md-9">
                        <div class="input-group mb-3">
                            <input id="last_name" class="form-control" value="{{ old('last_name', $guardian->last_name) }}" placeholder="Nachname Erziehungsberechtigte" name="last_name" type="text" required />

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

                <div class="row has-feedback {{ $errors->has('mail') ? ' has-error ' : '' }}">
                    <label for="mail" class="col-md-3 form-label">E-Mail Erziehungsberechtigte</label>
                    <div class="col-md-9">
                        <div class="input-group mb-3">
                            <input id="mail" class="form-control" value="{{ old('mail', $guardian->mail) }}" placeholder="E-Mail Erziehungsberechtigte" name="mail" type="email" required />

                            <label class="input-group-text" for="mail">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </label>
                        </div>
                        @if ($errors->has('mail'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mail') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="row has-feedback {{ $errors->has('phone') ? ' has-error ' : '' }}">
                    <label for="phone" class="col-md-3 form-label">Telefon Erziehungsberechtigte</label>
                    <div class="col-md-9">
                        <div class="input-group mb-3">
                            <input id="phone" class="form-control" value="{{ old('phone', $guardian->phone) }}" placeholder="Telefon Erziehungsberechtigte" name="phone" type="tel" pattern="[0-9]{3} [0-9]{3} [0-9]{2} [0-9]{2}" required />

                            <label class="input-group-text" for="phone">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </label>
                        </div>
                        <div class="form-text">Format: 123 123 12 12</div>

                        @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <br />
                <button class="btn btn-success col-12" type="submit">Daten Speichern <span class="fa fa-edit"></span></button>
            </form>
        </div>
    </div>
@endsection
