@extends('layout')

@section('style')
    <link rel="stylesheet" href="../css/index.css"><!--Link to the index specific CSS style-->
@endsection

@section('title')
    <title>INDEX</title>
@endsection

@section('header')
    <h1>WELCOME</h1>
    <h2>Let's get started</h2>
    <img class="hz-logo" src="../img/index/logo.png" alt="HZ Logo">
@endsection

@section('content')
    <div>
        <article>
            <h3> Does the HBO-ICT programme suits me?</h3>
            <p class="paragraph">My motivation is to become an excellent programmer capable of finding bugs or creating sophisticated solutions for other people's problems.</p>
            <p class="paragraph">I think ICT is the right study for me because when I was a kid I used to say that every day I would work in a different place, cause it would be exciting to try all the jobs (From being a firefighter to selling ice cream in Mcdonald's).</p>
            <p class="paragraph">However, the first time I programmed seeing that my code was capable of solving tasks, adding functionality, or creating new things made me feel very excited and I actually wanted to learn more.</p>
            <img id="impossible-pic" src="../img/index/impossible.jpeg" alt="Everything is possible picture">
            <p class="paragraph">I know ICT is a challenging course. I took a computer science class in my school for two years, and it was sometimes frustrating to find errors in the code and not be able to solve them. Nevertheless, each mistake made me find a way how not to do it.</p>
            <p class="paragraph">In addition, there is no single valid solution. The same problem can be fixed in different ways, which is also interesting to see what each individual does. I like to learn from others and compare if their solutions are more practical.</p>
            <img id="help-pic" src="../img/index/help.png" alt="Work smarter not harder picture">
        </article>
    </div>
@endsection

@section('footer')
    <h4>CONTACT INFORMATION</h4>
    <p>Instagram: ana_ducoing</p>
    <p>Telephone Number: +31 6 53 29 80 83</p>
    <p>Email: ana.rivera432@yahoo.com.mx</p>
@endsection
