@extends('layouts.app')

@section('content')

<div class="container is-vcentered">
        <div class="column is-centered is-vcentered">
            <div class="card card-items">
            <div class="card-header">
                <div class="card-header-title"> Add an Item</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('create-item') }}" method="GET">
                        @csrf
                        <div>
                            <label for="correo" class="label">Name of the Item</label>
                            <div class="control">
                            <input type="text" name="name" class="input" id="name" aria-describedby="itemsName">
                            </div>
                            <label for="cost" class="label">Cost of the Item</label>
                            <div class="control">
                            <input type="number" name="cost" class="input" id="cost">
                            </div>
                            <label for="ad" class="label">AD</label>
                            <div class="control">
                            <input type="number" name="ad" class="input" id="ad">
                            <label for="ap" class="label">AP</label>
                            <div class="control">
                            <input type="number" name="ap" class="input" id="ap">
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
  $navbarBurgers.forEach( el => {
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