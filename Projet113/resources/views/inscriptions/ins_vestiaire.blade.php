@extends('layout.vestiaireLayout')
@section('InscriptionVestiaire')
    <section class="container">
        <form action="/vestiaire" method="post">
            {{ csrf_field() }}
            <div class="form-group"> 
                <label for="Name">Name: </label>
                <input type="text" name="name" id="name" maxlength="25" class="form-control">
            @if ($errors->has('name'))
                <p class="alert-error">{{$errors->first('name')}}</p>    
            @endif
            </div>
            <div class="form-group"> 
                <label for="Mail">Mail: </label>
                <input type="email" name="email" id="email" maxlength="160" class="form-control">
            @if ($errors->has('email'))
                <p class="alert-error">{{$errors->first('email')}}</p>    
            @endif
            </div>
            <div class="form-group">
                <label for="Password">Password:</label>
                <input type="password" name="password" id="password" maxlength="15" class="form-control">
                @if ($errors->has('password'))
                <p class="alert-error">{{$errors->first('password')}}</p>    
            @endif
            </div>
            <div class="form-group"> 
                <label for="Password">Password (confirmation): </label>
                <input type="password" name="password_confirmation" id="password_confirmation" maxlength="15" class="form-control">
            @if ($errors->has('password_confirmation'))
                <p class="alert-error">{{$errors->first('password_confirmation')}}</p>    
            @endif
            </div>
            <div class="form-group">
                <input type="submit" value="S'inscrire" class="btn btn-success">
            </div>
        </form>
    </section>
@endsection