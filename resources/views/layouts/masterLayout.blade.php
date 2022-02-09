<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>

@include('includes.header')

@include('includes.nav')

<main>
    @yield('content')
</main>

@include('includes.aside')

@include('includes.footer')

</body>

</html>
