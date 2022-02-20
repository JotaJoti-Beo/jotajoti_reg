@extends('layouts.app')

@section('index-frame')
    @include('layouts.nav')

    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
@endsection
