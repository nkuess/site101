@extends('/layout.vestiaireLayout')
@section('manage')
    <section class="container m-5">
        <p class="display-4">Modifier</p>
        <div class="col-6">
            <form action="/module/{{$mod->id}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="Module">Nom du module: </label>
                <input type="text" name="nomModule" id="nomModule" maxlength="20" 
                value="{{$mod->nomModule}}" class="form-control">
            @if ($errors->has('nomModule'))
                <p class="alert-error">{{$errors->first('nomModule')}}</p>    
            @endif
            </div>

            <div class="form-group">
                <label for="formation">Formation associée: </label>
                <select name="form_id" id="form_id" class="form-control">
                    @foreach ($forma as $item)
                        <option value="{{$item->id}}">{{$item->intitule}} - {{$item->prix}}</option>
                    @endforeach
                </select>
            @if ($errors->has('form_id'))
                <p class="alert-error">{{$errors->first('form_id')}}</p>    
            @endif
            </div>
            <div class="form-group">
                <input type="submit" value="Modifier" class="btn btn-success">
            </div>
        </form>
            
        </div>
    </div>
        <div class="col-6">
            <p class="display-2">Supprimer</p>
            <form action="/module/{{$mod->id}}" method="POST">
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