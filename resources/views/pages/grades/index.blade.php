@extends('layouts.masterLayout')

@section('title', 'Dashboard')

@section('content')
<article>
    <h2>Toetsen</h2>

    {{--           TODO: put this somewhere else !!--}}
    {{$sum = 0}}
    @foreach($grades as $grade)
    @if($grade->lowest_passing_grade <= $grade->best_grade)
    {{$sum += $grade->EC}}
    @endif
    @endforeach

    <div id="container-dashboard">
        <div id="dashboard-item-1">
            <div class="dash-table">
                <table>
                    {{--table head--}}
                    <tr>
                        <th>Quartile</th>
                        <th>Course</th>
                        <th>Exam</th>
                        <th>EC</th>
                        <th>Lowest passing</th>
                        <th>Best grade</th>
                        <th>Passed</th>
                    </tr>

                    {{--exams, from the table grades--}}
                    @foreach($grades as $grade)
                    <tr>
                        <td><b>{{$grade->quartile}}</b></td>
                        <td>{{$grade->course_name}}</td>
                        <td>{{$grade->test_name}}</td>
                        <td>{{$grade->EC}}</td>
                        <td>{{$grade->lowest_passing_grade}}</td>
                        <td>{{$grade->best_grade}}</td>
                        <td>
                            {{--checks if you passes your test--}}
                            @if($grade->lowest_passing_grade <= $grade->best_grade)
                            Yes
                            @else
                            No
                            @endif
                        </td>
                    </tr>
                    @endforeach

                    {{--total row--}}
                    <tr>
                        <td><b>Totaal</b></td>
                        <td></td>
                        <td></td>
                        <td><b>60</b></td>
                        <td></td>
                        <td></td>
                        <td><b>{{$sum}}</b> </td>
                    </tr>

                </table>
            </div>


        </div>
    </div>

    {{--shows your progress in a bar--}}
    <p><b> Behaalde studiepunten:</b> {{$sum}}/60 <progress value="{{$sum}}" max="60"></progress> </p>

    <a href="{{route('grades.create')}}"><button type="button" class="knop">create</button></a>

</article>

@endsection




