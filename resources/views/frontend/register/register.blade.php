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
            <form method="POST" action="/" accept-charset="UTF-8" role="form" class="needs-validation form-horizontal">
                <div class="row has-feedback {{ $errors->has('name') ? ' has-error ' : '' }}">
                    <label for="name" class="col-md-3 form-label">Gruppenname</label>
                    <div class="col-md-9">
                        <div class="input-group mb-3">
                            <input id="name" class="form-control" placeholder="Gruppenname" name="name" type="text" />

                            <label class="input-group-text" for="name">
                                <i class="fa fa-group" aria-hidden="true"></i>
                            </label>
                        </div>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="row has-feedback {{ $errors->has('name') ? ' has-error ' : '' }}">
                    <label for="name" class="col-md-3 form-label">Gruppenname</label>
                    <div class="col-md-9">
                        <div class="input-group mb-3">
                            <input id="name" class="form-control" placeholder="Gruppenname" name="name" type="text" />

                            <label class="input-group-text" for="name">
                                <i class="fa fa-group" aria-hidden="true"></i>
                            </label>
                        </div>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
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
