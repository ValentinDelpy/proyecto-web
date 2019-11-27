@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

                    @if(isset($item))
                      {!! Form::model($item, ['route' => ['item.update', $item->id], 'method' => 'PATCH']) !!}
                    @else
                      {!! Form::open(['route' => 'item.store']) !!}
                    @endif
                      <div class="form-group">
                          {!! Form::label('name', 'Item name') !!}
                          {!! Form::text('name', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                          {!! Form::label('cost', 'Item cost') !!}
                          {!! Form::number('cost', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                          {!! Form::label('ad', 'AD Value') !!}
                          {!! Form::email('ad', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                          {!! Form::label('ap', 'AP Value') !!}
                          {!! Form::date('ap', null, ['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                          {!! Form::label('champion_id', 'Champion') !!}
                          {!! Form::select('champion_id', $champions, null, ['class' => 'form-control']) !!}

                      </div>

                      <button type="submit" class="btn btn-primary">Send</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection