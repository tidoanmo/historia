@extends('tablar::page')

@section('title', 'View Historia')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        View
                    </div>
                    <h2 class="page-title">
                        {{ __('Historia ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('historias.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Historia List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    @if(config('tablar','display_alert'))
                        @include('tablar::common.alert')
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Historia Details</h3>
                        </div>
                        <div class="card-body">
                            
<div class="form-group">
<strong>Paciente Id:</strong>
{{ $historia->paciente_id }}
</div>
<div class="form-group">
<strong>Ea:</strong>
{{ $historia->ea }}
</div>
<div class="form-group">
<strong>App:</strong>
{{ $historia->app }}
</div>
<div class="form-group">
<strong>Apf:</strong>
{{ $historia->apf }}
</div>
<div class="form-group">
<strong>Peso:</strong>
{{ $historia->peso }}
</div>
<div class="form-group">
<strong>Talla:</strong>
{{ $historia->talla }}
</div>
<div class="form-group">
<strong>Imc:</strong>
{{ $historia->imc }}
</div>
<div class="form-group">
<strong>Temperatura:</strong>
{{ $historia->temperatura }}
</div>
<div class="form-group">
<strong>Ta:</strong>
{{ $historia->ta }}
</div>
<div class="form-group">
<strong>Fc:</strong>
{{ $historia->fc }}
</div>
<div class="form-group">
<strong>Fr:</strong>
{{ $historia->fr }}
</div>
<div class="form-group">
<strong>Cabeza:</strong>
{{ $historia->cabeza }}
</div>
<div class="form-group">
<strong>Torax:</strong>
{{ $historia->torax }}
</div>
<div class="form-group">
<strong>Abdomen:</strong>
{{ $historia->abdomen }}
</div>
<div class="form-group">
<strong>Gluteos:</strong>
{{ $historia->gluteos }}
</div>
<div class="form-group">
<strong>Otros:</strong>
{{ $historia->otros }}
</div>
<div class="form-group">
<strong>Laboratorio:</strong>
{{ $historia->laboratorio }}
</div>
<div class="form-group">
<strong>Imagen:</strong>
{{ $historia->imagen }}
</div>
<div class="form-group">
<strong>Diagnostico:</strong>
{{ $historia->diagnostico }}
</div>
<div class="form-group">
<strong>Tratamiento:</strong>
{{ $historia->tratamiento }}
</div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


