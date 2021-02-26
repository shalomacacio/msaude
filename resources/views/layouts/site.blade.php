
@include('layouts.partials.site.head')
<body class="bg-light">
    
@include('layouts.partials.site.header')
@include('layouts.partials.site.asside')

<div class="bd-cheatsheet container-fluid bg-body">
@yield('content')
</div>
@include('layouts.partials.site.scripts')

</body>
</html>
