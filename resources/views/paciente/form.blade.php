<div  class="row mb-4"  >
    <div class="form-group col">
        <label class="form-label">   {{ Form::label('nombres') }}</label>
        <div>
            {{ Form::text('nombres', $paciente->nombres, ['class' => 'form-control' .
            ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="form-group col">
        <label class="form-label">   {{ Form::label('apellidos') }}</label>
        <div>
            {{ Form::text('apellidos', $paciente->apellidos, ['class' => 'form-control' .
            ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>  
</div>

<div class="row mb-4">
    <div class="form-group col-4">
        <label class="form-label">   {{ Form::label('cedula') }}</label>
        <div>
            {{ Form::text('cedula', $paciente->cedula, ['class' => 'form-control' .
            ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="form-group col-4">
        <label class="form-label">   {{ Form::label('edad') }}</label>
        <div>
            {{ Form::number('edad', $paciente->edad, ['class' => 'form-control' .
            ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('edad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    
    <div class="form-group col-4">
        <label class="form-label">   {{ Form::label('Género') }}</label>
        <div>
            {{ Form::select('sexo',['Masculino' => 'Masculino', 'Femenino' => 'Femenino'] ,
            $paciente->sexo, 
            ['class' => 'form-control' .
            ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Selecione un género']) }}
            {!! $errors->first('sexo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
    </div>
</div>

<div class="row mb-4">
    <div class="form-group col-4">
        <label class="form-label">   {{ Form::label('ocupación') }}</label>
        <div>
            {{ Form::text('ocupacion', $paciente->ocupacion, ['class' => 'form-control' .
            ($errors->has('ocupacion') ? ' is-invalid' : ''), 'placeholder' => 'Ocupacion']) }}
            {!! $errors->first('ocupacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>

    <div class="form-group col-4">
        <label class="form-label">   {{ Form::label('telefono') }}</label>
        <div>
            {{ Form::text('telefono', $paciente->telefono, ['class' => 'form-control' .
            ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>

    <div class="form-group col-4">
        <label class="form-label">   {{ Form::label('dirección') }}</label>
        <div>
            {{ Form::text('direccion', $paciente->direccion, ['class' => 'form-control' .
            ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>

 <div class="row mb-4">
    <div class="form-group col-6">
        <label class="form-label">   {{ Form::label('correo') }}</label>
        <div>
            {{ Form::email('correo', $paciente->correo, ['class' => 'form-control' .
            ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    
    
    <div class="form-group col-6">
        <label class="form-label">   {{ Form::label('fecha') }}</label>
        <div>
            {{ Form::input('datetime-local', 'fecha', $paciente->fecha,
            ['class' => 'form-control' .
            ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
 </div>



    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ route('pacientes.index') }}" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
