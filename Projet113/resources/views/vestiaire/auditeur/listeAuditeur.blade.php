@extends('layout.vestiaireLayout')
@section('liste')
    <section class="container">
        <a href="{{route('journal')}}" class="btn btn-success">Menu principal</a>
        <a href="/auditeur/create" class="btn btn-success">Ajouter</a>
        <div class="card">
            <div class="card-header">
                <p class="card-header-title">Auditeurs</p>
                {{-- <select name="auditeur" id="auditeur" onchange="window.location.href=this.value">
                    @foreach ($aud as $item)
                    <option value="{{$item->audit_id}}">{{$item->nomAud}} {{$item->prenAud}}</option>
                    @endforeach
                    
                </select> --}}
            </div>
            <div class="card-body">
                <table class="table-bordered table-stripped">
                    <tr class="display-5">
                        <td>data</td>
                        <td colspan="2">options</td>
                    </tr>
                    
                        @foreach ($aud as $item)
                            <tr>
                                <td>{{$item->nomAud}} {{$item->prenAud}}</td>  
                                <td><a href="{{route('auditeur.edit',$item->id)}}">Modifier</a></td>
                                <td><a href="{{route('auditeur.show',$item->id)}}">Details</a></td>  
                            </tr>
                        @endforeach
                   
                </table>
                
            </div>
        </div>
    </section>
@endsection