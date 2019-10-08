@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="column">
            <div class="card">
                <div class="card-header">Details of champion</div>
                <div class="card-body">
                    <table class="table">
                    <thead> 
                        <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Health points</th>
                        <th>Type</th>
                        <th>Role</th>
                        </tr>
                    </thead>
                        <tr>
                        <td>{{ $champ->id }}</td>
                        <td>{{ $champ->name }}</td>
                        <td>{{ $champ->health_points }}</td>
                        <td>{{ $champ->type }}</td>
                        <td>{{ $champ->role }}</td>
                        <td>
                            <form action="{{ route('champ.destroy', $champ->id )}}" method="POST" >
                                @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="button">Delete</button>
                            </form>
                        </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection