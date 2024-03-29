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
            <div class="input-group" id="adv-search">
                <button onclick="location.href='{{ route('front-add-participant') }}'" type="button" class="btn btn-primary form-control mt-2">Neue Teilnehmende erfassen</button>
            </div>
        </div>
    </div>

    <br />

    <div class="card col-md-10 offset-md-1">
        <div class="card-header">
            <h5 class="float-start">Erziehungsberechtigte / Notfallkontakt</h5>
        </div>
        <div class="card-body table-responsive">
            <p>Beachte, dass diese Informationen als Notfallkontakt während dem Lager genutzt werden.</p>

            <table class="table table-hover">
                <tr>
                    <th>Name</th>
                    <td>{{ $guardian->first_name }} {{ $guardian->last_name }}</td>
                </tr>
                <tr>
                    <th>Telefonnummer</th>
                    <td>{{ $guardian->phone }}</td>
                </tr>
                <tr>
                    <th>E-Mail Adresse</th>
                    <td>{{ $guardian->mail }}</td>
                </tr>
            </table>

            <br />

            <button onclick="location.href='{{ route('front-edit-guardian', $guardian->reference) }}'" class="btn btn-info col-12">Informationen bearbeiten <span class="fa fa-edit"></span></button>
        </div>
    </div>
@endsection
