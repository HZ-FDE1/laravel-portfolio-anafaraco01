@extends('layout')

@section('style')
    <link rel="stylesheet" href="/css/dashboard.css"><!--Link to the dashboard specific CSS style-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
@endsection

@section('title')
    <title>DASHBOARD</title>
@endsection

@section('header')
    <h1>DASHBOARD</h1>
    <h2>Ready to see your progress?</h2>
@endsection

@section('content')
    @include('grades.notifications')
    <h1>ICT FIRST YEAR</h1>
    <table><!--The id 'done' is given to the current or completed subjects, the id 'fail' is given to failing classes and the id 'resit' is given to classes that need to be resited-->
        <tr><!--First Row, Headings-->
            <th>Test Name</th>
            <th>Grade</th>
        </tr>
        @foreach($grades as $grade)
            <tr>
                <td>{{ $grade->test_name }}</td>
                <td>{{ $grade->best_grade }}</td>
                <td>
                    <form method="POST" action="/dashboard/{{ $grade->id }}">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('{{ ('Are you sure you want to delete?') }}')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $grades->links() }}
    <section><!--Progress Bar-->
        <h3>Progress Bar for EC</h3>
        <p id="nbsa">45 EC</p>
        <!--60 EC is the maximum, the 'value' determines current EC obtained-->
        <progress value="13.75" max="60"></progress>
        <p id="nbsa-boundary">NBSA</p>
        <p class="ec">13.75 EC</p>
        <!--Red line that shows the NBSA boundary-->
        <div class="vertical-line"></div>
    </section>
    <script src="/js/notification.js" type="text/javascript"></script>
@endsection

