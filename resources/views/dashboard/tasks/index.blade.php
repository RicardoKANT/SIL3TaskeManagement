@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des tâches</h3> <a class="btn btn-primary" href="{{route('tasks.create')}}">Ajouter une tache</a> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Délai</th>
                    <th>Ajoutée le</th>
                    <th>Par</th>
                    <th>Option(s)
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($tasks as $key=> $task)
                    <tr> 
                      <td>{{$key}}</td>
                      <td>{{$task->nom}}</td>
                      <td>{{$task->delai}}</td>
                      <td>{{$task->created_at}}</td>
                      <td>{{$task->user->name}}</td>
                      <td>
                        <a class="btn btn-app">
                          <i class="fas fa-edit"></i> Edit
                        
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection