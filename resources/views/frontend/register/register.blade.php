@extends('layouts.frontend')

@section('content')
    <div class="container-fluid text-center">
        <h1>Jota Joti Beo - Anmeldung {{ "2022" }}</h1>
    </div>

    <br />

    <div class="container-fluid">
        <h2 class="text-center">Schritt 1 - Informationen Eltern / Notfallkontakt</h2>

        <br />

        <div class="col-10 offset-1">
            <form method="POST" action="{{ url('/register/guardian') }}" accept-charset="UTF-8" role="form" class="needs-validation form-horizontal">
                @csrf

                <div class="row has-feedback {{ $errors->has('parent_first_name') ? ' has-error ' : '' }}">
                    <label for="parent_first_name" class="col-md-3 form-label">Vorname Erziehungsberechtigte</label>
                    <div class="col-md-9">
                        <div class="input-group mb-3">
                            <input id="parent_first_name" class="form-control" placeholder="Vorname Erziehungsberechtigte" name="parent_first_name" type="text" />

                            <label class="input-group-text" for="parent_first_name">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </label>
                        </div>
                        @if ($errors->has('parent_first_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('parent_first_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="row has-feedback {{ $errors->has('parent_last_name') ? ' has-error ' : '' }}">
                    <label for="parent_last_name" class="col-md-3 form-label">Nachname Erziehungsberechtigte</label>
                    <div class="col-md-9">
                        <div class="input-group mb-3">
                            <input id="parent_last_name" class="form-control" placeholder="Nachname Erziehungsberechtigte" name="parent_last_name" type="text" />

                            <label class="input-group-text" for="parent_last_name">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </label>
                        </div>
                        @if ($errors->has('parent_last_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('parent_last_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="row has-feedback {{ $errors->has('parent_mail') ? ' has-error ' : '' }}">
                    <label for="parent_mail" class="col-md-3 form-label">E-Mail Erziehungsberechtigte</label>
                    <div class="col-md-9">
                        <div class="input-group mb-3">
                            <input id="parent_mail" class="form-control" placeholder="E-Mail Erziehungsberechtigte" name="parent_mail" type="email" />

                            <label class="input-group-text" for="parent_mail">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </label>
                        </div>
                        @if ($errors->has('parent_mail'))
                            <span class="help-block">
                                <strong>{{ $errors->first('parent_mail') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="row has-feedback {{ $errors->has('parent_phone') ? ' has-error ' : '' }}">
                    <label for="parent_phone" class="col-md-3 form-label">Telefon Erziehungsberechtigte</label>
                    <div class="col-md-9">
                        <div class="input-group mb-3">
                            <input id="parent_phone" class="form-control" placeholder="Telefon Erziehungsberechtigte" name="parent_phone" type="tel" />

                            <label class="input-group-text" for="parent_phone">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </label>
                        </div>
                        @if ($errors->has('parent_phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('parent_phone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <br />

                <button class="btn btn-success col-12" type="submit">Anmeldung senden</button>
            </form>
        </div>
    </div>
@endsection
