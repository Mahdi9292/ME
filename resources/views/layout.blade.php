<!DOCTYPE html>
<html lang="en">

<head>
    @section('head')
        @include('sections.default._head')
    @show
</head>

<body>

@include('sections.default._mobile-nav')
@include('sections.default._app-header')
@include('sections.default._hero')

<main id="main">
    @yield('main')
</main><!-- End #main -->

@section('footer')
    @include('sections.default._footer')
@show

@include('sections.default._back-to-up')

<!-- Vendor JS Files -->

@section('scripts')
    @include('sections.default._scripts')
@show


</body>

</html>
