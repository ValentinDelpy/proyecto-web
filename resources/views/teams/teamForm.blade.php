@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adding a team</div>

                <div class="card-body">
                    @if(isset($team))
                      {!! Form::model($team, ['route' => ['team.update', $team->id], 'method' => 'PATCH']) !!}
                    @else
                      {!! Form::open(['route' => 'team.store']) !!}
                    @endif
                      <div class="form-group">
                          {!! Form::label('name', 'Name of the team') !!}
                          {!! Form::text('name', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                          {!! Form::label('rank', 'Rank of the team') !!}
                          {!! Form::text('rank', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                          {!! Form::label('region', 'Region of the team') !!}
                          {!! Form::text('region', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                          {!! Form::label('champion_id[]', 'Champions') !!}
                          {!! Form::select('champion_id[]', $champions, $selected ?? null, ['class' => 'form-control', 'multiple']) !!}
                      </div>

                      <button type="submit" class="btn btn-primary">Enviar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection