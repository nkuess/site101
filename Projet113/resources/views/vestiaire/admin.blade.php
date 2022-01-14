@extends('layout.vestiaireLayout')
@section('main_admin')
    <nav class="navbar nav">
      <div class="row">
        <div class="text-left">
          <p class="display-5 text-justified">Bienvenu(e)
            <a href="/deconnexion" class="btn btn-primary"> se déconnecter</a>
          </p>
        </div>
      </div>
    </nav>
    

    {{-- navigation bar --}}
    <section class="container">
        <div class="row bg-light">
            <aside class="col-*">
              <table class="table-stripped table-responsive">
                <tr>
                  <td>Auditeurs</td>
                  <td>
                    <a href="{{route('auditeur.create')}}" class="btn btn-success">
                      <i class="fas fa-plus "></i> Ajouter
                    </a>
                  </td>
                  <td>
                    <a href="{{route('auditeur.index');}}" class="btn btn-secondary">
                      <i class="fas fa-edit"></i> Gérer
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>Formations</td>
                  <td>
                    <a href="{{route('formation.create')}}" class="btn btn-success">
                      <i class="fas fa-plus "></i> Ajouter
                    </a>
                  </td>
                  <td>
                    <a href="{{route('formation.index');}}" class="btn btn-secondary">
                      <i class="fas fa-edit"></i> Gérer
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>Modules</td>
                  <td>
                    <a href="{{route('module.create')}}" class="btn btn-success">
                      <i class="fas fa-plus "></i> Ajouter
                    </a>
                  </td>
                  <td>
                    <a href="{{route('module.index');}}" class="btn btn-secondary">
                      <i class="fas fa-edit"></i> Gérer
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>Utilisateurs</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
                {{-- test 
                <ul>
                    <li>
                        <a href="{{route('auditeur.create')}}">Auditeur</a>
                    </li>
                    <li>
                        <a href="{{route('auditeur.index')}}">Module</a>
                    </li>
                    <li>
                        <a href="{{route('auditeur.create')}}">Formations</a>
                    </li>
                </ul>--}}
            </aside>
            
        </div>
    </section>
 
@endsection