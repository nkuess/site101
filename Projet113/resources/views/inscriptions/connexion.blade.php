@extends('layout.vestiaireLayout')
@section('ConnexionVestiaire')
    <section class="container">
        <form action="/connexion" method="post">
            {{ csrf_field() }}
            <div class="form-group"> 
                <label for="Mail">Mail: </label>
                <input type="email" name="email" id="email" maxlength="100" class="form-control">
            @if ($errors->has('email'))
                <p class="alert-error">{{$errors->first('email')}}</p>    
            @endif
            </div>
            <div class="form-group">
                <label for="Password">Password:</label>
                <input type="password" name="password" id="password" maxlength="20" class="form-control">
                @if ($errors->has('password'))
                <p class="alert-error">{{$errors->first('password')}}</p>    
            @endif
            </div>
            <div class="form-group">
                <input type="submit" value="Se connecter" class="btn btn-success">
            </div>
        </form>
    </section>
@endsection