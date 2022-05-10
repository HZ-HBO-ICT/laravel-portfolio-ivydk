@extends("layouts.masterLayout")

@section('title', 'Add grade')

@section('content')
    <h1>New FAQ</h1>

    <form method="POST" action="{{route('grades.store')}}" class = "faq-form">
        @csrf

        <label for="quartile">Quartile:</label><br>
        <input
            class="input @error('quartile') is-danger @enderror"
            type="number"
            id="quartile"
            name="quartile"
            value="{{$errors->any() ? old('quartile') : ''}}"
        ><br>
        @error('quartile')
        <p class="help is-danger">{{ $errors->first('quartile') }}</p>
        @enderror

        <label for="course_name">Course name:</label><br>
        <input
            class="input @error('course_name') is-danger @enderror"
            type="text"
            id="course_name"
            name="course_name"
            value="{{$errors->any() ? old('course_name') : ''}}"
        ><br>
        @error('course_name')
        <p class="help is-danger">{{ $errors->first('course_name') }}</p>
        @enderror

        <label for="test_name">Test name:</label><br>
        <input
            class="input @error('test_name') is-danger @enderror"
            type="text"
            id="test_name"
            name="test_name"
            value="{{$errors->any() ? old('test_name') : ''}}"
        ><br>
        @error('test_name')
        <p class="help is-danger">{{ $errors->first('test_name') }}</p>
        @enderror

        <label for="EC">EC:</label><br>
        <input
            class="input @error('EC') is-danger @enderror"
            type="number"
            step="0.1"
            id="EC"
            name="EC"
            value="{{$errors->any() ? old('EC') : ''}}"
        ><br>
        @error('EC')
        <p class="help is-danger">{{ $errors->first('EC') }}</p>
        @enderror

        <label for="lowest_passing_grade">Lowest Passing Grade:</label><br>
        <input
            class="input @error('lowest_passing_grade') is-danger @enderror"
            type="number"
            step="0.1"
            id="lowest_passing_grade"
            name="lowest_passing_grade"
            value="{{$errors->any() ? old('lowest_passing_grade') : ''}}"
        ><br>
        @error('lowest_passing_grade')
        <p class="help is-danger">{{ $errors->first('lowest_passing_grade') }}</p>
        @enderror

        <label for="best_grade">Best grade:</label><br>
        <input
            class="input @error('best_grade') is-danger @enderror"
            type="number"
            step="0.1"
            id="best_grade"
            name="best_grade"
            value="{{$errors->any() ? old('best_grade') : ''}}"
        ><br>
        @error('best_grade')
        <p class="help is-danger">{{ $errors->first('best_grade') }}</p>
        @enderror

        <input type="submit" value="Submit" class = "knop">
        <a href="{{route('grades.index')}}"><button type="button" class="knop">Cancel</button></a>

    </form>

@endsection
