@extends('layout.vestiaireLayout')
@section('show')
    <section class="container">
        <p class="display-3">Informations auditeur</p>
        <div>
                <p>Nom: {{$aud->nomAud}}</p>
                <p>Pr&eacute;nom: {{$aud->prenAud}}</p>
                <p>Mail: {{$aud->mailAud}}</p>
                <p>Contact: {{$aud->contactAud}}</p>
                <p>Moyen de paiement: {{$aud->payAud}}</p>
        </div>
    </section>
@endsection