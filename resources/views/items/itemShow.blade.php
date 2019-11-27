@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Item informations</div>

                <div class="card-body">
                  <a href="{{ route('item.index') }}" class="btn btn-default btn-sm">Info. Item</a>
                    <table class="table">
                      <thead>
                        <tr><th>ID</th> <th>Name</th> <th>Cost</th> <th>AD</th> <th>AP</th> <th>Champion</th></tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->cost }}</td>
                            <td>{{ $item->ad }}</td>
                            <td>{{ $item->ap }}</td>
                            <td>{{ $item->champion->name }}</td>
                          </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection