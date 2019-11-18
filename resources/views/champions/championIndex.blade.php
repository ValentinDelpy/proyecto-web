@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Champions</div>

                <div class="card-body">
                  <a href="{{ route('team.create') }}" class="btn btn-success btn-sm">Add a champion</a>
                    <table class="table">
                      <thead>
                        <tr><th>ID</th> <th>Name</th> <th>Health Points</th> <th>Type</th> <th>Role</th></tr>
                      </thead>
                      <tbody>
                        @foreach($champions as $champion)
                          <tr>
                            <td>{{ $champion->id }}</td>
                            <td>{{ $champion->name }}</td>
                            <td>{{ $champion->health_points }}</td>
                            <td>{{ $champion->type }}</td>
                            <td>{{ $champion->role }}</td>
                            <td>
                                <a href="{{ route('champion.show', $champion->id) }}" class="btn btn-sm btn-info">View details</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection