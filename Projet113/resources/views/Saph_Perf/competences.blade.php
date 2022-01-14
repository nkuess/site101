@extends('layout.welcome')
@section('SP_competences')
    <section class="container p-3">
        <p>Veuiller cliquer sur un bouton pour voir le contenu de nos domaines 
            de comp&eacute;tences.
        </p>
        <p>
            <a href="#collapseExample3" class="btn btn-primary" data-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="collapseExample3">RENFORCEMENT DE COMPETENCES</a>
        </p>
        <div class="collapse" id="collapseExample3" >
            <div class="card card-body">
                <ul>
                    <li>Renforcement des capacit&eacute;s des acteurs du secteur priv&eacute;, public et ONG</li>
                    <li>Formations aux m&eacute;tiers sp&eacute;cialis&eacute;s</li>
                    <li>S&eacute;minaire group&eacute; en externe / Pr&eacute;sentiel, visioconf&eacute;rence.</li>
                    <li>Organisation des ateliers de validationet de restitution: <br>
                    Analyse des besoins des acteurs, r&eacute;daction des TDR, Organisation mat&eacute;rielle et logistique
                <br> mobilisation des experts / conf&eacute;renciers, animation et reporting.</li>
                </ul>
            </div>
        </div>

        <p>
            <a href="#collapseExample4" class="btn btn-primary" data-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="collapseExample4">
            COMMUNICATION ENVIRONNEMENTALE</a>
        </p>
        <div class="collapse" id="collapseExample4" >
            <div class="card card-body">
                <ul>
                    <li>Analyse des besoins cibles</li>
                    <li>Elaboration des strat&eacute;gies et des plans de communication <br>
                        (message, outils, choix des cannaux)<br> production graphique
                    </li>
                    <li>Suivi et &eacute;valuation des impacts de campagnes de sensibilisation.</li>
                    <li>Mobilisation sociale (Pladoyer, Sensibilisation)</li>
                </ul>
            </div>
        </div>

      
    </section>
@endsection