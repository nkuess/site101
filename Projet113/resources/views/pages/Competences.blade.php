@extends('layout.welcome')
@section('page_competence')
    <section class="container p-3">
        <p>Veuiller cliquer sur un bouton pour voir le contenu de nos domaines 
            de comp&eacute;tences.
        </p>
        <p>
            <a href="#collapseExample3" class="btn btn-primary" data-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="collapseExample3">INGENIERIE</a>
        </p>
        <div class="collapse" id="collapseExample3" >
            <div class="card card-body">
                <ul>
                    <li>Etudes techniques et economiques</li>
                    <li>Etudes d'identification - montage des projets / programmes</li>
                    <li>Etudes de faisabilité - Business plan</li>
                    <li>Etude CAP et d'opinion (Enquête quantitative et qualitative)</li>
                    <li>Conception d'ouvrage</li>  
                    <li>Evaluation environnementale et sociale</li>
                    <li>Etudes stratégiques, plan d'action stratégiques puriannuelle, schema directeurs</li>
                    <li>Audit diagnostic et techniques</li>
                    <li>Audit institutionnels et organisationnels</li>
                </ul>
            </div>
        </div>

        <p>
            <a href="#collapseExample4" class="btn btn-primary" data-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="collapseExample4">
            ASSISTANCE TECHNIQUE ET CONSEILS</a>
        </p>
        <div class="collapse" id="collapseExample4" >
            <div class="card card-body">
                <ul>
                    <li>Assistance technique</li>
                    <li>Organisation et gestions des projets / programmes</li>
                    <li>Monitoring et evaluation des projets</li>
                    <li>Supervison des travaux et controle des travaux</li>
                    <li>Maîtrise d'oeuvre</li>  
                    <li>Facilitation</li>
                    <li>Management et appui institutionnel</li>
                    <li>Mobilisation et gestion des ressources humaines temporaires</li>
                </ul>
            </div>
        </div>

      
    </section>
@endsection