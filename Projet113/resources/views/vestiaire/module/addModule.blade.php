@extends('/layout.vestiaireLayout')
@section('add')
    <section class="container m-5">
        <form action="/module" method="POST">
            {{-- <input type="hidden" name="_method" value="POST"> --}}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="Module">Nom du module: </label>
                <input type="text" name="nomModule" id="nomModule" maxlength="20" class="form-control">
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
                <input type="submit" value="Ajouter" class="btn btn-success">
            </div>
        </form>
    </section>
@endsection