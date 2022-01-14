@extends('layout.vestiaireLayout')
@section('show')
<section class="container">
    <p class="display-3">Informations formation</p>
    <div>
            <p>Intitulé: {{$forma->intitule}}</p>
            <p>Date de la formation: {{$forma->dateform}}</p>
            <p>Prix: {{$forma->prix}} FCFA XOF</p>
            <p>Lieu: {{$forma->lieu}}</p>
    </div>
</section>
@endsection