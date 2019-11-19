@if(Session::has('messages'))
<div class="row justify-content-center"> 


        <div class="alert {{ Session::get('type ', 'alert-info') }} alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{ Session::get('messages') }}
        </div>

    </div>
</div>
@endif