@extends('layout.welcome')
@section('page_formation')
    <section class="container-fluid">
        <p class="text-center display-3">
            <span class="fas fa-chalkboard s-1rem;"></span> Tableau de Formations
        </p>
        <table class="table-responsive table-bordered p-4 m-3" size="3">
            <tr>
                <td style="padding:3px; text-align:center;">Formations</td>
                <td style="padding:3px; text-align:center;">Date debut</td>
                <td style="padding:3px; text-align:center;">Date fin</td>
                <td style="padding:3px; text-align:center;">Heure</td>
                <td style="padding:3px; text-align:center;">Prix</td>
                <td style="padding:3px; text-align:center;">modules</td>
                <td style="padding:3px; text-align:center;">option</td>
            </tr>
            <tr>
                @foreach ($form as $item)
                    <tr>
                        <td style="padding:5px;">{{$item->intitule}}</td>
                        <td style="padding:5px;">{{$item->dateform}}</td>
                        <td style="padding:5px;">{{$item->datefin}}</td>
                        <td style="padding:5px;">{{$item->heure}}</td>
                        <td style="padding:5px;">{{$item->prix}} CFA</td>
                            
                        <td style="padding:5px;">
                            @foreach ($data as $mods)
                                @if ($mods->intitule == $item->intitule)
                                    <ul>
                                        <li>{{$mods->nomModule}}</li>
                                    </ul>    
                                @endif    
                            @endforeach
                        </td>
                        <td style="padding:5px;">
                            <a href="{{route('enroll')}}" class="btn btn-success">s'inscrire</a>
                        </td>
                    </tr>
                @endforeach
            </tr>
        </table>
    </section>
   

    
@endsection