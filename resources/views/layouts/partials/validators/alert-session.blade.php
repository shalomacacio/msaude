@if(Session::has('message'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    
    <a href="#" class="alert-link">{{Session::get('message')}} </a>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    
@endif