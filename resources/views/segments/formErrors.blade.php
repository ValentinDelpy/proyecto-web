{{-- Show errors --}}
@if ($errors->any())
<div class="row justify-content-center"> 
    <div class="col-8">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    </div>
</div>
@endif