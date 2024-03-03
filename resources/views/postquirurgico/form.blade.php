
<div class="form-group mb-3">
    <div>
        {{ Form::hidden('paciente_id', $postquirurgico->paciente_id, ['class' => 'form-control' .
        ($errors->has('paciente_id') ? ' is-invalid' : ''), 'placeholder' => 'Paciente Id']) }}
        {!! $errors->first('paciente_id', '<div class="invalid-feedback">:message</div>') !!}

    </div>
</div>
<div class="row mb-4">
    <div class="form-group col-6">
        <label class="form-label">   {{ Form::label('fecha') }}</label>
        <div>
            {{ Form::input('datetime-local','fecha', $postquirurgico->fecha, ['class' => 'form-control' .
            ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
      
        </div>
    </div>

</div>


<div class="row mb-4">
    <div class="form-group col-12">
        <label class="form-label">   {{ Form::label('resumen') }}</label>
        <div>
            {{ Form::textarea('resumen', $postquirurgico->resumen, ['class' => 'form-control' .
            ($errors->has('resumen') ? ' is-invalid' : ''), 'placeholder' => 'Resumen']) }}
            {!! $errors->first('resumen', '<div class="invalid-feedback">:message</div>') !!}
        
        </div>
    </div>
</div>

<div class="row mb-4">

    <div class="form-group col-12">
        <label class="form-label">   {{ Form::label('indicacion') }}</label>
        <div>
            {{ Form::textarea('indicacion', $postquirurgico->indicacion ?? 
            '<ol>
                <li>
                    Alta al recuperarse
                </li>
                <li>
                    Abrobensz
                </li>
                <li>
                    Cefadroxilo 500mg
                </li>
                <li>
                    Consorelax habvo 48Hx30
                </li>
                <li>
                    Zobradex 2go 8HX10
                </li>

                <li>
                    Consulta: (00/00/00 00:00)
                </li>
              
            </ol>',
             ['class' => 'form-control' .
            ($errors->has('indicacion') ? ' is-invalid' : ''), 'placeholder' => 'Indicacion']) }}
            
            {!! $errors->first('indicacion', '<div class="invalid-feedback">:message</div>') !!}

        </div>
    </div>

    
</div>
<div class="row mb-4">
    <div class="form-group col-12">
        <label class="form-label">   {{ Form::label('nota') }}</label>
        <div>
            {{ Form::textarea('nota', $postquirurgico->nota, ['class' => 'form-control' .
            ($errors->has('nota') ? ' is-invalid' : ''), 'placeholder' => 'Nota']) }}
            {!! $errors->first('nota', '<div class="invalid-feedback">:message</div>') !!}
      
        </div>
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

 @section('js')
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#resumen' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#indicacion' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#nota' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    flatpickr('#consulta_fecha_hora', {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
</script>

 @endsection