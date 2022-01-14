@extends('layout.vestiaireLayout')
@section('liste')
    <section class="container">
        <a href="{{route('journal')}}" class="btn btn-success">Menu principal</a>
        <a href="/formation/create" class="btn btn-success">Ajouter</a>
        <div class="card">
            <div class="card-header">
                <p class="card-header-title">Formations</p>
            </div>
            <div class="card-body">
                <table class="table-bordered table-stripped">
                    <tr class="display-5">
                        <td class="p-2 text-justify">Intitulé</td>
                        <td class="p-2 text-justify">date de formation</td>
                        <td class="p-2 text-justify">date fin (formation)</td>
                        <td class="p-2 text-justify">prix CFA XOF</td>
                        <td class="p-2 text-justify">Heure</td>
                        <td colspan="2" class="p-2 text-justify">options</td>
                    </tr>
                    
                        @foreach ($forma as $item)
                            <tr>
                                <td class="p-2 text-justify">{{$item->intitule}}</td>  
                                <td class="p-2 text-justify">{{$item->dateform}}</td>  
                                <td class="p-2 text-justify">{{$item->datefin}}</td>  
                                <td class="p-2 text-justify">{{$item->prix}}</td>  
                                <td class="p-2 text-justify">{{$item->heure}}</td>  
                                <td><a href="{{route('formation.edit',$item->id)}}">Modifier</a></td>
                                <td><a href="{{route('formation.show',$item->id)}}">Details</a></td>  
                            </tr>
                        @endforeach
                   
                </table>
                
            </div>
        </div>
    </section>
@endsection