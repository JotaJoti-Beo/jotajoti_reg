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
                <h5 class="float-left">Alle Gruppen</h5>

                <a href="{{  route('overwatch') }}" class="float-right">Zurück zu Overwatch</a>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead>
                    <th>
                        Reg-Datum
                    </th>
                    <th>
                        Optionen
                    </th>
                    </thead>
                    <tbody>
                    @foreach($config as $entry)
                        <tr>
                            <td>
                                {{ $entry->reg_start }}
                            </td>
                            <td>
                                <button onclick="location.href='{{ route('',$group->id) }}'" class="btn btn-danger ml-2"><span class="fa fa-edit"></span></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
