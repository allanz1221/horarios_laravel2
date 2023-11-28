@extends('layouts.app')

@section('template_title')
    Materia
@endsection

@section('content')
                    <!-- Incluir jQuery -->
                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

                    <!-- Incluir DataTables CSS -->
                    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

                    <!-- Incluir DataTables JS -->
                    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
                    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/dataTables.searchCol.min.js"></script>
                    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/colreorder/1.5.5/js/dataTables.colReorder.min.js"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Materia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('materias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table id="miTabla" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
										<th>Docente</th>
										<th>Semestre</th>

										<th>Nombre</th>
										<th>Clave</th>
										<th>Plan</th>
										<th>Horas</th>
										<th>Horas Aula</th>
										<th>Horas Pla</th>
										<th>Grupo</th>
                                        <th>Semestre</th>                                        
                                        <th>PE</th>                                        

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materias as $materia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $materia->docente->nombre ?? '' }}</td>
											<td>{{ $materia->semestre }}</td>

											<td>{{ $materia->nombre }}</td>
											<td>{{ $materia->clave }}</td>
											<td>{{ $materia->plan }}</td>
											<td>{{ $materia->horas }}</td>
											<td>{{ $materia->horas_aula }} - @php echo app('App\Http\Controllers\MateriaController')->cuenta($materia->id); @endphp                                            </td>
											<td>{{ $materia->horas_pla }}</td>
											<td>{{ $materia->generacione->nombre }}</td>
                                            <td>{{ $materia->generacione->semestre->nombre }}</td>
                                            <td>{{ $materia->generacione->semestre->pe->nombre }}</td>
                                            <td>
                                                <form action="{{ route('materias.destroy',$materia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('materias.show',$materia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('materias.edit',$materia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $materias->links() !!}
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Inicializar DataTables y DataTables - ColReorder
            var table = $('#miTabla').DataTable({
                searching: true,
                ordering: true,
                colReorder: true // Habilitar la función de reordenar columnas
            });
    
            // Agregar los controles de búsqueda por columna
            $('#miTabla thead tr').clone(true).appendTo('#miTabla thead');
            $('#miTabla thead tr:eq(1) th').each(function (i) {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Buscar ' + title + '" />');
    
                $('input', this).on('keyup change', function () {
                    if (table.column(i).search() !== this.value) {
                        table
                            .column(i)
                            .search(this.value)
                            .draw();
                    }
                });
            });
        });
    </script>
    @endsection
