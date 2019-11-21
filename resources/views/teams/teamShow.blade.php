@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Team informations</div>

                <div class="card-body">
                <h3>Team: {{ $team->name }}</h3>
                <ul>
                  @foreach($team->champions as $champion)
                    <li>{{ $champion->name }}</li>
                  @endforeach
                </ul>
                {!! Form::model($team, ['route' => ['team.destroy', $team->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => 'bnt btn-sm btn-danger']) !!}
                {!! Form::close() !!}
                </div>
            </div>
            @include('files.fileForm', ['model_id' => $team->id, 'model_type' => 'App\Teams'])
            @include('files.fileIndex', ['files' => $team->files])
        </div>
    </div>
</div>
@endsection