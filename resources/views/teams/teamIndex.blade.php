@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Teams</div>

                <div class="card-body">
                  <a href="{{ route('team.create') }}" class="btn btn-success btn-sm">Add a team</a>
                    <table class="table">
                      <thead>
                        <tr><th>ID</th> <th>Team name</th> <th>Rank</th> <th>Region</th> <th>Actions</th></tr>
                      </thead>
                      <tbody>
                        @foreach($teams as $team)
                          <tr>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->rank }}</td>
                            <td>{{ $team->region }}</td>
                            <td>
                                <a href="{{ route('team.show', $team->id) }}" class="btn btn-sm btn-info">View details</a>
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