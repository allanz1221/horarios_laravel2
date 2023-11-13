<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
        // Espera a que el documento esté listo
        $(document).ready(function() {
            // Agrega un evento de cambio al input con id 'hora_inicio'
            $('#hora_inicio').on('change', function() {
                // Obtiene el nuevo valor del input
                var nuevaHora = $(this).val();

                // Verifica si el valor es un número
                if (!isNaN(nuevaHora)) {
                    // Construye la nueva fecha y hora
                    var nuevaFechaHora = '2007-01-01 ' + pad(nuevaHora) + ':00:00';

                    // Actualiza el valor del input 'start_time'
                    $('#start_time').val(nuevaFechaHora);
                    
                    nuevaHoraInicio = parseInt(nuevaHora);
                    // Actualiza el valor del input 'hora_fin'
                    $('#hora_fin').val(nuevaHoraInicio + 1);                    
                    var nuevaFechaHora = '2007-01-01 ' + pad(nuevaHoraInicio + 1) + ':00:00';

                    // Actualiza el valor del input 'start_time'
                    $('#end_time').val(nuevaFechaHora);
                } else {
                    // Si el valor no es un número, puedes manejarlo según tus necesidades
                    alert('Ingrese un número válido para la hora.');
                }
            });
              

            // Función para agregar un cero delante de un número si es necesario (para el formato HH)
            function pad(num) {
                return (num < 10) ? '0' + num : num;
            }
        });
    </script>

<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('materia_id') }}
            
            {{ Form::select('materia_id', $materia, $horario->materia_id, ['class' => 'form-control' . ($errors->has('materia_id') ? ' is-invalid' : ''), 'placeholder' => 'Materia Id']) }}
            {!! $errors->first('materia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('docente_id') }}
            {{ Form::select('docente_id', $docente, $horario->docente_id, ['class' => 'form-control' . ($errors->has('materia_id') ? ' is-invalid' : ''), 'placeholder' => 'Materia Id']) }}
            {!! $errors->first('docente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dia') }}
            {!! Form::select('dia', $diasAsociativos, $horario->dia, ['class' => 'form-control', 'placeholder' => 'Selecciona un día']) !!}

            {!! $errors->first('dia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('salon_id') }}
            {{ Form::select('salon_id', $salon, $horario->salon_id, ['class' => 'form-control' . ($errors->has('materia_id') ? ' is-invalid' : ''), 'placeholder' => 'Salon Id']) }}
            {!! $errors->first('salon_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" style="display:none">
            {{ Form::label('start_time') }}
            {{ Form::text('start_time', $horario->start_time, ['class' => 'form-control' . ($errors->has('start_time') ? ' is-invalid' : ''), 'placeholder' => 'Start Time']) }}
            {!! $errors->first('start_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" style="display:none">
            {{ Form::label('end_time') }}
            {{ Form::text('end_time', $horario->end_time, ['class' => 'form-control' . ($errors->has('end_time') ? ' is-invalid' : ''), 'placeholder' => 'End Time']) }}
            {!! $errors->first('end_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_inicio') }}
            {{ Form::text('hora_inicio', $horario->hora_inicio, ['class' => 'form-control' . ($errors->has('hora_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Hora Inicio']) }}

            {!! $errors->first('hora_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" style="display:none">
            {{ Form::label('hora_fin') }}
            {{ Form::text('hora_fin', $horario->hora_fin, ['class' => 'form-control' . ($errors->has('hora_fin') ? ' is-invalid' : ''), 'placeholder' => 'Hora Fin']) }}
            {!! $errors->first('hora_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>

    
</div>