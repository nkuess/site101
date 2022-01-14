@extends('/layout.vestiaireLayout')
@section('manage')
    <section class="container m-5">
        <div class="row">
            <div class="col-6">
                <p class="display-2">Modifier</p>
                <form action="/formation/{{ $forma->id }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="Intitule">Intitule ou nom de la formation: </label>
                        <input type="text" name="intitule" id="intitule" value="{{ $forma->intitule }}"
                            class="form-control">
                        @if ($errors->has('intitule'))
                            <p class="alert-error">{{ $errors->first('intitule') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="Date">Date de la formation:</label>
                        <input type="date" name="dateform" id="dateform" value="{{ $forma->dateform }}"
                            class="form-control">
                        @if ($errors->has('dateform'))
                            <p class="alert-error">{{ $errors->first('dateform') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="Datefin">Date de fin de la formation:</label>
                        <input type="date" name="datefin" id="datefin" value="{{ $forma->datefin }}" class="form-control">
                        @if ($errors->has('datefin'))
                            <p class="alert-error">{{ $errors->first('datefin') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="heure">Heure de la formation: </label>
                        <input type="text" name="heure" id="heure" maxlength="100" value="{{ $forma->heure }}" class="form-control">
                        @if ($errors->has('heure'))
                            <p class="alert-error">{{ $errors->first('heure') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="lieu">lieu de la formation: </label>
                        <input type="text" name="lieu" id="lieu" value="{{ $forma->lieu }}" maxlength="100"
                            class="form-control">
                        @if ($errors->has('lieu'))
                            <p class="alert-error">{{ $errors->first('lieu') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="prix">prix de la formation: </label>
                        <input type="number" name="prix" id="prix" value="{{ $forma->prix }}" maxlength="10"
                            class="form-control">
                        @if ($errors->has('prix'))
                            <p class="alert-error">{{ $errors->first('prix') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="auditeur">Auditeur: </label>
                        <select name="audit_id" id="audit_id" class="form-control">
                            @foreach ($aud as $item)
                                <option value="{{ $item->id }}">{{ $item->nomAud }} {{ $item->prenAud }}</option>
                            @endforeach

                        </select>
                        @if ($errors->has('audit_id'))
                            <p class="alert-error">{{ $errors->first('audit_id') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Modifier" class="btn btn-success">
                    </div>
                </form>
            </div>
            <div class="col-6">
                <p class="display-2">Supprimer</p>
                <form action="/formation/{{ $forma->id }}" method="POST">
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
