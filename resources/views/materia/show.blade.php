@extends('layouts.app')

@section('template_title')
    {{ $materia->name ?? "{{ __('Show') Materia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Materia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Docente:</strong>
                            {{ $materia->docente->nombre }}
                        </div>                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $materia->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Clave:</strong>
                            {{ $materia->clave }}
                        </div>
                        <div class="form-group">
                            <strong>Plan:</strong>
                            {{ $materia->plan }}
                        </div>
                        <div class="form-group">
                            <strong>Horas:</strong>
                            {{ $materia->horas }}
                        </div>
                        <div class="form-group">
                            <strong>Horas Aula:</strong>
                            {{ $materia->horas_aula }}
                        </div>
                        <div class="form-group">
                            <strong>Horas Pla:</strong>
                            {{ $materia->horas_pla }}
                        </div>
                        <div class="form-group">
                            <strong>Generacion Id:</strong>
                            {{ $materia->generacion_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
