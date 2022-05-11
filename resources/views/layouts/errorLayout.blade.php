<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
<div id="error">
    @yield('error-code')

    <div class="error-message">
        @yield('error-message')
    </div>

    <div class="error-description">
        @yield('error-description')
    </div>

    <a href='/'><button type="button" class="knop">Go home</button></a>

</div>
</body>

</html>
