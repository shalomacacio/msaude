@if(Session::has('message'))
  <div class="valid-feedback">
    {{Session::get('message')}}
  </div>
@elseif($errors->any())
  <div class="invalid-feedback">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div>
@endif
