<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema de Gestão Hospitalar">
    <meta name="author" content="Shalom Acácio">
    <meta name="generator" content="Hugo 0.20.0">
    <link rel="icon" href="{{ URL::asset('site/bootstrap/brand/favico.png') }}" type="image/x-icon"/>
    <title>MSaúde</title>
    @include('layouts.partials.site.styles')
  </head>
  <body>
    @include('layouts.partials.site.header')  

    <div class="container-fluid">
      <div class="row">
        @include('layouts.partials.site.nav')
        @yield('content')
      </div>
    </div>

    @include('layouts.partials.site.scripts')
  </body>
</html>
