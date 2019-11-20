<div class="card">
    <div class="card-header">Load files</div>
    <div class="card-body">
        {!! Form::open(['route' => 'file.upload', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('file', 'Load file') !!}
                {!! Form::file('file') !!}
            </div>
            {!! Form::hidden('model_id', $model_id) !!}
            {!! Form::hidden('model_type', $model_type) !!}
            <button type="submit" class="btn btn-primary">Send</button>
        {!! Form::close() !!}
    </div>
</div>