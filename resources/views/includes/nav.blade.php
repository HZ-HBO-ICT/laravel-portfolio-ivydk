<nav class="nav-bar">
    <ul>
        <li><a href="/" class="{!! set_active('/') !!}">Home</a></li>

        <li><a href="/profile" class="{!! set_active('profile') !!}">Profile</a></li>

{{--        <li><a href="/dashboard" class="{!! set_active('dashboard') !!}">Dashboard</a></li>--}}

        <li><a href="{{route('faq.index')}}" class="{!! set_active('FAQ') !!}">FAQ</a></li>

        <li><a href="{{route('articles.index')}}" class="{!! set_active('articles')!!}">Articles</a></li>

        <li><a href="{{route('grades.index')}}" class="{!! set_active('grades')!!}">Grades</a></li>

{{--    to test the 404 error page    --}}
        <li><a href="test-400">Test</a></li>

    </ul>
</nav>

{{--todo: when you're on a article/artileID page, set active--}}
