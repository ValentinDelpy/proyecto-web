@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">LISTA DE MENSAJES</div>
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
                    @foreach($champions as $champion)
                        <tr>
                        <td>test{{ $champion->id }}</td>
                        <td>{{ $champion->name }}</td>
                        <td>{{ $champion->health_points }}</td>
                        <td>{{ $champion->type }}</td>
                        <td>{{ $champion->role }}</td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection