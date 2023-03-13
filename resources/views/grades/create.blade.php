@extends('layout')

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Grade</h1>

            <form method="POST" action="/dashboard">
                @csrf
                <div class="field">
                    <label class="label" for="test_name">Test Name</label>

                    <div class="control">
                        <input class="input @error('text_name') is-danger @enderror" name="test_name" id="test_name" value="{{ old('test_name') }}">
                        @error('test_name')
                            <p class="help is-danger">{{ $errors->first('test_name') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="best_grade">Best Grade</label>

                    <div class="control">
                        <input class="input @error('best_grade') is-danger @enderror" name="best_grade" id="best_grade" value="{{ old('best_grade') }}">
                        @error('best_grade')
                            <p class="help is-danger">{{ $errors->first('best_grade') }}</p>
                        @enderror
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
