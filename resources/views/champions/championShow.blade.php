@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Champion informations</div>

                <div class="card-body">
                  <a href="{{ route('champion.index') }}" class="btn btn-default btn-sm">List of champions</a>
                    <table class="table">
                      <thead>
                      <tr><th>ID</th> <th>Name</th> <th>Health Points</th> <th>Type</th> <th>Role</th></tr>
                      </thead>
                      <tbody>
                          <tr>
                          <td>{{ $champion->id }}</td>
                            <td>{{ $champion->name }}</td>
                            <td>{{ $champion->health_points }}</td>
                            <td>{{ $champion->type }}</td>
                            <td>{{ $champion->role }}</td>
                            <td>
                              <a href="{{ route('champion.edit', $champion->id) }}" class="btn btn-sm btn-warning">Edit</a>
                              <form action="{{ route('champion.destroy', $champion->id) }}" method="POST">
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
@endsections