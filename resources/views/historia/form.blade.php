
<div class="form-group mb-3">
    <div>
        {{ Form::hidden('paciente_id', $historia->paciente_id, 
        ['class' => 'form-control', 'readonly' => 'readonly', 
        'placeholder'=> '' ]) }}
        {!! $errors->first('paciente_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>


<h1>Anamnesis <span class="badge badge-primary"></span></h1>
<div class="form-group mb-3">
        <label class="form-label"> {{ Form::label('ea','EA:') }}</label>
        <div>
            {{ Form::textarea('ea', $historia->ea, ['class' => 'form-control tinymce' .
            ($errors->has('ea') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese información']) }}
            {!! $errors->first('ea', '<div class="invalid-feedback">:message</div>') !!}
         
        </div>
 </div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('app','APP:') }}</label>
    <div>
        {{ Form::textarea('app', $historia->app, ['class' => 'form-control' .
        ($errors->has('app') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese información']) }}
        {!! $errors->first('app', '<div class="invalid-feedback">:message</div>') !!}

    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('apf', 'APF:') }}</label>
    <div>
        {{ Form::textarea('apf', $historia->apf, ['class' => 'form-control' .
        ($errors->has('apf') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese información']) }}
        {!! $errors->first('apf', '<div class="invalid-feedback">:message</div>') !!}

    </div>
</div>

<h1>Examen Físico <span class="badge badge-primary"></span></h1>

<div class="row mb-4">
    <div class="form-group col-4">
        <label class="form-label">   {{ Form::label('peso') }}</label>
        <div>
            {{ Form::number('peso', $historia->peso, ['step' => 'any','class' => 'form-control' .
            ($errors->has('peso') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
            {!! $errors->first('peso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>

    <div class="form-group col-4">
        <label class="form-label">   {{ Form::label('talla') }}</label>
        <div>
            {{ Form::number('talla', $historia->talla, ['step' => 'any', 'class' => 'form-control' . ($errors->has('talla') ? ' is-invalid' : ''), 'placeholder' => 'Talla']) }}
            {!! $errors->first('talla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="form-group col-4">
        <label class="form-label">{{ Form::label('imc') }}</label>
        <div>
            {{ Form::number('imc', $historia->imc, ['id' => 'imc', 'class' => 'form-control', 'readonly' => 'readonly', 'placeholder' => 'Imc']) }}
            {!! $errors->first('imc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="form-group col-3">
        <label class="form-label">   {{ Form::label('temperatura') }}</label>
        <div>
            {{ Form::number('temperatura', $historia->temperatura, ['class' => 'form-control' .
            ($errors->has('temperatura') ? ' is-invalid' : ''), 'placeholder' => 'Temperatura']) }}
            {!! $errors->first('temperatura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="form-group col-3">
        <label class="form-label">   {{ Form::label('ta') }}</label>
        <div>
            {{ Form::number('ta', $historia->ta, ['class' => 'form-control' .
            ($errors->has('ta') ? ' is-invalid' : ''), 'placeholder' => 'Ta']) }}
            {!! $errors->first('ta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="form-group col-3">
        <label class="form-label">   {{ Form::label('fc') }}</label>
        <div>
            {{ Form::number('fc', $historia->fc, ['class' => 'form-control' .
            ($errors->has('fc') ? ' is-invalid' : ''), 'placeholder' => 'Fc']) }}
            {!! $errors->first('fc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>

    <div class="form-group col-3">
        <label class="form-label">   {{ Form::label('fr') }}</label>
        <div>
            {{ Form::number('fr', $historia->fr, ['class' => 'form-control' .
            ($errors->has('fr') ? ' is-invalid' : ''), 'placeholder' => 'Fr']) }}
            {!! $errors->first('fr', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cabeza') }}</label>
    <div>
        {{ Form::textarea('cabeza', $historia->cabeza, ['class' => 'form-control' .
        ($errors->has('cabeza') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese información']) }}
        {!! $errors->first('cabeza', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('torax') }}</label>
    <div>
        {{ Form::textarea('torax', $historia->torax, ['class' => 'form-control' .
        ($errors->has('torax') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese información']) }}
        {!! $errors->first('torax', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('abdomen') }}</label>
    <div>
        {{ Form::textarea('abdomen', $historia->abdomen, ['class' => 'form-control' .
        ($errors->has('abdomen') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese información']) }}
        {!! $errors->first('abdomen', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('gluteos') }}</label>
    <div>
        {{ Form::textarea('gluteos', $historia->gluteos, ['class' => 'form-control' .
        ($errors->has('gluteos') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese información']) }}
        {!! $errors->first('gluteos', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('otros') }}</label>
    <div>
        {{ Form::textarea('otros', $historia->otros, ['class' => 'form-control' .
        ($errors->has('otros') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese información']) }}
        {!! $errors->first('otros', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('laboratorio') }}</label>
    <div>
        {{ Form::textarea('laboratorio', $historia->laboratorio, ['class' => 'form-control' .
        ($errors->has('laboratorio') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese información']) }}
        {!! $errors->first('laboratorio', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('imagen') }}</label>
    <div>
        {{ Form::textarea('imagen', $historia->imagen, ['class' => 'form-control' .
        ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese información']) }}
        {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('diagnostico') }}</label>
    <div>
        {{ Form::textarea('diagnostico', $historia->diagnostico, ['class' => 'form-control' .
        ($errors->has('diagnostico') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese información']) }}
        {!! $errors->first('diagnostico', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('tratamiento') }}</label>
    <div>
        {{ Form::textarea('tratamiento', $historia->tratamiento, ['class' => 'form-control' .
        ($errors->has('tratamiento') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese información']) }}
        {!! $errors->first('tratamiento', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ route('historias.index',$historia->id) }}" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>

@section('js')
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#ea' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#app' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#apf' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#cabeza' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#torax' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#abdomen' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#gluteos' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#otros' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#laboratorio' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#imagen' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#diagnostico' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#tratamiento' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    // Escucha el evento de cambio en los campos de peso y talla
    document.getElementById('peso').addEventListener('change', calcularIMC);
    document.getElementById('talla').addEventListener('change', calcularIMC);

    // Función para calcular el IMC
    function calcularIMC() {
        var peso = parseFloat(document.getElementById('peso').value);
        var talla = parseFloat(document.getElementById('talla').value);

        // Verifica que los valores de peso y talla sean válidos
        if (!isNaN(peso) && !isNaN(talla) && talla > 0) {
            var imc = peso / (talla * talla);
            // Redondea el IMC a dos decimales
            imc = imc.toFixed(2);
            // Actualiza el valor del campo IMC
            document.getElementById('imc').value = imc;
        } else {
            // Si alguno de los valores no es válido, establece el campo IMC en vacío
            document.getElementById('imc').value = '';
        }
    }
</script>
@endsection
