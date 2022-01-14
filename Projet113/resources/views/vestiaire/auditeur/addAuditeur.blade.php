{{-- @extends('layout.vestiaireLayout') --}}
@extends('../layout.vestiaireLayout')
@section('add')
    <section class="container m-5">
        <form action="/auditeur" method="POST">
            {{-- <input type="hidden" name="_method" value="POST"> --}}
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
            <div class="form-group">
                <input type="submit" value="Enregistrer" class="btn btn-success">
            </div>
        </form>
    </section>
@endsection