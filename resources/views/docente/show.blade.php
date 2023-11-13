@extends('layouts.app')

@section('template_title')
    {{ $docente->name ?? "{{ __('Show') Docente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Docente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('docentes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $docente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Base:</strong>
                            {{ $docente->base }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $docente->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $docente->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Comision:</strong>
                            {{ $docente->comision }}
                        </div>
                        <div class="form-group">
                            <strong>Desc Comision:</strong>
                            {{ $docente->desc_comision }}
                        </div>
                        <div class="form-group">
                            <strong>Perfil:</strong>
                            {{ $docente->perfil }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Contrato Inicio:</strong>
                            {{ $docente->fecha_contrato_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Contrato Fin:</strong>
                            {{ $docente->fecha_contrato_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Horario:</strong>
                            {{ $docente->fecha_horario }}
                        </div>
                        <div class="form-group">
                            <strong>Pe Id:</strong>
                            {{ $docente->pe_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
