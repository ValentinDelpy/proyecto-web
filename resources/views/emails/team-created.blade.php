<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
    <h2>Team created</h2>

    <p>Dear {{ $team->user->name }}</p>
    <p>
        Your team <b>{{ $team->name}}</b>
        has been created. Congratulations !
    </p>
</body>
</html>