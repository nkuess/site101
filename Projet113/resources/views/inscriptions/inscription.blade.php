@extends('layout.welcome')
@section('InscriptionFormation')
    <section class="container">
        <form action="{{route('resultat')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="Nom">Nom: </label>
                <input type="text" name="nomAud" id="nomAud" maxlength="20" class="form-control">
            @if ($errors->has('nomAud'))
                <p class="alert-error">{{$errors->first('nomAud')}}</p>    
            @endif
            </div>
            <div class="form-group">
                <label for="Prenom">Prenom:</label>
                <input type="text" name="prenAud" id="prenAud" maxlength="20" class="form-control">
                @if ($errors->has('prenAud'))
                <p class="alert-error">{{$errors->first('prenAud')}}</p>    
            @endif
            </div>
            <div class="form-group"> 
                <label for="Mail">Mail: </label>
                <input type="email" name="mailAud" id="mailAud" maxlength="100" class="form-control">
            @if ($errors->has('mailAud'))
                <p class="alert-error">{{$errors->first('mailAud')}}</p>    
            @endif
            </div>
            <div class="form-group"> 
                <label for="Contact">Contact: </label>
                <input type="text" name="contactAud" id="contactAud" maxlength="10" class="form-control">
            @if ($errors->has('contactAud'))
                <p class="alert-error">{{$errors->first('contactAud')}}</p>    
            @endif
            </div>
            <div class="form-group">
                <label for="pay">Moyen de paiement: </label>
                <select name="payAud" id="payAud" class="form-control">
                    <option value="MTN">MTN Money</option>
                    <option value="Orange">Orange Money</option>
                    <option value="Moov">Moov Money</option>
                </select>
                @if ($errors->has('payAud'))
                    <p class="alert-error">{{$errors->first('payAud')}}</p>    
                @endif
            </div>
            {{-- Formations choisies 
                faire en sorte que l'auditeur choisisse sa formation
                a l'inscription et nous envoie un mail et enregistre
                ses preferences dans la database

                ajouter un champ formation voulue dans la table auditeur
                maFormation type: chaine taille: 40
                --}}
            <div class="form-group">
                <label for="maFormation">Formation choisie: </label>
                <select name="maFormation" id="maFormation" class="form-control">
                    @foreach ($forma as $item)
                        <option value="{{$item->intitule}}">{{$item->intitule}}</option>
                    @endforeach
                </select>
                @if ($errors->has('maFormation'))
                    <p class="alert-error">{{$errors->first('maFormation')}}</p>    
                @endif
            </div>
            {{-- bouton d'inscription --}}
            <div class="form-group">
                <input type="submit" value="S'inscrire" class="btn btn-success">
            </div>
        </form>
    </section>
@endsection