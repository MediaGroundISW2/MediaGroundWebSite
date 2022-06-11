<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_contenido') }}
            {{ Form::text('nombre_contenido', $contenido->nombre_contenido, ['class' => 'form-control' . ($errors->has('nombre_contenido') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Contenido']) }}
            {!! $errors->first('nombre_contenido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $contenido->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $contenido->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('formato') }}
            {{ Form::text('formato', $contenido->formato, ['class' => 'form-control' . ($errors->has('formato') ? ' is-invalid' : ''), 'placeholder' => 'Formato']) }}
            {!! $errors->first('formato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $contenido->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contenido') }}
            {{ Form::text('contenido', $contenido->contenido, ['class' => 'form-control' . ($errors->has('contenido') ? ' is-invalid' : ''), 'placeholder' => 'Contenido']) }}
            {!! $errors->first('contenido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('autor_id') }}
            {{ Form::select('autor_id', $autor,$contenido->autor_id, ['class' => 'form-control' . ($errors->has('autor_id') ? ' is-invalid' : ''), 'placeholder' => 'Autor Id']) }}
            {!! $errors->first('autor_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria_id') }}
            {{ Form::select('categoria_id', $categoria, $contenido->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>