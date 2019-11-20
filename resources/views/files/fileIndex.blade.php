<div class="card">
    <div class="card-header">Files</div>
    <div class="card-body">
        <table class="table">
            <tr>
                <th>File</th>
                <th>Size</th>
                <th colspan="2">Actions</th>
            </tr>
            @foreach($files as $file)
                <tr>
                    <td>{{ $file->original }}</td>
                    <td>{{ $file->type }}</td>
                    <td>
                        <a href="{{ route('file.download', $file->id) }}" class="btn btn-sm btn-success">Download</a>
                    </td>
                    <td>
                        {!! Form::open(['route' => ['file.delete', $file->id]]) !!}
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>