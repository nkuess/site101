@extends('/layout.vestiaireLayout')
@section('manage')
    <section class="container m-5">
        <div class="row">
            <div class="col-6">
                 <p class="display-2">Modifier</p>
                <form action="/auditeur/{{$aud->id}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="Nom">Nom: </label>
                        <input type="text" name="nomAud" id="nomAud" 
                        value="{{$aud->nomAud}}" maxlength="20" class="form-control">
                    @if ($errors->has('nomAud'))
                        <p class="alert-error">{{$errors->first('nomAud')}}</p>    
                    @endif
                    </div>
                    <div class="form-group">
                        <label for="Prenom">Prenom:</label>
                        <input type="text" name="prenAud" id="prenAud" 
                        value="{{$aud->prenAud}}" maxlength="20" class="form-control">
                        @if ($errors->has('prenAud'))
                        <p class="alert-error">{{$errors->first('prenAud')}}</p>    
                    @endif
                    </div>
                    <div class="form-group"> 
                        <label for="Mail">Mail: </label>
                        <input type="email" name="mailAud" id="mailAud" 
                    value="{{$aud->mailAud}}" maxlength="100" class="form-control">
                    @if ($errors->has('mailAud'))
                        <p class="alert-error">{{$errors->first('mailAud')}}</p>    
                    @endif
                    </div>
                    <div class="form-group"> 
                        <label for="Contact">Contact: </label>
                        <input type="text" name="contactAud" id="contactAud" 
                        value="{{$aud->contactAud}}" maxlength="10" class="form-control">
                    @if ($errors->has('contactAud'))
                        <p class="alert-error">{{$errors->first('contactAud')}}</p>    
                    @endif
                    </div>
                    <div class="form-group">
                        <label for="pay">Moyen de paiement: </label>
                        <select name="payAud" id="payAud" class="form-control">
                            <option value="{{$aud->payAud}}" selected>{{$aud->payAud}}</option>
                            <option value="MTN">MTN Money</option>
                            <option value="Orange">Orange Money</option>
                            <option value="Moov">Moov Money</option>
                        </select>
                    @if ($errors->has('payAud'))
                        <p class="alert-error">{{$errors->first('payAud')}}</p>    
                    @endif
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Modifier" class="btn btn-success">
                    </div>
                </form>
            </div>
            <div class="col-6">
                <p class="display-2">Supprimer</p>
                <form action="/auditeur/{{$aud->id}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="submit" value="Supprimer" class="btn btn-error">
                    </div>
                </form>
            </div>
        </div>
       
    </section>
@endsection