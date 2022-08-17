@extends('layouts.frontend')

@section('content')
    <div class="container-fluid text-center">
        <h1>Jota Joti Beo - Anmeldung {{ "2022" }}</h1>
    </div>

    <br />

    <div class="container-fluid">
        <h2 class="text-center">Schritt 1 - Informationen Eltern / Notfallkontakt</h2>

        <br />

        <p class="text-center">
            Bitte gib im folgenden die Information für einen Erziehungsberechtigten ein. <br />
            Die Daten werden während dem Lager als Notfallkontakt verwendet. Die Person muss entsprechend während dem Lager erreichbar sein.
        </p>

        <br />

        <div class="col-10 offset-1">
            <form method="POST" action="{{ url('/register/guardian') }}" accept-charset="UTF-8" role="form" class="needs-validation form-horizontal">
                @csrf

                <div class="row has-feedback {{ $errors->has('first_name') ? ' has-error ' : '' }}">
                    <label for="first_name" class="col-md-3 form-label">Vorname Erziehungsberechtigte</label>
                    <div class="col-md-9">
                        <div class="input-group mb-3">
                            <input id="first_name" class="form-control" placeholder="Vorname Erziehungsberechtigte" name="first_name" type="text" required />

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
                            <input id="last_name" class="form-control" placeholder="Nachname Erziehungsberechtigte" name="last_name" type="text" required />

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
                            <input id="mail" class="form-control" placeholder="E-Mail Erziehungsberechtigte" name="mail" type="email" required />

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
                            <input id="phone" class="form-control" placeholder="Telefon Erziehungsberechtigte" name="phone" type="tel" required />

                            <label class="input-group-text" for="phone">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </label>
                        </div>
                        @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <br />

                <div class="row has-feedback">
                    <label for="phone" class="col-md-3 form-label"></label>
                    <div class="col-md-9">
                        <div class="input-group mb-3">
                            {!! Captcha::display() !!}
                        </div>
                    </div>
                 </div>

                <br />

                <button class="btn btn-success col-12" type="submit">Anmeldung senden</button>
            </form>
        </div>
    </div>
@endsection
