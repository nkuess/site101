@extends('layout.welcome')
@section('page_formation')
    <section class="container-fluid">
        <p class="text-center display-3">
            <span class="fas fa-chalkboard"></span> Tableau de Formations
        </p>
        <table class="table-responsive table-bordered p-4 m-3" size="3">
            <tr>
                <td>Formations</td>
                <td>Date</td>
                <td>Prix</td>
                <td>modules</td>
                <td>option</td>
            </tr>
            <tr>
                @foreach ($form as $item)
                    <tr>
                        <td>{{$item->intitule}}</td>
                        <td>{{$item->dateform}}</td>
                        <td>{{$item->prix}} CFA</td>
                            
                        <td>
                            @foreach ($data as $mods)
                                @if ($mods->intitule == $item->intitule)
                                    <ul>
                                        <li>{{$mods->nomModule}}</li>
                                    </ul>    
                                @endif    
                            @endforeach
                        </td>
                        <td>
                            <a href="{{route('enroll')}}" class="btn btn-success">s'inscrire</a>
                        </td>
                    </tr>
                @endforeach
            </tr>
        </table>
    </section>
   

    
@endsection