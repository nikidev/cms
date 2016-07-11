{{--DEFAULT ADMIN TEMPLATE--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <title>University System @yield('title')</title>
    @include('layouts.partials.style')
    @yield('styles')
</head>
<body>
    <div class="wrapper">
        {{--NAVIGATION--}}
        @include('admin.partials.navigation')
        {{--PAGE WRAP--}}
        <div id="page-wrapper">
            <div class="container-fluid" style="padding-top: 20px;">
                @yield('content')
            </div>
        </div>
        {{--END OF PAGE WRAP--}}
    </div>

</body>
</html>
@include('layouts.partials.scripts')
@yield('scripts')