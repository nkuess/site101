@extends('layout.vestiaireLayout')
@section('show')
    <section class="container">
        <p class="display-3">Informations Module de formation</p>
        <div>
                <p>Module de formation: {{$mod->nomModule}}</p>
        </div>
    </section>
@endsection