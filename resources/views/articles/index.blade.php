@extends('layout')

@section('style')
    <link rel="stylesheet" href="../css/blog.css"><!--Link to the blog specific CSS style-->
@endsection

@section('header')
    <h1>BLOG</h1>
    <h2>Let's read</h2>
@endsection

@section('second_aside_manu')
    <p class="aside-title">POSTS</p>
    <ul class="aside">
        <li class="aside" id="link-border"><a class="aside" href="#study-choice">Study Choice</a></li>
        <li class="aside" id="link-border"><a class="aside" href="#swot">Personal SWOT analysis</a></li>
        <li class="aside" id="link-border"><a class="aside" href="#programming-experience">Programming Experience</a></li>
        <li class="aside" id="link-border"><a class="aside" href="#first-feedback">First Feedback</a></li>
        <li class="aside"><a class="aside" href="#profession">Profession</a></li>
    </ul>
@endsection

@section('content')
    <div>
        <article><!--Posts of the blog-->
            <h1>POSTS FEED</h1>
            @foreach($articles as $article)
                <details open><!--Open drop down that shows the summary of the post-->
                    <summary id="study-choice">{{ $article->title }}</summary>
                    <p>{{ $article->excerpt }} <a class="read-more" target="_blank" href="{{ $article->path() }}">read more</a></p>
                </details>
            @endforeach

            <details open><!--Open drop down that shows the summary of the post-->
                <summary id="study-choice">Study Choice</summary>
                <p>In this post, it is discussed about the study choice activities I performed, my study choice motivation and my plan after completing the study. <a class="read-more" href="posts/study-choice.html" target="_blank">read more</a></p>
            </details>

            <details open>
                <summary id="swot">Personal SWOT Analysis</summary>
                <p>Every individual has strengths, weaknesses, opportunities and threats. If you are interested in reading some of mine, please take a look at this post. <a class="read-more" href="posts/personal-swot-analysis.html" target="_blank">read more</a></p>
            </details>

            <details open>
                <summary id="programming-experience">Programming Experience</summary>
                <p>This is a questionnaire about my programming experience. Here you can find some answers about where and what I learned. <a class="read-more" href="posts/programming-experience.html" target="_blank">read more</a></p>
            </details>

            <details open>
                <summary id="first-feedback">First Feedback</summary>
                <p>Here you can read about the first feedback I got after submitting my 'Who am I' assignment. Also, you can take a look at the thoughts I had after reading it. <a class="read-more" href="posts/first-feedback.html" target="_blank">read more</a></p>
            </details>

            <details open>
                <summary id="profession">Profession</summary>
                <p>I am interested in working at: Google, Nintendo or Alibaba. Here you can find more information about the core business, IT roles, technologies and culture of the companies.  <a class="read-more" href="posts/profession.html" target="_blank">read more</a></p>
            </details>
        </article>
    </div>
@endsection
