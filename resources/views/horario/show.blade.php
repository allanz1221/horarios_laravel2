@extends('layouts.app')

@section('template_title')
    {{ $horario->name ?? "{{ __('Show') Horario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Horario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Materia Id:</strong>
                            {{ $horario->materia_id }}
                        </div>
                        <div class="form-group">
                            <strong>Docente Id:</strong>
                            {{ $horario->docente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Salon Id:</strong>
                            {{ $horario->salon_id }}
                        </div>
                        <div class="form-group">
                            <strong>Start Time:</strong>
                            {{ $horario->start_time }}
                        </div>
                        <div class="form-group">
                            <strong>End Time:</strong>
                            {{ $horario->end_time }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Inicio:</strong>
                            {{ $horario->hora_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Fin:</strong>
                            {{ $horario->hora_fin }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
