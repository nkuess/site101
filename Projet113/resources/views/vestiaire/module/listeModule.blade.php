@extends('layout.vestiaireLayout')
@section('liste')
    <section class="container">
        <a href="{{route('journal')}}" class="btn btn-success">Menu principal</a>
        <a href="/module/create" class="btn btn-success">Ajouter</a>
        <div class="card">
            <div class="card-header">
                <p class="card-header-title">Modules de formation</p>
            </div>
            <div class="card-body">
                <table class="table-bordered table-stripped">
                    <tr class="display-5">
                        <td>Module</td>
                        <td colspan="2">options</td>
                    </tr>
                    
                        @foreach ($mod as $item)
                            <tr>
                                <td>{{$item->nomModule}}</td>  
                                <td><a href="{{route('module.edit',$item->id)}}">Modifier</a></td>
                                <td><a href="{{route('module.show',$item->id)}}">Details</a></td>  
                            </tr>
                        @endforeach
                   
                </table>
                
            </div>
        </div>
    </section>
@endsection