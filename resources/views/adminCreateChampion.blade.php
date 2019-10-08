@extends('layouts.app')

@section('content')

<div class="container is-vcentered">
  <div class="column is-centered is-vcentered">
    <div class="card card-champion">
      <div class="card-header">
        <div class="card-header-title"> Add a Champion</div>
      </div>
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

        @if(isset($champ))
        <form action="{{ route('champ.update', $champ->id) }}" method="GET">
          <input type="hidden" name="_method" value="PATCH">
          @else
          <form action="{{ route('create-champion') }}" method="GET">
            @endif
            @csrf
            <div>
              <label for="correo" class="label">Name of your champion</label>
              <div class="control">
                <input type="text" name="name" class="input" value="{{ $champ->name ?? '' }}" id="name" aria-describedby="championName">
              </div>
              <label for="health_points" class="label">HP of your champion</label>
              <div class="control">
                <input type="number" name="health_points" class="input" value="{{ $champ->health_points ?? '' }}" id="health_points">
              </div>
              <label for="type" class="label">Type of your champion</label>
              <div class="control">
                <input type="text" name="type" class="input" value="{{ $champ->type ?? '' }}" id="type">
              </div>
              <label for="role" class="label">Role of your champion</label>
              <div class="control">
              </div>
              <input type="text" name="role" class="input" value="{{ $champ->role ?? '' }}" id="role">
            </div>
            <button type="submit" class="button is-dark is-centered is-rounded">Enviar</button>
          </form>
      </div>
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', () => {

    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

      // Add a click event on each of them
      $navbarBurgers.forEach(el => {
        el.addEventListener('click', () => {

          // Get the target from the "data-target" attribute
          const target = el.dataset.target;
          const $target = document.getElementById(target);

          // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
          el.classList.toggle('is-active');
          $target.classList.toggle('is-active');

        });
      });
    }

  });
</script>
@endsection