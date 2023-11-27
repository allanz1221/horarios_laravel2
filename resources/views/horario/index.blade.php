@extends('layouts.app')

@section('template_title')
    Horario
@endsection

@section('content')
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Horario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('horarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>PE</th>
                                        <th>Gpo</th>
										<th>Materia Id</th>
										<th>Docente Id</th>
										<th>Salon Id</th>
                                        <th>Dia</th>                                        
										<th>Hora Inicio</th>
										<th>Hora Fin</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($horarios as $horario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $horario->materia->generacione->Semestre->pe->nombre }}</td>                                            
                                            <td>{{ $horario->materia->generacione->nombre }}</td>
											<td>{{ $horario->materia->nombre }}</td>
											<td>{{ $horario->materia->docente->nombre ?? '' }}</td>
											<td>{{ $horario->salone->nombre }}</td>
                                            <td>{{ $horario->dia }}</td>
											<td>{{ $horario->hora_inicio }}</td>
											<td>{{ $horario->hora_fin }}</td>

                                            <td>
                                                <form action="{{ route('horarios.destroy',$horario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('horarios.show',$horario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('horarios.edit',$horario->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $horarios->links() !!}
            </div>
        </div>
    </div>

    
    <table id="horarioTable" class="tftable" border="1">
            <tr><th>Horario</th><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sabado</th></tr>
    </table> 



<script>
 
function addrow(){
 var table = document.getElementById("horarioTable");
  for (var i = 7; i < 19; i++) {
    h_f = i+1;
    var row = table.insertRow(-1);
    row.innerHTML += "<tr> <td>"+i +":00 - "+h_f+":00 </td><td id='Lunes-"+i+"'></td><td id='Martes-"+i+"'></td><td id='Miércoles-"+i+"'></td><td id='Jueves-"+i+"'></td><td id='Viernes-"+i+"'><td id='Sabado-"+i+"'></td></tr>";
  }
  rowsx();
}

addrow();

function rowsx(){
    @foreach ($horarios as $horario)
        dia = "{{ $horario->dia }}"
        hora = "{{ $horario->hora_inicio }}"
        var table{{ $horario->id }} = document.getElementById("{{ $horario->dia }}-{{ $horario->hora_inicio }}");
        table{{ $horario->id }}.innerHTML = "{{ $horario->materia->clave }} {{ $horario->materia->nombre }} - {{ $horario->salone->nombre }}  - {{ $horario->materia->docente->nombre ?? '' }}";
    @endforeach  
}




</script>


@endsection
