<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_categoria') }}
            {{ Form::text('nombre_categoria', $categoria->nombre_categoria, ['class' => 'form-control' . ($errors->has('nombre_categoria') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Categoria']) }}
            {!! $errors->first('nombre_categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('parent_id') }}
            {{ Form::select('parent_id', $category_parent,$categoria->parent_id, ['class' => 'form-control' . ($errors->has('parent_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Principal']) }}
            {!! $errors->first('parent_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>