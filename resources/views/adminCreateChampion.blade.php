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
        {!! Form::model('champ', ['route' => ['champ.update', $champ->id], 'method'=>'PATCH']) !!}
          <!--<input type="hidden" name="_method" value="PATCH">-->
          @else
          {!! Form::open( ['route' => ['champ.store', $champ->id]]) !!}
            @endif
            {{--@csrf--}}
            <div class="field">
  <label class="label">Label</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input">
  </div>
  <p class="help">This is a help text</p>
</div>
              <label for="correo" class="label">Name of your champion</label>
              <div class="control">
                <!--<input type="text" name="name" class="input" value="{{ $champ->name ?? '' }}" id="name" aria-describedby="championName">-->
                {!! Form::text('name', $champ->name, ['class' => 'form-control', 'id' => 'name']) !!}
              </div>
              <label for="health_points" class="label">HP of your champion</label>
              <div class="control">
                <input type="number" name="health_points" class="input" value="{{ $champ->health_points ?? '' }}" id="health_points">
              </div>
              {!! Form::label('type', 'Type of your champion',  ['class' => 'label']) !!}              
              <div class="control">
               <!--<input type="text" name="type" class="input" value="{{ $champ->type ?? '' }}" id="type">-->
               {!! Form::text('type', $champ->type, ['class' => 'form-control', 'value' => '$champ->type']) !!}
              </div>
              <label for="role" class="label">Role of your champion</label>
              <div class="control">
              </div>
              <input type="text" name="role" class="input" value="{{ $champ->role ?? '' }}" id="role">
            <button type="submit" class="button is-dark is-centered is-rounded">Enviar</button>
          {!! Form::close() !!}
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