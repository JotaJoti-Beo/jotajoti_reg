@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="card mb-3">
            <div class="card-header">
                <div class="input-group" id="adv-search">
                    <button onclick="location.href='{{ route('config.edit', 1) }}'" type="button" class="btn btn-primary form-control mt-2">Konfigurieren</button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="float-left">Aktuelle Konfiguration</h5>

                <a href="{{  route('overwatch') }}" class="float-right">Zurück zu Overwatch</a>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <th>
                            Freigabe Anmeldung
                        </th>
                        <th>
                            JotaJoti Start
                        </th>
                        <th>
                            JotaJoti Start Pios
                        </th>
                        <th>
                            JotaJoti Ende
                        </th>
                        <th>
                            Maximum TN
                        </th>
                    </thead>
                    <tbody>
                        @foreach($config as $entry)
                            <tr>
                                <td>
                                    {{ \Carbon\Carbon::parse($entry->reg_start)->format('d.m.Y - H:i') }}
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($entry->jojo_start)->format('d.m.Y - H:i') }}
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($entry->jojo_start_pio)->format('d.m.Y - H:i') }}
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($entry->jojo_end)->format('d.m.Y - H:i') }}
                                </td>
                                <td>
                                    {{ $entry->max_tn }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
