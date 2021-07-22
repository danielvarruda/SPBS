@if($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $erro)
            <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('msg'))
    <div class="alert alert-info">
        {{ Session::get('msg') }}
    </div>
@endif