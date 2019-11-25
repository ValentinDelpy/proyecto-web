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

                    @if(isset($champion))
                        {!! Form::model($champion, ['route' => ['champion.update', $champion->id], 'method' => 'PATCH']) !!}
                    @else
                        {!! Form::open(['route' => 'champion.store']) !!}
                    @endif
                      <div class="form-group">
                        {!! Form::label('name', 'Champion') !!}
                        {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('health_points', 'Health Points') !!}
                        {!! Form::text('health_points', null, ['class' => $errors->has('health_points') ? 'form-control is-invalid' : 'form-control']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('type', 'Type') !!}
                        {!! Form::text('type', null, ['class' => $errors->has('type') ? 'form-control is-invalid' : 'form-control']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('role', 'Role') !!}
                        {!! Form::text('role', null, ['class' => $errors->has('role') ? 'form-control is-invalid' : 'form-control']) !!}
                      </div>
                      <button type="submit" class="btn btn-primary">Send</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection