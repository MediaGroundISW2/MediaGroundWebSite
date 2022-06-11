<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('f_inicio') }}
            {{ Form::date('f_inicio', $promocione->f_inicio, ['class' => 'form-control' . ($errors->has('f_inicio') ? ' is-invalid' : ''), 'placeholder' => 'F Inicio']) }}
            {!! $errors->first('f_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('f_fin') }}
            {{ Form::date('f_fin', $promocione->f_fin, ['class' => 'form-control' . ($errors->has('f_fin') ? ' is-invalid' : ''), 'placeholder' => 'F Fin']) }}
            {!! $errors->first('f_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descuento') }}
            {{ Form::number('descuento', $promocione->descuento, ['class' => 'form-control' . ($errors->has('descuento') ? ' is-invalid' : ''), 'placeholder' => 'Descuento']) }}
            {!! $errors->first('descuento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('portada') }}
            {{ Form::text('portada', $promocione->portada, ['class' => 'form-control' . ($errors->has('portada') ? ' is-invalid' : ''), 'placeholder' => 'Portada']) }}
            {!! $errors->first('portada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contenido_id') }}
            {{ Form::select('contenido_id', $contenido ,$promocione->contenido_id, ['class' => 'form-control' . ($errors->has('contenido_id') ? ' is-invalid' : ''), 'placeholder' => 'Contenido Id']) }}
            {!! $errors->first('contenido_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>