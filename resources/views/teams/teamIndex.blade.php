@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">List of teams</div>

        <div class="card-body">
          <table class="table">
            <tr>
              <th>Team</th>
              <th>Champions</th>
              <th>User</th>
              <th>Actions</th>
            </tr>
            @foreach($teams as $team)
            <tr>
              <td>
                <a href="{{ route('team.show', $team->id) }}">
                  {{ $team->name }}
                </a>
              </td>
              <td>
                <ul>
                  @foreach($team->champions as $champion)
                  <li>{{ $champion->name }}</li>
                  @endforeach
                </ul>
              </td>
              <td>
                {{$team->user->name}}
              </td>
              <td>
                <a href="{{ route('team.created', $team->id) }}" class="btn btn-sm btn-primary">Notificate created</a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection