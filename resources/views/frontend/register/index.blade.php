@extends('layouts.frontend')

@section('content')
    <div class="container-fluid text-center">
        <h1>Wilkommen bei der Anmeldung zum JotaJoti Beo {{ "2022" }}</h1>
    </div>

    <br />
    <br />

    <div class="container-fluid">
        <div class="col-10 offset-1">
            <h2 class="text-center">Teilnahmebedingungen:</h2>
            <p>
                Liebe Interessenten für das Jota Joti Beo. <br />
                Es freut uns, dass du dich für die Teilnahme am Jota Joti hast. <br />
                Damit das Projekt möglichst Reibungslos funktioniert, haben wir einige Teilnahmebedingungen zusammengetragen. Bitte lest diese Aufmerksam durch und gebt in der Anmeldung die Zustimmung, diese zu befolgen.

            </p>

            <br />
            <br />

            <h2 class="text-center">Teilnehmen:</h2>
            <button class="btn btn-info col-12" onclick="window.location='{{ url('/register') }}'">Anmelde-Formular</button>
        </div>
    </div>
@endsection
