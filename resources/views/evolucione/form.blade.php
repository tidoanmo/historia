<div class="form-group mb-3">
    <div>
        {{ Form::hidden('paciente_id', $evolucione->paciente_id, ['class' => 'form-control' .
        ($errors->has('paciente_id') ? ' is-invalid' : ''), 'placeholder' => 'Paciente Id']) }}
        {!! $errors->first('paciente_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<div class="row mb-3">

    <div class="form-group col 2">
        <label class="form-label">   {{ Form::label('numero') }}</label>
        <div>
            {{ Form::number('numero', $evolucione->numero, ['class' => 'form-control' .
            ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => '#']) }}
            {!! $errors->first('numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="form-group col-10">
        <label class="form-label">   {{ Form::label('fecha') }}</label>
        <div>
            {{ Form::input('datetime-local','fecha', $evolucione->fecha, ['class' => 'form-control' .
            ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>


<div class="form-group row mb-3">
    <label class="form-label">   {{ Form::label('resumen') }}</label>
    <div>
        {{ Form::text('resumen', $evolucione->resumen, ['class' => 'form-control' .
        ($errors->has('resumen') ? ' is-invalid' : ''), 'placeholder' => 'Resumen']) }}
        {!! $errors->first('resumen', '<div class="invalid-feedback">:message</div>') !!} 
    </div>
</div>
<div class="form-group row mb-3">
    <label class="form-label">   {{ Form::label('indicacion') }}</label>
    <div>
        {{ Form::text('indicacion', $evolucione->indicacion, ['class' => 'form-control' .
        ($errors->has('indicacion') ? ' is-invalid' : ''), 'placeholder' => 'Indicacion']) }}
        {!! $errors->first('indicacion', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group row mb-3">
    <label class="form-label">   {{ Form::label('nota') }}</label>
    <div>
        {{ Form::text('nota', $evolucione->nota, ['class' => 'form-control' .
        ($errors->has('nota') ? ' is-invalid' : ''), 'placeholder' => 'Nota']) }}
        {!! $errors->first('nota', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
