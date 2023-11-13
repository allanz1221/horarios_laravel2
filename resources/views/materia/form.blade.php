<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $materia->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clave') }}
            {{ Form::text('clave', $materia->clave, ['class' => 'form-control' . ($errors->has('clave') ? ' is-invalid' : ''), 'placeholder' => 'Clave']) }}
            {!! $errors->first('clave', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('plan') }}
            {{ Form::text('plan', $materia->plan, ['class' => 'form-control' . ($errors->has('plan') ? ' is-invalid' : ''), 'placeholder' => 'Plan']) }}
            {!! $errors->first('plan', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horas') }}
            {{ Form::text('horas', $materia->horas, ['class' => 'form-control' . ($errors->has('horas') ? ' is-invalid' : ''), 'placeholder' => 'Horas']) }}
            {!! $errors->first('horas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horas_aula') }}
            {{ Form::text('horas_aula', $materia->horas_aula, ['class' => 'form-control' . ($errors->has('horas_aula') ? ' is-invalid' : ''), 'placeholder' => 'Horas Aula']) }}
            {!! $errors->first('horas_aula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horas_pla') }}
            {{ Form::text('horas_pla', $materia->horas_pla, ['class' => 'form-control' . ($errors->has('horas_pla') ? ' is-invalid' : ''), 'placeholder' => 'Horas Pla']) }}
            {!! $errors->first('horas_pla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('generacion_id') }}
            {{ Form::text('generacion_id', $materia->generacion_id, ['class' => 'form-control' . ($errors->has('generacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Generacion Id']) }}
            {!! $errors->first('generacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>