@extends('layouts.app')

@section('template_title')
    {{ $semestre->name ?? "{{ __('Show') Semestre" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Semestre</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('semestres.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $semestre->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Pe Id:</strong>
                            {{ $semestre->pe_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
