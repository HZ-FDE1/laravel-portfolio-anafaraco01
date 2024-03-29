@extends('layout')

@section('style')
    <link rel="stylesheet" href="../css/profile.css"><!--Link to the profile specific CSS style-->
@endsection

@section('title')
    <title>PROFILE</title>
@endsection

@section('header')
    <h1>PROFILE</h1>
    <h2>"You only live once"</h2>
@endsection


@section('second_aside_menu')
    <p class="aside-title">CONTENTS</p>
    <ul class="aside">
        <li class="aside" id="link-border"><a class="aside" href="#personal-info">Personal Information</a></li>
        <li class="aside" id="link-border"><a class="aside" href="#pre-education">Pre-education</a></li>
        <li class="aside"><a class="aside" href="#extra-curricular-act">Extra-curricular Activities</a></li>
    </ul>
@endsection

@section('content')
    <div>
        <article class="personal-info"><!--Personal Information-->
            <h1 class="title">WHO</h1>
            <br>
            <h1 class="title">AM</h1>
            <br>
            <h1 class="title">I</h1>
            <img id="profile-pic" src="../img/profile/profile.JPG" alt="Profile Picture">
            <section class="information">
                <h1 class="title-section1" id="personal-info">PERSONAL INFO &#9728;&#65039;</h1>
                <h3>NAME:</h3>
                <p>ANA</p>
                <h3>SURNAME:</h3>
                <p>RIVERA FARACO</p>
                <h3>AGE:</h3>
                <p>18</p>
                <h3>NATIONALITY:</h3>
                <p>MEXICAN/ITALIAN</p>
                <h3>BIRTHDAY:</h3>
                <p>5/OCTOBER/2003</p>
                <h3>FAMILY:</h3>
                <img id="family-pic" src="../img/profile/dad.PNG" alt="Dad's Picture">
                <img id="family-pic" src="../img/profile/mom.PNG" alt="Mom's Picture">
                <img id="family-pic" src="../img/profile/sara.PNG" alt="Sara's Picture">
                <img id="family-pic" src="../img/profile/raquel.PNG" alt="Raquel's Picture">
                <img id="family-pic" src="../img/profile/me.PNG" alt="My Picture">
                <!--'Pre' is used as the figcaption of the pictures since it keeps the spaces, and you only need one line of code-->
                <pre>Edgard              Lola                 Sara              Raquel                Ana</pre>
            </section>
        </article>

        <article class="pre-education"><!--Pre-education-->
            <figure class="information">
                <h1 id="pre-education">Pre-education &#128214;</h1>
                <h3>I have studied in 3 different schools:</h3>
                <img id="school-pic" src="../img/profile/central.jpg" alt="Colegio Central">
                <figcaption><strong>Colegio Central</strong><br>Kindergarten-7th grade<br>In Mexico</figcaption>
                <img id="school-pic" src="../img/profile/imex.jpg" alt="IMEX">
                <figcaption><strong>IMEX</strong><br>8th grade-9th grade<br>In Mexico</figcaption>
                <img id="school-pic" src="../img/profile/cais.jpg" alt="CAIS">
                <figcaption><strong>CAIS</strong><br>High School<br>In China</figcaption>
                <h3>Subjects followed during previous education:</h3>
            </figure>
            <ul>
                <li class="subjects">English Lang & Lit</li>
                <li class="subjects">Chinese Ab 中文</li>
                <li class="subjects">Mathematics</li>
                <li class="subjects">Business Management</li>
                <li class="subjects">Chemistry</li>
                <li class="subjects">Computer Science</li>
            </ul>
        </article>

        <article class="extra-curricular-act"><!--Extra-curricular activities-->
            <h1 id="extra-curricular-act">Extra-curricular Activities &#x1f3d0;</h1>
            <img id="vertical-pic-first-line" src="../img/profile/volley.jpg" alt="Volleybal picture">
            <img id="vertical-pic-first-line" src="../img/profile/piano.PNG" alt="Piano picture">
            <!--'Pre' is used as the figcaption of the pictures since it keeps the spaces, and you only need one line of code-->
            <pre>              Volleyball                                       Piano</pre>
            <img id="horizontal-pic" src="../img/profile/fut.PNG" alt="Futbol Picture">
            <pre>Soccer</pre>
            <img id="vertical-pic-third-line" src="../img/profile/soccerT.jpg" alt="Soccer table picture">
            <img id="vertical-pic-third-line" src="../img/profile/dance.jpg" alt="Dance picture">
            <!--'Pre' is used as the figcaption of the pictures since it keeps the spaces, and you only need one line of code-->
            <pre>    Table Soccer                                             Dance</pre>
            <img id="horizontal-pic" src="../img/profile/sing.PNG" alt="Sing picture">
            <pre>Sing</pre>
        </article>
    </div>
@endsection

