<!DOCTYPE html>
<html lang="en">
<head>
    <title>University System @yield('title')</title>
    @include('layouts.partials.style')
    @yield('styles')
</head>
<body>
    <div class="wrapper">
        
        @include('layouts.partials.navigation')
        
        <div id="page-wrapper">
            <div class="container-fluid" style="padding-top: 20px;">
                @yield('content')
            </div>
        </div>
        
    </div>

</body>
</html>
@include('layouts.partials.scripts')
@yield('scripts')