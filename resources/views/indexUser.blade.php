@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="column is-centered">
            <div class="card">
                <div class="card-header">List of champions</div>
                <div class="card-body">
                    <table class="table">
                    <thead> 
                        <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Details</th>
                        </tr>
                    </thead>
                    @foreach($champions as $champ)
                        <tr>
                        <td>{{ $champ->id }}</td>
                        <td>{{ $champ->name }}</td>
                        <td><a href="{{ route('champ.show', $champ->id) }}" className="button">See more</a></td>
                        <td><a href="{{ route('champ.edit', $champ->id) }}" className="button">Edit </a></td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection