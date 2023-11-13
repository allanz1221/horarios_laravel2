<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $docente->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('base') }}
            {{ Form::text('base', $docente->base, ['class' => 'form-control' . ($errors->has('base') ? ' is-invalid' : ''), 'placeholder' => 'Base']) }}
            {!! $errors->first('base', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_nacimiento') }}
            {{ Form::text('fecha_nacimiento', $docente->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria') }}
            {{ Form::text('categoria', $docente->categoria, ['class' => 'form-control' . ($errors->has('categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
            {!! $errors->first('categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comision') }}
            {{ Form::text('comision', $docente->comision, ['class' => 'form-control' . ($errors->has('comision') ? ' is-invalid' : ''), 'placeholder' => 'Comision']) }}
            {!! $errors->first('comision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desc_comision') }}
            {{ Form::text('desc_comision', $docente->desc_comision, ['class' => 'form-control' . ($errors->has('desc_comision') ? ' is-invalid' : ''), 'placeholder' => 'Desc Comision']) }}
            {!! $errors->first('desc_comision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('perfil') }}
            {{ Form::text('perfil', $docente->perfil, ['class' => 'form-control' . ($errors->has('perfil') ? ' is-invalid' : ''), 'placeholder' => 'Perfil']) }}
            {!! $errors->first('perfil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_contrato_inicio') }}
            {{ Form::text('fecha_contrato_inicio', $docente->fecha_contrato_inicio, ['class' => 'form-control' . ($errors->has('fecha_contrato_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Contrato Inicio']) }}
            {!! $errors->first('fecha_contrato_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_contrato_fin') }}
            {{ Form::text('fecha_contrato_fin', $docente->fecha_contrato_fin, ['class' => 'form-control' . ($errors->has('fecha_contrato_fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Contrato Fin']) }}
            {!! $errors->first('fecha_contrato_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_horario') }}
            {{ Form::text('fecha_horario', $docente->fecha_horario, ['class' => 'form-control' . ($errors->has('fecha_horario') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Horario']) }}
            {!! $errors->first('fecha_horario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pe_id') }}
            {{ Form::select('pe_id', $pes, $docente->pe_id, ['class' => 'form-control' . ($errors->has('pe_id') ? ' is-invalid' : ''), 'placeholder' => 'Pe Id']) }}

            {!! $errors->first('pe_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>