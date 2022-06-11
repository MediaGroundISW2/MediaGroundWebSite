<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_autor') }}
            {{ Form::text('nombre_autor', $autor->nombre_autor, ['class' => 'form-control' . ($errors->has('nombre_autor') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Autor']) }}
            {!! $errors->first('nombre_autor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_paterno') }}
            {{ Form::text('apellido_paterno', $autor->apellido_paterno, ['class' => 'form-control' . ($errors->has('apellido_paterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Paterno']) }}
            {!! $errors->first('apellido_paterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_materno') }}
            {{ Form::text('apellido_materno', $autor->apellido_materno, ['class' => 'form-control' . ($errors->has('apellido_materno') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Materno']) }}
            {!! $errors->first('apellido_materno', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>