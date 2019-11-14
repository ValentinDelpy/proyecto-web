@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    {{-- Show errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(isset($team))
                        {!! Form::model($team, ['route' => ['team.update', $team->id], 'method' => 'PATCH']) !!}
                    @else
                        {!! Form::open(['route' => 'team.store']) !!}
                    @endif
                      <div class="form-group">
                        {!! Form::label('name', 'Team name') !!}
                        {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('rank', 'Rank') !!}
                        {!! Form::text('rank', null, ['class' => $errors->has('rank') ? 'form-control is-invalid' : 'form-control']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('region', 'Region') !!}
                        {!! Form::text('region', null, ['class' => $errors->has('region') ? 'form-control is-invalid' : 'form-control']) !!}
                      </div>
                      <button type="submit" class="btn btn-primary">Send</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection