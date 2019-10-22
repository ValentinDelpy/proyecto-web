@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Team informations</div>

                <div class="card-body">
                  <a href="{{ route('team.index') }}" class="btn btn-default btn-sm">List of teams</a>
                    <table class="table">
                      <thead>
                        <tr><th>ID</th> <th>Team name</th> <th>Rank</th> <th>Region</th> <th>Actions</th></tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->rank }}</td>
                            <td>{{ $team->region }}</td>
                            <td>
                              <a href="{{ route('team.edit', $team->id) }}" class="btn btn-sm btn-warning">Edit</a>
                              <form action="{{ route('team.destroy', $team->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                              </form>
                            </td>
                          </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection