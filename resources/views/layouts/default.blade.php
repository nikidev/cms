<!DOCTYPE html>
<html lang="en">
<head>
    <title>University System @yield('title')</title>
    @include('layouts.partials.style')
    @yield('styles')
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>
@include('layouts.partials.scripts')
@yield('scripts')