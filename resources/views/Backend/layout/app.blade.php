<!DOCTYPE html>
<html lang="en">
<head>
    @include('Backend.layout.common-head')
</head>
<body class="g-sidenav-show  bg-gray-200">
    @include('Backend.layout.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('Backend.layout.header')
        @section('main-content')
        @show
        @include('Backend.layout.footer')
    </main>
    @include('Backend.layout.common-end')
    @stack('custom-scripts')
</body>
</html>